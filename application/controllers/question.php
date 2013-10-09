<?php
class Question extends User_Controller
{

	public function __construct () {
		parent::__construct();
	}

	public function index(){
		$this->load->model('ask');
		$this->ask->set_current_subject();
		$this->ask->set_questions();

		$data['questions'] = unserialize($this->session->userdata('questions'));
		$data['crand'] = $this->ask->random_choice();

		if($this->ask->is_paused()){
			$data['qrand'] = $this->session->userdata('sequence');
			$data['answers'] = $this->session->userdata('answers');
		}

		else {
			$data['qrand'] = $this->ask->random_question();
			$data['answers'] = null;
		}

		// Load view
		$data['firstname'] = $this->session->userdata('fname');
		$data['lastname'] = $this->session->userdata('lname');
		//if (...)
		$data['tempTime'] = 30*60; // in seconds 
		//else
		//$data['tempTime'] = $data['ajax_var']; // in seconds
		//else $data['tempTime'] = 30*60;
		$data['main_content'] = 'questions';
		$this->load->view('members_area', $data);
	}

	
}