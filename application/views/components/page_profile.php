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
      <li class="" style="padding-right:10px"><a href='http://localhost/ci/question'>Practice</a> </li>
      <li class="dropdown"style="padding-right:10px"><a href="#" class="dropdown-toggle" data-toggle="dropdown">About Us<span class="caret"></span></a>
        <ul class="dropdown-menu">
        <li><a href="#">What is MERK?</a></li>
        <li><a href="#">The Creators</a></li>
        <li><a href="#">Contact Us</a></li></ul>
      </li>
      <li style="padding-top:0px"><?php echo anchor('login/logout', 'Logout'); ?></li>
      <!-- ^temp fix<li style="padding-top:10px"><button type="button" href="<?php echo site_url('login');?>" class="btn btn-info btn-small">Log out</button></li> -->
    
    </ul>
    </div>
  	</div>


  
