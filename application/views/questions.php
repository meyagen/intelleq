<body onload="checkquestions()" class="off-canvas hide-extras">

<?php $this->load->view('includes/header'); ?>

<div class="row hidden invisible">
  <div class="large-12 columns">
    <span class="error" id="spanpseudotime"></span>
  </div>
</div>

<script>
  
//   alert($('#timershit').text() + "test");
//   //alert("ates" + "test");
//   if(parseInt($('#timershit').text()) >= 0){
//    alert("time's up!");
//   }
</script>

<script>
    window.onbeforeunload = function(event) {
      var time = $('#spanpseudotime').text();
      localStorage.setItem("someTime", time);
      return 'Confirm refresh';
    };
</script>

<?php $this->load->view('navigation'); ?>
<?php //var_dump($this->session->userdata); ?>
<div class="large-3 columns push-6">
  <div class="row">
    <div class="large-12 columns">
      <div class="row fullrow">
    <div class="large-10 push-1 columns">
        <div class="panel">
      <h3>Questions</h3>
      <ul class="pagination" id="pagination" style="margin-top: 10px">
      <?php
        
        if($this->session->userdata['timeCheck']) { 
          $this->session->set_userdata('saveSequence', $qrand);
          $this->session->set_userdata('saveChoice', $qrand);
          //var_dump($this->session->userdata);
        }  
        else{
          $qrand = $this->session->userdata['saveSequence'];
          //var_dump($this->session->userdata);
        }
        if (count($questions)>=1) {
          echo '<li class="current"><span data-tooltip class="has-tip" title="';
          $row = $questions[$qrand[0]];
          echo $row['title'];
          echo '"><a href="#" onclick="jumpto(';
          echo 1;
          echo ')">';
          echo 1;
          echo '</a></span></li>';
        }
        for ($i = 1; $i < count($questions); $i++) {
          echo '<li><span data-tooltip class="has-tip" title="';
          $row = $questions[$qrand[$i]];
          echo $row['title'];
          echo '"><a href="#" onclick="jumpto(';
          echo $i+1;
          echo ')">';
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
        
          <?php
            if($this->session->userdata['timeCheck']) { 
              echo "<script>";
              echo "var tempTimer = ". $tempTime . ";" ;
              echo "</script>";
            } 
            else {
              echo "<script>";
              echo "var tempTimer = localStorage.getItem(\"someTime\");";
              echo "</script>"; 
            } 
            //var_dump($this->session->userdata);
          ?>
          
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
      <?php echo form_open('score',array('id' => 'testSubmit'));?>
      <!-- <form action="score" method="post" id="testSubmit"> -->
      <ol id="questions"style="list-style-type:none">
    <?php

      $choice = array('choice1', 'choice2', 'choice3', 'correct_answer');

      $item=0;
      for($i = 0, $item=1; $i < count($questions); $i++, $item++)
      {
        $row = $questions[$qrand[$i]];
        $name = "answer" .$item;
        $c_array = array();

        if($this->session->userdata['timeCheck']) {
          for($counter = 0; $counter < 4; $counter++){
            $randomize = rand(0,3);
            
            while(in_array($randomize,$c_array)){
              $randomize = rand(0,3);
            }

            array_push($c_array,$randomize);
                        
            $c_array[$counter] = $randomize;
          }
          $this->session->set_userdata('saveChoice', $c_array);
        }
        else{
          $c_array = $this->session->userdata['saveChoice'];
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
            if($answer_text == $answers[$item]){
              echo '<label onclick="checkifcomplete()"><input type="radio" name='.$name.' id="'.$name.'_'.($j+1).'" value="'.$answer_text.'" checked="checked"><span class="custom radio checked"></span> ' . $answer_text.'</label>';

            }else{
              echo '<label><input type="radio" name='.$name.' id="'.$name.'_'.($j+1).'" value="'.$answer_text.'"><span class="custom radio"></span> ' . $answer_text.'</label>';
            }
          echo '</td></tr>';
        }
        echo '</tbody></table>';
        echo '</div></div></div></div></li>'; 

        if(!($this->session->userdata['timeCheck'])){
          //var_dump($this->session->userdata['timeCheck']);
          echo "<script>";
          echo "for(var i = 1; i <= 4; i++){";
          echo "if(localStorage.getItem(\"answer\" + i) !== null)";
          echo "document.getElementById(localStorage.getItem(\"answer\" + i)).checked = true;}";
        //  echo "if(document.getElementById(\"answer1_2\").checked){";
        //  echo "localStorage.setItem(\"someAnswer\", 2);";
        //  echo "alert(localStorage.getItem(\"someAnswer\"));}";
          echo "</script>";
        }
      }
    ?></ol>
    <?php //var_dump($this->session->userdata); 
        $this->session->set_userdata('timeCheck', FALSE);
        $this->session->set_userdata('startExam', TRUE);
    ?>
    <div class ="row">
      <div class="large-12 columns" style="float:right">
          <ul class="button-group" style="padding-right:0px; display:inline">
            <li><a class="button small disabled" name="prev" id="prev-pseudo">Prev</a></li>
            <li><a class="button small hidden" name="prev" id="prev" onclick="prevq()">Prev</a></li>
            <li><a class="button small success" name="shet" id="shet" onclick="checkifcomplete()">Shet</a></li>
            <li><input type="submit" id="submit"name="submit" class="button small success" style="display:inline"></li>
            <li><a class="button small" name="next" id="next" onclick="nextq()">Next</a></li>
            <li><a class="button small hidden disabled" name="next" id="next-pseudo">Next</a></li>
          </ul>
      </div>
    </div>
    <input type="text" id="pseudotime" name="pseudotime" value="9999" class="hidden invisible">
    </form>
    </div>
    </div>
  </div>

<?php $this->load->view('includes/footer');?>

<script src="js/jquery-1.7.1.min.js"> </script>
<script>

  $(function(){
    $('input[type="radio"]').click(function(){
      if ($(this).is(':checked'))
      {
        localStorage.removeItem($(this).attr('name'));
        localStorage.setItem($(this).attr('name'), $(this).attr('id'));
        
        //alert(localStorage.getItem("answer" + 1));
        //alert(localStorage.getItem($(this).attr('name')));
      }
    });
  });

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

  function checkifcomplete(){
    var marker2 = true;
    var inc = false;
    $qlist = $("#questions li");
    for (var i=0; i < $qlist.length; i++)
    {
      var noanswer = true;
      $choices = $('#questions li:eq(' + i + ') div div div div table tbody tr');
      for (var j=0; j<$choices.length; j++) {
        // if (marker2) {
        //   $('#submit').attr('value',"Checkpoint 4");
        //   marker2 = false;
        // }
        if($('#questions li:eq('+i+') div div div div table tbody tr:eq('+j+') td label input').checked) {
          noanswer = false;
        }
        else $('#submit').attr('value',$('#questions li:eq('+i+') div div div div table tbody tr:eq('+j+') td label input').value);

      }
      if(noanswer) {
        inc = true;
      }
    }
    //$('#submit').attr('value',inc);
    if(inc) {
      $('#submit').removeClass("success");
      $('#submit').addClass("alert");
    }
    else {
      $('#submit').removeClass("alert");
      $('#submit').addClass("success");
    }
  }

  function jumpto(number){
    var num = number;
    $qlist = $("#questions li");
    for (var i=0; i < $qlist.length; i++)
    {
      if ((i+1)==num) {
        $('#questions li:eq(' + i + ')').removeClass("hidden");
        $('#pagination li:eq(' + i + ')').addClass("current");
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
      }
      else if(!($('#questions li:eq(' + i + ')').hasClass("hidden"))) {
        $('#questions li:eq(' + i + ')').addClass("hidden");
        $('#pagination li:eq(' + i + ')').removeClass("current");
      };
    }
  }

  function nextq(){
    var earle = false;
    $qlist = $("#questions li");
    for (var i=0; i < $qlist.length; i++)
    {
      if(earle) {
        $('#questions li:eq(' + i + ')').removeClass("hidden");
        $('#pagination li:eq(' + i + ')').addClass("current");
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
        $('#pagination li:eq(' + i + ')').removeClass("current");
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
        $('#pagination li:eq(' + i + ')').addClass("current");
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
        $('#pagination li:eq(' + i + ')').removeClass("current");
        i=i-2;
        earle=true;
      };
    }
  }
  //);
//});
</script>