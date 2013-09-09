<?php
class Question extends User_Controller
{

	public function __construct ()
	{
		parent::__construct();
	}

	public function index ()
	{
		// Fetch all questions
		$this->load->model('ask');
		$result = $this->ask->get_questions();
		$data['questions'] = $result;
		
		// Load view
		$data['firstname'] = $this->session->userdata('fname');
		$data['lastname'] = $this->session->userdata('lname');
		$data['main_content'] = 'questions';
		$this->load->view('members_area', $data);
	}


}