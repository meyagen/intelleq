<?php
class Question extends Admin_Controller
{

	function __construct(){
		parent::__construct();
		$this->load->model('question_m');
	}

	function index(){
		// Fetch all articles

		$this->data['questions'] = $this->question_m->get();
		// Load view
		$this->data['subview'] = 'admin/question/index';
		$this->load->view('admin/_layout_main', $this->data);
	}

	function edit($id = NULL){
		// Fetch a article or set a new one
		if($id == 'user')
			redirect('admin/user');
		elseif($id == 'question')
			redirect('admin/question');
		elseif($id == 'reviewer')
			redirect('admin/reviewer');
		
		elseif ($id) {
			$this->data['question'] = $this->question_m->get($id);
			count($this->data['question']) || $this->data['errors'][] = 'Question could not be found';
		}
		else {
			$this->data['question'] = $this->question_m->get_new();
		}
		
		// Set up the form
		$rules = $this->question_m->rules;
		$this->form_validation->set_rules($rules);
		
		// Process the form
		if ($this->form_validation->run() == TRUE) {
			$data = $this->question_m->array_from_post(array(
				'group', 
				'title', 
				'ask', 
				'difficulty',
				'correct_answer',
				'choice1',
				'choice2',
				'choice3'
			));
			$this->question_m->save($data, $id);
			redirect('admin/question');
		}
		
		// Load the view
		$this->data['subview'] = 'admin/question/edit';
		$this->load->view('admin/_layout_main', $this->data);
	}

	function delete($id){
		$this->question_m->delete($id);
		redirect('admin/user');
	}

	function delete_m($id){
		$this->question_m->delete($id);
		redirect('admin/user');
	}

	function user(){
		redirect('admin/user');
	}

	function reviewer(){
		redirect('admin/reviewer');
	}

}