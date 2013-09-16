<?php $this->load->view('components/page_head'); ?>
<body class="off-canvas hide-extras">

<?php $this->load->view('includes/header');?>
<?php $this->load->view('navigation');?>
<div class="container">
<h2>Track Record</h2>
<fieldset>
  <legend>Your Past Scores</legend>
  <div class="large-12 columns">  
  <?php

  	if($scores != null){
	    foreach($scores as $score){
		  echo "<div class=".'row'.">";
	      echo "<label>" .$score ."/4</label>";
	      echo "</div>";
	  	}
  	}

  ?>
  </div></div>
</fieldset>
</div>	

<?php $this->load->view('includes/footer');?>
<?php $this->load->view('components/page_tail');?>