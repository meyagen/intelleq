<?php
class Score extends User_Controller {

	public function __construct () {
		parent::__construct();

		$this->load->model('ask');
		$this->load->model('score_m');
	}

	function index() {
		$finished = true;

		for($i = 1; $i <= $this->ask->count_questions(); $i++) {
			$answer = "answer".$i;
			$$answer = $this->input->post($answer);
			$input[$i] = $$answer;

			if($$answer == null)
				$finished = false;
		}

		if($finished) {
			$data['score'] = $this->score_m->compute($input);
			$data['total'] = $this->ask->count_questions();
			$data['firstname'] = $this->session->userdata('fname');
			$data['lastname'] = $this->session->userdata('lname');
			$data['subject'] = $this->session->userdata('subject');

			$this->session->set_userdata('timeCheck', TRUE);
			$this->session->set_userdata('startExam', FALSE);
			
			if(strcmp($data['subject'], "reading_comprehension") == 0) {
				//$scorearray = $this->score_m->getscores
				//$data['score_array'] = 
				$data['main_content'] = 'score';
			}
			else{
				$data['main_content'] = 'transition';
			}
			$this->load->view('members_area', $data);
		}

		else {
			$this->ask->pause($input, $this->input->post('pseudotime'));
			redirect('site');
		}
	}
}