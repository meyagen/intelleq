<?php
class Score extends User_Controller {

	public function __construct () {
		parent::__construct();

		$this->load->model('ask');
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
			$score = $this->ask->compute($input);
			$data['score'] = $this->ask->compute($input);
			$data['total'] = $this->ask->count_questions();
			$data['firstname'] = $this->session->userdata('fname');
			$data['lastname'] = $this->session->userdata('lname');
			$data['main_content'] = 'score';
			$this->load->view('members_area', $data);
		}

		else {
			$this->ask->pause($input);
			redirect('site');
		}

	}
}