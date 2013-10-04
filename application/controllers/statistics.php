<?php
	class Statistics extends User_Controller {
		public function __construct ()
		{
			parent::__construct();
		}

		public function index ()
		{	
			$this->load->model('score_m');
			$date = $this->score_m->get_date();

			$array = $this->score_m->get_scores("scores");
			$science = $this->score_m->get_scores("science");
			$mathematics = $this->score_m->get_scores("mathematics");
			$english = $this->score_m->get_scores("english");
			$reading_comprehension = $this->score_m->get_scores("reading_comprehension");

			$data['firstname'] = $this->session->userdata('fname');
			$data['lastname'] = $this->session->userdata('lname');
			$data['dates'] = json_encode($date);

			$data['hist'] = json_encode($array, JSON_NUMERIC_CHECK);

			$data['hist_science'] = json_encode($science, JSON_NUMERIC_CHECK);
			$data['hist_mathematics'] = json_encode($mathematics, JSON_NUMERIC_CHECK);
			$data['hist_english'] = json_encode($english, JSON_NUMERIC_CHECK);
			$data['hist_reading_comprehension'] = json_encode($reading_comprehension, JSON_NUMERIC_CHECK);

			$data['main_content'] = 'statistics_area';
			$this->load->view('members_area', $data);
		}

		
	}



?>