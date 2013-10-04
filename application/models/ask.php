<?php
class Ask extends CI_Model
{

	protected $_table_name = 'ask';

	function __construct () {
		parent::__construct();
	}

	function is_paused(){
		$this->db->where('username', $this->session->userdata('username'));
		$query = $this->db->get('gen_exam');

		if($query->num_rows > 0)
			return true;

		return false;
	}

	function set_current_subject(){
		if($this->is_paused()){
			$this->db->where('username', $this->session->userdata('username'));
			$query = $this->db->get('gen_exam');
			$row = $query->row();

			$data = array(
				'sequence' => unserialize($row->sequence),
				'answers' => unserialize($row->answers),
				'subject'=> $row->subject
			);

			$this->session->set_userdata($data);
		}

		else {
			$this->db->where('username', $this->session->userdata('username'));
			$query = $this->db->get('membership');
			$row = $query->row();

			if($row->current_subject == null)
				$data['subject'] = 'science';
			else
				$data['subject'] = $row->current_subject;

			$this->session->set_userdata($data);
		}
	}

	function set_questions() {
		$subject = $this->session->userdata('subject');
        $query = $this->db->query("select * from ask where ask.group=?", array('group' => $subject));
        $questions = $query->result_array();

		$data = array(
			'questions' => serialize($questions),
		);

		$this->session->set_userdata($data);
	}

	function count_questions(){
		$questions = unserialize($this->session->userdata('questions'));
		return count($questions);
	}

	function random_question(){
		$total = $this->ask->count_questions();
		$q_array = array();

		for($i = 0; $i < $total; $i++){
			$randomize = rand(0,$total-1);
		
			while(in_array($randomize,$q_array))
				$randomize = rand(0,$total-1);

			array_push($q_array,$randomize);			
			$q_array[$i] = $randomize;
		}

		$data = array(
			'sequence' => $q_array,
		);

		$this->session->set_userdata($data);
		return $q_array;
	}

	function random_choice(){
		$total = 4;
		$c_array = array();

		for($i = 0; $i < $total; $i++){
			$randomize = rand(0,$total-1);
		
			while(in_array($randomize,$c_array))
				$randomize = rand(0,$total-1);

			array_push($c_array,$randomize);							
			$c_array[$i] = $randomize;
		}

		return $c_array;
	}

	function pause($input){
		$subject = $this->session->userdata('subject');
		$sequence = serialize($this->session->userdata('sequence'));
		$answers = serialize($input);

		//store data in data[]
		$data = array(
			'username' => $this->session->userdata('username'),
			'sequence' => $sequence,
			'answers' => $answers,
			'subject' => $subject
		);

		//store in db gen_exam
		$this->db->where('username', $data['username']);
		$query = $this->db->get('gen_exam');
		$row = $query->num_rows;

		if($row > 0) {
			$this->db->where('username', $data['username']);
			$this->db->update('gen_exam', $data);
		}

		else
			$this->db->insert('gen_exam', $data);
	}
}