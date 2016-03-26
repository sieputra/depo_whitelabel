<?php
ob_start();
include("header.php");
$buffer=ob_get_contents();
ob_end_clean();
$buffer=str_replace("%TITLE%","Tiket - Dashboard Deposepatu Reseller",$buffer);
echo $buffer;
$judullaman="Tiket Support";
?>
        
        <!-- Page Content -->
        <div id="page-content-wrapper">
		
		<?php include'inc-header.php'; ?>
        
		<div class="row page single" >
			<div class="large-12 columns">
			
			<div class="row">
			<div class="large-12 columns">
			<h4>#SM 2345 - Pembelian Adidas Seri ABCD 10 Pcs</h4>
			
			</div>
			</div>
			
			<form action="">
			<div class="row">
			<div class="large-12 columns">
				<div class="callout support-tiket" >	
				
				
				<div class="row">
					<div class="large-12 columns">
					<h5><strong>Untuk  Departemen :</strong> Sales & Marketing </h5>
					<p>Ditulis pada : 03/02/2016 12:06</p>
					<hr>
					<h5>Pesan Reseller</h5>
					
					
					<p>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, totam similique quod omnis saepe. Vero, repellendus, architecto, voluptate, sed nam repellat quidem expedita blanditiis aperiam qui velit fugit dicta illum?
					</p>

					<p>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, totam similique quod omnis saepe. Vero, repellendus, architecto, voluptate, sed nam repellat quidem expedita blanditiis aperiam qui velit fugit dicta illum?
					</p>
					
					<hr>
					<p>LAMPIRAN GAMBAR</p>
					<p>
					<img src="images/material-design-colors.png" alt="">
					</p>
					
					</div>
				</div>
				
				

				
				
				</div>
				
				<ul class="st">
					<li>
					<div class="callout balasan balasan-deposepatu ">
						<span>Balasan Deposepatu</span>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto, architecto, nulla officiis porro illo facere nam excepturi saepe eaque minima dolorem debitis expedita animi consequatur obcaecati ad provident sapiente ea.</p>
					</div>
					</li>
					
					<li>
					<div class="callout balasan">	
						<span>Balasan Reseller</span>					
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto, architecto, nulla officiis porro illo facere nam excepturi saepe eaque minima dolorem debitis expedita animi consequatur obcaecati ad provident sapiente ea.</p>
					</div>
					</li>
					
					<li>
					<div class="callout balasan balasan-deposepatu ">
						<span>Balasan Deposepatu</span>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto, architecto, nulla officiis porro illo facere nam excepturi saepe eaque minima dolorem debitis expedita animi consequatur obcaecati ad provident sapiente ea.</p>
					
			
					
					
			
					<div class="row">
						<div class="small-6 columns right">
							<a href="#" class="button tiny warning right respontiket">RESPON</a>
						</div>					
					</div>
					
					
					</div>
					</li>
					
					<li class="responform">
					<form action="">					
						<div class="callout balasan">	
						<span>Balasan Reseller</span>					
						
						<textarea style="height:180px" placeholder="Tulis Komentar Kamu"></textarea>
						
						<hr>
						
						
						<button class="file-upload button hollow button tiny"><input type="file" class="file-input">
							<i class="fa fa-paperclip fa-lg"></i> lampirkan gambar
						</button>
						
						<div class="button-group tiny right respontiketkirim">
						  <a class="button tiny secondary responcancel">CANCEL</a>
						  <a class="button tiny warning">KIRIM</a>
						</div>
						
						</div>
					</form>	
					</li>
					
					
				</ul>
				
				
				
				
				
				
				<hr>
				
				<div class="row">
				<div class="large-6 columns right">
				<p class="info right">
				Tutup tiket jika masalah telah selesai, tiket yang tidak di balas reseller lebih dari 2 hari akan di tutup otomatis
				</p>
				</div>
				</div>
				
				
				<a href="#" class="button small right">TUTUP TIKET</a>
				
			</div>
			
		

			</div>
			</form>


			</div>
		</div>
 
        <!-- /#page-content-wrapper -->
		</div>
		
<?php include'footer.php' ?>
  
