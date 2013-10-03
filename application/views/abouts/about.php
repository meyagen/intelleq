<body class="off-canvas hide-extras">
<?php
	if($loggedin>0){
		$this->load->view('includes/header2');
	}
	else {
		$this->load->view('includes/header2');
	}
?>
<div class="container">
	<?php
		if($loggedin>0){
			$this->load->view('navigation'); 
		}
	?>
	insert who we are info here
</div>	

<?php $this->load->view('includes/footer');?>