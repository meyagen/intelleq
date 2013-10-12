<?php

class Membership_model extends MY_Model {

	protected $_table_name = 'membership';
	protected $_order_by = 'last_name';
	public $rules = array(
		'username' => array(
			'field' => 'username', 
			'label' => 'Username', 
			'rules' => 'trim|required|xss_clean'
		), 
		'password' => array(
			'field' => 'password', 
			'label' => 'Password', 
			'rules' => 'trim|required'
		)
	);

	public function login ()
	{
		$sql = "SELECT * FROM membership WHERE (email_address = ? OR username = ?) AND password = ? AND activate = 'true' LIMIT 1";
		$query = $this->db->query($sql, array($this->input->post('username'), $this->input->post('username'), $this->hash($this->input->post('password'))));
		$user = $query->row();

		if (count($user)) {
			// Log in user
			$data = array(
				'fname' => $user->first_name,
				'lname' => $user->last_name,
				'username' => $user->username,
				'email' => $user->email_address,
				'id' => $user->id,
				'loggedin' => TRUE,
				'timeCheck' => TRUE,
				'startExam' => FALSE,
			);
			$this->session->set_userdata($data);
			return true;
		}

		else {
			$sql = "SELECT * FROM membership WHERE (email_address = ? OR username = ?) AND temp_password = ? AND activate = 'true' LIMIT 1";
			$query = $this->db->query($sql, array($this->input->post('username'), $this->input->post('username'), $this->hash($this->input->post('password'))));
			$user = $query->row();

			if (count($user)) {
				$data = array( 
					'fname' => $user->first_name,
					'lname' => $user->last_name,
					'username' => $user->username,
					'email' => $user->email_address,
					'id' => $user->id,
					'loggedin' => TRUE,
				);

				$this->session->set_userdata($data);
				return true;
			}
		}

		return false;
	}

	public function hash ($string)
	{
		return hash('sha512', $string . config_item('encryption_key'));
	}

	function is_unique(){
		$username = $this->input->post('username');
		$email = $this->input->post('email_address');
		$password = $this->input->post('password');
		$password2 = $this->input->post('password2');
		$this->load->model('user_m');

		//email must be unique
		$this->db->where('email_address', $email);
		$query = $this->db->get('membership');

		if($query->num_rows > 0) {
			return false;
		}

		else{
			$this->db->where('email', $email);
			$query = $this->db->get('users');

			if($query->num_rows > 0) {
				return false;
			}			
		}

		//username must be unique
		$this->db->where('username', $username);
		$query = $this->db->get('membership');

		if($query->num_rows > 0) {
			return false;
		}

		//password must be between 6-30 characters
		if(strlen($password) < 6 || strlen($password) > 30) {
			return false;
		}

		//password must be confirmed
		if($password != $password2) {
			return false;
		}

		return true;
	}

	function email_unique(){
		$email = $this->input->post('email_address');
		$this->db->where('email_address', $email);
		$query = $this->db->get('membership');

		if($query->num_rows > 0) return false;

		else return true;
	}

	function uname_unique(){
		$username = $this->input->post('username');
		$this->db->where('username', $username);
		$query = $this->db->get('membership');

		if($query->num_rows > 0) return false;

		else return true;
	}

	function create_member() {
		$new_member_insert_data = array(
			'first_name' => $this->input->post('first_name'),
			'last_name' => $this->input->post('last_name'),
			'email_address' => $this->input->post('email_address'),
			'username' =>$this->input->post('username'),
			'password' => $this->hash($this->input->post('password')),
			'activate' => 'false'
		);

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

		$this->email->from($this->config->item('email_bot'), $this->config->item('email_name'));
		$this->email->to($email);	
		$this->email->subject('Email Confirmation');

		$message = '<!DOCTYPE html><html><head></head><body>';
		$message .= '<p>Thank you for registering to our site! ';
		$message .= 'To complete the signup process, please click ';
		$message .= '<strong><a href = "' .$url .'">here</a></strong>';
		$message .= ' to activate your account.</p>';
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

	function activate_user($email){
		$this->db->where('email_address', $email);
		$query = $this->db->get('membership');
		if($query->num_rows == 1){
			$user = $query->row();	
		}

		$this->db->update('membership', array('activate' => 'true'));
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
				$user->temp_password = $this->user_m->hash($data['newPassword']);
				$this->db->where('email', $email);
			}

			elseif($table == 'membership'){
				$user->temp_password = $this->hash($data['newPassword']);
				$this->db->where('email_address', $email);
			}

			$this->db->update($table, array('temp_password' => $user->temp_password));

			//send email
			$this->email->set_newline("\r\n");
			$this->email->set_mailtype('text');
			$this->email->clear();

			$this->email->from($this->config->item('email_bot'), $this->config->item('email_name'));
			$this->email->to($email);	
			$this->email->subject('Password Reset');
			$this->email->message("Good day! You have recently asked for your password to be reset. Your new temporary password is "
				.$data['newPassword']
				.". Please remember to reset your password after logging in to prevent this from happening again."
				." If you did not ask for your password to be reset, please ignore this email. Thank you!");

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