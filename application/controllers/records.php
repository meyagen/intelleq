<?php
class Records extends User_Controller {
	public function __construct ()
	{
		parent::__construct();
	}

	public function index ()
	{	
		// Load view
		$data['firstname'] = $this->session->userdata('fname');
		$data['lastname'] = $this->session->userdata('lname');

		$this->load->model('score_m');
	    $data['scores'] = $this->score_m->get_scores("scores");
	    $data['science'] = $this->score_m->get_scores("science");
	    $data['mathematics'] = $this->score_m->get_scores("mathematics");
	    $data['english'] = $this->score_m->get_scores("english");
	    $data['reading_comprehension'] = $this->score_m->get_scores("reading_comprehension");
		$data['main_content'] = 'records_area';
		$this->load->view('members_area', $data);
	}
}