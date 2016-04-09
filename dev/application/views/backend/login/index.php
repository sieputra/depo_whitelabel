<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Lookbook</title>
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/foundation-6/css/foundation.css" />
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/foundation-6/css/app.css" />
	<link href='https://fonts.googleapis.com/css?family=Lato:400,300,700,700italic,400italic,300italic,900,900italic' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	<link rel="icon" type="image/png" href="<?php echo base_url() ?>assets/backend/images/favicon.png">
 	<link rel="icon" type="image/png" href="<?php echo base_url() ?>assets/backend/images/favicon-deposepatu_.png" />
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/backend/css/style-login.css" />
	<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
	<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.1.0/highlight.min.js"></script>
	<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.1.0/styles/github.min.css">
  </head>
  <body>

<div class="row">
  <div class="medium-6 medium-centered large-4 large-centered columns">

    <form>
      <div class="row column log-in-form">
        <div class="logform">
          <h1 class="text-center">
            <img src="<?php echo base_url() ?>assets/backend/images/logo-deposepatu.png" alt="" />
          </h1>
          <label>Username
            <input type="text" name="email" id="email" placeholder="somebody username">
          </label>
          <label>Password
            <input type="password" name="password" id="password" placeholder="Password">
          </label>
          <p><a type="submit" id="btn-submit" class="button expanded" href="#">Log In</a></p>
          
			<div data-alert class="alert-box secondary" <?php echo (isset($_SESSION['resp'])) ? '' : 'style="display:none"' ; ?> >
			  <span id="message"><?php echo (isset($_SESSION['resp'])) ? $_SESSION['resp'] : '' ; ?></span>
			  <a href="#" class="close">&times;</a>
			</div>
          <hr>
          <p class="text-center"><a href="#">Forgot your password?</a></p>
        </div>
    </div>

    </form>

  </div>
</div>

<script src="<?php echo base_url() ?>assets/foundation-6/js/vendor/jquery.min.js"></script>
<script src="<?php echo base_url() ?>assets/foundation-6/js/vendor/what-input.min.js"></script>
<script src="<?php echo base_url() ?>assets/foundation-6/js/foundation.js"></script>
<script type="text/javascript"><?php echo (isset($js_load) && !empty($js_load)) ? $js_load : '';?></script>
</body>
</html>
