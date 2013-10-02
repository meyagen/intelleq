<?php
class Settings extends CI_Controller{

	function index() {
		if($this->loggedin() == FALSE)
			redirect('home');
		else {
			$data['firstname'] = $this->session->userdata('fname');
			$data['lastname'] = $this->session->userdata('lname');
			$data['main_content'] = 'user';
			$this->load->view('_main_layout', $data);			
		}
	}

	function loggedin() {
		return (bool) $this->session->userdata('loggedin');
	}

	function edit() {
		$id = $this->session->userdata('id');
		$new_first_name = $this->input->post('new_first_name');
		$new_last_name = $this->input->post('new_last_name');
		$new_username = $this->input->post('new_username');
		$new_password = $this->input->post('new_password');
		$new_email = $this->input->post('new_email');

		if(strlen($new_first_name) > 2)
			$this->firstname($id, $new_first_name);

		if(strlen($new_last_name) > 2)
			$this->lastname($id, $new_last_name);

		if(strlen($new_username) > 2)
			$this->username($id, $new_username);

		if(strlen($new_password) > 2);
			$this->password($id, $new_password);

		if(strlen($new_email) > 2);
			$this->email($id, $new_email);

		$this->load->model('settings_m');
		$this->settings_m->edit_session_data();

		redirect('site');
	}

	function firstname($id, $new_first_name) {
		$this->load->model('settings_m');
		$this->load->helper('form');
		$this->load->library('form_validation');

		$this->form_validation->set_rules(
								'new_first_name', 
								'new_first_name', 
								'trim|required|min_length[1]|max_length[100]');

		if($this->form_validation->run())
			$this->settings_m->change_firstname($id, $new_first_name);
	}

	function lastname($id, $new_last_name) {
		$this->load->model('settings_m');
		$this->load->helper('form');
		$this->load->library('form_validation');

		$this->form_validation->set_rules(
								'new_last_name', 
								'new_last_name', 
								'trim|required|min_length[1]|max_length[100]');

		if($this->form_validation->run())
			$this->settings_m->change_lastname($id, $new_last_name);
	}

	function username($id, $new_username) {
		$this->load->model('settings_m');
		$this->load->helper('form');
		$this->load->library('form_validation');

		$this->form_validation->set_rules(
								'new_username', 
								'new_username', 
								'trim|required|min_length[4]|max_length[25]');

		if($this->form_validation->run())
			$this->settings_m->change_username($id, $new_username);
	}

	function password($id, $new_password) {
		$this->load->model('settings_m');
		$this->load->helper('form');
		$this->load->library('form_validation');

		$this->form_validation->set_rules(
								'new_password',
								'new_password', 
								'trim|required|min_length[4]|max_length[32]');

		if($this->form_validation->run())
			$this->settings_m->change_password($id, $new_password);
	}

	function email($id, $new_email) {
		$this->load->model('settings_m');
		$this->load->helper('form');
		$this->load->library('form_validation');

		$this->form_validation->set_rules(
								'new_email', 
								'new_email', 
								'trim|required|valid_email');

		if($this->form_validation->run())
			$this->settings_m->send_confirmation_email($id, $new_email);
	}

	function confirm_email($email, $email_code){
		$this->load->model('settings_m');
		$this->load->model('membership_model');
		$id = $this->session->userdata('id');
		$new_email = $email;

		$email_code = trim($email_code);

		if($this->membership_model->validate_email($email, $email_code))
			$this->settings_m->change_email($id, $new_email);
	}

	function deactivate() {
		$this->load->model('settings_m');
		$username = $this->session->userdata('username');
		$this->settings_m->deactivate($username);
		$this->session->sess_destroy();
		redirect('home');
	}

	function back(){
		redirect('site');
	}
}