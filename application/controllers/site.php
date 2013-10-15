<?php
class Site extends User_Controller {
	public function index() {
		$this->load->model('ask');
		
		$data['firstname'] = $this->session->userdata('fname');
		$data['lastname'] = $this->session->userdata('lname');
		if($this->ask->is_paused()){
			$data['state'] = "Resume Exam";
		} 
		else{
			$data['state'] = "Take the Exam!";
		}
		$data['main_content'] = 'profile';
		$this->load->view('members_area', $data);
	}
}
?>