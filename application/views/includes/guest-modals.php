<!--Modal - Sign In-->
<div id="modalSignIn" class="reveal-modal small">
  <?php echo form_open('login/validate');?>
  <form>
    <h2>Welcome back, user!</h2>
    <fieldset>
      <legend>Sign In to intelleq</legend>
    <div class="row">
      <div class="large-12 columns">
      <label>Username</label>
      <input type="text" id="username" name="username" required placeholder="Enter username or email">
    </div>
      <div class="large-12 columns">
      <label>Password</label>
      <input type="password" id="password" name="password" required placeholder="Password">
    </div>
    </fieldset>

  <div class="row">
    <div class="large-12 columns">
      <ul class="button-group radius">
        <input type="submit" name="Sign In" value="Sign In" class="small button">
        <?php echo form_close();?>
        </form>
        <li><a class="small button alert" href="#" data-reveal-id="modalForgot">Forgot Password</a></li>
        <!--li><a class="small button alert" href="login/reset">Forgot Password</a></li-->
    </ul>
    </div>
  </div>
  <a class="close-reveal-modal">x</a>
</div>

<!--Modal - Forgot Password-->
<div id="modalForgot" class="reveal-modal small">
  <?php echo form_open('login/forget');?>
  <form>
    <h2>Oh no!</h2>
    <fieldset>
      <legend>Password reset</legend>
    <div class="row">
      <div class="large-12 columns">
      <label>E-mail address</label>
      <input type="email" id="email" name="email" required placeholder="Enter e-mail address here">
    </div>
    </fieldset>

  <div class="row">
    <div class="large-12 columns">
      <ul class="button-group radius">
        <li><a class="small button" href="#" data-reveal-id="modalSignIn">&laquo; Back to Sign In</a></li>
        <input class="small button" type="submit" name="Submit">
        <?php echo form_close();?>
    </ul>
    </div>
  </div>
  </form>
  <a class="close-reveal-modal">x</a>
</div>

<!--Modal - Sign Up-->
<div id="modalSignUp" class="reveal-modal small">
  <?php echo form_open('login/create_member');?>
  <form>
    <h2>Start here!</h2>
    <fieldset>
      <legend>Personal Information</legend>
    <div class="row">
      <div class="large-12 columns">
      <label>First Name</label>
      <input type="text" id="first_name" name="first_name" required placeholder="Enter first name">
    </div>
    <div class="large-12 columns">
      <label>Last Name</label>
      <input type="text" id="last_name" name="last_name" required placeholder="Enter last name">
    </div>
    <div class="large-12 columns">
      <label>E-mail Address</label>
      <input type="text" id="email_address" name="email_address" required placeholder="Enter e-mail address">
    </div>
    </fieldset>
    <fieldset>
      <legend>Account Information</legend>
    <div class="row">
      <div class="large-12 columns">
      <label>Username</label>
      <input type="text" id="username" name="username" required placeholder="Enter desired username">
    </div>
    <div class="large-12 columns">
      <label>Password</label>
      <input type="password" id="password" name="password" required placeholder="Password">
    </div>
    <div class="large-12 columns">
      <label>Retype Password</label>
      <input type="password" id="password2" name="password2" required placeholder="Retype password">
    </div>
    </fieldset>
  <div class="row">
    <div class="push-8">
    <input type="submit" name="Create Account" class="button radius success">
    <?php echo form_close();?>
    </form>  
  </div>
  </div>
  <a class="close-reveal-modal">x</a>
</div>

<!--Modal - Confirmation-->
<div id="modalConfirm" class="reveal-modal small">
    <h2>Confirmation mail sent</h2>
    <p>Check your email address to know your password.</p>
  <a class="close-reveal-modal">x</a>
</div>