<?php
class Score extends User_Controller {

	public function __construct () {
		parent::__construct();

		$this->load->model('ask');
		$this->load->model('score_m');
		$this->load->model('review_m');
	}

	function index() {
		for($i = 1; $i <= $this->ask->count_questions(); $i++) {
			$answer = "answer".$i;
			$$answer = $this->input->post($answer);
			$input[$i] = $$answer;
		}

		if($this->input->post('submit') == "Finished All the Question") {
			$data['score'] = $this->score_m->compute($input);
			$data['total'] = $this->ask->count_questions();
			$data['firstname'] = $this->session->userdata('fname');
			$data['lastname'] = $this->session->userdata('lname');
			$data['subject'] = $this->session->userdata('subject');

			$this->session->set_userdata('timeCheck', TRUE);
			$this->session->set_userdata('startExam', FALSE);
			
			if(strcmp($data['subject'], "reading_comprehension") == 0) {
				$score_array[0] = $this->score_m->get_scores("science")[count($this->score_m->get_scores("science"))-1];
				$score_array[1] = $this->score_m->get_scores("mathematics")[count($this->score_m->get_scores("mathematics"))-1];
				$score_array[2] = $this->score_m->get_scores("english")[count($this->score_m->get_scores("english"))-1];
				$score_array[3] = $this->score_m->get_scores("reading_comprehension")[count($this->score_m->get_scores("reading_comprehension"))-1];
         		$data['score'] = $score_array;
		        $data['total'] = $this->ask->count_questions();
		        $data['omits'] = $this->review_m->get_omits();
				$data['main_content'] = 'score';
			}
			else{
				//redirect('question');
				$data['start'] = $this->ask->check_last_fin();
				$data['last_fin'] = $this->ask->get_last_fin();
				$data['main_content'] = 'transition';
			}

			$data['is_paused'] = $this->ask->is_paused();
			$data['last_fin'] = $this->ask->get_last_fin();
			if($this->ask->is_paused() || $this->session->userdata['startExam'] || $this->ask->get_last_fin() != 'reading_comprehension'){
				$data['state'] = "Resume Exam";
			} 
			else{
				$data['state'] = "Take the Exam!";
			}

			$this->load->view('_main_layout', $data);
			$this->load->view('members_area', $data);
		}

		elseif ($this->input->post('pause') == "Pause") {
			$this->ask->pause($input, $this->input->post('pseudotime'));
			redirect('site');
		}

	}

	function checkState(){
		$this->session->set_userdata('startExam', FALSE);
	}

}