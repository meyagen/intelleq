<h3><?php echo empty($question->id) ? 'Add a new question' : 'Edit question ' . $question->title; ?></h3>
<?php echo validation_errors(); ?>
<?php echo form_open(); ?>
<table class="table">
	<tr>
		<td>Subject Area</td>
		<td><?php 	//echo form_dropdown('group', 
					echo form_dropdown('subject', 
					array( 'Subject Area' => 'Subject Area',
					'English' => 'English',
					'General_Knowledge' => 'General Knowledge',
					'Mathematics' => 'Mathematics',
					'Reading_Comprehension' => 'Reading Comprehension',
					'Science' => 'Science' ),
					$this->input->post('subject') ? $this->input->post('subject') : $question->subject); 
		?></td>
	</tr>
	<tr>
		<td>Title</td>
		<td><?php echo form_input('title', set_value('title', $question->title)); ?></td>
	</tr>
	<tr>
		<td>Question</td>
		<td><?php echo form_textarea('ask', set_value('ask', $question->ask), 'class="tinymce"'); ?></td>
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
		<td>Difficulty</td>
		<td><?php echo form_dropdown('difficulty', 
					array('Difficulty' => 'Difficulty', 
						'Easy' => 'Easy',
						'Normal' => 'Normal', 
						'Difficult' => 'Difficult' ), 
					$this->input->post('difficulty') ? $this->input->post('difficulty') : $question->difficulty); ?></td>
	</tr>
	<tr>
		<td></td>
		<td><?php echo form_submit('submit', 'Save', 'class="btn btn-primary"'); ?></td>
	</tr>
</table>
<?php echo form_close();?>