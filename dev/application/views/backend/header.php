<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title><?php echo (isset($title) ? $title : 'Not Defined Title')?></title>
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/backend/css/foundation.css" />
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/backend/css/foundation-icons.css" />
    <link href="<?php echo base_url() ?>assets/backend/css/simple-sidebar.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/backend/css/fixed-top-bar.css" rel="stylesheet">
    <script src="<?php echo base_url() ?>assets/backend/js/vendor/modernizr.js"></script>
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/foundation-6/css/foundation.css" />
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/foundation-6/css/app.css" />
	<link href='https://fonts.googleapis.com/css?family=Lato:400,300,700,700italic,400italic,300italic,900,900italic' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  	<link rel="stylesheet" href="<?php echo base_url() ?>assets/backend/js/text-editor/jquery-te-1.4.0.css" />
	<link rel="icon" type="image/png" href="<?php echo base_url() ?>assets/backend/images/favicon-deposepatu_.png" />
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/backend/css/style.css" />
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/backend/css/print.css" />
	<style>
	<?php echo (isset($css_load)) ? $css_load : '' ?>
	</style>
  </head>
   <body>
    <nav class="tab-bar">
      <section class="left-small">
        <a class="menu-icon" id="menu-toggle"><span></span></a>
      </section>
      <section class="middle tab-bar-section">
        <h1 class="title left"><a href="#"><img src="<?php echo base_url() ?>assets/backend/images/logo-deposepatu.png" alt="" style="height:25px;width:auto;"></a></h1>
      </section>
    </nav>
    <div id="wrapper">
