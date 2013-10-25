<?php
class Review extends User_Controller {

	public function __construct () {
		parent::__construct();
		$this->load->model('ask');
		$this->load->model('review_m');
		$this->load->model('score_m');
	}

	function index(){
		$data['firstname'] = $this->session->userdata('fname');
		$data['lastname'] = $this->session->userdata('lname');
		if ((!($this->ask->is_paused()))&&($this->ask->check_last_fin())) {
			$data['main_content'] = 'review';
			$data['rev_vals'] = $this->review_m->get_rev();
			$data['q_science'] = $this->ask->get_questions('science');
			$data['q_mathematics'] = $this->ask->get_questions('mathematics');
			$data['q_english'] = $this->ask->get_questions('english');
			$data['q_reading_comprehension'] = $this->ask->get_questions('reading_comprehension');
			
			$score_array = array();
			$science = $this->score_m->get_scores("science");
			$mathematics = $this->score_m->get_scores("mathematics");
			$english = $this->score_m->get_scores("english");
			$reading_comprehension = $this->score_m->get_scores("reading_comprehension");

			$score_array[0] = $science[count($science)-1];
			$score_array[1] = $mathematics[count($mathematics)-1];
			$score_array[2] = $english[count($english)-1];
			$score_array[3] = $reading_comprehension[count($reading_comprehension)-1];

			$score_array[4] = $score_array[0]+$score_array[1]+$score_array[2]+$score_array[3];
     		$data['score'] = $score_array;
	        $data['total'] = $this->ask->count_questions();

	       	$data['omits'] = $this->review_m->get_omits();
	    }
		
		// else load another value to main_content
		else
			$data['main_content'] = 'site';
		
		$this->load->view('members_area', $data);
	}
}
?>