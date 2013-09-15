<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>merk Academic Resource</title>
<link href="http://localhost/ci/css/css/bootstrap.css" rel="stylesheet" type="text/css">
<link href="http://localhost/ci/css/custom.css" rel="stylesheet" type="text/css">
<!-- HTML5 shim for IE backwards compatibility -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
</head>

<body>
  <!-- NAVIGATION BAR -->
  <div class="navbar navbar-inverse navbar-fixed-top bs-docs-nav">
  	<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse"> <!-- makes the navbar responsive -->
    <span class="glyphicon-bar"></span> <!-- -->
    <span class="glyphicon-bar"></span>
    <span class="glyphicon-bar"></span>
    </button>
    <a href="./" class="navbar-brand"style="padding-top:10px;padding-bottom:0px"><img src="http://localhost/ci/img/img_scroll/logo.png"alt="logo"/></a>
    <!--a href="./" class="navbar-brand">merk Academic Resource</a-->
	<div class="nav-collapse collapse navbar-responsive-collapse">
    <ul class="nav navbar-nav pull-right">
      <li class="active" style="padding-right:10px"><a href='http://localhost/ci'>Home</a> </li>
      <li class="dropdown"style="padding-right:10px"><a href="#" class="dropdown-toggle" data-toggle="dropdown">About Us<span class="caret"></span></a>
        <ul class="dropdown-menu">
        <li><a href="#">What is MERK?</a></li>
        <li><a href="#">The Creators</a></li>
        <li><a href="#">Contact Us</a></li></ul>
      </li>
      <li style="padding-top:10px;padding-right:10px"><button type="button" href="#signup" class="btn btn-warning btn-small" data-toggle="modal">Sign Up</button></li>
      <li style="padding-top:10px"><button type="button" href="#signin" class="btn btn-info btn-small" data-toggle="modal">Log In</button></li>
    </ul>
    </div>
  	</div>

<!--MODAL - Log In -->
<section id="signin" class="modal fade">
  <div class="modal-dialog"><div class="modal-content">
  <header class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
    <h3>Log In</h3>
  </header>
  <div class="modal-body">
      <?php echo form_open('login/validate');?>
  <form>
  <fieldset>
    <h4>Welcome back, user!</h4>
    <div class="form-group">
      <label for="username">Username</label>
      <input type="text" class="form-control" id="username" name="username" placeholder="Enter username or email">
    </div>
    <div class="form-group">
      <label for="password">Password</label>
      <input type="password" class="form-control" id="password" name="password" placeholder="Password">
    </div>
      <u><?php echo anchor('login/reset', 'Forgot Password?'); ?></u>
    <div class="checkbox">
      <label>
        <input type="checkbox"> Remember Me
      </label>
    </div>
    
  </fieldset>
  <footer class="modal-footer">
    <input type="submit" name="login_sign_up" class="btn btn-default" value="Login">
  </footer>
     <?php echo form_close();?>
  </form>
  </div>
  </div></div>
</section>

<!--MODAL - Sign Up -->
<section id="signup" class="modal fade">
  <div class="modal-dialog"><div class="modal-content">
  <header class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
    <h3>Sign Up</h3>
  </header>
  <div class="modal-body">
    <?php echo form_open('login/create_member');?>
  <form id="customForm">
  <fieldset> 
    <h4>Enjoy your stay!</h4>
    <div class="form-group">
      <label for="first_name">First Name</label><span id="nameInfo">What's your name?</span>
      <input type="text" class="form-control" id="first_name" name="first_name" placeholder="Enter first name">
    </div>
    <div class="form-group">
      <label for="last_name">Last Name</label>
      <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Enter last name">
    </div>
  </fieldset>
  <fieldset>
	<div class="form-group">
      <label for="email_address">E-mail address</label><span id="emailInfo">Valid E-mail please, you will need it to log in!</span>
      <input type="text" class="form-control" id="email_address" name="email_address" placeholder="Enter e-mail address">
    </div>
    <div class="form-group">
      <label for="username">Username</label>
      <input type="text" class="form-control" id="username" name="username" placeholder="Enter desired username">
    </div>
    <div class="form-group">
      <label for="password">Password</label><span id="pass1Info">At least 5 characters: letters, numbers and '_'</span>
      <input type="password" class="form-control" id="password" name="password" placeholder="Password">
    </div>
        <div class="form-group">
      <label for="password2">Confirm Password</label><span id="pass2Info">Confirm password</span>
      <input type="password" class="form-control" id="password2" name="password2" placeholder="Retype password">
    </div>
    <div class="checkbox">
      <label>
        <input type="checkbox"> I agree to the <a href="#">Terms and Conditions</a>.
      </label>
    </div>
    
  </fieldset>
  <footer class="modal-footer">
    <!--<button type="submit" class="btn btn-default">Submit</button>
    <input type="submit" name='submit' class="btn btn-default" value="Create Account">-->
    <?php echo form_submit('submit', 'Create Account', "btn btn-primary"); ?>
  </footer>
    <?php echo form_close();?>
  </form>
  </div>
  
  </div></div>
