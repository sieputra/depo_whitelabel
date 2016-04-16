<?php echo form_open(); ?>
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
        <h4>Produk Favorit</h4>
        <div class="row">
          <div class="large-4 columns">
            <p>
            Produk yang ingin dipilih sebagai Highlight untuk menarik perhatian Pengunjung
            </p>
          </div>

          <div class="large-8 columns">
            <div class="row">
              <div class="small-4 columns">
                <label for="middle-label" class="text-right middle">Produk</label>
              </div>
              <div class="small-8 columns">
                <?php
                ?>
                <select name="shop_favorite">
                  <option value="">Please Choose Your Favorite Product</option>
                <?php
                foreach ($page_data['data'] as $key => $product) {
                  ?>
                  <option value="<?php echo $product->id?>" <?php echo ((!empty($settings['SHOP_FAVORITE']) && ($settings['SHOP_FAVORITE'] == $product->id)) ? 'selected="selected"' : ''); ?>><?php echo $product->name;?></option>
                  <?php
                }
                ?>
                </select>
              </div>
             </div> 
          </div>
        </div>
        
        <hr>
        
        <h4>Produk (Home)</h4>
        <div class="row">
          <div class="large-4 columns">
            <p>
            Jumlah produk yang ingin di tampilkan pada halaman home
            </p>
          </div>

          <div class="large-8 columns">
            <div class="row">
              <div class="small-10 columns">
                <label for="middle-label" class="text-right middle">Produk yang ditampilkan</label>
              </div>
              <div class="small-2 columns">
                <select name="show_home">
                <option value="4" <?php echo ((!empty($settings['SHOW_HOME']) && ($settings['SHOW_HOME'] == '4')) ? 'selected="selected"' : ''); ?>>4</option>
                <option value="8" <?php echo ((!empty($settings['SHOW_HOME']) && ($settings['SHOW_HOME'] == '8')) ? 'selected="selected"' : ''); ?>>8</option>
                <option value="12" <?php echo ((!empty($settings['SHOW_HOME']) && ($settings['SHOW_HOME'] == '12')) ? 'selected="selected"' : ''); ?>>12</option>
                <option value="16" <?php echo ((!empty($settings['SHOW_HOME']) && ($settings['SHOW_HOME'] == '16')) ? 'selected="selected"' : ''); ?>>16</option>
                </select>
              </div>
             </div> 
          </div>
        </div>
        <hr>
        
        <h4>Produk (Halaman)</h4>
        <div class="row">
          <div class="large-4 columns">
            <p>
            Jumlah produk yang ingin di tampilkan pada halaman Produk
            </p>
          </div>

          <div class="large-8 columns">
            <div class="row">
              <div class="small-10 columns">
                <label for="middle-label" class="text-right middle">Produk yang ditampilkan</label>
              </div>
              <div class="small-2 columns">
                <select name="show_product_page">
                <option value="4" <?php echo ((!empty($settings['SHOW_PRODUCT_PAGE']) && ($settings['SHOW_PRODUCT_PAGE'] == '4')) ? 'selected="selected"' : ''); ?>>4</option>
                <option value="8" <?php echo ((!empty($settings['SHOW_PRODUCT_PAGE']) && ($settings['SHOW_PRODUCT_PAGE'] == '8')) ? 'selected="selected"' : ''); ?>>8</option>
                <option value="12" <?php echo ((!empty($settings['SHOW_PRODUCT_PAGE']) && ($settings['SHOW_PRODUCT_PAGE'] == '12')) ? 'selected="selected"' : ''); ?>>12</option>
                <option value="16" <?php echo ((!empty($settings['SHOW_PRODUCT_PAGE']) && ($settings['SHOW_PRODUCT_PAGE'] == '16')) ? 'selected="selected"' : ''); ?>>16</option>
                </select>
              </div>
             </div> 
          </div>
        </div>
        <hr>
        <button type="submit" class="button small right">Simpan</button>
	</div>
	
</div>
<!-- /#page-content-wrapper -->
</div>
<?php echo form_close(); ?>