<?php
	if($loggedin>0){
		$this->load->view('includes/header');
	}
	else {
		$this->load->view('includes/header2');
	}
?>
<body class="off-canvas hide-extras">
<div class="container">
	<?php $this->load->view('navigation'); ?>
	hey
</div>	

<?php $this->load->view('includes/footer');?>