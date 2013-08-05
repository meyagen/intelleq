<?php

class Login extends CI_Controller{

	function index(){
		$data['main_content'] = 'login_form';
		$this->load->view('includes/template', $data);
	}
	
	function validate_credentials() {
		switch ($this->input->post('login_sign_up')) {
		  // if Login
		  	case 'Login':
				$this->load->model('membership_model');
				$query = $this->membership_model->validate();
				
				if($query > 0) {
					$data = array(
						'username' => $this->input->post('username'),
						'is_logged_in' => true
					);
					$this->session->set_userdata($data);
					redirect('site/members_area');
				}
				else {
					$this->index();
				}
				break;

		  // if sign-up
		 	case 'Sign-up':
				redirect('login/signup');
				break;

			case 'Forgot Password?':
				redirect('login/reset');
				break;
	  }
	}

	function signup() {
		$data['main_content'] = 'signup_form';
		$this->load->view('includes/template', $data);
	}

	function create_member() {
		$this->load->library('form_validation');
		$this->form_validation->set_rules(
								'first_name',
								'First Name', 
								'trim|required');
		$this->form_validation->set_rules(
								'last_name', 
								'Last Name', 
								'trim|required');
		$this->form_validation->set_rules(
								'email_address', 
								'Email Address', 
								'trim|required|valid_email');

		$this->form_validation->set_rules(
								'username', 
								'Username', 
								'trim|required|min_length[4]');
		$this->form_validation->set_rules(
								'password',
								'Password', 
								'trim|required|min_length[4]|max_length[32]');
		$this->form_validation->set_rules(
								'password2', 
								'Password Confirmation', 	
								'trim|required|matches[password]');

		if($this->form_validation->run() == FALSE) {
			$this->signup();
		}
		else {
			$this->load->model('membership_model');
			
			if($this->membership_model->is_unique()){
				$data['main_content'] = 'email_confirmation';
				$this->load->view('includes/template', $data);
				$this->membership_model->create_member();
			}

			else {
				$this->signup();
			}
		}
	}

	function confirm_email($email, $email_code){
		$email_code = trim($email_code);
		$this->load->model('membership_model');
		if($this->membership_model->validate_email($email, $email_code)) {
			$user['id'] = "";
			$user['email'] = $email;
			//$this->membership_model->activate_user($user);
			$data['main_content'] = 'signup_successful';
		}

		else {
			$data['main_content'] = 'invalid_email';
		}
		
		$this->load->view('includes/template', $data);
	}

	function forget() {
		$this->load->library('form_validation');
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
		
		if($this->form_validation->run() == FALSE) {
			$this->reset();
		}

		else {
			$this->load->model('membership_model');
			$data = $this->membership_model->edit_password();

			if($data['query']) {
				$data['main_content'] = 'reset_successful';
				$this->load->view('includes/template', $data);
			}

			else {
				$this->reset();
			}
		}
	}

	function reset() {
		$data['main_content'] = 'reset_form';
		$this->load->view('includes/template', $data);
	}
}