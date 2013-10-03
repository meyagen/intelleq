<?php
class Question_m extends MY_Model
{
	protected $_table_name = 'ask';
	protected $_order_by = 'group desc, id desc';
	
	public $rules = array(
		'group' => array(
			'field' => 'group', 
			'label' => 'Subject Area', 
			'rules' => 'trim|required|url_title|xss_clean'
		), 
		'title' => array(
			'field' => 'title', 
			'label' => 'Title', 
			'rules' => 'trim|required|xss_clean'
		),
		'ask' => array(
			'field' => 'ask', 
			'label' => 'Question', 
			'rules' => 'trim|required|xss_clean'
		), 
		'difficulty' => array(
			'field' => 'difficulty', 
			'label' => 'Difficulty', 
			'rules' => 'trim|required|xss_clean'
		), 
		'correct_answer' => array(
			'field' => 'correct_answer', 
			'label' => 'Body', 
			'rules' => 'trim|required'
		),
		'choice1' => array(
			'field' => 'choice1', 
			'label' => 'Choice 1', 
			'rules' => 'trim|required'
		),
		'choice2' => array(
			'field' => 'choice2', 
			'label' => 'Choice 2', 
			'rules' => 'trim|required'
		),
		'choice3' => array(
			'field' => 'choice3', 
			'label' => 'Choice 3', 
			'rules' => 'trim|required'
		),
	);

	public function get_new ()
	{
		$question = new stdClass();
		$question->group = '';
		$question->title = '';
		$question->ask = '';
		$question->difficulty = '';
		$question->correct_answer = '';
		$question->choice1 = '';
		$question->choice2 = '';
		$question->choice3 = '';

		return $question;
	}
}