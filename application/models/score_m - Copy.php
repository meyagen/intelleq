<?php
class Score_M extends CI_Model
{

	protected $_table_name = 'ask';

	function __construct () {
		parent::__construct();
		$this->load->model('ask');
	}

    function compute($input) {
    	$score = 0;
    	$i = 0;

    	$to_review['username'] = $this->session->userdata('username');

    	$subject = $this->session->userdata('subject');
    	$to_review['last_fin'] = $subject;

    	$questions = unserialize($this->session->userdata('questions'));

    	$sequence = $this->session->userdata('sequence');
    	$to_review['seq_'.$subject] = serialize($this->session->userdata('saveSequence'));

    	$to_review['ans_'.$subject] = serialize($input);

    	//check username in table
		$this->db->where('username', $to_review['username']);
		$query = $this->db->get('review');
		$row = $query->num_rows;

		if($row > 0) { //if nasa database na
		    $this->db->where('username', $to_review['username']);
		    $this->db->update('review', $to_review);
		}

		else //wala pa sa database
		    $this->db->insert('review', $to_review);

    	$this->session->set_userdata($this->session->userdata['subject'], $input);

		for($counter = 0; $counter < $this->ask->count_questions(); $counter++){
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
			$this->save_date();
		}
    	
    	$this->set_new_subject();
    }

    function store_totalscore(){
    	$this->db->where('username', $this->session->userdata('username'));
    	$query = $this->db->get('membership');
    	$myscore = 1;
    	if($query->num_rows){
    		$row = $query->row();	
    		$overall = unserialize($row->scores);
    		$myscore = round(array_sum($overall)/count($overall));
		}
		if($myscore <= 0){ $myscore = 1; }
		$data = array('overall_score' => $myscore);
		$this->db->where('username', $this->session->userdata['username']);
		$this->db->update('membership', $data);
    }

    function store_sciscore(){
    	$this->db->where('username', $this->session->userdata('username'));
    	$query = $this->db->get('membership');
    	$myscore = 1;
    	if($query->num_rows){
    		$row = $query->row();	
    		$overall = unserialize($row->science);
    		$myscore = round(array_sum($overall)/count($overall));
		}
		if($myscore <= 0){ $myscore = 1; }
		
		$data = array('overall_sci' => $myscore);
		$this->db->where('username', $this->session->userdata['username']);
		$this->db->update('membership', $data);
    }

    function store_mathscore(){
    	$this->db->where('username', $this->session->userdata('username'));
    	$query = $this->db->get('membership');
    	$myscore = 1;
    	if($query->num_rows){
    		$row = $query->row();	
    		$overall = unserialize($row->mathematics);
    		$myscore = round(array_sum($overall)/count($overall));
		}
		if($myscore <= 0){ $myscore = 1; }
		
		$data = array('overall_math' => $myscore);
		$this->db->where('username', $this->session->userdata['username']);
		$this->db->update('membership', $data);
    }

    function store_engscore(){
    	$this->db->where('username', $this->session->userdata('username'));
    	$query = $this->db->get('membership');
    	$myscore = 1;
    	if($query->num_rows){
    		$row = $query->row();	
    		$overall = unserialize($row->english);
    		$myscore = round(array_sum($overall)/count($overall));
		}
		if($myscore <= 0){ $myscore = 1; }
		
		$data = array('overall_eng' => $myscore);
		$this->db->where('username', $this->session->userdata['username']);
		$this->db->update('membership', $data);
    }

    function store_comprescore(){
    	$this->db->where('username', $this->session->userdata('username'));
    	$query = $this->db->get('membership');
    	$myscore = 1;
    	if($query->num_rows){
    		$row = $query->row();	
    		$overall = unserialize($row->reading_comprehension);
    		$myscore = round(array_sum($overall)/count($overall));
		}
		if($myscore <= 0){ $myscore = 1; }
		
		$data = array('overall_compre' => $myscore);
		$this->db->where('username', $this->session->userdata['username']);
		$this->db->update('membership', $data);
    }

    function get_totalscore(){
    	//get average total score of each user
    	$total_array = array();
    	$this->db->select('overall_score');
    	$this->db->where('overall_score !=', 'NULL');
    	$this->db->where('username !=', $this->session->userdata('username'));
    	$query = $this->db->get('membership');
    	if($query->num_rows > 0){
    		foreach($query->result_array() as $result){
    			if($result != null){
    				array_push($total_array, $result['overall_score']);
    			}
    		}
    	}
		sort($total_array);
    	
    	//take user's average total score
    	$this->db->where('username', $this->session->userdata('username'));
    	$query = $this->db->get('membership');
    	$myscore = 0;
    	if($query->num_rows){
    		$row = $query->row();	
    		$myscore = $row->overall_score;
		}

		//no. of scores below user's score
		$below = 0;
		for($i = 0; $i < count($total_array); $i++){
			if(intval($total_array[$i]) < intval($myscore)){
				$below++;
			}elseif(intval($total_array[$i]) >= intval($myscore)){ break;}
		}
		
		//no. of scores like user's score
		$same=0;
		for($i = 0; $i < count($total_array); $i++){
			if(intval($total_array[$i]) == intval($myscore)){
				$same++;
			} 
		}

		$numerator = $below + (0.5*$same);
		$denomenator = (count($total_array) + 1);

		//compute percentile
		$percentile = round(($numerator/$denomenator)*100);
		if($percentile <= 0){ $percentile = 1; }
		elseif($percentile >= 100){ $percentile = 99;}

		$this->session->set_userdata('perc', $percentile);
		return $percentile;
    }

