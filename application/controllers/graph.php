<?php
class Graph extends User_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('score_m');
		$this->load->model('ask');
	}

	public function index(){	
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
		$data['science'] = $this->score_m->percentage($science, $total);
		$data['mathematics'] = $this->score_m->percentage($mathematics, $total);
		$data['english'] = $this->score_m->percentage($english, $total);
		$data['reading_comprehension'] = $this->score_m->percentage($reading_comprehension, $total);

		$data['firstname'] = $this->session->userdata('fname');
		$data['lastname'] = $this->session->userdata('lname');

		echo "total";
		echo $total;
		echo " ";

		echo "science";
		echo $data['science'];
		echo " ";

		echo "mathematics";
		echo $data['mathematics'];
		echo " ";

		echo "english";
		echo $data['english'];
		echo " ";

		echo "reading_comprehension";
		echo $data['reading_comprehension'];
		echo " ";

/*		$data['main_content'] = 'some_new_page';
		$this->load->view('members_area', $data);*/

	}
}

?>