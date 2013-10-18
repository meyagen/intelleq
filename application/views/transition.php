<body class="off-canvas hide-extras">
<?php $this->load->view('includes/header');?>
<?php $this->load->view('navigation');?>
<script>
    $('#nav_modules').addClass('active');
</script>
  <div class="large-6 columns">
    <?php if ($error_exist) {
      echo '<div class="row">';
        echo '<div class="large-12 columns">';
          echo '<div class="panel radius">';
            echo '<h2>ERROR</h2>';
            echo '<h4>You have already submitted your answers for that subject!</h4>';
          echo '</div>';
        echo '</div>';
      echo '</div>';
    }
    ?>
  	<div class="row">
  		<div class="large-12 columns">
    		<div class="panel">
        <h2>Subject</h2>
          <div class="row">
            <div class="large-10 push-1 columns">
              <div class="panel radius" style="background-color:#34495e">
                <h2 class="white"><?php 
                 	if($start){
                		echo 'Science'; 
                	}
                	elseif(strtolower($last_fin) == 'science'){
                		echo 'Mathematics'; 
                	}
                	elseif(strtolower($last_fin) == 'mathematics'){
                		echo 'English'; 
                	}
                	else{
                		echo 'Reading Comprehension'; 
                	}
                ?></h2>
                <h4><a class="button radius success expand large" href="question" style="margin-bottom:0px">Start!</a></h4></li>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
</div>


<?php $this->load->view('includes/footer');?>
<?php 
	//if($this->session->userdata['timeCheck']){
		echo "<script>";
		echo "for(var i = 1; i < 30; i++){";
		echo "localStorage.removeItem('someTime');";
		echo "localStorage.removeItem('answer'+i);}";
		echo "</script>";
	//}
?>
