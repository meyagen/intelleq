
<body class="admin-log">
<div class="row">
	<div class = "large-6 push-3 columns" style="background-color:#fff;box-shadow: 0px 1px 1px #888888;">
		<div class = "large-10 push-1 columns">
			<div class="row">
				<h3>Admin Log In</h3>
			</div>
			<div class="row">
				<?php echo validation_errors(); ?>
				<?php echo form_open(); ?>
				<form id="adminSignIn">
					<fieldset>
						<legend>Account Information</legend>
						<div class="large-12 columns">
							<label>Email</label>
							<input type = "text" required name="email" placeholder="E-mail address">
						</div>
						<div class="large-12 columns">
							<label>Password</label>
							<input type = "password" required name="password" placeholder="Password">
						</div>
					</fieldset>
					<input type="submit" name="submit" value="Log In" class="button radius success">
				</form>
				<?php echo form_close();?>
				<span id="adminInfo"></span>
			</div>
		</div>
	</div>
</div>
</body>