<?php
class Reviewer_m extends MY_Model
{
	protected $_table_name = 'reviewer';
	protected $_order_by = 'category desc, id desc';
	
	public $rules = array(
		'title' => array(
			'field' => 'title', 
			'label' => 'Title', 
			'rules' => 'trim|required|xss_clean'
		),

		'link' => array(
			'field' => 'link',
			'label' => 'Link', 
			'rules' => 'trim|required|xss_clean'
		), 

		'category' => array(
			'field' => 'category', 
			'label' => 'Category', 
			'rules' => 'trim|required|xss_clean'
		), 
	);

	public function get_new()
	{
		$reviewer = new stdClass();
		$reviewer->title = '';
		$reviewer->link = '';
		$reviewer->category = '';
		return $reviewer;
	}
}