<?php
class Question extends User_Controller
{

	public function __construct () {
		parent::__construct();

		$this->load->model('ask');
	}

	public function index(){
		// Fetch all question
		$this->ask->set_questions();

		$data['qrand'] = $this->random_question();
		$data['crand'] = $this->random_choice();

		// Load view
		$data['questions'] = $this->session->userdata('questions');
		$data['firstname'] = $this->session->userdata('fname');
		$data['lastname'] = $this->session->userdata('lname');
		$data['main_content'] = 'questions';
		$this->load->view('members_area', $data);
	}

	function random_question(){
		$total = $this->ask->count_questions();
		$q_array = array();

		for($i = 0; $i < $total; $i++){
			$randomize = rand(0,$total-1);
		
			while(in_array($randomize,$q_array)){
				$randomize = rand(0,$total-1);
			}

			array_push($q_array,$randomize);
					
			$q_array[$i] = $randomize;
		}

		$data = array(
			'sequence' => $q_array,
		);
		$this->session->set_userdata($data);

		return $q_array;
	}

	function random_choice(){
		$total = 4; 		//contant 4 choices
		$c_array = array();

		for($i = 0; $i < $total; $i++){
			$randomize = rand(0,$total-1);
		
			while(in_array($randomize,$c_array)){
				$randomize = rand(0,$total-1);
			}

			array_push($c_array,$randomize);
								
			$c_array[$i] = $randomize;
		}

		return $c_array;
	}

	function get_input($cid = null) {
		$total = $this->ask->count_questions();
		for($i = 1; $i <= $total; $i++) {
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
		echo "/".$total;
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