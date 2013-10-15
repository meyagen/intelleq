<?php
	class Guideline extends User_Controller {
		public function __construct ()
		{
			parent::__construct();
		}

		public function index ()
		{	
			$this->load->model('ask');
			
			// Load view
			$data['firstname'] = $this->session->userdata('fname');
			$data['lastname'] = $this->session->userdata('lname');
			if($this->ask->is_paused()){
				redirect('transition');
			}
			else{
				$data['main_content'] = 'guidelines';
			}
			$this->load->view('members_area', $data);
		}
	}
?>