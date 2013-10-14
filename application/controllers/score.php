<?php
class Score extends User_Controller {

	public function __construct () {
		parent::__construct();

		$this->load->model('ask');
		$this->load->model('score_m');
	}

	function index() {
		for($i = 1; $i <= $this->ask->count_questions(); $i++) {
			$answer = "answer".$i;
			$$answer = $this->input->post($answer);
			$input[$i] = $$answer;
		}

		if($this->input->post('submit') == "Submit Query") {
			$data['score'] = $this->score_m->compute($input);
			$data['total'] = $this->ask->count_questions();
			$data['firstname'] = $this->session->userdata('fname');
			$data['lastname'] = $this->session->userdata('lname');
			$data['subject'] = $this->session->userdata('subject');

			$this->session->set_userdata('timeCheck', TRUE);
			$this->session->set_userdata('startExam', FALSE);
			
			if(strcmp($data['subject'], "reading_comprehension") == 0) {
			    $score_array = $this->score_m->get_scores("scores");
			    $data['score'] = $score_array[count($score_array)-1];
			    $data['total'] = $this->ask->count_questions();
				$data['main_content'] = 'score';
			}
			else
				$data['main_content'] = 'transition';

			$this->load->view('members_area', $data);
		}

		elseif ($this->input->post('pause') == "Submit Query") {
			$this->ask->pause($input, $this->input->post('pseudotime'));
			redirect('site');
		}
	}

	function checkState(){
		$this->session->set_userdata('startExam', FALSE);
	}
}