<?php
	class Statistics extends User_Controller {
		public function __construct ()
		{
			parent::__construct();
		}

		public function index ()
		{	
			$date = array('jan1', 'jan2', 'jan3', 'jan4');
			$this->load->model('ask');
			// Load view
			$data['firstname'] = $this->session->userdata('fname');
			$data['lastname'] = $this->session->userdata('lname');
			$array = $this->ask->get_scores();
			$data['dates'] = json_encode($date);
			$data['hist'] = json_encode($array, JSON_NUMERIC_CHECK);
			$data['main_content'] = 'statistics_area';
			$this->load->view('members_area', $data);
			//$this->load->view('statistics_area', $data);
		}

		
	}



?>