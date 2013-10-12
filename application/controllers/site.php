<?php
class Site extends User_Controller {
	public function index() {
		// $this->load->model('ask');
		// if(!$this->session->userdata['startExam']){
		// 	$this->ask->delete_paused_user();
		// }
		$data['firstname'] = $this->session->userdata('fname');
		$data['lastname'] = $this->session->userdata('lname');
		
		$data['main_content'] = 'profile';
		$this->load->view('members_area', $data);
	}
}
?>