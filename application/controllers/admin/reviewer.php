<?php
class Reviewer extends Admin_Controller
{

	function __construct(){
		parent::__construct();
		$this->load->model('reviewer_m');
	}

	function index(){
		$this->data['reviewers'] = $this->reviewer_m->get();
		$this->data['subview'] = 'admin/reviewer/index';
		$this->load->view('admin/_layout_main', $this->data);
	}

	function edit($id = NULL){
		if($id == 'user')
			redirect('admin/user');
		elseif($id == 'question')
			redirect('admin/question');
		elseif($id == 'reviewer')
			redirect('admin/reviewer');

		elseif ($id) {
			$this->data['reviewer'] = $this->reviewer_m->get($id);
			count($this->data['reviewer']) || $this->data['errors'][] = 'Link could not be found';
		}

		else 
			$this->data['reviewer'] = $this->reviewer_m->get_new();
		
		//Set up the form
		$rules = $this->reviewer_m->rules;
		$this->form_validation->set_rules($rules);
		
		//Process the form
		if($this->form_validation->run() == TRUE) {
			$data = $this->reviewer_m->array_from_post(array(
				'title', 
				'link', 
				'category',
			));

			$this->reviewer_m->save($data, $id);
			redirect('admin/reviewer');
		}
		
		//Load the view
		$this->data['subview'] = 'admin/reviewer/edit';
		$this->load->view('admin/_layout_main', $this->data);
	}

	function delete($id){
		$this->reviewer_m->delete($id);
		redirect('admin/reviewer');
	}

	function user(){
		redirect('admin/user');
	}

	function question(){
		redirect('admin/question');
	}

}