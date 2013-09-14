<!--Navigation Bar-->
<header>
<div class="fixed">
<nav class="top-bar fixed">
  <ul class="title-area">
    <li class="name"><h1><a href="#">intelleq</a></h1></li>
    <li class="toggle-topbar menu-icon"><a href="#"><span></span></a></li>
  </ul>
  <section class="top-bar-section">
    <ul class="right"style="background:rgba(105, 34, 34, 0)">
        <li style="padding-right:10;padding-left:10"><a><?php echo ucfirst($firstname) . " " . ucfirst($lastname); ?></a></li>
        <li style="padding-right:10;padding-left:10"><a class="button radius" href="login/logout">Sign Out</a></li>
        <li style="padding-right:0;padding-left:10">
            <input type="text" placeholder="Search intelleq">
        </li>
    </ul>
  </section>
</div>
</header>

<h2>Settings</h2>
<fieldset>
  <legend>Edit User Info</legend>
<div class="row">
  <div class="large-12 columns">
  <?php echo form_open('settings/edit');?>
  <form>
    <label>First Name</label>
    <input type="text" id="new_first_name" name="new_first_name" placeholder="Enter first name">
  </div>
  <div class="large-12 columns">
    <label>Last Name</label>
    <input type="text" id="new_last_name" name="new_last_name" placeholder="Enter last name">
  </div>
  <div class="large-12 columns">
  <label>Username</label>
  <input type="text" id="new_username" name="new_username" placeholder="Enter desired username">
</div>
<div class="large-12 columns">
  <label>Password</label>
  <input type="password" id="new_password" name="new_password" placeholder="Password">
</div>
<div class="large-12 columns">
  <label>Email</label>
  <input type="text" id="new_email" name="new_email" placeholder="Enter new email.">
</div>
</fieldset>

<div class="row">
<div class="push-8">
  <input type="submit" name="Change" class="button radius success">
  <?php echo form_close();?>
  </form>
  <?php echo form_open('settings/deactivate');?>
  <form>
  <input type="submit" name="Deactivate Account" class="button radius success">
  <?php echo form_close();?>
  </form>

</div>
</div>
<a class="close-reveal-modal">x</a>

<!--Footer - Site Map-->
<section role="footmap" style="box-shadow:0px 0px 1px #000000">
  <footer id="universal" class="footer">
  <div class="row fullrow">
    <div class="large-7 columns">
      <div class="large-4 columns">
        <center><h3 class="white">ABOUT</h3>
        <ul class="white" style="list-style:none">
          <li><a href="about">Who We Are</a></li>
          <li><a href="mission">Our Mission</a></li>
          <li><a href="feedback">Feedback</a></li>
        </ul></center>
      </div>
      <div class="large-4 columns">
        <center><h3 class="white">HELP</h3>
        <ul class="white" style="list-style:none">
          <li><a href="faq">FAQ</a></li>
          <li><a href="contactus">Contact Us</a></li>
          <li><a href="report">Report a Bug</a> </li>
        </ul></center>
      </div>
      <div class="large-4 columns">
        <center><h3 class="white">SOCIAL</h3>
        <ul class="white" style="list-style:none">
          <li><a href="http://facebook.com">Facebook</a></li>
          <li><a href="http://twitter.com">Twitter</a></li>
          <li><a href="http://plus.googlecom">Google+</a></li>
        </ul></center>
      </div>
    </div>
  </div>
  <div class=" row fullrow">
    <div class="large-4 push-8 columns">
      <div>
        <center><h1 class="white">logo</h1>
        <p class="white">Andres x Bunao x Mendoza x Ventura<br/>2013 | All rights reserved</p>
        </center>
      </div>
    </div>
  </div>
  </footer>
</section>