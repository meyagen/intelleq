
<body class="off-canvas hide-extras">

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

<div class="container">
  <div class="row">
    <div class="span9">
    <div id="login_form">
      <?php echo form_open('score');?>
    <table class="table">
    <?php

    $item = 0;
    $choice = array('choice1', 'choice2', 'choice3', 'correct_answer');

    for($i = 0, $item = 1; $i < count($questions); $i++, $item++)
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

      echo $item;
      echo '<table>';
      echo '<tr>';
        echo '<td>';        
        echo '</td>';
      
      echo '</tr>';
      echo '<tr>';

        echo '<td>';
          echo $row['ask'];
        echo '</td>';

      for($j = 0; $j < 4; $j++){
        echo '<tr>';
          echo '<td>';

          //print_r($c_array);
          $answer_text = $row[$choice[$c_array[$j]]];
          if($answer_text == $answers[$item])
            echo '<input type="radio" name='.$name.' checked="checked" value="'.$answer_text.'">' . $answer_text;
          else
            echo '<input type="radio" name='.$name.'  value="'.$answer_text.'">' . $answer_text;
  
          echo '</td>';
        echo '</tr>';
      }
      echo '</table>';
      echo '<br />'; 
    }
    ?>

    </table>
     <input type="submit" name="submit" class="button radius success">
    <?php echo form_close();?>
    </div></div>
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