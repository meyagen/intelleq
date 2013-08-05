<div class="modal-header">
	<h3>Log in</h3>
	<p>Please log in using your credentials</p>
</div>

<div id="login_form">
	<?php echo form_open('login/validate_credentials');?>
<table class="table">
	<tr>
		<td>Email</td>
		<td><?php echo form_input('username'); ?></td>
	</tr>
	<tr>
		<td>Password</td>
		<td><?php echo form_password('password'); ?></td>
	</tr>
	<tr>
		<td></td>
		<!--<td><?php echo form_submit('submit', 'Login', 'class="btn btn-primary"'); ?></td> -->
		<td><INPUT  type="submit" name="login_sign_up" class="btn btn-primary" value="Login"></td>
		<td><INPUT  type="submit" name="login_sign_up" class="btn btn-primary" value="Sign-up">
		<INPUT  type="submit" name="login_sign_up" class="btn btn-primary" value="Forgot Password?"></td>
	</tr>
	
</table>
<?php echo form_close();?>
</div>

