<?php

class Settings_M extends CI_Model {

	function hash ($string){
		return hash('sha512', $string . config_item('encryption_key'));
	}

	function change_firstname($id, $new_first_name){
		$this->db->where('id', $id);
		$query = $this->db->get('membership');
		
		if($query->num_rows == 1){
			$user = $query->row();
			$user->first_name = $new_first_name;
			$this->db->where('id', $id);
			$this->db->update('membership', array('first_name' => $user->first_name));
		}
	}

	function change_lastname($id, $new_last_name){
		$this->db->where('id', $id);
		$query = $this->db->get('membership');
		
		if($query->num_rows == 1){
			$user = $query->row();
			$user->last_name = $new_last_name;
			$this->db->where('id', $id);
			$this->db->update('membership', array('last_name' => $user->last_name));
		}
	}

	function change_username($id, $new_username){
		$this->db->where('id', $id);
		$query = $this->db->get('membership');
		
		if($query->num_rows == 1){
			$user = $query->row();
			$user->username = $new_username;
			$this->db->where('id', $id);
			$this->db->update('membership', array('username' => $user->username));
		}
	}

	function change_password($id, $new_password){
		$new_password = $this->hash($new_password);
		$this->db->where('id', $id);
		$query = $this->db->get('membership');
		
		if($query->num_rows == 1){
			$user = $query->row();
			$user->password = $new_password;
			$this->db->where('id', $id);
			$this->db->update('membership', array('password' => $user->password));
		}	
	}

	function send_confirmation_email($id, $new_email){
		$this->db->where('id', $id);
		$query = $this->db->get('membership');

		if($query->num_rows == 1) {
			$user = $query->row();
			$email = $new_email;

			$email_code = md5((string)$email);
			$url = "" .base_url() .'settings/confirm_email/' .$email ."/" .$email_code;

			//send email
			$this->email->set_newline("\r\n");
			$this->email->set_mailtype('html');
			$this->email->clear();

			$this->email->from($this->config->item('email_bot'), 'intelleq Support');
			$this->email->to($email);	
			$this->email->subject('Email Confirmation');

			$message = '<!DOCTYPE html><html><head></head><body>';
			$message .= '<p>Just one more step! We just need to validate your email. ';
			$message .= 'Please click ';
			$message .= '<strong><a href = "' .$url .'">here</a></strong>';
			$message .= ' to change your email.</p>';
			$message .= '</body></html>';

			$this->email->message($message);
			if(!$this->email->send())
				echo $this->email->print_debugger();
		}
	}

	function validate_email($email, $email_code) {
		if(md5((string)$email) === $email_code) {
			return true;
		}
	}

	function change_email($id, $new_email) {
		$this->db->where('id', $id);
		$query = $this->db->get('membership');
		
		if($query->num_rows == 1){
			$user = $query->row();
			$user->email = $new_email;
			$this->db->where('id', $id);
			$this->db->update('membership', array('email_address' => $new_email));
		}		
	}

	function deactivate($username){
		$this->send_deactivation_email();
		$this->db->where('username', $username);
		$query = $this->db->get('membership');

		if($query->num_rows == 1){
			$user = $query->row();
			$user->activate = 'false';
			$this->db->where('username', $username);
			$this->db->update('membership', array('activate' => $user->activate));
		}
	}

	function send_deactivation_email(){
		$email = $this->session->userdata('email');
		$email_code = md5((string)$email);
		$intelleq = "http://192.161.54.104/intelleq/";
		$url = "" .base_url() .'login/confirm_email/' .$email ."/" .$email_code;

		//send email
		$this->email->set_newline("\r\n");
		$this->email->set_mailtype('html');
		$this->email->clear();

		$this->email->from($this->config->item('email_bot'), $this->config->item('email_name'));
		$this->email->to($email);	
		$this->email->subject('Account Deactivation');

		$message = '<!DOCTYPE html><html><head></head><body>';
		$message .= '<p>You have recently deactivated your account at ';
		$message .= '<strong><a href = "' .$intelleq .'">intelleq</a></strong>. ';
		$message .= 'We hope our site has been helpful in your educational endeavors.</p>';

		$message .= '<p>If you wish to reactivate your account again at any time, please click ';
		$message .= '<strong><a href = "' .$url .'">here</a></strong>';
		$message .= '. Thank you for visiting our website.</p>';
		$message .= '<p><small>If this is not you, please ignore this email.</small></p>';
		$message .= '</body></html>';


		$this->email->message($message);
		if(!$this->email->send())
			echo $this->email->print_debugger();	
	}

	function edit_session_data() {
		$id = $this->session->userdata('id');
		$this->db->where('id', $id);
		$query = $this->db->get('membership');
		$user = $query->row();

		$data = array(
			'fname' => $user->first_name,
			'lname' => $user->last_name,
			'username' => $user->username,
			'email' => $user->email_address,
			'id' => $user->id,
			'loggedin' => TRUE,
		);

		$this->session->set_userdata($data);
	}

}