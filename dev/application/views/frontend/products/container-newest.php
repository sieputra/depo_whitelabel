<?php
//$this->krumo->dpm($data);
if(isset($data) && $data){
$i = 1;
foreach ($data as $key => $product) {
  if($i ==1 ){
    ?>
    <div class="row">
    <?php
  }
  ?>
  <div class="large-3 medium-3 small-6 columns">
    <div class="produk">
      <figure>
        <?php echo img(array('src' => base_url(array('thumbsgen/load', rawurlencode(base64_encode($product->images)),'247','247',$product->sku .'-m.png?q=50&zc=1')),
                              'width' => '247' , 'height' => '247')) ?>
        <p class="produk-judul"><?php echo $product->name ?></p>
        <p class="produk-harga">Rp. <?php echo number_format((int) $product->price) ?></p>
        
        <figcaption>
          <div> <?php
          echo anchor('product/'.$product->id.'/'.htmlentities(urlencode(str_replace(' ', '-', strtolower($product->name)))) , 'View', array('title' => 'View Detail Of ' . $product->name));
          ?></div>
        </figcaption>
      </figure>
    </div>
  </div>
  <?php
  if($i%4 == 0){
    ?>
    </div>
    <div class="row">
    <?php
  }
  $i++;	
}
?>
</div>
<?php } else {
  ?>
  <div class="row">
    <div class="large-12 medium-12 small-12 columns">
    <p>Product Tidak Ditemukan</p>
    </div>  
  </div>
  <?php
}?>
