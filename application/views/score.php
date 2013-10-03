<?php $this->load->view('includes/header'); ?>
<body class="off-canvas hide-extras">
<div class="container">
<?php
  $this->load->view('navigation');
	echo "Score: ";
	echo $score;
	echo "/".$total;
?>
</div>
<?php $this->load->view('includes/footer');?>