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
	<?php if(count($page_data['data']) == 0) {?>  
	<div data-alert class="alert-box info">
	  <?php if($page_data['cat_count']!= 0 && $page_data['attr_count']!= 0 && $page_data['tag_count']!= 0){?>
	  <button type="submit" id="init" name="init" class="button small">initilize Product</button><br />
	  <small id="init_msg">Plese Initialize Product For the first Time with button Bellow</small>
	  <?php } else {
	    ?>
	    <small>Please check category, tags and attribute data on <?php echo anchor('admin/user/settings', 'Site Setting', array('alt' => 'Settings'));?>,
	      before prepare products data for the first time</small>
	    <?php
	  }?>
	</div>
	<?php } else {
	  ?>
	  <h4>Product List</h4>  
	  <table>
        <thead>
        <tr>
          <th width="">Nama Sepatu</th>
          <th width="140">SKU</th>
          <th width="100">Stok</th>
          <th width="120">Harga</th>
          <th width="120">Kategori</th>
          <th width="120">Tag</th>
          <th width="140">Tanggal</th>
          <th width="50">Edit</th>
        </tr>
        </thead>
        <tbody id="product_tbody">
        <?php 
          $i = 0;
          foreach ($page_data['data'] as $key => $product) {
            ?>
            <tr>
              <td>
                <p>
                <?php echo $product->name;?>
                </p>
              </td>
              
              <td><?php echo $product->sku;?></td>
              <td>&nbsp;</td>
              <td><?php echo  number_format( $product->price);?></td>
              <td><?php echo $product->categories;?></td>
              <td><?php echo $product->tags;?></td>
              <td><?php echo date('d/m/Y' , strtotime($product->date_local_update));?></td>
              <td>
                <a href="single-product.php">
                <i class="fa fa-pencil-square-o fa-lg"></i>
                </a>
              </td>
            </tr>
            <?php  
            $i++;  
          }
        ?>  
        </tbody>
    </table>
    <hr>
      
      <div class="large-12 columns">
        <div class="row">
          <div class="small-12 large-8 columns "> 
          
            <ul class="pagination" role="menubar" aria-label="Pagination">
              <li class="arrow unavailable" aria-disabled="true"><a href="">&laquo; Previous</a></li>
              <li class="current"><a href="">1</a></li>
              <li><a href="">2</a></li>
              <li><a href="">3</a></li>
              <li><a href="">4</a></li>
              <li class="unavailable" aria-disabled="true"><a href="">&hellip;</a></li>
              <li><a href="">12</a></li>
              <li><a href="">13</a></li>
              <li class="arrow"><a href="">Next &raquo;</a></li>
            </ul> 
          </div>
          
          <div class="large-4 columns"> 
            <div class="row">
            <div class="small-8 columns">
              <label for="middle-label" class="text-right middle">Per Halaman</label>
            </div>
        
            <div class="small-4 columns">
              <select>
                <option value="">Semua</option>
                <option value="10">10</option>
                <option value="25">25</option>
                <option value="50">50</option>
                <option value="100">100</option>
              </select>
            </div>
              
            </div>
          </div>
        </div>
      </div> 
	  <?
	} ?>
	</div>
	
</div>
<!-- /#page-content-wrapper -->
</div>