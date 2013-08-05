<h3><?php echo empty($question->id) ? 'Add a new question' : 'Edit question ' . $question->title; ?></h3>
<?php echo validation_errors(); ?>
<?php echo form_open(); ?>
<table class="table">
	<tr>
		<td>Subject Area</td>
		<td><?php 
				echo form_dropdown('group', 
				array(	'Subject Area' => 'Subject Area',
						'English' => 'English',
						'General Knowledge' => 'General Knowledge',
						'Mathematics' => 'Mathematics',
						'Reading Comprehention' => 'Reading Comprehention',
						'Science' => 'Science'	),
			 	$this->input->post('group') ? $this->input->post('group') : $question->group); 
		?></td>
	</tr>
	<tr>
		<td>Title</td>
		<td><?php echo form_input('title', set_value('title', $question->title)); ?></td>
	</tr>
	<tr>
		<td>Question</td>
		<td><?php echo form_input('ask', set_value('ask', $question->ask), 'class="tinymce"'); ?></td>
	</tr>
	<tr>
		<td>Correct Answer</td>
		<td><?php echo form_input('correct_answer', set_value('correct_answer', $question->correct_answer)); ?></td>
	</tr>
	<tr>
		<td>1st Choice</td>
		<td><?php echo form_input('choice1', set_value('choice1', $question->choice1)); ?></td>
	</tr>
	<tr>
		<td>2nd Choice</td>
		<td><?php echo form_input('choice2', set_value('choice2', $question->choice2)); ?></td>
	</tr>
	<tr>
		<td>3rd Choice</td>
		<td><?php echo form_input('choice3', set_value('choice3', $question->choice3)); ?></td>
	</tr>
	<tr>
		<td>4th Choice</td>
		<td><?php echo form_input('choice4', set_value('choice4', $question->choice4)); ?></td>
	</tr>
	<tr>
		<td>Difficulty</td>
		<td><?php echo form_dropdown('difficulty', array('Difficulty' => 'Difficulty', 'Easy' => 'Easy', 'Normal' => 'Normal', 'Difficult' => 'Difficult' ), $this->input->post('group') ? $this->input->post('group') : $question->group); ?></td>
	</tr>
	<tr>
		<td></td>
		<td><?php echo form_submit('submit', 'Save', 'class="btn btn-primary"'); ?></td>
	</tr>
</table>
<?php echo form_close();?>