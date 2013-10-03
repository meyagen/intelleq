<?php $this->load->view('includes/header'); ?>
<body onload="checkquestions()" class="off-canvas hide-extras">

<?php $this->load->view('navigation'); ?>

<div class="large-3 columns push-6">
  <div class="row">
    <div class="large-12 columns">
      <div class="row fullrow">
    <div class="large-10 push-1 columns">
        <div class="panel">
      <h3>Questions</h3>
      <ul class="pagination" style="margin-top: 10px">
        <?php
        for ($i = 0; $i < count($questions); $i++) {
          echo '<li><a href="#">';
          echo $i+1;
          echo '</a></li>';
        }
        ?>
      </ul>
      <div class="row">
        <div class="large-12 columns">
          <a class="button small success expand" id="toggleTimer" onclick="toggleTimer()">Show Timer</a>
        </div>
      </div>
      <div class="row">
        <div class="large-12 columns">
          <div id="countdown" class="invisible"style="width:100%"></div>
        </div>
      </div>
      </div>
    </div></div>
    </div>
  </div>
</div>

    <div class="large-6 pull-3 columns">
    <div id="login_form">
      <?php echo form_open('score');?><ol id="questions"style="list-style-type:none">
    <?php

    $choice = array('choice1', 'choice2', 'choice3', 'correct_answer');

    $item=0;
    for($i = 0, $item=1; $i < count($questions); $i++, $item++)
    {
      $row = $questions[$qrand[$i]];
      $name = "answer" .$item;

      $c_array = array();
      for($counter = 0; $counter < 4; $counter++){
        $randomize = rand(0,3);
        
        while(in_array($randomize,$c_array)){
          $randomize = rand(0,3);
        }

        array_push($c_array,$randomize);
                    
        $c_array[$counter] = $randomize;
      }

      echo '<li';
      if ($i>0) echo ' class="hidden"';
      echo '><div class="panel" style="min-height:450px"><div class="large-12">';
      echo '<h3>';
      echo $item;
      echo '</h3> ';

        echo '<strong>';
          echo $row['ask'];
        echo '</strong><div class="row"><div class="large-12 columns">';
        echo '<table width="100%" style="margin-top:1.25em;margin-bottom:0em"><tbody>';

      for($j = 0; $j < 4; $j++){
        echo '<tr><td>';

          //print_r($c_array);
          $answer_text = $row[$choice[$c_array[$j]]];
          if($answer_text == $answers[$item])
            echo '<label><input type="radio" name='.$name.' id="'.$name.'" value="'.$answer_text.'" checked="checked"><span class="custom radio checked"></span> ' . $answer_text.'</label>';
          else
            echo '<label><input type="radio" name='.$name.' id="'.$name.'" value="'.$answer_text.'"><span class="custom radio"></span> ' . $answer_text.'</label>';
        echo '</td></tr>';
      }
      echo '</tbody></table>';
      echo '</div></div></div></div></li>'; 
    }
    ?></ol>
    <div class ="row">
      <div class="large-5 columns" style="float:right">
          <ul class="button-group" style="padding-right:0px">
            <li><a class="button small disabled" name="prev" id="prev-pseudo">Prev</a></li>
            <li><a class="button small hidden" name="prev" id="prev" onclick="prevq()">Prev</a></li>
            <li><input type="submit" name="submit" class="button small success"></li>
            <li><a class="button small" name="next" id="next" onclick="nextq()">Next</a></li>
            <li><a class="button small hidden disabled" name="next" id="next-pseudo">Next</a></li>
          </ul>
      </div>
    </div>
    <?php echo form_close();?>
    </div>
    </div>
  </div>

<?php $this->load->view('includes/footer');?>

<script>

  function checkquestions(){
    $qlist = $("#questions li");
    for (var i=0; i < $qlist.length; i++)
    {
      
    }
  }

  function toggleTimer(){
    if($('#toggleTimer').hasClass("success")) {
      $('#toggleTimer').removeClass("success");
      $('#toggleTimer').addClass("secondary");
      $('#toggleTimer').text("Hide Timer");
      $('#countdown').removeClass("invisible");
    }
    else {
      $('#toggleTimer').removeClass("secondary");
      $('#toggleTimer').addClass("success");
      $('#toggleTimer').text("Show Timer");
      $('#countdown').addClass("invisible");
    }
  }

  function nextq(){
    var earle = false;
    //$("#next").text("What?");
    $qlist = $("#questions li");
    //alert($qlist.length);
    for (var i=0; i < $qlist.length; i++)
    {
      //$("#next").text("Whet?"+i);
      if(earle) {
        $('#questions li:eq(' + i + ')').removeClass("hidden");
        if(i+1==$qlist.length) {
          $("#next").addClass("hidden");
          $("#next-pseudo").removeClass("hidden");
        }
        else {
          $("#next").removeClass("hidden");
          $("#next-pseudo").addClass("hidden");
        }
        if(i==0) {
          $("#prev").addClass("hidden");
          $("#prev-pseudo").removeClass("hidden");
        }
        else {
          $("#prev").removeClass("hidden");
          $("#prev-pseudo").addClass("hidden");
        }
        earle = false;
      }
      else if(!($('#questions li:eq(' + i + ')').hasClass("hidden"))) {
        $('#questions li:eq(' + i + ')').addClass("hidden");
        earle=true;
      };
    }
  }

  function prevq(){
    var earle = false;
    //$("#next").text("What?");
    $qlist = $("#questions li");
    //alert($qlist.length);
    for (var i=0; i < $qlist.length; i++)
    {
      //$("#next").text("Whet?"+i);
      if(earle) {
        $('#questions li:eq(' + i + ')').removeClass("hidden");
        if(i+1==$qlist.length) {
          $("#next").addClass("hidden");
          $("#next-pseudo").removeClass("hidden");
        }
        else {
          $("#next").removeClass("hidden");
          $("#next-pseudo").addClass("hidden");
        }
        if(i==0) {
          $("#prev").addClass("hidden");
          $("#prev-pseudo").removeClass("hidden");
        }
        else {
          $("#prev").removeClass("hidden");
          $("#prev-pseudo").addClass("hidden");
        }
        earle = false;
      }
      else if(!($('#questions li:eq(' + i + ')').hasClass("hidden"))) {
        $('#questions li:eq(' + i + ')').addClass("hidden");
        i=i-2;
        earle=true;
      };
    }
  }
  //);
//});
</script>