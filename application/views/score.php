<body class="off-canvas hide-extras">

<?php $this->load->view('includes/header');?>
<?php $this->load->view('navigation');?>
<div class="large-6 pull-3 columns">
	<div class="row">
<h2>Track Record</h2>
<fieldset>
  <legend>Your Score</legend>
  <div class="large-12 columns">  
	<?php
		echo "Score: ";
		echo $score;
		echo "/16";
	?>
</div></div>
</fieldset>
<a class="button radius alert" href="review">Review Answers</a></li>
<a class="button radius success" href="site">Back to Home</a></li>
</div></div></div>



<?php $this->load->view('includes/footer');?>