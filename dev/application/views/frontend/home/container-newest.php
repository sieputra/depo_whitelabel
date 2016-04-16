<?php
//$this->krumo->dpm($data);
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
<div class="row"  style="padding-bottom:4rem;">
    <div class="large-12 medium-12 columns">
      <div class="">
      <p style="text-align:center;margin-top:40px;">
          <a href="page-product.php" class="outline-button">Lihat Semua Produk</a>
      </p>
      </div>
    </div>
  </div>
</div>

