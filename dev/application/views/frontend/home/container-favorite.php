<div class="row" style="padding-bottom:100px;">
<div class="large-6  medium-6 columns" >
<?php 
echo anchor('product/'.$data->id.'/'.htmlentities(urlencode(str_replace(' ', '-', strtolower($data->name)))) , 
                img(base_url(array('thumbsgen/load', rawurlencode(base64_encode($data->images[0]->src_product)),'570','570',$data->sku .'-l.png?q=50&zc=1'))) ,
                array('style' => 'margin-top:-150px;position:absolute;' , 'title' => $data->images[0]->title_product, 'alt' => $data->images[0]->alt_product)); ?>  
</div>


<div class="large-6  medium-6 columns">
<div class="">
  <h2 class="judul" >Produk Favorit</h2>
  <h4><a href="single-product.php"><?php echo $data->name;?></a></h4>
  <p>
  <?php echo $data->description;?>
  </p>
  
  <div class="gallery" style="display:block;float:left;width: 100%;margin-bottom:20px">
    <?php
    if(count($data->images) != 0){
      ?>
      <ul class="listprod">
      <?php 
      $i = 1;
      foreach ($data->images as $key => $image) {
         ?>
         <li>
          <?php 
          echo anchor(base_url(array('thumbsgen/load', rawurlencode(base64_encode($image->src_product)),'502','502',$data->sku .'-'. $i . '-ms.png')), 
                          img(base_url(array('thumbsgen/load', rawurlencode(base64_encode($image->src_product)),'50','50',$data->sku .'-'. $i . '-xs.png?q=50&zc=1'))) ,
                          array('title' => $image->title_product, 'alt' => $image->alt_product)); ?>
        </li>
         <?php 
         $i++;
      }  ?>  
      </ul>
      <?php
    }
    ?>
  </div>
  <?php 
  echo anchor('product/'.$data->id.'/'.htmlentities(urlencode(str_replace(' ', '-', strtolower($data->name)))) , 'Lihat Produk' , array('class' => 'button'));
  ?>
</div>
</div>


</div>