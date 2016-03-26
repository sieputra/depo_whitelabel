<?php
ob_start();
include("header.php");
$buffer=ob_get_contents();
ob_end_clean();
$buffer=str_replace("%TITLE%","General - Dashboard Deposepatu Reseller",$buffer);
echo $buffer;
$judullaman="General";
?>


        <!-- Page Content -->
        <div id="page-content-wrapper">

		<?php include'inc-header.php'; ?>

		<div class="row page" >
			<div class="large-12 columns">
				<form action="" class="form-horizontal">
				<h4>Website TITLE dan DESCRIPTION</h4>

					<p>
					Website Title dan Deskripsi adalah bagian terpenting dari sebuah website.
					Sebuah deskripsi meta tag adalah deskripsi singkat tentang halaman tersebut.
					Karena judul mungkin terlalu umum, sebuah deskripsi meta tag menjelaskan lebih khusus lagi.
					</p>

					<p><a href="page-seo.php">Edit di halaman SEO</a></p>

				<hr>


				<h4>LOGO</h4>
				<div class="row">
					<div class="large-4 columns">
					<p>
					Logo merupakan identitas dari perusahaan Anda.
					</p>
					</div>

					<div class="large-8 columns">

					<img src="../images/logo.png" alt="">
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
					<img src="../images/favicon.png" alt="">
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
						  <input type="number" id="middle-label" placeholder="No Telepon Kamu">
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
  							  <input type="text" id="middle-label" placeholder="Nomor telepon">
  							</div>
  						 </div>

               <div class="row">
   							<div class="small-4 columns">
   							  <label for="middle-label" class="text-right middle">Line</label>
   							</div>
   							<div class="small-8 columns">
   							  <input type="text" id="middle-label" placeholder="Nomor telepon ">
   							</div>
   						 </div>

               <div class="row">
   							<div class="small-4 columns">
   							  <label for="middle-label" class="text-right middle">BBM</label>
   							</div>
   							<div class="small-8 columns">
   							  <input type="text" id="middle-label" placeholder="Pin BBM">
   							</div>
   						 </div>

               <div class="row">
   							<div class="small-4 columns">
   							  <label for="middle-label" class="text-right middle">Kakao</label>
   							</div>
   							<div class="small-8 columns">
   							  <input type="text" id="middle-label" placeholder="Nomor telepon">
   							</div>
   						 </div>


						</div>
					  </div>

					  <div class="row">
						<div class="small-4 columns">
						  <label for="middle-label" class="text-right middle">E-Mail</label>
						</div>
						<div class="small-8 columns">
						  <input type="email" id="middle-label" placeholder="Alamat E-Mail Kamu">
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
							  <input type="url" id="middle-label" placeholder="URL Facebook Kamu">
							</div>
						</div>

						<div class="row">
							<div class="small-4 columns">
							  <label for="middle-label" class="text-right middle">Twitter</label>
							</div>
							<div class="small-8 columns">
							  <input type="url" id="middle-label" placeholder="URL Twitter Kamu">
							</div>
						 </div>

						 <div class="row">
							<div class="small-4 columns">
							  <label for="middle-label" class="text-right middle">Instagram</label>
							</div>
							<div class="small-8 columns">
							  <input type="url" id="middle-label" placeholder="URL Instagram Kamu">
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
							  <select>
								<option value="gelap">Gelap</option>
								<option value="terang">Terang</option>
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
						<textarea placeholder="Masukan Code zopim kamu"></textarea>
					</div>

					<div class="large-2 columns">
						<p class="info">Kalau belum punya akun Zopim, silahkan buat terlebih dahulu <a href="https://account.zopim.com/signup" target="_blank">disini</a></p>
					</div>
				</div>

				<hr>

				<a href="#" class="button small right">Simpan</a>



				</form>
			</div>
		</div>

        <!-- /#page-content-wrapper -->
		</div>

<?php include'footer.php' ?>
