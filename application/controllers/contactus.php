<?php
	class Contactus extends CI_Controller {
		function index() {
			$data['main_content'] = 'home';
			$this->load->view('contactus', $data);
		}
	}
?>
