<?php
	class Transition extends User_Controller {
		public function __construct ()
		{
			parent::__construct();
		}

		public function index ()
		{	
			$this->load->model('ask');
			
			// if(!$this->session->userdata['startExam']){
			// 	$this->ask->delete_paused_user();
			// }
			// Load view
			$data['firstname'] = $this->session->userdata('fname');
			$data['lastname'] = $this->session->userdata('lname');
			$data['main_content'] = 'transition';
			$this->load->view('members_area', $data);
		}
	}
?>