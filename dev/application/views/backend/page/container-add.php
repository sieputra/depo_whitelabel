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
<div class="large-12 medium-12 columns ">
<ul class="breadcrumb">
  <li>
    <?php echo anchor('admin/page', 'Page Setting', array('alt' => 'Page Settings'));?>
  </li>
  <li>Add New Page</li>
</ul>
</div>
<div class="row page" >
  <div class="large-12 columns">
    <div class="row">
      <div class="large-12 columns">
      &nbsp;
      </div>
    </div>
    <div class="row">
    <div class="large-12 columns">
      <div class="callout">
      <h5>Detail Halaman</h5>
      <p>Please Write Down Your page, the content will be show on Info Menu On Front end</p>
      <hr>
      <div class="row">
        <div class="large-3 columns">
          <label for="right-label" class="right inline">Judul Halaman</label>
        </div>
        <div class="large-9 columns">
          <input type="text" id="right-label" name="title" value="" placeholder="Please Input Your Page title">
        </div>
      </div>
      <div class="row">
        <div class="large-3 columns">
          <label for="right-label" class="right inline">&nbsp;</label>
        </div>
        <div class="large-9 columns">
          <small><i>Your Page URL automatic generate by system</i></small>
        </div>
      </div>
      <div class="row">
        <div class="large-3 columns">
          <label for="right-label" class="right inline" style="margin-top:20px;">Konten Halaman</label>
        </div>
        <div class="large-9 columns">
          <div class="row">
            <div class="large-12 columns">
              <div id="right-label">
                <div class="editor" name="content" style="width:98%;min-height: 500px;">Your Content Goes Here</div>
              </div>
            </div>
          </div>
        </div>
      </div>
      </div>
      <button class="button small right" type="submit">Simpan</button>
    </div>
    </div>  
  </div>
</div>
<!-- /#page-content-wrapper -->
</div>
<?php echo form_close(); ?>