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
  <?php if(isset($msg)) {?>
  <div data-alert class="alert-box info">
    <p>
    <?php echo $msg;?>
    </p>
    <a href="#" class="close">&times;</a>
  </div>
  <?php } ?>
	<div class="large-12 columns">
	  <?php echo anchor('admin/page/add', 'Tambah Halaman', array('class' => 'button small right'));?>
  	<table>
      <thead>
      <tr>
        <th width="">Judul</th>
        <th width="200">Tanggal</th>
        <th width="50">Edit</th>
      </tr>
      </thead>
      <tbody>
        <?php 
        foreach ($page_data['data'] as $key => $page) {
          ?>
          <tr>
            <td>
              <?php echo $page->title; ?>
            </td>
            <td><small>Terakhir edit pada</small><br> <?php echo date('d/m/Y H:m:s' , strtotime($page->date_updated)); ?></td>
            <td>
              <?php echo anchor('admin/page/edit/' .$page->id , '<i class="fa fa-pencil-square-o fa-lg"></i>', array('alt' => 'Edit'));?>
            </td>
          </tr>
          <?php    
        }
        ?>
      </tbody>
    </table>
	</div>
</div>
<!-- /#page-content-wrapper -->
</div>