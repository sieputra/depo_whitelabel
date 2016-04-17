<section class="page">
  <div class="ribbon" >   
    <div class="row" >
      <div class="large-12 columns entry-header" >
      <h1 class="entry-title">Produk</h1>
      </div>
    </div>
  </div>
  <div class="main-container " style="margin-top:-15vh;width:1275px;">
    <div class="row">
      <div class="large-12 medium-12 columns ">
        <ul class="breadcrumb">
        <li><?php
          echo anchor('' , 'Beranda');
          ?></li>
        <li>Produk</li>
        </ul>
      </div>
      <div class="large-3 medium-3 columns ">
        <div class="sidebar hide-for-small-only">
          <dl class="accordion hide-for-small-only">
          <dt ><span>Kategori</span><i class="accordion_icon fa fa-plus"></i></dt>
          <dd class="accordion_content">
            <?php if (isset($menu_data['kategori'] ) && count($menu_data['kategori'] ) != 0){ ?>
            <ul>
            <?php 
            foreach ($menu_data['kategori'] as $key => $kategori) {
              ?>
              <li><?php echo anchor('products/category/' . str_replace(array('+', '/', '='), array('-', '_', '~'),base64_encode($kategori->id_tohash)) . '/' . $kategori->slug , $kategori->name);?></li>
              <?php
            }
            ?>
            </ul>
            <?php } ?>
          </dd>
          <dt ><span>Pria</span><i class="accordion_icon fa fa-plus"></i></dt>
          <dd class="accordion_content">
            <?php if (isset($menu_data['pria'] ) && count($menu_data['pria'] ) != 0){ ?>
            <ul>
            <?php 
            foreach ($menu_data['pria'] as $key => $kategori) {
              ?>
              <li><?php echo anchor('products/category/' . str_replace(array('+', '/', '='), array('-', '_', '~'), base64_encode($kategori->id_tohash) ). '/' . $kategori->slug , $kategori->name);?></li>
              <?php
            }
            ?>
            </ul>
            <?php } ?>
          </dd>
          <dt ><span>Wanita</span><i class="accordion_icon fa fa-plus"></i></dt>
          <dd class="accordion_content">
            <?php if (isset($menu_data['wanita'] ) && count($menu_data['wanita'] ) != 0){ ?>
            <ul>
            <?php 
            foreach ($menu_data['wanita'] as $key => $kategori) {
              ?>
              <li><?php echo anchor('products/category/' .str_replace(array('+', '/', '='), array('-', '_', '~'),base64_encode($kategori->id_tohash)) . '/' . $kategori->slug , $kategori->name);?></li>
              <?php
            }
            ?>
            </ul>
            <?php } ?>
          </dd>
          <dt ><span>Merk</span><i class="accordion_icon fa fa-plus"></i></dt>
          <dd class="accordion_content">
            <?php if (isset($menu_data['merek'] ) && count($menu_data['merek'] ) != 0){ ?>
            <ul>
            <?php 
            foreach ($menu_data['merek'] as $key => $merek) {
              ?>
              <li><?php echo anchor('products/category/' .str_replace(array('+', '/', '='), array('-', '_', '~'), base64_encode($merek->id_tohash) ) . '/' . $merek->slug , $merek->name);?></li>
              <?php
            }
            ?>
            </ul>
            <?php } ?>
          </dd>
          </dl>
          <div class="lay-pel">
            <h4>Layanan Pelanggan</h4>
            <p>Telp: <br> <span><?php echo (isset($settings_general['TELP'])) ? $settings_general['TELP'] : 'Not Defined' ?></span> </p><br>
            <p>WA:<br> <strong><?php echo (isset($settings_general['WA'])) ? $settings_general['WA'] : 'Not Defined' ?></strong></p><br>
            <p>Email:<br> 
            <strong><a href="mailto:<?php echo (isset($settings_general['EMAIL'])) ? $settings_general['EMAIL'] : 'Not Defined' ?>"><?php echo (isset($settings_general['EMAIL'])) ? $settings_general['EMAIL'] : 'Not Defined' ?></a></strong></p>
          </div>
        </div>
      </div>
      <div class="large-9 medium-9 columns">
        <?php echo (isset($show)) ? $show : 'Not Loaded...' ?>
      </div>
    </div>
  </div>  
</section>