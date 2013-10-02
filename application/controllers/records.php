<?php
class Records extends User_Controller {
	public function __construct ()
	{
		parent::__construct();
	}

	public function index ()
	{	
		// Load view
		$data['firstname'] = $this->session->userdata('fname');
		$data['lastname'] = $this->session->userdata('lname');

		$this->load->model('ask');
	    $data['scores'] = $this->ask->get_scores();
		$data['main_content'] = 'records_area';
		$this->load->view('members_area', $data);
	}
}