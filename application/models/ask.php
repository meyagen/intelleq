<?php
class Ask extends CI_Model
{

	protected $_table_name = 'ask';

	function __construct () {
		parent::__construct();
	}

	function session_found(){
		$this->db->where('username', $this->session->userdata('username'));
		$query = $this->db->get('gen_exam');

		if($query->num_rows > 0) {
			$row = $query->row();

			$data = array(
				'sequence' => unserialize($row->sequence),
				'answers' => unserialize($row->answers)
			);

			$this->session->set_userdata($data);
			return true;
		}

		return false;
	}

	function set_questions() {
        $query = $this->db->query("select * from ask");
        $questions = $query->result_array();

		$data = array(
			'questions' => $questions,
		);

		$this->session->set_userdata($data);
	}

	function count_questions(){
		$query = $this->db->count_all('ask');
		return $query;
	}

    function compute($input) {
    	$score = 0;
    	$i = 0;

    	$questions = $this->session->userdata('questions');
    	$sequence = $this->session->userdata('sequence');

		for($counter = 0; $counter < $this->count_questions(); $counter++){
			$row = $questions[$sequence[$counter]];
    		$i++;
    		$id = $row['id'];
			$answer = $input[$i]."";

			$this->db->where('correct_answer', $answer);
			$this->db->where('id', $id);
			$query = $this->db->get('ask');
			$correct = $query->row();
			if(count($correct))
				$score++;
    	}

    	//delete from gen_exam
		$this->db->where('username', $this->session->userdata('username'));
		$query = $this->db->get('gen_exam');
		$row = $query->num_rows;

		if($row > 0)
			$this->db->delete('gen_exam', array("username" => $this->session->userdata('username')));

		$this->store_score($score);

		return $score;
    }

    function store_score($score){
		$this->db->where('username', $this->session->userdata('username'));
		$query = $this->db->get('membership');
		$row = $query->num_rows;

		if($row > 0){
			$row = $query->row();
			$score_array = array();

			if($row->scores != null)
				$score_array = unserialize($row->scores);

			$score_array[] = $score;
			$this->db->where('username', $this->session->userdata('username'));
			$this->db->update('membership', array('scores' => serialize($score_array)));
		}
    }

	function pause($input){
    	//serialize arrays
		$sequence = serialize($this->session->userdata('sequence'));
		$answers = serialize($input);

		//store data in data[]
		$data = array(
			'username' => $this->session->userdata('username'),
			'sequence' => $sequence,
			'answers' => $answers,
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

	function get_scores(){
		$this->db->where('username', $this->session->userdata('username'));
		$query = $this->db->get('membership');
		$row = $query->num_rows;

		if($row > 0){
			$row = $query->row();
			if($row->scores != null)
				$score_array = unserialize($row->scores);
			else
				$score_array = null;

			return $score_array;
		}

	}

}