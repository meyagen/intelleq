<body class="admin-log">
<div class="row" style="padding-top:100px;padding-bottom:100px;">
<div class="row">
	<div class = "large-6 push-3 columns" style="background-color:#fff;box-shadow: 0px 1px 1px #888888;margin-left:10px;margin-right:10px;">
		<div class = "large-10 push-1 columns" style="padding-top:30px">
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
					<span id="adminInfo" class="error success">Please press Enter to submit form. Button's not working.</span>
					<input type="submit" style="position: absolute; height: 0px; width: 0px; border: none; padding: 0px;"
    hidefocus="true" tabindex="-1"/>
					<a href="#" onclick="$('#adminSignIn').submit()" class="button radius success">Submit</a>
				</form>
				<?php echo form_close();?>
			</div>
		</div>
	</div>
</div>
</body>