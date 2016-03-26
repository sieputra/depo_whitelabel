<?php
ob_start();
include("header.php");
$buffer=ob_get_contents();
ob_end_clean();
$buffer=str_replace("%TITLE%","SEO - Dashboard Deposepatu Reseller",$buffer);
echo $buffer;
$judullaman="SEO";
?>
 
        
        <!-- Page Content -->
        <div id="page-content-wrapper">
		
		<?php include'inc-header.php'; ?>
        
		<div class="row page" >
			<div class="large-12 columns">
			<form action="">
				<h4>SEO Title Tag</h4>
				<div class="row">
					<div class="large-4 columns">
						<p>
						Dengan adanya Title Tag maka pengunjung bisa mengetahui garis besar dari informasi yang disajikan.
						Sangat penting untuk mengoptimalkan Title Tag baik itu untuk Judul Blog maupun untuk judul sebuah halaman. 
						Dalam SEO, title tag memainkan peranan yang sangat penting karena title tag sendiri merupakan faktor dasar search engine untuk mengukur relavansi dari keyword yang dicari penggunjung
						</p>
					</div>

					<div class="large-8 columns">
						<textarea placeholder="Masukan Title tag untuk optimalisasi SEO sesuai kebutuhan"></textarea>
					</div>
				</div>
				<hr>
				
				<h4>Meta Tag Description</h4>
				<div class="row">
					<div class="large-4 columns">
						<p>
						 Meta Tag adalah kode-kode HTML yang ada di bagian halaman sebuah situs. 
						 Meta tags tidak muncul di halaman posting, sehingga kebanyakan pengunjung tidak pernah melihatnya. 
						 Meta tags berfungsi untuk memberikan informasi tambahan mengenai kondisi sebuah halaman situs kepada robot mesin pencari
						</p>
					</div>

					<div class="large-8 columns">
						<textarea placeholder="Masukan Meta Description untuk optimalisasi SEO sesuai kebutuhan"></textarea>
					</div>
				</div>
				<hr>
				
				<h4>Focus Keyword</h4>
				<div class="row">
					<div class="large-4 columns">
						<p>
						Keyword yang ingin ditonjolkan dalam website kamu
						</p>
					</div>

					<div class="large-8 columns">
						<textarea placeholder="Masukan Title tag untuk optimalisasi SEO sesuai kebutuhan"></textarea>
						<p class="right info"><em>pisahkan dengan koma</em></p>
					</div>
				</div>
				
				
				
				<hr>
				<h4>Header Area</h4>
				<div class="row">
					<div class="large-4 columns">
						<p>
						Code yang di sisipkan sebelum tag < / head>
						</p>
					</div>

					<div class="large-8 columns">
						<textarea placeholder="Masukan Code untuk di taruh di Header"></textarea>
					</div>
				</div>
				
				
				<hr>
				
				<h4>Footer Area</h4>
				<div class="row">
					<div class="large-4 columns">
						<p>
						Code yang di sisipkan pada bagian bawah laman HTML sebelum tag < / body>
						</p>
					</div>

					<div class="large-8 columns">
						<textarea placeholder="Masukan Code untuk di taruh di Footer"></textarea>
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
  
