<section>
	<h2>Search Members</h2>
	<p></p>
	<?php
		echo form_open('admin/user/search_member');
		echo form_input('name');
		echo form_submit('submit', 'Search', 'class="btn btn-primary"');
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

		<?php if($user != null): //foreach($admins as $admin): ?>	
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
		<?php else: ?>
		<tr>
			<td colspan="3">We could not find the specified user.</td>
		</tr>
<?php endif; ?>	
		</tbody>
	</table>

</section>