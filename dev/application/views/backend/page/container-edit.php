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
  <li>Edit Halaman <?php echo (isset($page_data['data'])) ? $page_data['data']->title : 'No Title' ;?></li>
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
      <p>Ubah deskripsi halaman sesuai dengan kebutuhan Anda</p>
      <hr>
      <div class="row">
        <div class="large-3 columns">
          <label for="right-label" class="right inline">Judul Halaman</label>
        </div>
        <div class="large-9 columns">
          <input type="text" id="right-label"  value="<?php echo (isset($page_data['data']->title)) ? $page_data['data']->title : '' ;?>" readonly="readonly">
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
                <div class="editor" name="content" style="width:98%;min-height: 500px;"><?php echo (isset($page_data['data']->content)) ? $page_data['data']->content : '' ;?></div>
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