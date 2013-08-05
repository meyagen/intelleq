<section>
	<h2>Questions</h2>
	<?php echo anchor('admin/question/edit', '<i class="icon-plus"></i> Add a Question'); ?>
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
			<td><?php echo $question->group; ?></td>
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