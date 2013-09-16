<?php 
	class Feed extends User_Controller {
		public function __construct ()
		{
			parent::__construct();
		}

		public function index () {
			redirect('site');	
		}
	}




?>