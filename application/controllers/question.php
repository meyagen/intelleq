<?php
class Question extends User_Controller
{

        public function __construct () {
                parent::__construct();
                $this->load->model('ask');
                $this->load->model('score_m');

                header('Last-Modified:'.gmdate('D, d M Y H:i:s').'GMT');
                header('Cache-Control: no-store, no-cache, must-revalidate');
                header('Cache-Control: post-check=0, pre-check=0',false);
                header('Pragma: no-cache');
        }

        public function index(){
                $this->ask->set_current_subject();
                $subject = $this->session->userdata('subject');
                $data['questions'] = $this->ask->set_questions();
                $data['crand'] = $this->ask->random_choice();

                if($this->ask->is_paused()){ //  resume the exam
                        $data['qrand'] = $this->session->userdata('sequence');
                        $data['answers'] = $this->session->userdata('answers');
                        $data['tempTime'] = $this->ask->get_timeLimit(); // in seconds
                }

                else { // begin new exam
                        $data['qrand'] = $this->ask->random_question();
                        $data['answers'] = null;
                        $data['tempTime'] = $this->ask->get_timeLimit(); // in seconds
                }

                // Load view
                $data['firstname'] = $this->session->userdata('fname');
                $data['lastname'] = $this->session->userdata('lname');
                $data['total'] = $this->ask->count_questions();
                $data['main_content'] = 'questions';
               
                $this->load->view('members_area', $data);
        }
}