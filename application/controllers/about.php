<?php
	class About extends CI_Controller {
		function index() {
			$data['main_content'] = 'home';
			$this->load->view('about', $data);
		}

	}

?>