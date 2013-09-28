<body class="off-canvas hide-extras">

<!--Navigation Bar-->
<?php $this->load->view('includes/header2'); ?>

<!--Jumbotron-->
<section role="main">
  <header id="homepage" class="homeslide">
    <div class="row">
      <div class="large-6 columns">
        <h1 class="white" style="text-shadow: 0px 1px 5px #888888;">Knowledge made <br class="hide-for-small"/>accessible.</h1>
        <h4 class="white">Something about the site <br class="hide-for-small"/>must be placed here.</h4>
        <a class="button radius success" href="#" data-reveal-id="modalSignUp">Let's get started!</a></li>
    </div>
  </header>
</section>

<!--Train-->
<section>
  <div class="homepageFeatureOdd">
    <div class="row hide-for-small"><div class="large-12 columns padding-large"></div></div>
    <div class="row hide-for-medium-up"><div class="large-12 columns padding-small"></div></div>
    <div class="row">
    <div class="large-5 push-1 columns">
      <div class="pic" id="homepageFeatureImgTrain" style="padding-top:100px;padding-bottom:100px;"></div>
    </div>
    <div class="large-4 pull-1 columns">
      <div class="row hide-for-small"><div class="large-12 columns padding-text"></div></div>
      <div>
        <h1>train.</h1>
        <p>The site is loaded with tons of reference materials, all indexed per subject for your convenience and ease of access.</p>
      </div>
      <div class="row hide-for-small"><div class="large-12 columns padding-text"></div></div>
    </div>
  </div>
    <div class="row hide-for-small"><div class="large-12 columns padding-large"></div></div>
    <div class="row hide-for-medium-up"><div class="large-12 columns padding-small"></div></div>
  </div>
</section>

<!--Test-->
<section>
  <div class="homepageFeatureEven">
    <div class="row hide-for-small"><div class="large-12 columns padding-large"></div></div>
    <div class="row hide-for-medium-up"><div class="large-12 columns padding-small"></div></div>
    <div class="row">
    <div class="large-5 push-6 columns">
      <div class="pic" id="homepageFeatureImgTest" style="padding-top:100px;padding-bottom:100px;"></div>
    </div>
    <div class="large-4 pull-7 columns">
      <div class="row hide-for-small"><div class="large-12 columns padding-text"></div></div>
      <div>
        <h1>test.</h1>
        <p>We also provide a huge selection of exercise materials, ranging from short quizzes to full-length exam simulations.</p>
      </div>
      <div class="row hide-for-small"><div class="large-12 columns padding-text"></div></div>
    </div>
  </div>
    <div class="row hide-for-small"><div class="large-12 columns padding-large"></div></div>
    <div class="row hide-for-medium-up"><div class="large-12 columns padding-small"></div></div>
  </div>
</section>

<!--Track-->
<section>
  <div class="homepageFeatureOdd">
    <div class="row hide-for-small"><div class="large-12 columns padding-large"></div></div>
    <div class="row hide-for-medium-up"><div class="large-12 columns padding-small"></div></div>
    <div class="row">
    <div class="large-5 push-1 columns">
      <div class="pic" id="homepageFeatureImgTrack" style="padding-top:100px;padding-bottom:100px;"></div>
    </div>
    <div class="large-4 pull-1 columns">
      <div>
        <div class="row hide-for-small"><div class="large-12 columns padding-text"></div></div>
        <h1>track.</h1>
        <p>Gain access to a specialized score-tracking system that records your results and informs you of areas for improvement.</p>
      </div>
      <div class="row hide-for-small"><div class="large-12 columns padding-text"></div></div>
    </div>
  </div>
  <div class="row hide-for-small"><div class="large-12 columns padding-large"></div></div>
    <div class="row hide-for-medium-up"><div class="large-12 columns padding-small"></div></div>
  </div>
</section>

<!--Last Pull-->
<section>
  <div class="homepageFeatureEven">
    <div class="row hide-for-small"><div class="large-12 columns padding-large"></div></div>
    <div class="row hide-medium-up"><div class="large-12 columns padding-small"></div></div>
    <div class="row">
    <div class="large-10 large-centered columns">
      <div>
        <center><h1>Something encouraging the person to <br class="hide-for-small"/>proceed should be placed here.</h1>
        <p>It's probably because we're awesome and all. Go, click that button below. You know you want to.</p>
        <a class="button radius success" href="#" data-reveal-id="modalSignUp">Let's get started!</a></li>
        </center>
      </div>
    </div>
  </div>
  <div class="row hide-for-small"><div class="large-12 columns padding-large"></div></div>
    <div class="row hide-medium-up"><div class="large-12 columns padding-small"></div></div>
  </div>
</section>

<!--Footer - Site Map-->
<?php $this->load->view('includes/footer'); ?>
<!--Modal - Sign In-->
<div id="modalSignIn" class="reveal-modal small">
  <form id="formSignIn">
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
          <li><input type="submit" name="Sign In" value="Sign In" class="small button"></input></li>
          <li><a class="small button alert" href="#" data-reveal-id="modalForgot">Forgot Password</a></li>
          <!--li><a class="small button alert" href="login/reset">Forgot Password</a></li-->
      </ul>
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