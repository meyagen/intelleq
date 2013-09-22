<?php
class Track_Record extends User_Controller {
	public function __construct ()
	{
		parent::__construct();
	}

	public function index (){
		redirect('records');
	}

}