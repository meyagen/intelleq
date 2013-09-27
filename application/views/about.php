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
	hey
</div>	

<?php $this->load->view('includes/footer');?>
<?php $this->load->view('components/page_tail');?>