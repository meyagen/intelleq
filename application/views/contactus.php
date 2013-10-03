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
	<?php 
		if($loggedin>0){
			$this->load->view('navigation'); 
		}
	?>
	Call me maybe. 
</div>	

<?php $this->load->view('includes/footer');?>