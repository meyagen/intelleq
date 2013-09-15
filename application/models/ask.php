<?php
class Ask extends CI_Model
{
	
	protected $_table_name = 'ask';
	
	function __construct () {
		parent::__construct();
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
    	/*echo "<pre>";
		print_r($this->session->userdata);
		echo "</pre>";*/
    	//foreach($questions as $row){
		for($counter = 0; $counter < $this->count_questions(); $counter++){
			$row = $questions[$sequence[$counter]];
    		$i++;
    		$id = $row['id'];
			$ans = "answer".$i;
			$answer = $input[$ans]."";
			
			/*echo "<pre>";
			print_r($answer);
			echo "</pre>";*/

			$this->db->where('correct_answer', $answer);
			$this->db->where('id', $id);
			$query = $this->db->get('ask');
			$correct = $query->row();
			if(count($correct))
				$score++;
    	}

		return $score;
    }
	
	
}