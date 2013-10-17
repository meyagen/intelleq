<body class="off-canvas hide-extras" style="padding-top:0px !important">

<!--Navigation Bar-->
<?php $this->load->view("includes/guest-header");?>

<!--Jumbotron-->
<section role="main">
  <header id="homepage" class="homeslide">
    <div class="row hide-for-small"style="padding-top:50px;padding-bottom:50px;"></div>
    <div class="row hide-for-medium-up"style="padding-top:20px;padding-bottom:20px;"></div>
    <div class="row">
      <div class="large-4 columns">
        <div class="pic hide-for-small" id="bigLogo" style="padding-top:183px;padding-bottom:183px;"></div>
        <div class="pic hide-for-medium-up" id="bigLogo" style="padding-top:147px;padding-bottom:147px;background-size:213px 294px;"></div>
      </div>
      <div class="large-5 pull-3 columns" id="jumboOverlay">
        <div class="row hide-for-small"style="padding-top:75px;padding-bottom:75px;"></div>
        <h1 class="white">Master the knowledge <br class="hide-for-small"/>in you</h1>
        <h4 class="white">An online practice
          <br class="hide-for-small"/>standardized examination</h4><br/>
        <a class="button radius success large" href="#" data-reveal-id="modalSignUp"><h4 class="white">Let's get started!</h4></a>
      </div>
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
        <h1><center>Train</center></h1>
        <p class="justify"> 
          The site is loaded with tons of reference materials that will help you train,  
          all indexed per subject for your convenience and ease of access.
        </p>
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
        <h1><center>Test</center></h1>
        <p class="justify">
          We provide a practice exam which covers 4 subject areas: Mathematics, Science, Language and Reading Comprehension.
          Each subject consists of questions with varying difficulty from easy to hard. 
        </p>
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
        <h1><center>Track</center></h1>
        <p class="justify">
          Gain access to a specialized score-tracking system
          that records your results on each subject and informs you of areas for improvement.
        </p>
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
        <center><h1>Preparing you to be better<br class="hide-for-small"/>and training you to be greater</h1>
        <p>   
          Be one step closer to your dream. Sign up now by clicking the button below.
        </p>
        <a class="button radius success large" href="#" data-reveal-id="modalSignUp"><h4 class="white">Let's get started!</h4></a>
        </center>
      </div>
    </div>
  </div>
  <div class="row hide-for-small"><div class="large-12 columns padding-large"></div></div>
    <div class="row hide-medium-up"><div class="large-12 columns padding-small"></div></div>
  </div>  
</section>

<!--Footer - Site Map-->
<?php $this->load->view("includes/footer");?>

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