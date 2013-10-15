<body class="off-canvas hide-extras">
<?php $this->load->view('includes/header');?>
<?php $this->load->view('navigation');?>
<?php 
	// $this->session->set_userdata('timeCheck', TRUE);
	// $this->session->set_userdata('startExam', FALSE);
?>
<div class="large-6 pull-3 columns">
	<div class="row">
<h2>Transition</h2>
<fieldset>
<p>
Read the questions carefully. For your convenience, we provided a timer at the right side of the exam window. Once the time indicated runs out, your answers will automatically be submitted.
</p>
<ol style="margin-left:20px;margin-bottom:0px">
<li>Select the best answer among the choices given.</li>
<li>Click “Next” to go to the next question.</li>
<li>You can return to the previous question by pressing the “Prev” button.</li>
<li>You can skip the question by pressing “Next”.</li>
<li>See the “Questions” panel to get an overview of your quiz.
<ul style="list-style:none">
<li><ul class="pagination" style="display:inline"><li><a style="background-color:#F2F2F2"><strong>1</strong></a></li></ul>&nbsp;&nbsp;&nbsp;Unanswered questions</li>
<li><ul class="pagination" style="display:inline"><li><a style="background-color:#3498db;color:#fff"><strong>2</strong></a></li></ul>&nbsp;&nbsp;&nbsp;Currently displayed question</li>
<li><ul class="pagination" style="display:inline"><li><a style="background-color:#f39c12;color:#fff"><strong>3</strong></a></li></ul>&nbsp;&nbsp;&nbsp;Answered questions</li>
</ul>
After the exam, you will be redirected to Review mode, wherein your answers and the correct answers will be displayed.
<ul style="list-style:none">
<li><ul class="pagination" style="display:inline"><li><a style="background-color:#2ecc71;color:#fff"><strong>4</strong></a></li></ul>&nbsp;&nbsp;&nbsp;Correctly answered questions</li>
<li><ul class="pagination" style="display:inline"><li><a style="background-color:#e74c3c;color:#fff"><strong>5</strong></a></li></ul>&nbsp;&nbsp;&nbsp;Unanswered or incorrectly answered questions</li>
</ul>
</li>
<li>Click “Finish quiz” once you’ve answered all the questions. Remember, you will be unable to finish the quiz if you haven’t answered all the questions. Make sure that all the numbered boxes are colored green.</li>
<li>Once you finish all of the exams for every subject, your scores will be displayed. From here, you can choose to check the correct andwers and review the exam or go back to the homepage.</li>
</ol>
</fieldset>
<a class="button radius success" href="question">Proceed</a></li>
<?php //var_dump($this->session->userdata['startExam']); ?>


</div>  </div></div>


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
