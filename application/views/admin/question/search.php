<section>
	<h2>Search</h2>
	<?php echo anchor('admin/question/edit', '<i class="icon-plus"></i> Add a question'); ?>
	<p></p>
	<?php
		echo form_open('admin/question/search_question');
		echo form_input('name');
		echo form_submit('submit', 'Search Question', 'class="btn btn-primary"');
	?>
	<p></p>

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
					<td><?php echo $questions->group; ?></td>
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