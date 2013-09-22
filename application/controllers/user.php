<?php
class User extends User_Controller {
	public function __construct ()
	{
		parent::__construct();
	}

	public function index (){
		$data['firstname'] = $this->session->userdata('fname');
		$data['lastname'] = $this->session->userdata('lname');
		$data['main_content'] = 'settings';
		$this->load->view('members_area', $data);
	}
}