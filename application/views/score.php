<?php $this->load->view('components/page_head'); ?>
<body class="off-canvas hide-extras">

<?php $this->load->view('includes/header');?>
<?php $this->load->view('navigation');?>
<div class="container">
<h2>Track Record</h2>
<fieldset>
  <legend>Your Score</legend>
  <div class="large-12 columns">  


<?php
	echo "Score: ";
	echo $score;
	echo "/".$total;
?>
  </div></div>
</fieldset>
</div>  

<?php $this->load->view('includes/footer');?>
<?php $this->load->view('components/page_tail1');?>