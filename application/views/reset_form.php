<div id="login_form">
	<h1><center>Reset Password?</center></h1>
	<?php
		echo form_open('login/forget');

		echo "<br/><p><center>";
		echo form_input('email', 'Email');
		echo "</center></p>";

		echo "<p><center>";
		echo form_submit('submit', 'Reset Password');
		echo "</center></p>";
	?>
</div>