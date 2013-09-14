<?php
class Login extends CI_Controller{

	function index(){
		$data['main_content'] = 'home';
		$this->load->view('_main_layout', $data);
		$this->loggedin() == FALSE || redirect('site');
	}

	function validate(){
		$this->load->helper('form');//temp
		$this->load->library('form_validation');
		$this->load->library('session');//temp

		$this->load->model('membership_model');
		$rules = $this->membership_model->rules;
		$this->form_validation->set_rules($rules);
		
		// Process form
		if ($this->form_validation->run() == TRUE) {
			// We can login and redirect
			if ($this->membership_model->login() == TRUE) {
				redirect('site');
			}
			else {
				echo "invalid";
			}
		}

		/*$this->load->model('membership_model');
		$query = $this->membership_model->validate();
		
		if($query > 0) {
			$data = array(
				'username' => $this->input->post('username'),
				'loggedin' => true
			);
			$this->session->set_userdata($data);
			redirect('site/members_area');
		}
		else {
			redirect('', 'refresh');
		}*/
	}

	public function logout ()
	{
		$this->session->sess_destroy();
		redirect('http://localhost/ci');
	}

	public function loggedin ()
	{
		return (bool) $this->session->userdata('loggedin');
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
			redirect('', 'refresh');
		}
		else {
			$this->load->model('membership_model');
			
			if($this->membership_model->is_unique()){
				$data['main_content'] = 'email_confirmation';
				$this->load->view('includes/template', $data);
				$this->membership_model->create_member();
			}

			else {
				redirect('', 'refresh');
			}
		}
	}

	function confirm_email($email, $email_code){
		$email_code = trim($email_code);
		$this->load->model('membership_model');
		if($this->membership_model->validate_email($email, $email_code)) {
			$this->membership_model->activate_user($email);
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
		
		if($this->form_validation->run() == TRUE) {
			$this->load->model('membership_model');
			$data = $this->membership_model->edit_password();

			if($data['query']) {
				$data['main_content'] = 'reset_successful';
				echo "valid";
				//$this->load->view('includes/template', $data);
			}
			else echo "notfound";
		}
		else echo "invalid";
	}
}