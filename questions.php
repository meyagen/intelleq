
<body onload="checkquestions()" class="off-canvas hide-extras">

<!--Navigation Bar-->
<header>
<div class="fixed">
<nav class="top-bar fixed">
  <ul class="title-area">
    <li class="name"><h1><a href="#">intelleq</a></h1></li>
    <li class="toggle-topbar menu-icon"><a href="#"><span></span></a></li>
  </ul>
  <section class="top-bar-section">
    <ul class="right"style="background:rgba(105, 34, 34, 0)">
        <li style="padding-right:10;padding-left:10"><a><?php echo ucfirst($firstname) . " " . ucfirst($lastname); ?></a></li>
        <li style="padding-right:10;padding-left:10"><a class="button radius" href="login/logout">Sign Out</a></li>
        <li style="padding-right:0;padding-left:10">
            <input type="text" placeholder="Search intelleq">
        </li>
    </ul>
  </section>
</div>
</header>

<div class="row fullrow">
  <div class="large-3 columns">
    <div class="row fullrow">
    <div class="large-10 push-1 columns">
        <div class="panel">
    <h4>Navigation</h4>
    <div class="docs section-container accordion" data-section="accordion">
        <section class="section active">
    <p class="title"><a href="feed">Feed</a></p>
  </section>
  <section class="section ">
    <p class="title"><a href="calendar">Calendar</a></p>
  </section>
  <section class="section ">
    <p class="title"><a>Modules</a></p>
    <div class="content"> 
      <ul class="side-nav">
        <li><a href="question">English</a></li>
        <li><a href="#">Science</a></li>
        <li><a href="#">Math</a></li>
      </ul>
    </div>
  </section>
  <h4>intelleq x You</h4>
    <div class="docs section-container accordion" data-section="accordion">
        <section class="section ">
    <p class="title"><a href="user">Profile</a></p>
  </section>
  <section class="section ">
    <p class="title"><a href="records">Records</a></p>
  </section>
  <section class="section ">
    <p class="title"><a href="statistics">Statistics</a></p>
  </section>
  <section class="section ">
    <p class="title"><a href="badges">Badges</a></p>
  </section>
</div>
</div>
</div>
</div>
</div>
  </div>

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
            echo '<input type="radio" name='.$name.' checked="checked" value="'.$answer_text.'"> ' . $answer_text;
          else
            echo '<input type="radio" name='.$name.'  value="'.$answer_text.'"> ' . $answer_text;

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


<!--Footer - Site Map-->
<section role="footmap" style="box-shadow:0px 0px 1px #000000">
  <footer id="universal" class="footer">
  <div class="row fullrow">
    <div class="large-7 columns">
      <div class="large-4 columns">
        <center><h3 class="white">ABOUT</h3>
        <ul class="white" style="list-style:none">
          <li>Who We Are</li>
          <li>Our Mission</li>
          <li>Feedback</li>
        </ul></center>
      </div>
      <div class="large-4 columns">
        <center><h3 class="white">HELP</h3>
        <ul class="white" style="list-style:none">
          <li>FAQ</li>
          <li>Contact Us</li>
          <li>Report a Bug</li>
        </ul></center>
      </div>
      <div class="large-4 columns">
        <center><h3 class="white">SOCIAL</h3>
        <ul class="white" style="list-style:none">
          <li>Facebook</li>
          <li>Twitter</li>
          <li>Google+</li>
        </ul></center>
      </div>
    </div>
  </div>
  <div class=" row fullrow">
    <div class="large-4 push-8 columns">
      <div>
        <center><h1 class="white">logo</h1>
        <p class="white">Andres x Bunao x Mendoza x Ventura<br/>2013 | All rights reserved</p>
        </center>
      </div>
    </div>
  </div>
  </footer>
</section>

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