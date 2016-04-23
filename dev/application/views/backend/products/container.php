<?php 
$hidden = array('h_filter_brand' => $this->input->get('filter_brand', true),
                'h_filter_category' => $this->input->get('filter_category', true),
                'h_search_product' => $this->input->get('search_product', true));
echo form_open('' , array('method' => 'GET' , 'id' => 'frm_produk'), $hidden); ?>
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
	<?php if(isset($page_data['data']) && count($page_data['data']) == 0) {?>  
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
	<?php } elseif (isset($page_data['data'])) {
	  ?>
	  <h4>Product List</h4> 
	  <h4>FILTER</h4>  
	  <?php
	  $categories = $page_data['brands'];
    if(isset($categories) && count($categories) !=0){
	    ?>
	    <select name="filter_brand">
	    <option value="">Silahkan Pilih Filter Brand</option>
	    <?php
	    foreach ($categories as $key => $category) {
			?>
			<option value="<?php echo $category->name ?>" <?php echo ($category->name == $hidden['h_filter_brand']) ? "selected='selected'" : ''; ?> ><?php echo $category->name ?></option>
			<?php
		  }
	    ?>  
	    </select>
	    <?
	  }
	  ?>  
    <?php
    $categories = $page_data['categories'];
    if(isset($categories) && count($categories) !=0){
      ?>
      <select name="filter_category">
        <option value="">Silahkan Pilih Filter Kategori</option>
      <?php
      foreach ($categories as $key => $category) {
      ?>
      <option value="<?php echo $category->name ?>" <?php echo ($category->name == $hidden['h_filter_category']) ? "selected='selected'" : ''; ?>  ><?php echo $category->name ?></option>
      <?php
      }
      ?>  
      </select>
      <?
    }
    ?>
    
    <h4>SEARCH</h4>
    <input type="text" name="search_product" placeholder="Silahkan Masukkan Nama Produk" value="<?php echo (!empty($hidden['h_search_product'])) ? $hidden['h_search_product'] : '' ;?>"/>
    <button type="submit" class="button small right" name="srcbtn"><i class="fa fa-search"></i> Search &amp; Filter</button>
    <span>Total Product Found : <?php echo (isset($page_data['total_data'])) ? number_format($page_data['total_data']) : '0'  ?></span>
	  <table>
        <thead>
        <tr>
          <th>&nbsp;</th>
          <th width="">Nama Sepatu</th>
          <th width="140">SKU</th>
          <th width="100">Stok</th>
          <th width="120">Harga</th>
          <th width="120">Kategori</th>
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
                <?php 
                  //image processing
                  echo  img(base_url(array('thumbsgen/load', rawurlencode(base64_encode($product->images)),'50','50',$product->sku .'-xs.png?q=1&zc=1')));?>
              </td>
              <td>
                <p>
                <?php echo $product->name;?>
                </p>
              </td>
              
              <td><?php echo $product->sku;?></td>
              <td>&nbsp;</td>
              <td><?php echo  number_format( $product->price);?></td>
              <td><?php echo $product->categories;?></td>
              <td><?php echo date('d/m/Y H:m:i:s' , strtotime($product->date_local_update));?></td>
              <td>
                <?php echo anchor('admin/products/edit/' . $product->id , '<i class="fa fa-pencil-square-o fa-lg"></i>' , array());?>
                <?php 
                  if($product->local_publish == 1){
                    echo anchor('admin/products/unpublish/' . $product->id , '<i class="fa fa-cloud-download fa-lg icon-unpublish"></i>' , array());
                  } else {
                    echo anchor('admin/products/publish/' . $product->id , '<i class="fa fa-cloud-upload fa-lg "></i>' , array());
                  }?>
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
            <?php 
              $num = $this->input->get('num', true);
              $curpage = $this->input->get('curpage', true);
              $total = $page_data['total_data'];
              $num_of_page = ceil($total / (isset($num) ? (int) $num : 20 ));
              if ($num_of_page != 1){
            ?>
            <ul class="pagination" role="menubar" aria-label="Pagination">
              <?php 
                
                for($i = 1; $i <= $num_of_page ; $i++){
                ?>
                <li <?php echo  (((!isset($curpage) || empty($curpage)) && $i == 1)|| $curpage == $i) ? 'class="current"' : '' ?> >
                  <button name="curpage" id="curpage-<?php echo $i;?>" class="curpage" value="<?php echo $i;?>"><?php echo $i; ?></button>
                </li>
                <?php    
                }
              ?>
              
            </ul> 
            <?php } ?>
          </div>
          
          <div class="large-4 columns"> 
            <div class="row">
            <div class="small-8 columns">
              <label for="middle-label" class="text-right middle">Per Halaman</label>
            </div>
        
            <div class="small-4 columns">
              <select name="num" id="num">
                <option value="20" <?php echo ((int) $num == 20 || empty($num)) ? 'selected="selected"': ''?> >20</option>
                <option value="50" <?php echo ((int) $num == 50) ? 'selected="selected"': ''?> >50</option>
                <option value="100" <?php echo ((int) $num == 100) ? 'selected="selected"': ''?> >100</option>
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
<?php echo form_close();?>