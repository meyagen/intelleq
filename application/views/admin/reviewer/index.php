<section>
	<h2>Reviewers</h2>
	<?php echo anchor('admin/reviewer/edit', '<i class="icon-plus"></i> Add a Link'); ?>
	<table class="table table-striped">
		<thead>
			<tr>
				<th>Title</th>
				<th>Category</th>
				<th>Link</th>
				<th>Edit</th>
				<th>Delete</th>
			</tr>
		</thead>
		<tbody>
<?php if(count($reviewers)): foreach($reviewers as $reviewer): ?>	
		<tr>
			<td><?php echo anchor('admin/reviewer/edit/' . $reviewer->id, $reviewer->title); ?></td>
			<td><?php if(strcmp($reviewer->category, "Reading_Comprehension") == 0) echo "Reading Comprehension";
						elseif(strcmp($reviewer->category, "General_Knowledge") == 0) echo "General Knowledge";
						else echo $reviewer->category;?></td>
			<td><?php echo $reviewer->link; ?></td>
			<td><?php echo btn_edit('admin/reviewer/edit/' . $reviewer->id); ?></td>
			<td><?php echo btn_delete('admin/reviewer/delete/' . $reviewer->id); ?></td>
		</tr>
<?php endforeach; ?>
<?php else: ?>
		<tr>
			<td colspan="3">We could not find any Reviewers.</td>
		</tr>
<?php endif; ?>	
		</tbody>
	</table>
</section>