    function get_sciscore(){
    	//get average total score of each user
    	$total_array = array();
    	$this->db->select('overall_sci');
    	$this->db->where('overall_sci !=', 'NULL');
    	$this->db->where('username !=', $this->session->userdata('username'));
    	$query = $this->db->get('membership');
    	if($query->num_rows > 0){
    		foreach($query->result_array() as $result){
    			if($result != null){
    				array_push($total_array, $result['overall_sci']);
    			}
    		}
    	}

    	sort($total_array);

    	//take user's average total score
    	$this->db->where('username', $this->session->userdata('username'));
    	$query = $this->db->get('membership');
    	$myscore = 0;
    	if($query->num_rows){
    		$row = $query->row();	
    		$myscore = $row->overall_sci;
		}

		//no. of scores below user's score
		$below = 0;
		for($i = 0; $i < count($total_array); $i++){
			if(intval($total_array[$i]) < intval($myscore)){
				$below++;
			}elseif(intval($total_array[$i]) >= intval($myscore)){ break;}
		}
		
		//no. of scores like user's score
		$same=0;
		for($i = 0; $i < count($total_array); $i++){
			if(intval($total_array[$i]) == intval($myscore)){
				$same++;
			} 
		}
		
		//compute percentile
		$numerator = $below + (0.5*$same);
		$denomenator = (count($total_array) + 1);
		$percentile = round(($numerator/$denomenator)*100);
		if($percentile <= 0){ $percentile = 1; }
		elseif($percentile >= 100){ $percentile = 99;}

		
		return $percentile;
    }

    function get_mathscore(){
    	//get average total score of each user
    	$total_array = array();
    	$this->db->select('overall_math');
    	$this->db->where('overall_math !=', 'NULL');
    	$this->db->where('username !=', $this->session->userdata('username'));
    	$query = $this->db->get('membership');
    	if($query->num_rows > 0){
    		foreach($query->result_array() as $result){
    			if($result != null){
    				array_push($total_array, $result['overall_math']);
    			}
    		}
    	}
    	sort($total_array);
    	
    	//take user's average total score
    	$this->db->where('username', $this->session->userdata('username'));
    	$query = $this->db->get('membership');
    	$myscore = 0;
    	if($query->num_rows){
    		$row = $query->row();	
    		$myscore = $row->overall_math;
		}

		//no. of scores below user's score
		$below = 0;
		for($i = 0; $i < count($total_array); $i++){
			if(intval($total_array[$i]) < intval($myscore)){
				$below++;
			}elseif(intval($total_array[$i]) >= intval($myscore)){ break;}
		}
		
		//no. of scores like user's score
		$same=0;
		for($i = 0; $i < count($total_array); $i++){
			if(intval($total_array[$i]) == intval($myscore)){
				$same++;
			} 
		}

		//compute percentile
		$numerator = $below + (0.5*$same);
		$denomenator = (count($total_array) + 1);
		$percentile = round(($numerator/$denomenator)*100);
		if($percentile <= 0){ $percentile = 1; }
		elseif($percentile >= 100){ $percentile = 99;}

		return $percentile;
    }

    function get_engscore(){
    	//get average total score of each user
    	$total_array = array();
    	$this->db->select('overall_eng');
    	$this->db->where('overall_eng !=', 'NULL');
    	$this->db->where('username !=', $this->session->userdata('username'));
    	$query = $this->db->get('membership');
    	if($query->num_rows > 0){
    		foreach($query->result_array() as $result){
    			if($result != null){
    				array_push($total_array, $result['overall_eng']);
    			}
    		}
    	}
    	sort($total_array);
    	
    	//take user's average total score
    	$this->db->where('username', $this->session->userdata('username'));
    	$query = $this->db->get('membership');
    	$myscore = 0;
    	if($query->num_rows){
    		$row = $query->row();	
    		$myscore = $row->overall_eng;
		}

		//no. of scores below user's score
		$below = 0;
		for($i = 0; $i < count($total_array); $i++){
			if(intval($total_array[$i]) < intval($myscore)){
				$below++;
			}elseif(intval($total_array[$i]) >= intval($myscore)){ break;}
		}
		
		//no. of scores like user's score
		$same=0;
		for($i = 0; $i < count($total_array); $i++){
			if(intval($total_array[$i]) == intval($myscore)){
				$same++;
			} 
		}

		//compute percentile
		$numerator = $below + (0.5*$same);
		$denomenator = (count($total_array) + 1);
		$percentile = round(($numerator/$denomenator)*100);
		if($percentile <= 0){ $percentile = 1; }
		elseif($percentile >= 100){ $percentile = 99;}

		return $percentile;
    }

