<body class="off-canvas hide-extras">

<?php $this->load->view('includes/header'); ?>
<?php $this->load->view('navigation'); ?>
	<div class="large-3 columns push-6">
	  <div class="row">
	    <div class="large-12 columns">
	      <div class="row fullrow">
		    <div class="large-10 push-1 columns">
		        <div class="panel radius" style="background-color:rgba(244,166,16,0.6);padding:15px 0px 15 0px">
			      <h4 style="padding-left:15px">Questions</h4>
			      <!-- <ul class="pagination" id="pagination" style="margin-top: 10px"> -->
			        <?php
			        for ($j=0;$j<4;$j++) {
                echo '<div class="panel';
                if ($j>0) echo ' hidden';
                echo '" style="background-color:#fff';
                echo ';margin-top:10px;margin-bottom:0px';
                echo '" id="panelpagination_';
                if ($j==0) {
                  $subj='science';
                  $curr_subj = $q_science;
                }
                else if ($j==1) {
                  $subj='mathematics';
                  $curr_subj = $q_mathematics;
                }
                else if ($j==2) {
                  $subj='english';
                  $curr_subj = $q_english;
                }
                else if ($j==3) {
                  $subj='reading_comprehension';
                  $curr_subj = $q_reading_comprehension;
                }
                else $subj='';
                echo $subj;
                echo '">';
			        	echo '<ul class="pagination';
                
                echo '" id="pagination_';
			        	
			        	echo $subj;
			        	echo '" style="margin-top:10px';
                $choice = array('choice1', 'choice2', 'choice3', 'correct_answer');
                // if ($j==3) 
                echo ';margin-bottom:0px';
                echo '">';
                echo '<strong>';

                $item=0;
                for ($i = 0,$item=1; $i < count($curr_subj); $i++, $item++) {
				        //for ($i = 0; $i < 4; $i++) {

                  $row = $curr_subj[$rev_vals['seq_'.$subj][$i]];
				          echo '<li';
				          if ($i==0) echo ' class="current"';
				          echo '><span data-tooltip class="has-tip" title="';
                  echo $row['title'];
				          echo '"><a href="#" onclick="jumpto(\'';
				          echo $subj;
				          echo '\',';
				          echo $i+1;
				          echo ')"';
                  
                  if ($rev_vals['ans_'.$subj][$item] == $row['correct_answer'])
                    echo ' class="correct"';
                  else
                    echo ' class="wrong"';
                  echo '>';
				          echo $i+1;
				          echo '</a></span></li>';
				        }
				        echo '</strong>';
                // echo '<br/>Subject:';
                echo '</ul>';
                echo '</div>';
			        }
			        
			        ?>
		      	</div>
		    </div>
		  </div>
	    </div>
	  </div>
	</div>

	<div class="large-6 pull-3 columns">
		<div class="section-container auto" data-section="" data-options="deep_linking: true;" data-section-resized="true" style="min-height: 50px;">
  		  <?php 
  		  	for ($i=0;$i<4;$i++) {
  		  		if ($i==0) {
              $subj='science';
              $curr_subj = $q_science;
            }
	        	else if ($i==1) {
              $subj='mathematics';
              $curr_subj = $q_mathematics;
            }
	        	else if ($i==2) {
              $subj='english';
              $curr_subj = $q_english;
            }
	        	else if ($i==3) {
              $subj='reading_comprehension';
              $curr_subj = $q_reading_comprehension;
            }
	        	else $subj='';
  		  		echo '<section';
  		  		if ($i==0) echo ' class="active"';
  		  		echo ' style="padding-top: 50px;">';

  		  		echo '<p class="title" data-section-title="" style="left:';
  		  		echo $i*100;
  		  		echo 'px;height:50px;">';
            echo '<a style="width:100px;padding:13px 0px 0px 0px;text-align:center;vertical-align:middle;font-family:\'Gotham\'" id="panel_';
  		  		echo $subj;
  		  		echo '" onclick="changesubj(\''.$subj.'\')">';
            
            echo $i;
            // if($i == 0){
            //   echo 'Science';
            // }elseif($i == 1){
            //   echo 'Mathematics';
            // }elseif($i == 2){
            //   echo 'English';
            // }elseif($i == 3){
            //   echo 'Reading Comprehension';
            // }
            
  		  		echo '</a>';
            echo '</p>';

  		  		echo '<div class="content panel radius';
            if ($i==0) echo ' first';
            echo '" data-slug="panel_';
  		  		echo $subj;
  		  		echo '" data-section-content="" style="background-color:rgba(238,68,53,0.6);margin-bottom:0px">';

  		  		echo '<div class="panel" style="background-color:rgba(238,68,53,0);margin-bottom:0px"><h3>';
  		  		if ($i==0) {
              echo 'Science';
            }
            else if ($i==1) {
              echo 'Mathematics';
            }
            else if ($i==2) {
              echo 'English';
            }
            else if ($i==3) {
              echo 'Reading Comprehension';
            }
  		  		echo '</h3><ol id="questions_';
  		  		echo $subj;
  		  		echo'" style="list-style-type:none;margin-bottom:0px;margin-top:10px;">';

            $choice = array('choice1', 'choice2', 'choice3', 'correct_answer');

            $item=0;
            //for($k = 0, $item=1; $k < 4; $k++, $item++)
            for($k = 0, $item=1; $k < count($curr_subj); $k++, $item++)
            {
              $row = $curr_subj[$rev_vals['seq_'.$subj][$k]];
              //$row = $q_science[$rev_vals['seq_'.$subj][$i]];
              $name = "answer" .$item;

              // $c_array = array();
              // for($counter = 0; $counter < 4; $counter++){
              //   $randomize = rand(0,3);
                
              //   while(in_array($randomize,$c_array)){
              //     $randomize = rand(0,3);
              //   }

              //   array_push($c_array,$randomize);
                            
              //   $c_array[$counter] = $randomize;
              // }

              echo '<li';
              if ($k>0) echo ' class="hidden"';
              echo '><div class="panel radius" style="min-height:400px;background-color:#fff;margin-bottom:0px"><div class="large-12">';
              echo '<h3 style="color:rgba(90,153,207,0.6);">';
              echo $item;
              echo '</h3> ';

                echo '<strong>';
                  echo $row['ask'];
                echo '</strong><div class="row"><div class="large-12 columns">';
                echo '<table width="100%" style="margin-top:1.25em;margin-bottom:0em"><tbody>';

              for($j = 0; $j < 4; $j++){
                

                  //print_r($c_array);
                  $answer_text = $row[$choice[$j]];
                  //if($answer_text == $answers[$item])
                  //  echo '<label onclick="checkifcomplete()"><input type="radio" name='.$name.' id="'.$name.'_'.($j+1).'" value="'.$answer_text.'" checked="checked"><span class="custom radio checked"></span> ' . $answer_text.'</label>';
                  //else
                  echo '<tr style="min-height:42px"><td';
                  if ($answer_text == $row['correct_answer']) echo ' class="correct"';
                  else if ($answer_text == $rev_vals['ans_'.$subj][$item]) echo ' class="wrong"';
                  echo '>';
                  echo '<label';
                  if ($answer_text == $row['correct_answer']) echo ' class="correct"';
                  else if ($answer_text == $rev_vals['ans_'.$subj][$item]) echo ' class="wrong"';
                  echo '>'.$answer_text;
                  echo '</label>';
                  echo '</td></tr>';
              }
              echo '</tbody></table>';
              echo '</div></div></div></div></li>'; 
            }
            
  		  		echo '</ol></div>';
            echo
            '<div class ="row">
                <div class="large-12 columns" style="float:right">
                  <div class="row">
                    <div class="large-6 medium-6 small-6 columns" id="prev-pseudo_'.$subj.'-div"><a style="margin-bottom:0px" class="button disabled expand radius" id="prev-pseudo_'.$subj.'">Prev</a></div>
                    <div class="large-6 medium-6 small-6 columns hidden" id="prev_'.$subj.'-div"><a style="margin-bottom:0px" class="button expand radius" name="prev_'.$subj.'" id="prev_'.$subj.'" onclick="prevq(\''.$subj.'\')">Prev</a></div>
                    <div class="large-6 medium-6 small-6 columns" id="next_'.$subj.'-div"><a style="margin-bottom:0px" class="button expand radius" name="next_'.$subj.'" id="next_'.$subj.'" onclick="nextq(\''.$subj.'\')">Next</a></div>
                    <div class="large-6 medium-6 small-6 columns hidden" id="next-pseudo_'.$subj.'-div"><a style="margin-bottom:0px" class="button disabled expand radius" id="next-pseudo_'.$subj.'">Next</a></div>
                  </div>
                </div>
              </div>';
  		  		echo '</div></section>';
  		  	}
  		  ?>
        </div>
	</div>