</section>

  <!-- CAROUSEL -->
  <div class="carousel slide" id="welcome" style="margin-right:0px">

    <div class="carousel-inner">
      <div class="item active">
        <img src="http://localhost/ci/img/img_scroll/caro1.jpg" alt="caro1">
        <div class="carousel-caption">
          <h1><strong>Lorem ipsum dolor sit amet.</strong></h1>
          <p>Consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
        </div>
      </div>

      <div class="item">
        <img src="http://localhost/ci/img/img_scroll/caro2.jpg" alt="caro2">
        <div class="carousel-caption">
          <h1><strong>Ut wisi enim ad minim veniam.</strong></h1>
          <p>Quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
        </div>
      </div>

      <div class="item">
        <img src="http://localhost/ci/img/img_scroll/caro3.jpg" alt="caro3">
        <div class="carousel-caption">
          <h1><strong>Duis autem vel eum iriure dolor in hendrerit.</strong></h1>
          <p>In vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan.</p>
        </div>
      </div>
      

    </div>
    <div class="carousel-caption" style="background-color: rgba(0,0,0,0);top:60%">
      	<div class="container">
            <button type="button" href="#" class="btn btn-warning btn-large">Start now</button>
        </div>
    </div>
    <a href="#welcome" class="left carousel-control" data-slide="prev">&lsaquo;</a>
  <a href="#welcome" class="right carousel-control" data-slide="next">&rsaquo;</a>
  </div>

  <!--WHAT IS MERK?-->
  <section style="margin-left:0px;padding-left:0px">
  <div class="row-fluid">
  	<p><h1 style="text-align:center;padding:20px"><strong>What is MERK?</strong><h1></p>
  </div> 
  <div class="container">
  <div class="row">
  	<div class="marketing">
		<div class="col-lg-4">
			<article style="text-align:center">
					<img class="marketing-img" src="http://localhost/ci/img/img_scroll/ferrar.jpg" alt="Jonathan Ferrar"/>
					<h1><strong>Jonathan Ferrar</strong></h1>
					<p>Labeled as "The Artist to Watch in 2012" by the London Review, Jonathan Ferrar has already sold one of the highest priced-commissions on record paid to an art student.</p>
				</article>
		</div>
		<div class="col-lg-4">
				<article style="text-align:center">
					<img class="marketing-img" src="http://localhost/ci/img/img_scroll/jerome.jpg" alt="Jennifer Jerome"/>
					<h1><strong>Jennifer Jerome</strong></h1>
					<p>A native of New Orleans, much of Jennifer Jerome's work has centered around abstract images that depict flooding and rebuilding, having grown up as a teenager in the post-flood years.</p>
				</article>
		</div>
		<div class="col-lg-4">
				<article style="text-align:center">
					<img class="marketing-img" src="http://localhost/ci/img/img_scroll/larue.jpg" alt="LaVonne LaRue"/>
					<h1><strong>LaVonne LaRue</strong></h1>
					<p>LaVonne LaRue's giant-sized paintings all around Chicago tell the story of love, nature, and conservation - themes that are central to her heart.</p>
				</article>
		</div>
	</div>
  </div>
  </div>
  </section>
  
