<?php
class Links extends User_Controller {

	public function __construct () {
		parent::__construct();
		$this->load->model('ask');
	}

	function index(){
		$data['general_knowledge'] = $this->ask->get_links('general_knowledge');
		$data['science'] = $this->ask->get_links('science');
		$data['mathematics'] = $this->ask->get_links('mathematics');
		$data['english'] = $this->ask->get_links('english');
		$data['reading_comprehension'] = $this->ask->get_links('reading_comprehension');

		$data['firstname'] = $this->session->userdata('fname');
		$data['lastname'] = $this->session->userdata('lname');
		$data['main_content'] = 'links_area';
		$this->load->view('members_area', $data);
	}
}