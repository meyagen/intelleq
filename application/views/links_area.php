<body class="off-canvas hide-extras">

<?php $this->load->view('includes/header');?>
<?php $this->load->view('navigation');?>
<div class="large-6 pull-3 columns">
	<div class="row">
<h2>Reviewers</h2>
<fieldset>
  <div class="large-12 columns">
  <h5>General Knowledge</h5>
	<?php
		foreach($general_knowledge as $link){
			echo anchor($link['link'], $link['title']);
			echo"<p></p>";
		}
	?>

  <h5>Science</h5>
	<?php
		foreach($science as $link){
			echo anchor($link['link'], $link['title']);
			echo"<p></p>";
		}
	?>

  <h5>Mathematics</h5>
	<?php
		foreach($mathematics as $link){
			echo anchor($link['link'], $link['title']);
			echo"<p></p>";
		}
	?>

  <h5>English</h5>
	<?php
		foreach($english as $link){
			echo anchor($link['link'], $link['title']);
			echo"<p></p>";
		}
	?>

  <h5>Reading Comprehension</h5>
	<?php
		foreach($reading_comprehension as $link){
			echo anchor($link['link'], $link['title']);
			echo"<p></p>";
		}
	?>

</div></div>
</div></div></div>



<?php $this->load->view('includes/footer');?>