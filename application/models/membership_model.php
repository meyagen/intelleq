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
				'since' => $user->signup_date,
				'loggedin' => TRUE,
				'timeCheck' => TRUE,
				'startExam' => FALSE,
			);
			if(!$this->session->userdata['id']){
				$this->login_log();
			}
			$this->session->set_userdata($data);
			return true;
		}

		else {
			$sql = "SELECT * FROM membership WHERE (email_address = ? OR username = ?) AND temp_password = ? AND activate = 'true' LIMIT 1";
			$query = $this->db->query($sql, array($this->input->post('username'), $this->input->post('username'), $this->hash($this->input->post('password'))));
			$user = $query->row();

			if(count($user)) {
				$data = array( 
					'fname' => $user->first_name,
					'lname' => $user->last_name,
					'username' => $user->username,
					'email' => $user->email_address,
					'id' => $user->id,
					'since' => $user->signup_date,
					'loggedin' => TRUE,
					'timeCheck' => TRUE,
					'startExam' => FALSE,
				);
				if(!$this->session->userdata['id']){
					$this->login_log();
				}
				$this->session->set_userdata($data);
				return true;
			}
		}

		return false;
	}

	public function checkFacebook($info){
		$this->db->where('username', $info['username']);
		$query = $this->db->get('membership');

		if($query->num_rows > 0) {
			return false;
		}
		return true;
	}

	public function signupFacebook($array){
		$now = $this->save_date();
		$data = array(
			'first_name' => $array['first_name'],
			'last_name' =>	$array['last_name'],
			'username' =>	$array['username'],
			'email_address' =>	$array['email'],
			'activate' => 'true',
			'signup_date' => $now,
		);
		$this->db->insert('membership', $data);
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

	function get_date(){
		$month = array('Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec');
		$total = array();
		for($i = 0; $i < 12; $i++){
			$this->db->like('signup_date', $month[$i]);
			$query = $this->db->get('membership');
			$row = $query->num_rows;
			array_push($total, $row);
		}

		return $total;
	}

	function create_member() {
		$now = $this->save_date();

		$new_member_insert_data = array(
			'first_name' => $this->input->post('first_name'),
			'last_name' => $this->input->post('last_name'),
			'email_address' => $this->input->post('email_address'),
			'username' =>$this->input->post('username'),
			'password' => $this->hash($this->input->post('password')),
			'activate' => FALSE,
			'signup_date' => $now,
		);

		$insert = $this->db->insert('membership', $new_member_insert_data);
		$this->send_confirmation_email($this->input->post('email_address'));
		
	}

	function save_date(){
    	$today = getdate();
    	$month = $this->month_shortcut($today['month']);
    	$date = "" .$today['mday'] ." " .$month ." " .$today['year'];
		return $date;
    }

    function month_shortcut($month){
    	if(strcmp($month, "January") == 0)
    		$month = "Jan";
    	else if(strcmp($month, "February") == 0)
    		$month = "Feb";
    	else if(strcmp($month, "March") == 0)
    		$month = "Mar";
    	else if(strcmp($month, "April") == 0)
    		$month = "Apr";
    	else if(strcmp($month, "June") == 0)
    		$month = "Jun";
    	else if(strcmp($month, "July") == 0)
    		$month = "Jul";
    	else if(strcmp($month, "August") == 0)
    		$month = "Aug";
    	else if(strcmp($month, "September") == 0)
    		$month = "Sept";
    	else if(strcmp($month, "October") == 0)
    		$month = "Oct";
    	else if(strcmp($month, "November") == 0)
    		$month = "Nov";
    	else if(strcmp($month, "December") == 0)
    		$month = "Dec";

    	return $month;
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

	function login_log(){
		$today = getdate();
    	$month = $this->month_shortcut($today['month']);
    	$year = $today['year'];

    	$data = array(
    		'month' => $month,
    		'year' => $year,
    		'login' => TRUE,
    	);

    	$this->db->insert('log', $data);
	}

	function exam_log(){
		$today = getdate();
    	$month = $this->month_shortcut($today['month']);
    	$year = $today['year'];

    	$data = array(
    		'month' => $month,
    		'year' => $year,
    		'exam' => TRUE,
    	);

    	$this->db->insert('log', $data);
	}

	function get_login_log(){
		$month = array('Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec');
		$total = array();
		for($i = 0; $i < 12; $i++){
			$this->db->where('month', $month[$i]);
			$this->db->where('login', true);
			$query = $this->db->get('log');
			$row = $query->num_rows;
			array_push($total, $row);
		}

		return $total;
	}

	function get_exam_log(){
		$month = array('Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec');
		$total = array();
		for($i = 0; $i < 12; $i++){
			$this->db->where('month', $month[$i]);
			$this->db->where('exam', true);
			$query = $this->db->get('log');
			$row = $query->num_rows;
			array_push($total, $row);
		}

		return $total;
	}
}