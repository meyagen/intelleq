<?php
	class Transition extends User_Controller {
		public function __construct ()
		{
			parent::__construct();
		}

		public function index ()
		{	
			$this->load->model('ask');
			$data['start'] = $this->ask->check_last_fin();
			$data['last_fin'] = $this->ask->get_last_fin();
			
			// Load view
			$data['firstname'] = $this->session->userdata('fname');
			$data['lastname'] = $this->session->userdata('lname');

			$data['main_content'] = 'transition';
			$data['error_exist'] = FALSE;
			
			$this->load->view('members_area', $data);
		}
	}
?>