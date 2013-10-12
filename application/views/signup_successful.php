<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <link rel="icon" href="<?php echo site_url('img/favicon.ico'); ?>" type="image/x-icon">
  <title>intelleq</title>
  <link rel="stylesheet" href="<?php echo site_url('css/normalize.css'); ?>">
  <link rel="stylesheet" href="<?php echo site_url('css/foundation.css'); ?>">
  <link rel="stylesheet" href="<?php echo site_url('css/custom.css'); ?>">
  <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300" />
</head>

<body>
  <div class="row">
    <div class="large-4 push-4 columns">
      <center><h2>Congratulations!</h2><h3>You have successfully activated your account.</h3></center>
      <div class="pic" id="signUpSuccess" style="padding-top:100px;padding-bottom:100px;"></div>
      <a class="button radius success expand large" href="<?php echo site_url(''); ?>" data-reveal-id="modalSignUp"><h4 class="white">Be awesome!</h4></a>
    </div>
  </div>


  <script>document.write('<script src=' +
  ('__proto__' in {} ? 'js/vendor/zepto' : 'js/vendor/jquery') +
  '.js><\/script>')</script>
  <script type="text/javascript" src="<?php echo site_url('js/foundation/foundation.js'); ?>"></script>
  <script>
    $(document).foundation();
</script>

</body>
</html>