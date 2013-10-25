<section>
	<h2>Users</h2>
	<h3>Admin</h3>
	</br>
	
	<p></p>
	<?php
		echo form_open('admin/user/search_admin');
		echo form_input('name');
		echo form_submit('submit', 'Search Admin', 'class="btn btn-primary"');
		echo form_close();
	?>
	<p></p>

	<table class="table table-striped">
		<thead>
			<tr>
				<th>Name</th>
				<th>Email</th>
				<th>Edit</th>
				<th>Delete</th>
			</tr>
		</thead>
		<tbody>

		<?php if(count($admins)): foreach($admins as $admin): ?>	
				<tr>
					<td><?php echo anchor('admin/user/edit/' . $admin->id, $admin->name); ?></td>
					<td><?php echo $admin->email; ?></td>
					<td><?php echo btn_edit('admin/user/edit/' . $admin->id); ?></td>
					<td><?php echo btn_delete('admin/user/delete/' . $admin->id); ?></td>
				</tr>
		<?php endforeach; ?>
		<?php else: ?>
		<tr>
			<td colspan="3">We could not find any users.</td>
		</tr>
<?php endif; ?>	
		</tbody>
	</table>
<?php echo anchor('admin/user/edit', '<h3>Add an admin</h3>'); ?>
<p></p>
</br></br></br>
<h3>Members</h3>
</br></br>
<?php
	echo form_open('admin/user/search_member');
	echo form_input('name');
	echo form_submit('submit', 'Search Members', 'class="btn btn-primary"');
	echo form_close();
?>
	<p></p>

	<table class="table table-striped">
		<thead>
			<tr>
				<th>Name</th>
				<th>Username</th>
				<th>Email</th>
				<th>Active</th>
				<th>Activate</th>
				<th>Deactivate</th>
			</tr>
		</thead>
		<tbody>
<?php if(count($users)): foreach($users as $user): ?>
		<tr>
			<td><?php echo $user->first_name ." " .$user->last_name; ?></td>
			<td><?php echo $user->username; ?></td>
			<td><?php echo $user->email_address; ?></td>
			<td><?php if (strcmp($user->activate, "true") == 0) echo 'Yes';
					else echo 'No'; ?>
			</td>
			<td><?php echo btn_delete('admin/user/activate/' . $user->id); ?></td>
			<td><?php echo btn_delete('admin/user/deactivate/' . $user->id); ?></td>
		</tr>
<?php endforeach; ?>
<?php else: ?>
		<tr>
			<td colspan="3">We could not find any users.</td>
		</tr>
<?php endif; ?>	
		</tbody>
	</table>
</section>