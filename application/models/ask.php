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
				'subject' => $row->current_subject
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

    function compute($input) {
    	$score = 0;
    	$i = 0;

    	$questions = unserialize($this->session->userdata('questions'));
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
		$subject = $this->session->userdata('subject');		
		$this->db->where('username', $this->session->userdata('username'));
		$query = $this->db->get('membership');
		$row = $query->row();
		$score_array = array();
		if(strcmp($subject, "science") == 0){
			if($row->science != null)
				$score_array = unserialize($row->science);
	
			$score_array[] = $score;
			$this->db->where('username', $this->session->userdata('username'));
			$this->db->update('membership', array('science' => serialize($score_array)));
		}

		else if(strcmp($subject, "mathematics") == 0){
			if($row->mathematics != null)
				$score_array = unserialize($row->mathematics);
	
			$score_array[] = $score;
			$this->db->where('username', $this->session->userdata('username'));
			$this->db->update('membership', array('mathematics' => serialize($score_array)));
		}

		else if(strcmp($subject, "english") == 0){
			if($row->english != null)
				$score_array = unserialize($row->english);
	
			$score_array[] = $score;
			$this->db->where('username', $this->session->userdata('username'));
			$this->db->update('membership', array('english' => serialize($score_array)));
		}

		else if(strcmp($subject, "reading_comprehension") == 0){
			if($row->reading_comprehension != null)
				$score_array = unserialize($row->reading_comprehension);
	
			$score_array[] = $score;
			$this->db->where('username', $this->session->userdata('username'));
			$this->db->update('membership', array('reading_comprehension' => serialize($score_array)));
			$this->get_total();
		}
    	
    	$this->set_new_subject();
    }

    function set_new_subject(){
		$subject = $this->session->userdata('subject');

		if(strcmp($subject, "science") == 0)
			$subject = 'mathematics';
		else if(strcmp($subject, "mathematics") == 0)
			$subject = 'english';
		else if(strcmp($subject, "english") == 0)
			$subject = 'reading_comprehension';
		else if(strcmp($subject, "reading_comprehension") == 0)
			$subject = 'science';

		$this->db->where('username', $this->session->userdata('username'));
		$this->db->update('membership', array('current_subject' => $subject));
    }

    function get_total(){
		$total = 0;
		$score_array = array();
		$this->db->where('username', $this->session->userdata('username'));
		$query = $this->db->get('membership');
		$row = $query->row();

		$science = unserialize($row->science);    	
		$mathematics = unserialize($row->mathematics);
		$english = unserialize($row->english);
		$reading_comprehension = unserialize($row->reading_comprehension);

		$total += $science[count($science)-1];
		$total += $mathematics[count($mathematics)-1];
		$total += $english[count($english)-1];
		$total += $reading_comprehension[count($reading_comprehension)-1];

		if($row->scores != null)
			$score_array = unserialize($row->scores);

		$score_array[] = $total;
		$this->db->where('username', $this->session->userdata('username'));
		$this->db->update('membership', array('scores' => serialize($score_array)));
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