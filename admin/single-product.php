<?php
ob_start();
include("header.php");
$buffer=ob_get_contents();
ob_end_clean();
$buffer=str_replace("%TITLE%","Ubah Produk - Dashboard Deposepatu Reseller",$buffer);
echo $buffer;
$judullaman="Ubah Produk";
?>
        
        <!-- Page Content -->
        <div id="page-content-wrapper">
		
		<?php include'inc-header.php'; ?>
        
		<div class="row page single" >
			<div class="large-12 columns">
			
			<div class="row">
			<div class="large-4 columns">
			<h4>Ubah Produk</h4>
			
			</div>
			
			<div class="large-4 columns">
		
			</div>
			</div>
			
			<form action="">
			<div class="row">
			<div class="large-12 columns">
				<div class="callout">	
				<h5>Gambar Produk</h5>
				<p>Ubah gambar produk utama jika Anda ingin menampilkan gambar khusus dari toko Anda</p>
				<hr>
				<div class="row">
				<div class="large-8 columns">
				<img src="../images/detail/Adidas-16029M-HTBR-A-510x510.jpg" alt="" class="img-thumb-middle">
				<br>
				<button class="file-upload button hollow button left"><input type="file" class="file-input">
						Upload Gambar
				</button>
				</div>
				
				<div class="large-4">
					
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
					  <input type="text" id="right-label" placeholder="ADIDAS ZX 630 - A+ [16029M-HTBR]">
					</div>
				</div>
				
				<div class="row">
					<div class="large-3 columns">
					  <label for="right-label" class="right inline">Harga (Rp)</label>
					</div>
					<div class="large-9 columns">
						<div class="row">
							
							<div class="small-5 columns">
							  <input type="number" placeholder="289.000">
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
					  <label for="right-label" class="right inline">Kategori</label>
					</div>
					<div class="large-9 columns">
					  <textarea 
					  placeholder="Adidas , Sepatu Casual, Sepatu Pria, Terlaris"
					  ></textarea> 
					</div>
				</div>
				
				<div class="row">
					<div class="large-3 columns">
					  <label for="right-label" class="right inline">Tag</label>
					</div>
					<div class="large-9 columns">
					  <textarea 
					  placeholder="adidas casual, adidas men"
					  ></textarea> 
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
				
				<div class="row">
					<div class="large-3 columns">
					  <label for="right-label" class="right inline">Deskripsi Produk</label>
					</div>
					<div class="large-9 columns">
					  <textarea style="height:180px"
					  placeholder="Adidas ZX 630 hadir dengan balutan desain yang kreatif. Dengan bahan suede dan textile mesh berwarna hitam yang dipadu dengan aksen warna biru cerah. Sangat menarik untuk melengkapi gaya casualmu. Kualitas grade ori A+.pack"
					  ></textarea>
					</div>
				</div>
				
				<div class="row">
					<div class="large-3 columns">
					  <label for="right-label" class="right inline">Aktifkan Label Diskon?</label>
					</div>
					<div class="large-9 columns">
					  <div class="row">
						<div class="large-2 columns">
							<select>
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
								  <input type="text" id="right-label" placeholder="-50%">
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
			</form>


			</div>
		</div>
 
        <!-- /#page-content-wrapper -->
		</div>
		
<?php include'footer.php' ?>
  