</div>
<?php $this->load->view('includes/footer');?>
<script src="<?php echo site_url('js/jquery-1.7.1.min.js'); ?>"> </script>
<script>

  function changesubj(subj) {
    //alert(subj);
    
    if(subj!='science') $('#panelpagination_science').addClass('hidden');
    if(subj!='mathematics') $('#panelpagination_mathematics').addClass('hidden');
    if(subj!='english') $('#panelpagination_english').addClass('hidden');
    if(subj!='reading_comprehension') $('#panelpagination_reading_comprehension').addClass('hidden');
    $('#panelpagination_'+subj).removeClass('hidden');
  }

  function jumpto(subj, number){
    var num = number;
    $qlist = $("#questions_"+subj+" li");
    for (var i=0; i < $qlist.length; i++)
    {
      if ((i+1)==num) {
        $('#questions_'+subj+' li:eq(' + i + ')').removeClass("hidden");
        $('#pagination_'+subj+' li:eq(' + i + ')').addClass("current");
        if(i+1==$qlist.length) {
          $("#next_"+subj+"-div").addClass("hidden");
          $("#next-pseudo_"+subj+"-div").removeClass("hidden");
        }
        else {
          $("#next_"+subj+"-div").removeClass("hidden");
          $("#next-pseudo_"+subj+"-div").addClass("hidden");
        }
        if(i==0) {
          $("#prev_"+subj+"-div").addClass("hidden");
          $("#prev-pseudo_"+subj+"-div").removeClass("hidden");
        }
        else {
          $("#prev_"+subj+"-div").removeClass("hidden");
          $("#prev-pseudo_"+subj+"-div").addClass("hidden");
        }
      }
      else if(!($('#questions li:eq(' + i + ')').hasClass("hidden"))) {
        $('#questions_'+subj+' li:eq(' + i + ')').addClass("hidden");
        $('#pagination_'+subj+' li:eq(' + i + ')').removeClass("current");
      };
    }
  }

  function nextq(subj){
    var earle = false;
    $qlist = $("#questions_"+subj+" li");
    for (var i=0; i < $qlist.length; i++)
    {
      if(earle) {
        $('#questions_'+subj+' li:eq(' + i + ')').removeClass("hidden");
        $('#pagination_'+subj+' li:eq(' + i + ')').addClass("current");
        if(i+1==$qlist.length) {
          $("#next_"+subj+"-div").addClass("hidden");
          $("#next-pseudo_"+subj+"-div").removeClass("hidden");
        }
        else {
          $("#next_"+subj+"-div").removeClass("hidden");
          $("#next-pseudo_"+subj+"-div").addClass("hidden");
        }
        if(i==0) {
          $("#prev_"+subj+"-div").addClass("hidden");
          $("#prev-pseudo_"+subj+"-div").removeClass("hidden");
        }
        else {
          $("#prev_"+subj+"-div").removeClass("hidden");
          $("#prev-pseudo_"+subj+"-div").addClass("hidden");
        }
        earle = false;
      }
      else if(!($('#questions_'+subj+' li:eq(' + i + ')').hasClass("hidden"))) {
        $('#questions_'+subj+' li:eq(' + i + ')').addClass("hidden");
        $('#pagination_'+subj+' li:eq(' + i + ')').removeClass("current");
        earle=true;
      };
    }
  }

  function prevq(subj){
    var earle = false;
    //$("#next").text("What?");
    $qlist = $("#questions_"+subj+" li");
    //alert($qlist.length);
    for (var i=0; i < $qlist.length; i++)
    {
      //$("#next").text("Whet?"+i);
      if(earle) {
        $('#questions_'+subj+' li:eq(' + i + ')').removeClass("hidden");
        $('#pagination_'+subj+' li:eq(' + i + ')').addClass("current");
        if(i+1==$qlist.length) {
          $("#next_"+subj+"-div").addClass("hidden");
          $("#next-pseudo_"+subj+"-div").removeClass("hidden");
        }
        else {
          $("#next_"+subj+"-div").removeClass("hidden");
          $("#next-pseudo_"+subj+"-div").addClass("hidden");
        }
        if(i==0) {
          $("#prev_"+subj+"-div").addClass("hidden");
          $("#prev-pseudo_"+subj+"-div").removeClass("hidden");
        }
        else {
          $("#prev_"+subj+"-div").removeClass("hidden");
          $("#prev-pseudo_"+subj+"-div").addClass("hidden");
        }
        earle = false;
      }
      else if(!($('#questions_'+subj+' li:eq(' + i + ')').hasClass("hidden"))) {
        $('#questions_'+subj+' li:eq(' + i + ')').addClass("hidden");
        $('#pagination_'+subj+' li:eq(' + i + ')').removeClass("current");
        i=i-2;
        earle=true;
      };
    }
  }
  //);
//});
</script>