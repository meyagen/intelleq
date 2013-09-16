<?php
class Dashboard2 extends Admin_Controller {

    public function __construct(){
        parent::__construct();
    }

    public function index() {
    	// Fetch recently modified articles
        
    	$this->load->model('article_m');
    	$this->db->order_by('modified desc');
    	$this->db->limit(10);
    	$this->data['recent_articles'] = $this->article_m->get();
    	
    	$this->data['subview'] = 'admin/dashboard1/index';
        
    	$this->load->view('admin/_layout_main', $this->data);
    }
    
    public function modal() {
    	$this->load->view('admin/_layout_modal', $this->data);
    }
}