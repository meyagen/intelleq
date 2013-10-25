<?php 
	class Report extends CI_Controller {
		function __construct ()
		{
			parent::__construct();
		}
		function index() {
			$this->load->library('../controllers/login');
			$isLoggedIn = $this->login->loggedin();	
			$data['loggedin'] = $isLoggedIn;
			
			if($isLoggedIn > 0) {
				$data['firstname'] = $this->session->userdata('fname');
				$data['lastname'] = $this->session->userdata('lname');
				$data['main_content'] = 'report';
				$this->load->view('members_area', $data);
			}
			else{
				$data['main_content'] = 'report';
				$this->load->view('_main_layout', $data);
			}
		}	
		function sent(){
			$config = Array(
			    'protocol' => 'smtp',
			    'smtp_host' => 'ssl://smtp.googlemail.com',
			    'smtp_port' => 465,
			    'smtp_user' => 'user',
			    'smtp_pass' => 'pass',
			    'mailtype'  => 'html', 
			    'charset'   => 'iso-8859-1'
			);
			$this->load->library('email', $config);
			$this->email->set_newline("\r\n");
			$this->email->clear();

			$this->email->from('intelleq@gmail.com'); 
			$this->email->to('venturaaard@gmail.com'); 
			$this->email->subject($this->input->post('subject'));

			$name = $this->input->post('user');
			$email = $this->input->post('email');
			$message = $this->input->post('message');
			
			$message = 'From: '.$name.' <'.$email.'> '."\r\n\r\n".'Message: '."\r\n".$message;
			$this->email->message($message);
			if(!$this->email->send()) {
				echo "unsuccessful";
			}
			else {
				echo "successful";
			}

		}
		function valid_mail() {
			$this->load->library('form_validation');
			$this->form_validation->set_rules(
								'email_address', 
								'Email Address', 
								'trim|required|valid_email');
			if($this->form_validation->run() == FALSE) {
				echo "invalid";
			}
			else {
				echo "valid";
			}
		}
	}
?>