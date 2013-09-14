<?php $this->load->view('components/page_head'); ?>
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
			<?php echo form_open('question/get_input');?>
		<table class="table">
		<?php

		$item = 0;

		foreach ($questions as $row)
		{
			$item++;
			$name = "answer" .$item;
	
			echo '<table>';
			echo '<tr>';
				echo '<td>';				
				echo '</td>';
			
			echo '</tr>';
			echo '<tr>';

				echo '<td>';
					echo $row['ask'];
				echo '</td>';

			//'.$row['group'].'

			echo '<tr>';
				echo '<td>';
				echo '<input type="radio" name='.$name.'  value="'.$row['choice1'].'">' . $row['choice1'];
				echo '</td>';

			echo '</tr>';
			echo '<tr>';
				echo '<td>';
				echo '<input type="radio" name='.$name.' value="'.$row['choice2'].'">' . $row['choice2'];
				echo '</td>';

			echo '</tr>';

			echo '<tr>';
				echo '<td>';
				echo '<input type="radio" name='.$name.' value="'.$row['choice3'].'">' . $row['choice3'];
				
				echo '</td>';

			echo '</tr>';
			
			echo '<tr>';
				echo '<td>';
				echo '<input type="radio" name='.$name.' value="'.$row['correct_answer'].'">' . $row['correct_answer'];
				
				echo '</td>';

			echo '</tr>';
			
			echo '</table>';
			echo '<br />'; 
		}
		?>

		</table>
		 <input type="submit" name="submit" class="button radius success">
		<?php echo form_close();?>

	  <?php echo form_open('questions/pause');?>
	  <form>
	  <input type="submit" name="pause" class="button radius success">
	  <?php echo form_close();?>
	  </form>
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
<?php $this->load->view('components/page_tail');?>