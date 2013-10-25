<section>
	<h2>Questions</h2>
	<?php echo anchor('admin/question/edit', 'Add a Question'); ?>
</br></br>
	<p></p>
	<?php
		echo form_open('admin/question/search_question');
		echo form_input('name');
		echo "<input type=\"radio\" id=\"easy\" value=\"easy\" name=\"difficulty\"><label for=\"easy\" style=\"display: inline\"><span></span>Easy</label>";
		echo "<input type=\"radio\" id=\"normal\" value=\"normal\" name=\"difficulty\"><label for=\"normal\" style=\"display: inline\"><span></span>Normal</label>";
		echo "<input type=\"radio\" id=\"difficult\" value=\"difficult\" name=\"difficulty\"><label for=\"difficult\" style=\"display: inline\"><span></span>Difficult</label>";
		echo "<br>";
		echo form_submit('submit', 'Search Question', 'class="btn btn-primary"');
		echo form_close();
	?>
	<p></p>
	<?php echo "<h3>Total number of questions: </h3>" . "<h3>".count($questions)."</h3>"; ?>
	</br></br>
	<table class="table table-striped">
		<thead>
			<tr>
				<th>Title</th>
				<th>Subject Area</th>
				<th>Edit</th>
				<th>Delete</th>
			</tr>
		</thead>
		<tbody>
<?php if(count($questions)): foreach($questions as $question): ?>	
		<tr>
			<td><?php echo anchor('admin/question/edit/' . $question->id, $question->title); ?></td>
			<td><?php if(strcmp($question->subject, "Reading_Comprehension") == 0) echo "Reading Comprehension";
						else echo $question->subject;?></td>
			<td><?php echo btn_edit('admin/question/edit/' . $question->id); ?></td>
			<td><?php echo btn_delete('admin/question/delete/' . $question->id); ?></td>
		</tr>
<?php endforeach; ?>
<?php else: ?>
		<tr>
			<td colspan="3">We could not find any questions.</td>
		</tr>
<?php endif; ?>	
		</tbody>
	</table>
</section>