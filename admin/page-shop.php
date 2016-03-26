<?php
ob_start();
include("header.php");
$buffer=ob_get_contents();
ob_end_clean();
$buffer=str_replace("%TITLE%","Shop - Dashboard Deposepatu Reseller",$buffer);
echo $buffer;
$judullaman="Shop";
?>
 
        
        <!-- Page Content -->
        <div id="page-content-wrapper">
		
		<?php include'inc-header.php'; ?>
        
		<div class="row page" >
			<div class="large-12 columns">
			<form action="">
				<h4>Produk Favorit</h4>
				<div class="row">
					<div class="large-4 columns">
						<p>
						Produk yang ingin dipilih sebagai Highlight untuk menarik perhatian Pengunjung
						</p>
					</div>

					<div class="large-8 columns">
						<div class="row">
							<div class="small-4 columns">
							  <label for="middle-label" class="text-right middle">Produk</label>
							</div>
							<div class="small-8 columns">
							  <select>
								<option value="pil1">Pilihan 1</option>
								<option value="pil2">Pilihan 2</option>
							  </select>
							</div>
						 </div>	
					</div>
				</div>
				
				<hr>
				
				<h4>Produk (Home)</h4>
				<div class="row">
					<div class="large-4 columns">
						<p>
						Jumlah produk yang ingin di tampilkan pada halaman home
						</p>
					</div>

					<div class="large-8 columns">
						<div class="row">
							<div class="small-10 columns">
							  <label for="middle-label" class="text-right middle">Produk yang ditampilkan</label>
							</div>
							<div class="small-2 columns">
							  <select>
								<option value="pil1">4</option>
								<option value="pil2">8</option>
								<option value="pil3">12</option>
								<option value="pil4">16</option>
							  </select>
							</div>
						 </div>	
					</div>
				</div>
				<hr>
				
				<h4>Produk (Halaman)</h4>
				<div class="row">
					<div class="large-4 columns">
						<p>
						Jumlah produk yang ingin di tampilkan pada halaman Produk
						</p>
					</div>

					<div class="large-8 columns">
						<div class="row">
							<div class="small-10 columns">
							  <label for="middle-label" class="text-right middle">Produk yang ditampilkan</label>
							</div>
							<div class="small-2 columns">
							  <select>
								<option value="pil1">4</option>
								<option value="pil2">8</option>
								<option value="pil3">12</option>
								<option value="pil4">16</option>
							  </select>
							</div>
						 </div>	
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
  
