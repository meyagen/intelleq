<?php
class Review_M extends CI_Model
{

	function __construct () {
		parent::__construct();
	}

	function get_rev() {
    	$username = $this->session->userdata('username');

    	//check username in table
		$this->db->where('username', $username);
		$query = $this->db->get('review');
		$rowcount = $query->num_rows;

		if($rowcount > 0) { //if nasa database na
		    $row = $query->row();
		    $rev_vals = array(
		    	'seq_science' => unserialize($row->seq_science),
			    'seq_mathematics' => unserialize($row->seq_mathematics),
			    'seq_english' => unserialize($row->seq_english),
			    'seq_reading_comprehension' => unserialize($row->seq_reading_comprehension),
			    'ans_science' => unserialize($row->ans_science),
			    'ans_mathematics' => unserialize($row->ans_mathematics),
			    'ans_english' => unserialize($row->ans_english),
			    'ans_reading_comprehension' => unserialize($row->ans_reading_comprehension)
		    );
		    //$this->session->set_userdata('revs',$rev_vals);
		    // var_dump($this->session->userdata);
		    return $rev_vals;
		}
		else {
			$shet = 'shet';
			// var_dump($shet);
			return NULL;
		} // not gonna happen lololol
		
    }

	function check_availability(){
		$this->db->where('username', $this->session->userdata('username'));
		$query = $this->db->get('review');
		$count = $query->num_rows;
		if($count > 0){
			return true;
		}
		return false;
	}
	
    function get_omits() {
    	$username = $this->session->userdata('username');

    	//check username in table
		$this->db->where('username', $username);
		$query = $this->db->get('review');
		$rowcount = $query->num_rows;

		if($rowcount > 0) { //if nasa database na
		    $row = $query->row();
		    for ($i=0;$i<4;$i++) {
		    	if ($i==0) {
		    		$subj='science';
		    		$answers=unserialize($row->ans_science);
		    	}
		    	elseif ($i==1) {
		    		$subj='mathematics';
		    		$answers=unserialize($row->ans_mathematics);
		    	}
		    	elseif ($i==2) {
		    		$subj='english';
		    		$answers=unserialize($row->ans_english);
		    	}
		    	elseif ($i==3) {
		    		$subj='reading_comprehension';
		    		$answers=unserialize($row->ans_reading_comprehension);
		    	}
		    	$omit = 0;
		    	for ($j=1;$j<=count($answers);$j++) {
		    		if ($answers[$j]==FALSE)
		    			$omit++;
		    	}
		    	$omits[$i] = $omit;
		    }

		    return $omits;
		}
		else {
			$shet = 'shet';
			// var_dump($shet);
			return NULL;
		} // not gonna happen lololol
    }
}