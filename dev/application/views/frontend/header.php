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
  </head>
  <body>
  <div class="off-canvas-wrapper">
    <div class="off-canvas-wrapper-inner" data-off-canvas-wrapper>
      <!-- off-canvas title bar for 'small' screen -->
      <div class="title-bar" data-responsive-toggle="widemenu" data-hide-for="medium" >
        <div class="title-bar-left">
          <button class="menu-icon" type="button" data-open="offCanvasLeft"></button>
          <span class="title-bar-title">
        <a href="index.php"><img class="" src="<?php echo base_url() ?>assets/frontend/logo.png" style="height:20px;width:auto;"></a>
      </span>
        </div>
        <div class="title-bar-right">
          <span class="title-bar-title">
       <ul class="sosmed">
            <li><a href="#" class="facebook"><i class="fa fa-facebook-official fa-lg"></i></a></li>
            <li><a href="#" class="twitter"><i class="fa fa-twitter-square fa-lg"></i></a></li>
        <li><a href="#" class="instagram"><i class="fa fa-instagram fa-lg"></i></a></li>
          </ul>
      </span>
          </div>
      </div>
      <!-- off-canvas left menu -->
      <div class="off-canvas position-left" id="offCanvasLeft" data-off-canvas>
        <ul class="vertical dropdown menu" data-dropdown-menu style="margin-top: 60px;">
          <li><a href="index.php">Beranda</a></li>
          <li><a href="page-product.php">Produk Favorit</a></li>
          <li><a href="page-product.php">Produk Terbaru</a></li>
      <li><hr></li>
      <li><a href="page.php">Kontak Kami</a></li>
      <li><a href="page.php">Info Pengiriman</a></li>
      <li><a href="page.php">Hitung Ongkir</a></li>
      <li><a href="page.php">Size Chart</a></li>
      <li><a href="page.php">Syarat dan Ketentuan</a></li>
      <li><a href="page.php">Pengembalian Barang</a></li>
        </ul>
      </div>
      <!-- "wider" top-bar menu for 'medium' and up -->
      <header class="nav-down hide-for-small-only">
        <div id="widemenu" class="top-bar" >
          <div class="top-bar-left">
            <ul class="dropdown menu" data-dropdown-menu>
              <li class="menu-text">
                <a href="index.php" style="padding:0px;">
                <img class="" src="<?php echo base_url() ?>assets/frontend/logo.png" style="height:25px;width:auto;">
                </a>
              </li>
              <li >
                <a href="index.php">Beranda</a>
              </li>
              <li >
                <a href="page-product.php">Produk Favorit</a>
              </li>
              <li >
                <a href="page-product.php">Produk Terbaru</a>
              </li>
              <li class="has-submenu">
                <a href="#" style="padding:0px;padding-right:20px;">Info</a>
                <ul class="menu submenu vertical arrow_box " data-submenu >
                  <li><a href="page.php">Kontak Kami</a></li>
                  <li><a href="page.php">Info Pengiriman</a></li>
                  <li><a href="page.php">Hitung Ongkir</a></li>
                  <li><a href="page.php">Size Chart</a></li>
                  <li><a href="page.php">Syarat dan Ketentuan</a></li>
                  <li><a href="page.php">Pengembalian Barang</a></li>
                </ul>
              </li>
            </ul>
          </div>
          <div class="top-bar-right">
            <ul class="menu sosmed">
              <?php if(!empty($settings['FACEBOOK'])){  ?>
              <li>
                <?php echo anchor($settings['FACEBOOK'], '<i class="fa fa-facebook-official fa-3x"></i>', array('class' => 'facebook'));?>
              </li>
              <?php } ?>
              <?php if(!empty($settings['TWITTER'])){  ?>
              <li>
                <?php echo anchor($settings['TWITTER'], '<i class="fa fa-twitter-square fa-3x"></i>', array('class' => 'twitter'));?>
              </li>
              <?php } ?>
              <?php if(!empty($settings['INSTAGRAM'])){  ?>
              <li>
                <?php echo anchor($settings['INSTAGRAM'], '<i class="fa fa-instagram fa-3x"></i>', array('class' => 'instagram'));?>
              </li>
              <?php } ?>
            </ul>
          </div>
        </div>
       </header>
      <!-- original content goes in this container -->
      <div class="off-canvas-contentX" data-off-canvas-content>
