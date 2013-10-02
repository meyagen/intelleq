<header>
<div class="fixed">
<nav class="top-bar fixed">
  <ul class="title-area">
    <li class="name"><h1><a href="<?php echo base_url(); ?>">intelleq</a></h1></li>
    <li class="toggle-topbar menu-icon"><a href=""><span></span></a></li>
  </ul>
  <section class="top-bar-section">
    <ul class="right"style="background:rgba(105, 34, 34, 0)">
      <li style="padding-right:10;padding-left:10"><a class="button radius" href="#" data-reveal-id="modalSignIn">Sign In</a></li>
      <li style="padding-right:10;padding-left:10"><a class="button radius success" href="#" data-reveal-id="modalSignUp">Sign Up</a></li>
      <li style="padding-right:0;padding-left:10">
        <input type="text" placeholder="Search intelleq">
      </li>
    </ul>
  </section>
</div>
</header>

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