<?php 
	class Faq extends CI_Controller {
		function index() {
			$data['main_content'] = 'home';
			$this->load->view('faq', $data);
		}
	}
