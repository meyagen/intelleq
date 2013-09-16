<?php 
	class error_404 extends CI_Controller {
		function index() {
			$data['main_content'] = 'error_404';
			$this->load->view('_main_layout', $data);
		}
	}
