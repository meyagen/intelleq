<?php
class Question extends User_Controller
{

	public function __construct () {
		parent::__construct();
	}

	public function index(){
		$subject = 'english';
		$this->load->model('ask');
		$this->ask->set_questions($subject);
		$data['questions'] = unserialize($this->session->userdata('questions'));
		$data['crand'] = $this->ask->random_choice();

		if($this->ask->session_found() == FALSE){
			$data['qrand'] = $this->ask->random_question();
			$data['answers'] = null;
		}

		else {
			$data['qrand'] = $this->session->userdata('sequence');
			$data['answers'] = $this->session->userdata('answers');
		}

		// Load view
		$data['firstname'] = $this->session->userdata('fname');
		$data['lastname'] = $this->session->userdata('lname');
		$data['main_content'] = 'questions';
		$this->load->view('members_area', $data);
	}
}