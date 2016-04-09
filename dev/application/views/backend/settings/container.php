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
	<h4>API URL</h4>
  <div class="row">
    <div class="large-4 columns">
      <p>
      API URL Endpoint For API Call ( Commerce Engine For Depo Sepatu URL)
      </p>
    </div>

    <div class="large-8 columns">
      <div class="row">
        <div class="small-12 columns">
        <input name="api_url" type="text" placeholder="API URL" value="<?php echo (!empty($settings['API_URL']) ? $settings['API_URL'] : 'http://sieputra.com/api/'); ?>">  
        </div>
       </div> 
    </div>
  </div>
  <hr />
  <h4>API ENDPOINT</h4>
  <div class="row">
    <div class="large-4 columns">
      <p>
      API End Point Endpoint For API Call ( Commerce Engine For Depo Sepatu URL)
      </p>
    </div>

    <div class="large-8 columns">
      <div class="row">
        <div class="small-12 columns">
        <input name="api_endpoint" type="text" placeholder="API END POINT" value="<?php echo (!empty($settings['API_ENDPOINT']) ? $settings['API_ENDPOINT'] : 'wc-api/v3/'); ?>">  
        </div>
       </div> 
    </div>
  </div>
  <hr />
  <h4>CONSUMER KEY</h4>
  <div class="row">
    <div class="large-4 columns">
      <p>
      Consumer Key to make Authentication with The Commerce Engine
      </p>
    </div>

    <div class="large-8 columns">
      <div class="row">
        <div class="small-12 columns">
        <input name="customer_key" type="text" placeholder="Consumer Key" value="<?php echo (!empty($settings['CUSTOMER_KEY']) ? $settings['CUSTOMER_KEY'] : '1234567890qwertyuiopasdfghjklzxcvbnm'); ?>">  
        </div>
       </div> 
    </div>
  </div>
  <hr />
  <h4>CONSUMER SECRET</h4>
  <div class="row">
    <div class="large-4 columns">
      <p>
      Consumer Secret to make Authentication with The Commerce Engine
      </p>
    </div>

    <div class="large-8 columns">
      <div class="row">
        <div class="small-12 columns">
        <input name="customer_secret" type="text" placeholder="Consumer Secret" value="<?php echo (!empty($settings['CUSTOMER_SECRET']) ? $settings['CUSTOMER_SECRET'] : '1234567890qwertyuiopasdfghjklzxcvbnm'); ?>">  
        </div>
       </div> 
    </div>
  </div>
  <hr>
  <div class="row">
    <div class="large-6 columns">
      <span id="msg_init"></span>
    </div>
    <div class="large-6 columns">
    <button type="submit" class="button small right">Simpan</button>
    <?php if($attributes == 0){ ?>
    <button type="submit" name="btn_init_attrs" id="btn_init_attrs" class="button small right">Init Attributes</button>
    <?php } if($tags == 0){ ?>
    <button type="submit" name="btn_init_tags" id="btn_init_tags" class="button small right">Init Tags</button>
    <?php } if($categories == 0){ ?>
    <button type="submit" name="btn_init_cats" id="btn_init_cats" class="button small right">Init Categories</button>
    <?php } ?>
	 </div>
  </div>
	</div>
</div>
<!-- /#page-content-wrapper -->
</div>
<?php echo form_close(); ?>