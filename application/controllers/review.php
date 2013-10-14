<?php
class Review extends User_Controller {

	public function __construct () {
		parent::__construct();
		$this->load->model('ask');
		$this->load->model('review_m');
	}

	function index(){

		//$data['questions'] = unserialize($this->session->userdata('questions'));
		//$data['crand'] = $this->ask->random_choice();
		$data['firstname'] = $this->session->userdata('fname');
		$data['lastname'] = $this->session->userdata('lname');
		if ((!($this->ask->is_paused()))&&($this->ask->check_last_fin())) {
			$data['main_content'] = 'review';
			$data['rev_vals'] = $this->review_m->get_rev();
			$data['q_science'] = unserialize($this->ask->get_questions('science'));
			$data['q_mathematics'] = unserialize($this->ask->get_questions('mathematics'));
			$data['q_english'] = unserialize($this->ask->get_questions('english'));
			$data['q_reading_comprehension'] = unserialize($this->ask->get_questions('reading_comprehension'));

			//var_dump($data);
			//$rev_vals = $this->review_m;
			//var_dump($rev_vals);
		}
		// else load another value to main_content
		else $data['main_content'] = 'settings';
		
		$this->load->view('members_area', $data);
	}
}
?>