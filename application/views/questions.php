<body class="off-canvas hide-extras">
<script type="text/javascript" src="http://cdn.mathjax.org/mathjax/latest/MathJax.js?config=AM_HTMLorMML-full"></script>

<div class="row hidden invisible">
  <div class="large-22 columns">
    <span class="error" id="spanpseudotime"></span>
  </div>
</div>

<script>
    window.onbeforeunload = function() {
      var time = $('#spanpseudotime').text();
      localStorage.setItem("someTime", time);
      return 'Please Pause the Exam or all your answers will be lost!';
    };
</script>
<?php $this->load->view('includes/header'); ?>
<?php $this->load->view('navigation'); ?>
<?php //var_dump($this->session->userdata); ?>
<div class="large-3 push-6 columns">
    <div class="row">
      <div class="large-12 columns">
        <div class="row fullrow">
          <div class="large-10 push-1 columns">
            <div class="panel radius" style="background-color:rgba(244,166,16,0.6);padding:15px 0px 15 0px">
              <h4 style="padding-left:15px">Questions</h4>
              <div class="panel radius" style="background-color:#fff;margin-top:10px;margin-bottom:0px;min-height:250px">
      <ul class="pagination" id="pagination">
      <?php
        
        if($this->session->userdata['timeCheck']) { 
          $this->session->set_userdata('saveSequence', $qrand);
          $this->session->set_userdata('saveChoice', $qrand);
        }  

        else
          $qrand = $this->session->userdata['saveSequence'];

        for ($i = 0; $i < count($qrand); $i++) {
        // for ($i = 0; $i < 4; $i++) {
          echo '<li style="margin:4px;" ';
          if ($i==0) echo ' class="current"';
          echo '><span data-tooltip class="has-tip" title="';
          $row = $questions[$qrand[$i]];
          echo $row['title'];
          echo '"><a style="margin:4px;" href="#" id="pagi_';
          if (($i+1)<10) echo '0';
          echo ($i+1).'" onclick="jumpto(';
          echo $i+1;
          echo ')">';
          echo $i+1;
          echo '</a></li>';
        }

        if(!($this->session->userdata['timeCheck'])){
          echo "<script>";
		  
          echo "for(var j = 1; j <= ".count($qrand)."; j++){";
		  echo "if (j<10) {var paginum = 'pagi_0'+j;";
      echo "var qnum = 'answer0'+j;}";
		  echo "else {var paginum = 'pagi_'+j;";
      echo "var qnum = 'answer'+j}";
            echo "if(localStorage.getItem(qnum) !== null){";
              // echo "if (j<10) var d = document.getElementById(paginum);";
              // echo "else var d = document.getElementById(paginum);";
              echo "var d = document.getElementById(paginum);";
              echo "d.className = d.className + 'answered';";
            echo "}";
          echo "}";    
          echo "</script>";
        }
      ?>
      </ul>
    </div>
      <div class="row">
        <div class="large-22 columns">
          <a class="button small secondary expand" id="toggleTimer" onclick="toggleTimer()">Hide Timer</a>
        </div>
      </div>
      
      <div class="row">
        <div class="large-22 columns">
          <?php
            if($this->session->userdata['timeCheck']) { 
              echo "<script>";
              echo "var tempTimer = ". $tempTime . ";" ;
              echo "</script>";
            } 
            else {
              echo "<script>";
              echo "if(localStorage.getItem(\"someTime\") != null)";
              echo "var tempTimer = localStorage.getItem(\"someTime\");";
              echo "else var tempTimer = ". $tempTime . ";" ;
              echo "</script>"; 
            } 
            //var_dump($this->session->userdata);
          ?>
          
          <div id="countdown" class="" style="width:100%"></div>
        </div>
      </div>
      </div>
    </div></div>
    </div>
  </div>

  <div class="row">
    <div class="large-22 columns">
      <div class="row">
        <div class="large-6 medium-6 small-6 columns">
          <a class="button radius expand disabled" name="prev" id="prev-pseudo">Prev</a>
          <a class="button radius expand hidden" name="prev" id="prev" onclick="prevq()">Prev</a>
        </div>
        <div class="large-6 medium-6 small-6 columns">
          <a class="button radius expand" name="next" id="next" onclick="nextq()">Next</a>
          <a class="button radius expand hidden disabled" name="next" id="next-pseudo">Next</a>
        </div>
      </div>
<input type="submit" id="pause" name="pause" data-reveal-id="modalPause" class="button radius expand success" value = "Save and Exit"> 
<!--      <a class="button radius expand success" href="#" id="pause">Pause</a> -->
      <a class="button radius expand success" href="#" data-reveal-id="modalSubmit">Submit</a>


    </div>
  </div>

