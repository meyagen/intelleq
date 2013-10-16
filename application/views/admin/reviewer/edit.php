<h3><?php echo empty($reviewer->id) ? 'Add a new link' : 'Edit link' . $reviewer->title; ?></h3>
<?php echo validation_errors(); ?>
<?php echo form_open(); ?>
<table class="table">
	<tr>
		<td>Category</td>
		<td><?php 	
					echo form_dropdown('category', 
					array( 'Category' => 'Category',
					'English' => 'English',
					'General_Knowledge' => 'General Knowledge',
					'Mathematics' => 'Mathematics',
					'Reading_Comprehension' => 'Reading Comprehension',
					'Science' => 'Science' ),
					$this->input->post('category') ? $this->input->post('category') : $reviewer->category); 
		?></td>
	</tr>
	<tr>
		<td>Title</td>
		<td><?php echo form_input('title', set_value('title', $reviewer->title)); ?></td>
	</tr>
	<tr>
		<td>Link</td>
		<td><?php echo form_input('link', set_value('link', $reviewer->link)); ?></td>
	</tr>

	<tr>
		<td></td>
		<td><?php echo form_submit('submit', 'Save', 'class="btn btn-primary"'); ?></td>
	</tr>

</table>
<?php echo form_close();?>