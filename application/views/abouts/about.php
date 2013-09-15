<<<<<<< HEAD
<?php $this->load->view('components/page_head'); ?>
<body class="off-canvas hide-extras">
<?php
	if($loggedin>0){
		$this->load->view('includes/header');
	}
	else {
		$this->load->view('includes/header2');
	}
?>
<div class="container">
	insert who we are info here
</div>	

<?php $this->load->view('includes/footer');?>
<?php $this->load->view('components/page_tail');?>
=======
Who we are? We're the awesome people!
>>>>>>> 4d05d7186a060abd499382ac4f2feb7f8322a764
