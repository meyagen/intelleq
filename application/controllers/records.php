<?php
class Records extends User_Controller {
	public function __construct ()
	{
		parent::__construct();
		$this->load->model('score_m');
		$this->load->model('ask');
	}

	public function index ()
	{	
		// Load view
		$data['firstname'] = $this->session->userdata('fname');
		$data['lastname'] = $this->session->userdata('lname');

	    $data['scores'] = $this->score_m->get_scores("scores");
	    $data['science'] = $this->score_m->get_scores("science");
	    $data['mathematics'] = $this->score_m->get_scores("mathematics");
	    $data['english'] = $this->score_m->get_scores("english");
	    $data['reading_comprehension'] = $this->score_m->get_scores("reading_comprehension");
		
		//performance
	    $scores = $this->score_m->get_scores("scores");
		$science = $this->score_m->get_scores("science");
		$mathematics = $this->score_m->get_scores("mathematics");
		$english = $this->score_m->get_scores("english");
		$reading_comprehension = $this->score_m->get_scores("reading_comprehension");

		$science = $this->score_m->update_array($scores, $science);
		$mathematics = $this->score_m->update_array($scores, $mathematics);
		$english = $this->score_m->update_array($scores, $english);
		$reading_comprehension = $this->score_m->update_array($scores, $reading_comprehension);

		$total = $this->score_m->sum($scores);
		$data['total'] = $this->score_m->sum($scores);
		$data['sci'] = $this->score_m->percentage($science, $total);
		$data['math'] = $this->score_m->percentage($mathematics, $total);
		$data['eng'] = $this->score_m->percentage($english, $total);
		$data['compre'] = $this->score_m->percentage($reading_comprehension, $total);

		$s_math = 'false';
		$s_eng = 'false';
		$s_sci = 'false';
		$s_compre = 'false';

		$max = max($data['sci'], $data['math'], $data['eng'], $data['compre']);
	
		if($max == $data['sci']){
			$s_sci = true;
		}if($max == $data['math']){
			$s_math = true;
		}if($max == $data['eng']){
			$s_eng = true;
		}if($max == $data['compre']){
			$s_compre = true;
		}

		$data['sci_select'] = $s_sci;
		$data['math_select'] = $s_math;
		$data['eng_select'] = $s_eng;
		$data['compre_select'] = $s_compre;


		//percentile
		$data['percentile_overall'] = $this->score_m->get_totalscore();
		$data['percentile_sci'] = $this->score_m->get_sciscore();
		$data['percentile_math'] = $this->score_m->get_mathscore();
		$data['percentile_eng'] = $this->score_m->get_engscore();
		$data['percentile_compre'] = $this->score_m->get_comprescore();

		$data['main_content'] = 'records_area';
		$this->load->view('members_area', $data);
	}
}