    function get_comprescore(){
    	//get average total score of each user
    	$total_array = array();
    	$this->db->select('overall_compre');
    	$this->db->where('overall_compre !=', 'NULL');
    	$this->db->where('username !=', $this->session->userdata('username'));
    	$query = $this->db->get('membership');
    	if($query->num_rows > 0){
    		foreach($query->result_array() as $result){
    			if($result != null){
    				array_push($total_array, $result['overall_compre']);
    			}
    		}
    	}

    	$this->session->set_userdata('compre', $total_array);
    	sort($total_array);
    	
    	//take user's average total score
    	$this->db->where('username', $this->session->userdata('username'));
    	$query = $this->db->get('membership');
    	$myscore = 0;
    	if($query->num_rows){
    		$row = $query->row();	
    		$myscore = $row->overall_compre;
		}

		//no. of scores below user's score
		$below = 0;
		for($i = 0; $i < count($total_array); $i++){
			if(intval($total_array[$i]) < intval($myscore)){
				$below++;
			}elseif(intval($total_array[$i]) >= intval($myscore)){ break;}
		}
		
		//no. of scores like user's score
		$same=0;
		for($i = 0; $i < count($total_array); $i++){
			if(intval($total_array[$i]) == intval($myscore)){
				$same++;
			} 
		}

		//compute percentile
		$numerator = $below + (0.5*$same);
		$denomenator = (count($total_array) + 1);
		$percentile = round(($numerator/$denomenator)*100);
		if($percentile <= 0){ $percentile = 1; }
		elseif($percentile >= 100){ $percentile = 99;}
		
		return $percentile;
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

    function save_date(){
    	$today = getdate();
    	$month = $this->month_shortcut($today['month']);
    	$date = "" .$today['mday'] ." " .$month ." " .$today['year'];
		$date_array = array();

		$this->db->where('username', $this->session->userdata('username'));
		$query = $this->db->get('membership');
		$row = $query->row();

		if($row->date != null)
			$date_array = unserialize($row->date);

		$date_array[] = $date;
		$this->db->where('username', $this->session->userdata('username'));
		$this->db->update('membership', array('date' => serialize($date_array)));
    }

    function month_shortcut($month){
    	if(strcmp($month, "January") == 0)
    		$month = "Jan";
    	else if(strcmp($month, "February") == 0)
    		$month = "Feb";
    	else if(strcmp($month, "March") == 0)
    		$month = "Mar";
    	else if(strcmp($month, "April") == 0)
    		$month = "Apr";
    	else if(strcmp($month, "June") == 0)
    		$month = "Jun";
    	else if(strcmp($month, "July") == 0)
    		$month = "Jul";
    	else if(strcmp($month, "August") == 0)
    		$month = "Aug";
    	else if(strcmp($month, "September") == 0)
    		$month = "Sept";
    	else if(strcmp($month, "October") == 0)
    		$month = "Oct";
    	else if(strcmp($month, "November") == 0)
    		$month = "Nov";
    	else if(strcmp($month, "December") == 0)
    		$month = "Dec";

    	return $month;
    }

	function get_date(){
		$this->db->where('username', $this->session->userdata('username'));
		$query = $this->db->get('membership');
		$row = $query->row();

		return unserialize($row->date);
	}

	function get_scores($subject){
		$this->db->where('username', $this->session->userdata('username'));
		$query = $this->db->get('membership');
		$row = $query->num_rows;

		if($row > 0){
			$row = $query->row();
			if(strcmp($subject, "scores") == 0 && $row->scores != null)
				$score_array = unserialize($row->scores);
			else if(strcmp($subject, "science") == 0 && $row->science != null)
				$score_array = unserialize($row->science);
			else if(strcmp($subject, "mathematics") == 0 && $row->mathematics != null)
				$score_array = unserialize($row->mathematics);
			else if(strcmp($subject, "english") == 0 && $row->english != null)
				$score_array = unserialize($row->english);
			else if(strcmp($subject, "reading_comprehension") == 0 && $row->reading_comprehension != null)
				$score_array = unserialize($row->reading_comprehension);
			else
				$score_array = null;

			return $score_array;
		}
	}

	function update_array($scores, $subject){
		if(count($scores) < count($subject)){
       		while(count($scores) < count($subject))
          		unset($subject[count($subject)-1]);
      	}

      	return $subject;
	}

	function percentage($subject, $total){
		if($total != 0){
			$subject_sum = $this->sum($subject);
			$percent = ($subject_sum/$total)*100;
			return round($percent, 0, PHP_ROUND_HALF_UP);
		}
		return 0;
	}

	function sum($array){
		$total = 0;
		if(isset($array)){
			foreach($array as $score)
				$total += $score;
		}
		return $total;
	}

}