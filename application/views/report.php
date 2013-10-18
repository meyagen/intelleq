<?php $this->load->view('components/page_head'); ?>
<body class="off-canvas hide-extras" style="margin-top:45px">
<?php
	if($loggedin>0){
		$this->load->view('includes/header');
	}
	else {
		$this->load->view('includes/header2');
	}
?>
 <div class="row">
 	 <div class="row hide-for-small"><div class="large-12 columns padding-text"></div></div>
 	 <div class="white">
      <div class"large-8 push-3 columns">
        <h1 class="white">Report a Bug</h1>
        <p class="sub">
			Have you experienced any bugs on our site? 
			Well, you can submit your bug reports here to make our site more efficient and perform better.
        </p>
      </div>
     </div>
	<div class="large-10 push-1 columns">
	<fieldset>
	<form id="formReport">
		<div class="row">
			<div class="large-12 columns">
				<label class="white">Name</label>
				<input type="text" name="user" class="text" required placeholder="First Name Last Name">
			</div>
		</div>
		<div class="row">
			<div class="large-12 columns">
				<label id="reportEmailLabel" class="white">E-mail Address</label>
				<input type="email" id="reportEmail"name="email_address" class="text" required placeholder="Enter Valid E-mail" >
			</div>
		</div>
		<div class="row">
			<div class="large-12 columns">
				<label id="reportSubjectLabel" class="white">Subject</label>
				<input type="text" id="reportSubject"name="subject" class="text" required placeholder="Subject" >
			</div>
		</div>
		<div class="row">
			<div class="large-12 columns">
				<label class="white">Message</label>
				<textarea name="message" cols="50" rows="50" tabindex="101" data-min-length="" required placeholder="Report Message"></textarea>
			</div>
		</div>
		<div class="row">
			<div class="large-2 push-9">
				<input type="submit" value="Send Report" name="report" class="button radius success expand">
			</div>
		</div>
	</form>
	</fieldset>
	</div>
</div>

<!--Modal - Confirmation-->
<div id="modalConfirm" class="reveal-modal small">
    <h2>Your report is sent successfully!</h2>
    <p>Thank you for your help.</p>
  <a class="close-reveal-modal">x</a>
</div>

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
  <a class="close-reveal-modal x">x</a>
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
  <a class="close-reveal-modal x">x</a>
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
  <a class="close-reveal-modal x">x</a>
</div>

<!--Modal - Confirmation-->
<div id="modalConfirm" class="reveal-modal small">
    <h2>Confirmation mail sent</h2>
    <p>Check your something something.</p>
  <a class="close-reveal-modal">x</a>
</div>
<?php $this->load->view('includes/footer');?>
<?php $this->load->view('components/page_tail');?>