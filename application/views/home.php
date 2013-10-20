<body class="off-canvas hide-extras" style="padding-top:0px !important">

<script>
if (navigator.userAgent.toLowerCase().indexOf("chrome") >= 0)
{
    var _interval = window.setInterval(function ()
    {
        var autofills = $('input:-webkit-autofill');
        if (autofills.length > 0)
        {
            window.clearInterval(_interval); // stop polling
            autofills.each(function()
            {
                var clone = $(this).clone(true, true);
                $(this).after(clone).remove();
            });
        }
    }, 20);
}
</script>

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
      <div class="large-6 pull-2 columns" id="jumboOverlay">
        <div class="row hide-for-small"style="padding-top:50px;padding-bottom:50px;"></div>
        <h1 class="white">Master the knowledge <br class="hide-for-small"/>in you</h1>
        <h4 class="white">An online practice
          <br class="hide-for-small"/>standardized examination</h4><br/>
        <a class="button radius success large expand" href="#" data-reveal-id="modalSignUp" style="margin-bottom:10px"><h4 class="white">Let's get started!</h4></a>
		<a class="button radius expand" href="facebook"><h4 class="white"><i class="fi-social-facebook" style="margin-right:20px"></i>Connect with Facebook</h4></a>
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

<!--Modal - Sign In and Forgot Password-->
<div id="modalSignIn" class="reveal-modal tiny go-radius go-flat" style="padding:0px;">
<!--   <div class="panel tbs"></div> -->
  <div class="panel topdecor" style="vertical-align:50%">
    <span id="signinInfo">
      <h3 style="line-height:140%"></h3><br/>
      <h3><small style="color:#fff"></small></h3>
      <h5 style="margin-bottom:7px"></h5>
    </span>
  </div>
  <div class="panel main" id="modalSignIn_main">
    <form id="formSignIn" method="post" style="margin-bottom:0px">
      <center>
        <h3 class="normalize" style="line-height:140%">Welcome back!</h3>
        <h4><small>Sign in to intelleq</small></h4>
      </center>
      <div class="row" style="margin-top:10px">
        <div class="large-2 medium-2 small-2 columns ftwp">
          <div class="panel" >
          </div>
        </div>
        <div class="large-10 medium-10 small-10 columns ftwp">
          <input class="go-flat" type="text" id="signinUentry" required name="username" placeholder="Enter username or email">
        </div>
      </div>
      <div class="row" style="margin-top:6px">
        <div class="large-2 medium-2 small-2 columns ftwp">
          <div class="panel">
          </div>
        </div>
        <div class="large-10 medium-10 small-10 columns ftwp">
          <input class="go-flat" type="password" id="signinPass" required name="password" placeholder="Password">
        </div>
      </div>

      <div class="row" style="margin-top:6px">
        <div class="large-12 columns" style="padding:0px">
          <input type="submit" style="margin-bottom:0px" class="button radius expand success" value="Sign In">
          <input type="submit" style="position: absolute; height: 0px; width: 0px; border: none; padding: 0px;"
      hidefocus="true" tabindex="-1"/>

        </div>
      </div>

    </form>

    <div class="row" style="margin-top:6px">
      <div class="large-12 columns">
        <center><h5 class="normalize" style="margin-bottom:6px;line-height:50%"><small>or</small></h5></center>
        <a class="button radius expand" href="facebook"><i class="fi-social-facebook" style="margin-right:20px"></i>Connect with Facebook</a>
        <h5 style="text-align:right"><small>Forgot password? <a onclick="signin_switch()">Recover here.</a></small></h5>
        
      </div>
    </div>
  </div>

  <div class="panel main hidden" id="modalSignIn_forgot">
    <form id="formForget" autocomplete="off">
      <center>
        <h3 class="normalize" style="line-height:140%">Forgot password?</h3>
        <h4><small>Recover here</small></h4>
      </center>
      <div class="row" style="margin-top:10px">
        <div class="large-2 medium-2 small-2 columns ftwp">
          <div class="panel" >
          </div>
        </div>
        <div class="large-10 medium-10 small-10 columns ftwp">
          <input class="go-flat" type="email" id="forgetEmail" name="email" required placeholder="Enter e-mail address here">
        </div>
      </div>

      <div class="row" style="margin-top:6px">
        <div class="large-12 columns" style="padding:0px">
          <input type="submit" style="margin-bottom:0px" class="button radius expand alert" value="Reset Password">
              <input type="submit" style="position: absolute; height: 0px; width: 0px; border: none; padding: 0px;"
              hidefocus="true" tabindex="-1"/>
        </div>
      </div>
    </form>

    <div class="row" style="margin-top:132px">
      <div class="large-12 columns">
        <h5 style="text-align:right"><small>Back to <a onclick="signin_switch()">sign in.</a></small></h5>
        
      </div>
    </div>
  </div>

  <a class="close-reveal-modal x">x</a>
