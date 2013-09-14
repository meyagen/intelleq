<?php
class Question extends User_Controller
{

	public function __construct () {
		parent::__construct();
	}

	public function index(){
		// Fetch all questions
		$this->load->model('ask');
		$this->ask->set_questions();
		$data['questions'] = $this->session->userdata('questions');
		
		// Load view
		$data['firstname'] = $this->session->userdata('fname');
		$data['lastname'] = $this->session->userdata('lname');
		$data['main_content'] = 'questions';
		$this->load->view('members_area', $data);
	}

	function get_input($cid = null) {
		for($i = 1; $i < 4; $i++) {
			$answer = "answer".$i;
			$$answer = $this->input->post($answer);
			$input[$answer] = $$answer;
			/*echo "<pre>";
			print_r($input);
			echo "</pre>";*/
		}
		
		$this->load->model('ask');
		$score = $this->ask->compute($input);
		
		echo "Score: ";
		echo $score;
		echo "/3";
	}

	function pause(){
		for($i = 1; $i < 4; $i++) {
			$answer = "answer".$i;
			$$answer = $this->input->post($answer);
			$input[$answer] = $$answer;
		}

		$data = array(
			'answers' => $input,
		);

		$this->session->set_userdata($data);
	}
}