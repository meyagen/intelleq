<?php
	class Calendar extends User_Controller {
		public function __construct ()
		{
			parent::__construct();
		}

		public function index ()
		{	
			// Load view
			$data['firstname'] = $this->session->userdata('fname');
			$data['lastname'] = $this->session->userdata('lname');
			$data['main_content'] = 'calendar_area';
			$this->load->view('members_area', $data);
		}
	}

?>