<?php
	class Site extends User_Controller {
		function index() {
			$data['firstname'] = $this->session->userdata('fname');
			$data['lastname'] = $this->session->userdata('lname');
			
			$data['main_content'] = 'profile';
			$this->load->view('members_area', $data);
		}
	}
?>