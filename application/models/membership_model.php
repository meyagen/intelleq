<?php

class Membership_model extends CI_Model {
	function validate() {
		$this->db->where('username', $this->input->post('username'));
		$this->db->where('password', md5($this->input->post('password')));
		$query = $this->db->get('membership');

		if($query->num_rows == 1) {
			return true;
		}
	}

	function create_member() {
		$new_member_insert_data = array(
			'first_name' => $this->input->post('first_name'),
			'last_name' => $this->input->post('last_name'),
			'email_address' => $this->input->post('email_address'),
			'username' =>$this->input->post('username'),
			'password' => (md5($this->input->post('password'))),
			//'activate' => false
		);

		//check unique email
		$insert = $this->db->insert('membership', $new_member_insert_data);
		$this->send_confirmation_email($this->input->post('email_address'));	
	}

	function send_confirmation_email($email){
		$email_code = md5((string)$email);
		$url = "" .base_url() .'login/confirm_email/' .$email ."/" .$email_code;

		//send email
		$this->email->set_newline("\r\n");
		$this->email->set_mailtype('html');
		$this->email->clear();

		$this->email->from($this->config->item('email_bot'), 'MERK Support');
		$this->email->to($email);	
		$this->email->subject('Email Confirmation');

		$message = '<!DOCTYPE html><html><head></head><body>';
		$message .= '<p>Thank you for registering to our site! ';
		$message .= 'To complete the signup process, please click ';
		$message .= '<strong><a href = "' .$url .'">here</a></strong>';
		$message .= ' to activate your account.</p><p>Thank you!</p>';
		$message .= '<p><small>If this is not you, please ignore this email.</small></p>';
		$message .= '</body></html>';


		$this->email->message($message);
		if(!$this->email->send())
			echo $this->email->print_debugger();	
	}

	function validate_email($email, $email_code) {
		if(md5((string)$email) === $email_code) {
			return true;
		}
	}

	function activate_user($user_info){
		if($user_info->id === "")
			$user = $this->user_m->get_by(array('email' => $user_info->email), TRUE);
		else
			$user = $this->user_m->get_by(array('email' => $user_info->id), TRUE);
		if (count($user)) {
			$user->activate = true;
			$this->user_m->save($user, $user->id);
		}
	}

	function edit_password(){
		$this->load->model('user_m');
		$email = $this->input->post('email');
		$user = false;

		//check if email exists in membership database
		$this->db->where('email_address', $email);
		$query = $this->db->get('membership');

		if($query->num_rows == 1) {
			$user = $query->row();
			$table = 'membership';
		}

		//check if email exists in users database
		else{
			$this->db->where('email', $email);
			$query = $this->db->get('users');

			if($query->num_rows == 1) {
				$user = $query->row();
				$table = 'users';
			}
		}
		
		//if user exists
		if ($user != false) {
			$data = array(
				'newPassword' => $this->randomizePassword(),
				'query' => true
			);

			//hash and save password				
			if($table == 'users'){
				$user->password = $this->user_m->hash($data['newPassword']);
				$this->db->where('email', $email);
			}

			elseif($table == 'membership'){
				$user->password = md5($data['newPassword']);
				$this->db->where('email_address', $email);
			}

			$this->db->update($table, array('password' => $user->password));

			//send email
			$this->email->set_newline("\r\n");
			$this->email->set_mailtype('text');
			$this->email->clear();

			$this->email->from($this->config->item('email_bot'), 'MERK Support');
			$this->email->to($email);	
			$this->email->subject('Password Reset');
			$this->email->message("Good day! You have recently asked for your password to be reset. Your new temporary password is "
				.$data['newPassword'] .". Please remember to reset your password after logging in to prevent this from happening again. Thank you!");

			if(!$this->email->send())
				echo $this->email->print_debugger();
		}

		else{ //user does not exist in the database
			$data['query'] = false;
		}

		return $data;

	}

	function randLetter($random) {
		switch($random):
			case 0:
				return strtoupper(chr(97 + mt_rand(0, 25))); //random uppercase letter
			case 1:
				return strtolower(chr(97 + mt_rand(0, 25))); //random lowercase letter
		endswitch;
	}

	function randomizePassword() {
		$newPassword = "";
		
		for($i = 0; $i < 8; $i++) {
			$random = mt_rand(0, 2);

			if($random == 2)
				$add = mt_rand(0, 9);
			else
				$add = $this->randLetter($random);
			
			$newPassword .= $add;
		}
		
		return $newPassword;
	}

}