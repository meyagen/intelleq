<section>
	<h2>Search</h2>
	<?php echo anchor('admin/user/edit', '<i class="icon-plus"></i> Add a user'); ?>
	<p></p>
	<?php
		echo form_open('admin/user/search_admin');
		echo form_input('name');
		echo form_submit('submit', 'Search', 'class="btn btn-primary"');
	?>
	<p></p>

	<table class="table table-striped">
		<thead>
			<tr>
				<th>Email</th>
				<th>Edit</th>
				<th>Delete</th>
			</tr>
		</thead>
		<tbody>

		<?php if($admin != null):?>	
				<tr>
					<td><?php echo anchor('admin/user/edit/' . $admin->id, $admin->name); ?></td>
					<td><?php echo $admin->email; ?></td>
					<td><?php echo btn_edit('admin/user/edit/' . $admin->id); ?></td>
					<td><?php echo btn_delete('admin/user/delete/' . $admin->id); ?></td>
				</tr>
		<?php else: ?>
		<tr>
			<td colspan="3">We could not find the specified user.</td>
		</tr>
<?php endif; ?>	
		</tbody>
	</table>

</section>