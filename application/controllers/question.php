<?php
class Question extends CI_Controller
{

	public function __construct ()
	{
		parent::__construct();
	}

	public function index ()
	{
		// Fetch all questions
		$this->load->model('ask');
		$result = $this->ask->get_questions();
		$this->data['questions'] = $result;
		
		// Load view
		$this->data['subview'] = 'admin/questions/questions';
		$this->data['meta_title'] = 'title';
		$this->load->view('admin/_layout_main', $this->data);
	}


}