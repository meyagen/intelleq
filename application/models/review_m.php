<?php
class Review_M extends CI_Model
{

	function __construct () {
		parent::__construct();
		$this->load->model('ask');
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
		    var_dump($this->session->userdata);
		    return $rev_vals;
		}
		else {
			$shet = 'shet';
			var_dump($shet);
			return NULL;
		} // not gonna happen lololol
		
    }

    function get_last_subj() {
    	
    }
}