</div>

    <div class="large-6 pull-3 columns">
    <div id="login_form">
      <form action="score" method="post" id="testSubmit" name="testSubmit">
      <ol id="questions"style="list-style-type:none">
    <?php

      $choice = array('choice1', 'choice2', 'choice3', 'correct_answer');

      $item=0;
      for($i = 0, $item=1; $i < count($qrand); $i++, $item++)
      // for($i = 0, $item=1; $i < 4; $i++, $item++)
      {
        $row = $questions[$qrand[$i]];
        if ($item<10) $name = "answer0".$item;
		else $name = "answer".$item;
        $c_array = array();

        //if($this->session->userdata['timeCheck']) {
          for($counter = 0; $counter < 4; $counter++){
            $randomize = rand(0,3);
            
            while(in_array($randomize,$c_array)){
              $randomize = rand(0,3);
            }

            array_push($c_array,$randomize);
                        
            $c_array[$counter] = $randomize;
          }
          $this->session->set_userdata('saveChoice', $c_array);
        //}
        // else{
        //   $c_array = $this->session->userdata['saveChoice'];
        // }

        echo '<li';
        if ($i>0) echo ' class="hidden"';
        echo '><div class="panel radius" style="min-height:450px"><div class="large-22">';
        echo '<h3>';
        echo $item;
        echo '</h3> ';

          echo '<strong>';
            echo $row['ask'];
          echo '</strong><div class="row"><div class="large-22 columns">';
          echo '<table class="answers" width="100%" style="margin-top:1.25em;margin-bottom:0em"><tbody>';

        for($j = 0; $j < 4; $j++){
          echo '<tr><td>';

            //print_r($c_array);
            $answer_text = $row[$choice[$c_array[$j]]];

            if($answer_text == $answers[$item]){
              echo '<input type="radio" name="';
			  echo $name.'" id="'.$name.'_'.($j+1).'" value="'.$answer_text.'" checked="checked"><label for="'.$name.'_'.($j+1).'"><span></span>' . $answer_text.'</label>';
            }else{
              echo '<input type="radio" name="'.$name.'" id="'.$name.'_'.($j+1).'" value="'.$answer_text.'"><label for="'.$name.'_'.($j+1).'"><span></span>' . $answer_text.'</label>';
            }
          echo '</td></tr>';
        }
        echo '</tbody></table>';
        echo '</div></div></div></div></li>'; 

        if(!($this->session->userdata['timeCheck'])){
          echo "<script>";
          echo "for(var i = 1; i <= ".count($qrand)."; i++){";
          echo "if (i<10) var ans_name = 'answer0'+i;";
          echo "else var ans_name = 'answer'+i;";
            echo "if(localStorage.getItem(ans_name) !== null){";
              echo "for(var j = 1; j <= 4; j++){";

              echo "if(localStorage.getItem(ans_name) == $(\"#\" + ans_name + \"_\" + j).val()){";
                echo "document.getElementById($(\"#\" + ans_name + \"_\" + j).attr('id')).checked = true;}";


              echo "}";
            echo "}";
          echo "}";    
          echo "</script>";
        }
      } 
    ?></ol>
    <?php 
        $this->session->set_userdata('timeCheck', FALSE);
        $this->session->set_userdata('startExam', TRUE);
        //($this->session->userdata); 
    ?>
    
    <!--Modal - Pause-->
    <div id="modalPause" class="reveal-modal large">
        <h2 style="text-align:center">PAUSED</h2>
        <input type="submit" id="pause" name="pause" class="button radius expand success" value = "Save and Exit">
        <a class="button radius expand close-reveal-modal">Back to Exam</a>
      <a class="close-reveal-modal x">x</a>
    </div>

    <!--Modal - Submit-->
    <div id="modalSubmit" class="reveal-modal large">
        <h2 style="text-align:center">SUBMIT NOW?<br/>
        <small>There is no turning back.</small></h2>
        <div class="row">
          <div class="large-6 columns">
            <input type="submit" id="submit" name="submit" class="button radius expand alert" value = "Yes"></li>
          </div>
          <div class="large-6 columns">
            <a class="button radius expand close-reveal-modal">No</a>
          </div>
        </div>
      <a class="close-reveal-modal x">x</a>
    </div>

    <input type="text" id="pseudotime" name="pseudotime" value="9999" class="hidden invisible">
    </form>
    </div>
    </div>
  </div>

<?php $this->load->view('includes/footer');?>

<script src="<?php echo site_url('js/jquery-1.7.1.min.js'); ?>"> </script>
<script src="<?php echo site_url('js/jquery.countdown.js'); ?>"></script>
<script src="<?php echo site_url('js/script.js'); ?>"></script>
<script>
  var ct = setInterval("checkTime()", 1000);

  $('#submit').live('click', function(){
        window.onbeforeunload = function(){
          return "Submitting ALL of your answers";
        };
  });
  $('#pause').live('click', function(){
        window.onbeforeunload = function(){
          //return "Saving all answers. PAUSE!";
        };
  });

  function checkTime(){
      //alert("timere");
      var time = parseInt(document.getElementById('pseudotime').value);
      if(time <= 0){
        //clearInterval(ct);
        time = 0;
        $.ajax({
          url: 'score/checkState',
          success: function(){
              alert("TIME'S UP! " + time);
              $('#submit').click();
          }
        })
      }
      //alert("time" + (parseInt(time)+100000));
  }

 

  $(function(){
    // FIXED!
    $('input[type="radio"]').click(function(){
      if ($(this).is(':checked'))
      {
        localStorage.removeItem($(this).attr('value'));
        localStorage.setItem($(this).attr('name'), $(this).attr('value'));
        var itemno = $(this).attr('name').slice(-2);
        // var parse = parseInt(itemno, 10);
        // if (parse<10) 
        //   d = document.getElementById("pagi_0" + itemno);
        // else
          d = document.getElementById("pagi_" + itemno);
        d.className = d.className + ' answered';  

        //localStorage.removeItem($(this).attr('name'));
        //localStorage.setItem($(this).attr('name'), $(this).attr('id'));
        // alert(localStorage.getItem('answer1'));
        // if(localStorage.getItem('answer1') == $("#answer1_1").val())
        // {
        //    alert($("#answer1_1").attr('id'));
        // } 
        //alert(localStorage.getItem($(this).attr('name')));
      }
    });
  });

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