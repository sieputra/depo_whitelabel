<?php
ob_start();
include("header.php");
$buffer=ob_get_contents();
ob_end_clean();
$buffer=str_replace("%TITLE%","Tulis Tiket - Dashboard Deposepatu Reseller",$buffer);
echo $buffer;
$judullaman="Tulis Tiket";
?>
        
        <!-- Page Content -->
        <div id="page-content-wrapper">
		
		<?php include'inc-header.php'; ?>
        
		<div class="row page single" >
			<div class="large-12 columns">
			
			<div class="row">
			<div class="large-12 columns">
			<h4 class="hide">Tulis TIket</h4> 
			
			</div>
			</div>
			
			
			<div class="row">
			<div class="large-12 columns">
				
				<div class="callout">
						<form action="">
						<div class="row">
							<div class="small-12 large-3 columns">
							  <label for="middle-label" class="text-right middle">Subjek</label>
							</div>
							<div class="small-12 large-9  columns">
							  <input type="text" id="middle-label" placeholder="subjek Pesan">
							</div>
						</div>
						
						<div class="row">
							<div class="small-12 large-3  columns">
							  <label for="middle-label" class="text-right middle">Departemen</label>
							</div>
							<div class="small-12 large-9  columns">
							  <select>
								<option value="pil1">Sales &amp; Marketing</option>
								<option value="pil2">Support</option>
								<option value="pil3">Billing</option>
							  </select>
							</div>
						 </div>	
						
						<div class="row">
							<div class="small-12 large-3  columns">
							  <label for="middle-label" class="text-right middle">Pesan</label>
							</div>
							<div class="small-12 large-9  columns">
							  <textarea placeholder="Pesan Kamu" style="height:120px;"></textarea>
							</div>
						</div>
						
						<div class="row">
							<div class="large-12 columns">
							<hr>
							</div>
						
							<div class="large-3 columns">
								<button class="file-upload button hollow button tiny left"><input type="file" class="file-input">
									<i class="fa fa-paperclip fa-lg"></i> lampirkan gambar
								</button>
							</div>
						
							<div class="large-9 columns">
								
								<a href="#" class="button warning tiny right" style="margin-top:10px;">Kirim</a>
								
								
							</div>
						</div>
						
						
						
						</form>	
						</div>
				
			</div>
			
		

			</div>
		


			</div>
		</div>
 
        <!-- /#page-content-wrapper -->
		</div>
		
<?php include'footer.php' ?>
  
