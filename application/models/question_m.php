<?php
class Question_m extends MY_Model
{
	protected $_table_name = 'ask';
	protected $_order_by = 'subject desc, id desc';
	
	public $rules = array(
		'subject' => array(
			'field' => 'subject', 
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
		$question->subject = '';
		$question->title = '';
		$question->ask = '';
		$question->difficulty = '';
		$question->correct_answer = '';
		$question->choice1 = '';
		$question->choice2 = '';
		$question->choice3 = '';

		return $question;
	}

	function search_question($name, $diff){
		$this->db->like('title', $name);
		$this->db->or_like('subject', $name);
		
		if($diff != null || $diff != false){
			$this->db->like('difficulty', $diff);
		}
		else{
			$this->db->or_like('difficulty', $name);
		}
		$query = $this->db->get('ask');

		if($query->num_rows > 0){
			return $query->result();
		}
		else{
			$this->db->like('ask', $name);
			$query = $this->db->get('ask');
			if($query->num_rows > 0)
				return $query->result();
		}

		return null;
	}
}