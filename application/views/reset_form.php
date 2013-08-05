<div id="login_form">
	<h1>Reset Password?</h1>
	<?php
		echo form_open('login/forget');
		echo form_input('email', 'Email');
		echo form_submit('submit', 'Reset Password');
	?>
</div>