<h1 style = "text-align: center;">Create an Account</h1>
<?php echo validation_errors(); ?>
<fieldset>
	<legend>Personal Information</legend>

	<?php

		echo form_open('login/create_member');
		echo form_input('first_name', set_value('first_name', 'First Name'));
		echo form_input(('last_name'), set_value('last_name', 'Last Name'));
		echo form_input(('email_address'), set_value('email_address', 'Email Address'));

	?>
</fieldset>

<fieldset>
	<legend>Login Info </legend>

	<?php
		echo form_input('username', set_value('username', 'Username'));
		echo form_input('password', set_value('password', 'Password'));
		echo form_input('password2', set_value('password2', 'Password Confirm'));

		echo "<br/><br/><p>";
		echo form_submit('submit', 'Create Account');
		echo "</p>";

	?>
</fieldset>