<?php
	class Mission extends CI_Controller {
		function index() {
			$data['main_content'] = 'home';
			$this->load->view('mission', $data);
		}
	}


?>