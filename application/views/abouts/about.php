<body class="off-canvas hide-extras">
<?php
	if($loggedin>0){
		$this->load->view('includes/header');
	}
	else {
		$this->load->view('includes/guest-header');
	}
?>
<body class="off-canvas hide-extras">
	<?php
	if($loggedin>0){
		$this->load->view('navigation');
		echo '</div>';
	}
	else echo '<h3>About</h3>';
	?>	
<!--Modal - Sign In-->
<div id="modalSignIn" class="reveal-modal small">
  <form id="formSignIn" method="post">
    <h2>Welcome back, user!</h2>
    <fieldset>
      <legend>Sign In to intelleq</legend>
    <div class="row">
      <div class="large-12 columns">
      <label>Username</label>
      <input type="text" id="signinUentry" required name="username" placeholder="Enter username or email">
    </div>
      <div class="large-12 columns">
      <label>Password</label>
      <input type="password" id="signinPass" required name="password" placeholder="Password">
    </div>
    </fieldset>

    <div class="row">
      <div class="large-12 columns">
        <ul class="button-group radius">
          <li><input type="submit" class="small button" value="Sign In"></li>
          <li><a class="small button alert" href="#" data-reveal-id="modalForgot">Forgot Password</a></li>
      </ul>
      <input type="submit" style="position: absolute; height: 0px; width: 0px; border: none; padding: 0px;"
    hidefocus="true" tabindex="-1"/>
      </div>
    </div>
  </form>
  <span id="signinInfo"></span>
  <a class="close-reveal-modal">x</a>
</div>

<!--Modal - Forgot Password-->
<div id="modalForgot" class="reveal-modal small">
  <form id="formForget">
    <h2>Oh no!</h2>
    <fieldset>
      <legend>Password reset</legend>
    <div class="row">
      <div class="large-12 columns">
      <label>E-mail address</label>
      <input type="email" id="forgetEmail" name="email" required placeholder="Enter e-mail address here">
      </div>
    </div>
    </fieldset>

  <div class="row">
    <div class="large-12 columns">
      <ul class="button-group radius">
        <li><a class="small button" href="#" data-reveal-id="modalSignIn">&laquo; Back to Sign In</a></li>
        <li><input class="small button" type="submit" value="Reset Password"></input></li>
      </ul>
    </div>
  </div>
  </form>
  <span id="forgetInfo"></span>
  <a class="close-reveal-modal">x</a>
</div>

<!--Modal - Sign Up-->
<div id="modalSignUp" class="reveal-modal small">
  <form id="formSignUp">
    <h2>Start here!</h2>
    <fieldset>
      <legend>Personal Information</legend>
      <div class="row">
        <div class="large-6 columns">
          <label>First Name</label>
          <input type="text" id="first_name" name="first_name" required placeholder="Enter first name">
        </div>
        <div class="large-6 columns">
          <label>Last Name</label>
          <input type="text" id="last_name" name="last_name" required placeholder="Enter last name">
        </div>
      </div>
      <div class="row">
        <div class="large-12 columns">
          <label class id="signupEmailLabel">E-mail Address</label>
          <input type="text" id="signupEmail" class name="email_address" required placeholder="Enter e-mail address">
        </div>
      </div>
    </fieldset>
    <fieldset>
      <legend>Account Information</legend>
      <div class="row">
        <div class="large-12 columns">
          <label id="signupUnameLabel">Username</label>
          <input type="text" id="signupUname" name="username" required placeholder="Enter desired username">
        </div>
      </div>
      <div class="row">
        <div class="large-12 columns">
          <label id="signupPass1Label">Password</label>
          <input type="password" id="signupPass1" name="password" required placeholder="Password">
        </div>
      </div>
      <div class="row">
        <div class="large-12 columns">
          <label id="signupPass2Label">Retype Password</label>
          <input type="password" id="signupPass2" name="password2" required placeholder="Retype password">
        </div>
      </div>
    </fieldset>
    <div class="row">
      <div class="push-8">
        <input type="submit" name="Create Account" class="button radius success">
      </div>
    </div>
    </form>  
  <a class="close-reveal-modal">x</a>
</div>

<!--Modal - Confirmation-->
<div id="modalConfirm" class="reveal-modal small">
    <h2>Confirmation mail sent</h2>
    <p>Check your something something.</p>
  <a class="close-reveal-modal">x</a>
</div>
<?php $this->load->view('includes/footer');?>
