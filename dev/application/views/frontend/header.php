<!doctype html>
<html class="no-js" lang="en">
  <head>
  <meta charset="utf-8" />
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Lookbook</title>
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/foundation-6/css/foundation.css" />
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/foundation-6/css/app.css" />
  <!-- FONT LATO -->
  <link href='https://fonts.googleapis.com/css?family=Lato:400,300,700,700italic,400italic,300italic,900,900italic' rel='stylesheet' type='text/css'>
  <!-- FONTAWESOME -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  <link rel="icon" type="image/png" href="<?php echo base_url() ?>assets/frontend/images/favicon.png">
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/frontend/animate.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/frontend/js/lightslider/css/lightslider.min.css" />
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/frontend/js/simple-lightbox/simplelightbox.min.css" />
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/frontend/styles.css" />
  <!--Start of Zopim Live Chat Script-->
  <script type="text/javascript">
  <?php echo (isset($zopim_code)) ? $zopim_code : '';?>
  </script>
  <!--End of Zopim Live Chat Script-->
  <style>
  <?php echo (isset($cssload) && !empty($cssload) ? $cssload : '')?>
  </style>
  </head>
  <body>
  <div class="off-canvas-wrapper">
    <div class="off-canvas-wrapper-inner" data-off-canvas-wrapper>
      <!-- off-canvas title bar for 'small' screen -->
      <?php echo (isset($menu)) ? $menu : '';?>
      <!-- original content goes in this container -->
      <div class="off-canvas-contentX" data-off-canvas-content>
