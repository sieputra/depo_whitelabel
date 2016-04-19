<div class="row page single" >
  <div class="large-12 columns">
  
  <div class="row">
    <div class="large-4 columns">
      <h4>Ubah Produk</h4>
    </div>
    <div class="large-4 columns">
  
    </div>
  </div>
  
  <div class="row">
    <div class="large-12 columns">
      <div class="row">
      <div class="large-6 columns">
      <div class="callout"> 
        <h5>Gambar Produk</h5>
        <p>Ubah gambar produk utama jika Anda ingin menampilkan gambar khusus dari toko Anda</p>
        <hr>
        <div class="row">
          <div class="large-12 columns" style="text-align: center">
            <?php echo img(array('src' => base_url(array('thumbsgen/load', rawurlencode(base64_encode($data->images)),'510','510',$data->sku .'-epm.png?q=50&zc=1'))));?>
            <br>
            <button class="file-upload button hollow button center"><input type="file" class="file-input">
                Upload Gambar
            </button>
          </div>
        </div>
      </div>
      </div>
      <div class="large-6 columns">
        <div class="callout">
          <h5>Categories, Tags &amp; Stock</h5>
          <p>Informasi Untuk Kategori, tags dan Stok dari deposepatu</p>
          <hr>
          <div class="row">
            <div class="large-3 columns">
              <label for="right-label" class="right inline">Kategori</label>
            </div>
            <div class="large-9 columns">
              <textarea name="categories" readonly="readonly" style="height:100px;"
              placeholder="Edit Kategori"
              ><?php echo (isset($data->categories) ? $data->categories : '')?></textarea> 
            </div>
          </div>
          
          <div class="row">
            <div class="large-3 columns">
              <label for="right-label" class="right inline">Tag</label>
            </div>
            <div class="large-9 columns">
              <textarea name="tags" readonly="readonly" style="height:100px;"
              placeholder="Edit Tags"
              ><?php echo (isset($data->tags) ? $data->tags : '')?></textarea> 
            </div>
          </div>
          
          
          <div class="row">
            <div class="large-3 columns">
              <label for="right-label" class="right inline">Stok</label>
            </div>
            <div class="large-9 columns">
              <a class="disabled expanded secondary button" href="#">Stok di update otomatis (live) dari website DepoSepatu :)</a>
            </div>
          </div>  
        </div>
        <div class="callout"> 
          <h5>Produk Sejenis Beda Warna</h5>
          <p>Ubah Data produk sejenis dengan memilih salah satu dari produk yang di tampilkan dibawah ini</p>
          <hr>
          <div class="row">
            <div class="large-12 columns">
            <ul class="listprod">
            <?php
              foreach ($data->upsell_products as $key => $product) {
                if($data->id != $product->id ){
                echo '<li>' . anchor('admin/products/edit/'.$product->id   ,
                            img(array('src' => base_url(array('thumbsgen/load', rawurlencode(base64_encode($product->images)),'50','50',$product->sku .'-xs.png?q=1&zc=1')),
                                'width' => '50' , 'height' => '50')),
                                array('title' => 'View Detail Of ' . $product->name))
                     . '</li>';   
                }
              }
              ?>    
            </ul>  
            </div>
          </div>
        </div>
      </div>
      </div>
      
    
      <div class="callout">       
      <h5>Detail Produk</h5>
      <p>Ubah deskripsi produk sesuai dengan kebutuhan Anda</p>
      <hr>
        <div class="row">
        <div class="large-3 columns">
          <label for="right-label" class="right inline">Judul Produk</label>
        </div>
        <div class="large-9 columns">
          <input type="text" id="right-label" placeholder="Edit Nama Produk Anda" name="name" value="<?php echo (isset($data->name) ? $data->name : '')?>">
        </div>
      </div>
      
      <div class="row">
        <div class="large-3 columns">
          <label for="right-label" class="right inline">Harga (Rp)</label>
        </div>
        <div class="large-9 columns">
          <div class="row">
            
            <div class="small-5 columns">
              <input type="number" placeholder="Edit Harga" name="price" value="<?php echo (isset($data->price) ? $data->price : '')?>">
            </div>
            
            <div class="small-4 columns">
              <p class="info">
              Harga Rp tanpa menggunakan koma dan titik. Contoh: 299000
              </p>
            </div>
          </div>
        </div>
      
      </div>
      
      
      
      <div class="row">
        <div class="large-3 columns">
          <label for="right-label" class="right inline">Deskripsi Produk</label>
        </div>
        <div class="large-9 columns">
          <textarea style="height:180px" name="description" class="editor"
          placeholder="Edit Deskripsi Produk"
          ><?php echo (isset($data->description) ? $data->description : '')?></textarea>
        </div>
      </div>
      
      <div class="row">
        <div class="large-3 columns">
          <label for="right-label" class="right inline">Aktifkan Label Diskon?</label>
        </div>
        <div class="large-9 columns">
          <div class="row">
          <div class="large-2 columns">
            <select name="discount">
              <option value="diskon-tidak">Tidak</option> 
              <option value="diskon-ya">Ya</option>
              
              </select>
          </div>
          
          <div class="large-5 columns">
            <div class="row">
              <div class="large-6 columns">
                <label for="right-label" class="right inline">Label Diskon</label>
              </div>
              <div class="large-6 columns">
                <input type="text" id="right-label" name="disc_value" placeholder="-50%">
              </div>
            </div>
          </div>
          
          <div class="large-5 columns">
          
          </div>
          </div>
        </div>
      </div>
      
      </div>
      
      <hr>
      <a href="#" class="button small right">Simpan</a>
      
    </div>
  </div>
  </div>
</div>