</div>

<!--Modal - Sign Up-->
<div id="modalSignUp" class="reveal-modal small go-radius go-flat" style="padding:0px;">
<!--   <div class="panel tbs"></div> -->
  <div class="panel topdecor" style="vertical-align:50%">
    <span id="signupInfo" style="padding-left:20%;padding-right:20%">
      <h3 style="line-height:140%"></h3><br/>
      <h3><small style="color:#fff"></small></h3>
      <h5 style="margin-bottom:7px"></h5>
    </span>
  </div>
  <div class="panel main" id="modalSignIn_main" style="min-height:0px !important">
    <form id="formSignUp" method="post" action="login/create_member" style="margin-bottom:0px">
      <center>
        <h3 class="normalize" style="line-height:140%">Start here!</h3>
        <h4><small>Sign up for an intelleq account</small></h4>
      </center>
      <div class="row" style="margin-top:10px">

        <div class="large-12 columns" style="margin-left:0px;margin-right:0px">
          <div class="row">

            <div class="large-6 columns">
              <div class="row">
                <div class="large-2 medium-2 small-2 columns ftwp">
                  <div class="panel rsz" id="pre-first_name">
                  </div>
                </div>
                <div class="large-10 medium-10 small-10 columns ftwp">
                  <input class="go-flat rsz" type="text" id="first_name" name="first_name" required placeholder="Enter first name">
                </div>
              </div>
            </div>

            <div class="large-6 columns">
              <div class="row">
                <div class="large-2 medium-2 small-2 columns ftwp">
                  <div class="panel rsz" id="pre-last_name">
                  </div>
                </div>
                <div class="large-10 medium-10 small-10 columns ftwp">
                  <input class="go-flat rsz" type="text" id="last_name" name="last_name" required placeholder="Enter last name">
                </div>
              </div>
            </div>

          </div>
        </div>

      </div>

      <div class="row" style="margin-top:10px">
        <div class="large-12 columns">
          <div class="row">
            <div class="large-2 medium-2 small-2 columns ftwp">
              <div class="panel rsz" id="pre-email_address">
              </div>
            </div>
            <div class="large-10 medium-10 small-10 columns ftwp">
              <input class="go-flat rsz" type="text" id="signupEmail" class name="email_address" required placeholder="Enter e-mail address">
            </div>
          </div>
        </div>
      </div>

      <div class="row" style="margin-top:10px">
        <div class="large-12 columns">
          <div class="row">
            <div class="large-2 medium-2 small-2 columns ftwp">
              <div class="panel" id="pre-username">
              </div>
            </div>
            <div class="large-10 medium-10 small-10 columns ftwp">
              <input class="go-flat" type="text" id="signupUname" name="username" required placeholder="Enter desired username">
            </div>
          </div>
        </div>
      </div>

      <div class="row" style="margin-top:10px">
        <div class="large-12 columns">
          <div class="row">
            <div class="large-6 columns">
              <div class="row">
                <div class="large-2 medium-2 small-2 columns ftwp">
                  <div class="panel rsz" id="pre-password1">
                  </div>
                </div>
                <div class="large-10 medium-10 small-10 columns ftwp">
                  <input class="go-flat rsz" type="password" id="signupPass1" name="password" required placeholder="Password">
                </div>
              </div>
            </div>

            <div class="large-6 columns">
              <div class="row">
                <div class="large-2 medium-2 small-2 columns ftwp">
                  <div class="panel rsz" id="pre-password2">
                  </div>
                </div>
                <div class="large-10 medium-10 small-10 columns ftwp">
                  <input class="go-flat rsz" type="password" id="signupPass2" name="password2" required placeholder="Retype password">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="row" style="margin-top:10px">
        <div class="large-4 push-8 columns" style="padding:0px">
          <input type="submit" name="Create Account" style="margin-bottom:0px;"class="button radius success expand" value="Create Account">
          <input type="submit" style="position: absolute; height: 0px; width: 0px; border: none; padding: 0px;"
      hidefocus="true" tabindex="-1"/>

        </div>
      </div>

    </form>

  </div>

  <a class="close-reveal-modal x">x</a>
</div>

<!--Modal - Confirmation-->
<div id="modalConfirm" class="reveal-modal small">
    <h2>Confirmation mail sent</h2>
    <p>Check your mail and click on the given link .</p>
  <a class="close-reveal-modal x">x</a>
</div>
