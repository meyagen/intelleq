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

      echo "<h5>Overall Scores</h5><br />";

      foreach($scores as $score){
        echo "<div class=".'row'.">";
        echo "<label>" .$score ."/16</label>";
        echo "</div>";
      }

      echo "<br /><h5>Science</h5><br />";

      foreach($science as $score){
        echo "<div class=".'row'.">";
        echo "<label>" .$score ."/4</label>";
        echo "</div>";
      }

      echo "<br /><h5>Math</h5><br />";

      foreach($mathematics as $score){
        echo "<div class=".'row'.">";
        echo "<label>" .$score ."/4</label>";
        echo "</div>";
      }

      echo "<br /><h5>English</h5><br />";

      foreach($english as $score){
        echo "<div class=".'row'.">";
        echo "<label>" .$score ."/4</label>";
        echo "</div>";
      }

      echo "<br /><h5>Reading Comprehension</h5><br />";

      foreach($reading_comprehension as $score){
        echo "<div class=".'row'.">";
        echo "<label>" .$score ."/4</label>";
        echo "</div>";
      }
  	}

    else{
      echo "<div class=".'row'.">";
      echo "<label>You have no exam results to display.</label>";
      echo "</div>";      
    }

  ?>
  </div></div>
</fieldset>
</div>	

<?php $this->load->view('includes/footer');?>