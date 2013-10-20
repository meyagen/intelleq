<section>
	<h2>Search</h2>
	<?php echo anchor('admin/question/edit', '<i class="icon-plus"></i> Add a question'); ?>
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
	
	<?php echo "<h3>Total number of searches: </h3>" . "<h3>".count($question)."</h3>"; ?>
	</br></br>
	<table class="table table-striped">
		<thead>
			<tr>
				<th>Title</th>
				<th>Question</th>
				<th>Subject</th>
				<th>Difficulty</th>
			</tr>
		</thead>
		<tbody>
		<?php if(count($question)): foreach($question as $questions): ?>
				<tr>
					<td><?php echo anchor('admin/question/edit/' . $questions->id, $questions->title); ?></td>
					<td><?php echo $questions->ask; ?></td>
					<td><?php echo $questions->subject; ?></td>
					<td><?php echo $questions->difficulty; ?></td>
					<td><?php echo btn_edit('admin/question/edit/' . $questions->id); ?></td>
					<td><?php echo btn_delete('admin/question/delete/' . $questions->id); ?></td>
				</tr>
			<?php endforeach; ?>
		<?php else: ?>
		<tr>
			<td colspan="3">We could not find the question.</td>
		</tr>
		<?php endif; ?>	
		</tbody>
	</table>

</section>