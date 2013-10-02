<?php
	class About extends CI_Controller {
		function __construct ()
		{
			parent::__construct();
		}
		function index() {
			$this->load->library('../controllers/login');
			$isLoggedIn = $this->login->loggedin();	
			$data['loggedin'] = $isLoggedIn;
			
			if($isLoggedIn > 0) {
				$data['firstname'] = $this->session->userdata('fname');
				$data['lastname'] = $this->session->userdata('lname');
				$data['main_content'] = 'abouts/about';
				$this->load->view('members_area', $data);
			}
			else{
				$data['main_content'] = 'main_layout';
				$this->load->view('abouts/about', $data);
			}
		}

	}

?>