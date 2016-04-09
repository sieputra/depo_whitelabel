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

<div class="row page" >
      <div class="large-12 columns">
        <h4>Website TITLE dan DESCRIPTION</h4>

          <p>
          Website Title dan Deskripsi adalah bagian terpenting dari sebuah website.
          Sebuah deskripsi meta tag adalah deskripsi singkat tentang halaman tersebut.
          Karena judul mungkin terlalu umum, sebuah deskripsi meta tag menjelaskan lebih khusus lagi.
          </p>
          <p><?php echo anchor('admin/seo', 'Edit di halaman SEO', array('title' => 'Edit di halaman SEO'));?></p>
        <hr>


        <h4>LOGO</h4>
        <div class="row">
          <div class="large-4 columns">
          <p>
          Logo merupakan identitas dari perusahaan Anda.
          </p>
          </div>

          <div class="large-8 columns">

          <img src="<?php echo base_url()?>assets/frontend/logo.png" alt="">
          <button class="file-upload button hollow button right"><input type="file" class="file-input">
            Upload Logo
          </button>
          </div>
        </div>
        <hr>

        <h4>FAVICON</h4>
        <div class="row">
          <div class="large-4 columns">
          <p>
          Favicon merupakan icon yang muncul di Browser
          </p>
          </div>

          <div class="large-8 columns">
          <img src="<?php echo base_url()?>assets/frontend/favicon.png" alt="">
          <button class="file-upload button hollow button right"><input type="file" class="file-input">
            Upload Favicon
          </button>
          </div>
        </div>
        <hr>

        <h4>LAYANAN PELANGGAN</h4>
        <div class="row">
          <div class="large-4 columns">
          <p>
          Kolom ini memudahkan Pengunjung untuk berkomunikasi dengan Anda
          </p>
          </div>

          <div class="large-8 columns">
            <div class="row">
            <div class="small-4 columns">
              <label for="middle-label" class="text-right middle">Nomor Telepon</label>
            </div>
            <div class="small-8 columns">
              <input type="number" id="middle-label" placeholder="No Telepon Kamu" name="telp" value="<?php echo (!empty($settings['TELP']) ? $settings['TELP'] : ''); ?>">
            </div>
            </div>

            <div class="row">
            <div class="small-4 columns">
              <label for="middle-label" class="text-right middle">Chat</label>
            </div>
            <div class="small-8 columns">
              <div class="row">
                <div class="small-4 columns">
                  <label for="middle-label" class="text-right middle">WA</label>
                </div>
                <div class="small-8 columns">
                  <input type="text" id="middle-label" placeholder="Nomor telepon" name="wa" value="<?php echo (!empty($settings['WA']) ? $settings['WA'] : ''); ?>">
                </div>
               </div>

               <div class="row">
                <div class="small-4 columns">
                  <label for="middle-label" class="text-right middle">Line</label>
                </div>
                <div class="small-8 columns">
                  <input type="text" id="middle-label" placeholder="Nomor telepon" name='line' value="<?php echo (!empty($settings['LINE']) ? $settings['LINE'] : ''); ?>">
                </div>
               </div>

               <div class="row">
                <div class="small-4 columns">
                  <label for="middle-label" class="text-right middle">BBM</label>
                </div>
                <div class="small-8 columns">
                  <input type="text" id="middle-label" placeholder="Pin BBM" name="bbm" value="<?php echo (!empty($settings['BBM']) ? $settings['BBM'] : ''); ?>">
                </div>
               </div>

               <div class="row">
                <div class="small-4 columns">
                  <label for="middle-label" class="text-right middle">Kakao</label>
                </div>
                <div class="small-8 columns">
                  <input type="text" id="middle-label" placeholder="Nomor telepon" name="kakkao" value="<?php echo (!empty($settings['KAKKAO']) ? $settings['KAKKAO'] : ''); ?>">
                </div>
               </div>


            </div>
            </div>

            <div class="row">
            <div class="small-4 columns">
              <label for="middle-label" class="text-right middle">E-Mail</label>
            </div>
            <div class="small-8 columns">
              <input type="email" id="middle-label" placeholder="Alamat E-Mail Kamu" name="email" value="<?php echo (!empty($settings['EMAIL']) ? $settings['EMAIL'] : ''); ?>">
            </div>
            </div>

          </div>
        </div>
        <hr>

        <h4>SOSIAL MEDIA</h4>
        <div class="row">
          <div class="large-4 columns">
          <p>
          Kalau kamu juga memiliki laman sosmed kamu bisa menampilkannya di website ini
          </p>
          </div>

          <div class="large-8 columns">
            <div class="row">
              <div class="small-4 columns">
                <label for="middle-label" class="text-right middle">Facebook</label>
              </div>
              <div class="small-8 columns">
                <input type="url" id="middle-label" placeholder="URL Facebook Kamu" name="facebook" value="<?php echo (!empty($settings['FACEBOOK']) ? $settings['FACEBOOK'] : ''); ?>">
              </div>
            </div>

            <div class="row">
              <div class="small-4 columns">
                <label for="middle-label" class="text-right middle">Twitter</label>
              </div>
              <div class="small-8 columns">
                <input type="url" id="middle-label" placeholder="URL Twitter Kamu" name="twitter" value="<?php echo (!empty($settings['TWITTER']) ? $settings['TWITTER'] : ''); ?>">
              </div>
             </div>

             <div class="row">
              <div class="small-4 columns">
                <label for="middle-label" class="text-right middle">Instagram</label>
              </div>
              <div class="small-8 columns">
                <input type="url" id="middle-label" placeholder="URL Instagram Kamu" name="instagram" value="<?php echo (!empty($settings['INSTAGRAM']) ? $settings['INSTAGRAM'] : ''); ?>">
                <br>
                <p class="info right">Akan tampil secara otomatis di pojok kanan atas website begitu kamu masukan URL halaman sosmed Kamu</p>
              </div>
             </div>


          </div>
        </div>
        <hr>

        <h4>FOOTER</h4>
        <div class="row">
          <div class="large-4 columns">
          <p>
          Pilihan warna untuk bagian Footer, secara default yang tampil adalah tampilan dengan warna gelap.
          </p>
          </div>

          <div class="large-8 columns">
            <div class="row">
              <div class="small-4 columns">
                <label for="middle-label" class="text-right middle">Warna Pada Footer</label>
              </div>
              <div class="small-8 columns">
                <select name="footer_scheme">
                <option value="gelap" <?php echo ((!empty($settings['FOOTER_SCHEME']) && ($settings['FOOTER_SCHEME'] == 'gelap')) ? 'selected="selected"' : ''); ?>>Gelap</option>
                <option value="terang"  <?php echo ((!empty($settings['FOOTER_SCHEME']) && ($settings['FOOTER_SCHEME'] == 'terang')) ? 'selected="selected"' : ''); ?>>Terang</option>
                </select>
              </div>
             </div>
          </div>
        </div>
        <hr>

        <h4>LIVE CHAT</h4>
        <div class="row">
          <div class="large-4 columns">
            <p>
            Live Chat memungkinkan kamu untuk berkomunikasi secara langsung dengan Pengunjung. Fitur menarik yang tidak boleh Kamu lewatkan.
            </p>
          </div>

          <div class="large-6 columns">
            <textarea placeholder="Masukan Code zopim kamu" name="zopim_code"><?php echo (!empty($settings['ZOPIM_CODE']) ? $settings['ZOPIM_CODE'] : ''); ?></textarea>
          </div>

          <div class="large-2 columns">
            <p class="info">Kalau belum punya akun Zopim, silahkan buat terlebih dahulu <a href="https://account.zopim.com/signup" target="_blank">disini</a></p>
          </div>
        </div>
        <hr>
        <button type="submit" class="button small right">Simpan</button>
      </div>
    </div>
<!-- /#page-content-wrapper -->
</div>
<?php echo form_close(); ?>