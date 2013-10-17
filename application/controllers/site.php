<?php
class Site extends User_Controller {

	public function __construct () {
		parent::__construct();
		$this->load->model('ask');
		$this->load->model('review_m');
		$this->load->model('score_m');
	}

	public function index() {
		$date = $this->score_m->get_date();
		$scores = $this->score_m->get_scores("scores");
		
		$science = $this->score_m->get_scores("science");
		$mathematics = $this->score_m->get_scores("mathematics");
		$english = $this->score_m->get_scores("english");
		$reading_comprehension = $this->score_m->get_scores("reading_comprehension");

		$science = $this->score_m->update_array($scores, $science);
		$mathematics = $this->score_m->update_array($scores, $mathematics);
		$english = $this->score_m->update_array($scores, $english);
		$reading_comprehension = $this->score_m->update_array($scores, $reading_comprehension);

		$max = 0;
		if(count($scores) > count($date)){
			$max = count($date);
		}
		else{
			$max = count($scores);
		}
		$combined_hist = array();
		for($i = 0; $i<$max; $i++){
			array_push($combined_hist, [$date[$i], $scores[$i]] );
		}
		



		if(count($science) > count($date)){
			$max = count($date);
		}
		else{
			$max = count($science);
		}
		$combined_sci = array();
		for($i = 0; $i<$max; $i++){
			array_push($combined_sci, [$date[$i], $science[$i]] );
		}




		if(count($mathematics) > count($date)){
			$max = count($date);
		}
		else{
			$max = count($mathematics);
		}
		$combined_mat = array();
		for($i = 0; $i<$max; $i++){
			array_push($combined_mat, [$date[$i], $mathematics[$i]] );
		}




		if(count($english) > count($date)){
			$max = count($date);
		}
		else{
			$max = count($english);
		}
		$combined_eng = array();
		for($i = 0; $i<$max; $i++){
			array_push($combined_eng, [$date[$i], $english[$i]] );
		}




		if(count($reading_comprehension) > count($date)){
			$max = count($date);
		}
		else{
			$max = count($reading_comprehension);
		}
		$combined_com = array();
		for($i = 0; $i<$max; $i++){
			array_push($combined_com, [$date[$i], $reading_comprehension[$i]] );
		}

		$data['firstname'] = $this->session->userdata('fname');
		$data['lastname'] = $this->session->userdata('lname');

		$data['hist'] = json_encode($combined_hist);

		$data['hist_science'] = json_encode($combined_sci);
		$data['hist_mathematics'] = json_encode($combined_mat);
		$data['hist_english'] = json_encode($combined_eng);
		$data['hist_reading_comprehension'] = json_encode($combined_com);

		$data['is_paused'] = $this->ask->is_paused();
		$data['last_fin'] = $this->ask->get_last_fin();
		
		if($this->ask->is_paused() || $this->session->userdata['startExam'] || (($this->ask->get_last_fin()!='reading_comprehension')&&($this->ask->get_last_fin()!=NULL))){
			$data['state'] = "Resume Exam";
		} 
		else{
			$data['state'] = "Take the Exam!";
		}
	 	
		$data['main_content'] = 'profile';
		$this->load->view('members_area', $data);
	}
}
?>