<section class="page">
  <div class="ribbon" >   
    <div class="row" >
      <div class="large-12 columns entry-header" >
      <h1 class="entry-title"><?php echo (isset($page->title)) ? $page->title : 'Not Defined';?></h1> 
      </div>
    </div>
  </div>
  <div class="main-container " style="margin-top:-15vh;width:1275px;padding-bottom:150px;">
  <div class="row">
    <div class="large-12 medium-12 columns ">
      <ul class="breadcrumb">
      <li><?php echo anchor('', 'Beranda', array('alt' => 'Beranda'));?></li>
      <li><?php echo (isset($page->title)) ? $page->title : 'Not Defined';?></li>
      </ul>
    </div>
  </div>
  <div class="row">
    <div class="large-3 medium-3 columns">
      <div class="sidebar hide-for-small-only">
        <div class="lay-pel">
          <h4>Layanan Pelanggan</h4>
          <p>Telp: <br> <span><?php echo (!empty($settings['TELP']) ? $settings['TELP'] : 'Telp. Num. Not Set'); ?></span> </p><br>
          <p>WA:<br> <strong><?php echo (!empty($settings['WA']) ? $settings['WA'] : 'WA Not Set'); ?></strong></p><br>
          <p>Email:<br> 
          <strong><a href="mailto:<?php echo (!empty($settings['EMAIL']) ? $settings['EMAIL'] : 'info@deposepatu.com'); ?>"><?php echo (!empty($settings['EMAIL']) ? $settings['EMAIL'] : 'Email Not Set'); ?></a></strong></p>
        </div>
      </div>
    </div>
    <div class="large-9 medium-9 columns ">
    <?php echo (isset($page->content)) ? $page->content : 'Content Not Defined';?>
    </div> 
  </div>
</section>