<div id="page-content-wrapper">
<div class="top-bar">
  <div class="top-bar-title hide">
	<strong>Site Title</strong>
  </div>
  <div id="responsive-menu">
	<div class="top-bar-left">
	<h1 class="judul"><?php echo (isset($judullaman)) ? $judullaman : 'No $judullaman' ;?></h1>
	</div>
	<div class="top-bar-right">
		<?php echo anchor('admin/user/logout', '<i class="fa fa-sign-out fa-lg"></i>', array('title' => 'logout'));?>
	</div>
  </div>
</div>

<div class="row page" >
	<div class="large-12 columns">
	<div data-alert class="alert-box info">
	  <p>
	  Selamat Datang di DepoSepatu Reseller Dashboard, Kamu bisa mulai memanage penjualan dan website kamu di sini. 
	  Silahkan untuk menjelajahi Dashboard dan mulai memanage website kamu. Jika ada masalah jangan ragu untuk menghubungi Kami. 
	  <strong>Ganbatte !!! ^^</strong>
	  </p>
	  <a href="#" class="close">&times;</a>
	</div>
	</div>
	
</div>
<!-- /#page-content-wrapper -->
</div>