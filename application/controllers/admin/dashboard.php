<?php
class Dashboard extends Admin_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('membership_model');
    }

    public function index() {
    	// Fetch recently modified articles
        $date = $this->membership_model->get_date();
        $count = $this->membership_model->get_login_log();
        $exam = $this->membership_model->get_exam_log();
        $this->data['login'] = json_encode($count);
    	$this->data['monthly'] = json_encode($date);
        $this->data['exams'] = json_encode($exam);
    	$this->data['subview'] = 'admin/dashboard/index';
        
    	$this->load->view('admin/_layout_main', $this->data);
    }
    
    public function modal() {
    	$this->load->view('admin/_layout_modal', $this->data);
    }
}