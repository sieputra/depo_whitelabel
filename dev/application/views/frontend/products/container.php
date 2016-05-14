<section class="single">
  <div class="row">
    <ul class="breadcrumb">
    <li><?php echo anchor('' , 'Beranda')?></li>
    <li><?php echo anchor('products' , 'Produk')?></li>
    <li><?php echo ($products->name)? $products->name : 'Product Id. Not Found'?></li>
    </ul>
  </div>
  <div class="row">
    <div class="row"> 
      <div class="large-12 medium-12 columns " style="padding:0px 20px;">
      <div class="row">
        <div class="large-4 medium-4 columns">
          <div class="slides gallery">
          <?php
          //$this->krumo->dpm($products->images);
          if(isset($products->images) && count($products->images) != 0){
            ?>
            <ul id="lightSlider">
            <?php 
            $i = 1;
            foreach ($products->images as $key => $image) {
            ?>
            <li data-thumb="<?php echo base_url(array('thumbsgen/load', rawurlencode(base64_encode($image->src_product)),'510','510',$products->sku .'-'. $i . '-ms.png')); ?>">
            <?php
              echo anchor(base_url(array('thumbsgen/load', rawurlencode(base64_encode($image->src_product)),'510','510',$products->sku .'-'. $i . '-ms.png')), 
                          img(base_url(array('thumbsgen/load', rawurlencode(base64_encode($image->src_product)),'510','510',$products->sku .'-'. $i . '-ms.png?q=50&zc=1'))) ,
                          array('title' => $image->title_product, 'alt' => $image->alt_product));;
            ?>
            </li>
            <?php  
            $i++; 
            }
            ?>
            </ul>
            <?php
          }
          ?>
              
            <div class="kotak-zoom">
            </div>
          </div>
          <div class="white-space"></div>
          <div class="sidebar hide-for-small-only">
            <div class="lay-pel">
            <h4>Layanan Pelanggan</h4>
            <p>Telp: <br> <span><?php echo (!empty($settings_general['TELP']) ? $settings_general['TELP'] : 'Not Defined') ?></span> </p><br>
            <p>WA:<br> <strong><?php echo (!empty($settings_general['WA']) ? $settings_general['WA'] : 'Not Defined') ?></strong></p><br>
            <p>Email:<br> 
            <strong><a href="mailto:<?php echo (!empty($settings_general['EMAIL']) ? $settings_general['EMAIL'] : 'Not Defined') ?>"><?php echo (!empty($settings_general['EMAIL']) ? $settings_general['EMAIL'] : 'Not Defined') ?></a></strong></p>
            </div>
          </div>
        </div>
        
        <div class="large-6 medium-6 columns produk">
        <h1 class="judul"><?php echo ($products->name)? $products->name : 'Product Id. Not Found'?></h1>
        <p>
          <?php echo ($products->description)? $products->description : 'Product Id. Not Found'?>
        </p>
        <div class="row">
        <div class="large-6 medium-6 columns">
        <p class="produk-harga" style="font-size:2.5em;color:#222222;">Rp<?php echo ($products->price)? number_format($products->price) : 'Product Id. Not Found'?></p>
        <p class="produk-order">Untuk membeli silahkan chat dengan Kami</p>
        </div>
        <div class="large-6 medium-6 columns">
          
        <table class="mdl-data-table mdl-js-data-table " style="width:100%;">
          <thead>
            <tr>
              <th class="mdl-data-table__cell--non-numeric">Ukuran</th>
              <th>Stok</th>
            </tr>
          </thead>
          <tbody>
            <?php
            //$this->krumo->dpm($products->variations);
            if(isset($products->variations) && count($products->variations) != 0){
              foreach ($products->variations as $key => $variation) {
              ?>
              <tr>
                <td class="mdl-data-table__cell--non-numeric"><?php echo $variation->attributes_json[0]->option?></td>
                <td class="load" id="<?php echo $variation->remote_id ?>">Preparing..</td>
              </tr>
              <?php   
              }
            }
            ?>
          </tbody>
        </table>
        </div>
        </div>
        <div>
        <?php
          if(isset($products->upsell_products) && count($products->upsell_products) != 0){
            ?>
            <h3 class="judul-h3">Pilihan Warna</h3>
            <ul class="listprod">
            <?php
            foreach ($products->upsell_products as $key => $product) {
              echo '<li>' . anchor('product/'.$product->id.'/'.htmlentities(urlencode(str_replace(' ', '-', strtolower($product->name))))  ,
                          img(array('src' => base_url(array('thumbsgen/load', rawurlencode(base64_encode($product->images)),'50','50',$product->sku .'-xs.png?q=1&zc=1')),
                              'width' => '50' , 'height' => '50')),
                              array('title' => 'View Detail Of ' . $product->name))
                   . '</li>';   
            }
            ?>  
            </ul>
            <?php
          }
        ?>
        </div>
        <div class="white-space"></div>
        <div class="produk-kode">
        <p>Kode Barang: <?php echo ($products->sku)? $products->sku : 'Product Id. Not Found'?>.</p>
        <p>Kategori: 
            <?php
              $links = array();
              foreach ($products->categories as $key => $category) {
                $links[] = anchor('products/category/' . str_replace(array('+', '/', '='), array('-', '_', '~'),base64_encode($category->name)) . '/' . $category->slug , $category->name);    
              }
              echo implode(', ', $links);
            ?>.</p>
        <p>Tag: <?php
              $links = array();
              foreach ($products->tags as $key => $tag) {
                $links[] = anchor('products/tag/' . str_replace(array('+', '/', '='), array('-', '_', '~'),base64_encode($tag->name))  . '/' . $tag->slug , $tag->name);    
              }
              echo implode(', ', $links);
            ?>.</p>
        </div>
        <div class="white-space"></div><div class="share">
          <?php //$this->krumo->dpm($settings_general);?>
         <span>Share :</span>
        <ul>
          <li><?php echo anchor((!empty($settings_general['FACEBOOK']) ? $settings_general['FACEBOOK'] : '#') , '<i class="fa fa-facebook-official fa-lg"></i>') ?></li>
          <li><?php echo anchor((!empty($settings_general['TWITTER']) ? $settings_general['TWITTER'] : '#')  , '<i class="fa fa-twitter-square fa-lg"></i>') ?></li>
          <li><?php echo anchor((!empty($settings_general['INSTAGRAM']) ? $settings_general['INSTAGRAM'] : '#')  , '<i class="fa fa-instagram fa-lg"></i>') ?></li>
        </ul>
        </div>
        </div>
      </div>
      </div>
    </div>
  </div>
  <div class="itong">
  <div class="row ongkir">
  <div class="large-5 medium-5 columns">
  <dl class="accordion" style="margin-bottom:0px;background:none;">
      <dt style="background:#f9f9f9;" ><span>Hitung Ongkir</span><i class="accordion_icon fa fa-plus"></i>
    <div class="gambar-ongkir">
      <img src="images/siap-kirim.png" alt="">
    </div>
    </dt>
    <dd class="accordion_content ongk">
    <div data-theme="light" id="rajaongkir-widget"></div>
    <script type="text/javascript" src="//rajaongkir.com/script/widget.js"></script>
    </dd>
  </dl>
  </div>
  </div>
  </div>

</section>

