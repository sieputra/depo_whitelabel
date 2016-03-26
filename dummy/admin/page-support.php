<?php
ob_start();
include("header.php");
$buffer=ob_get_contents();
ob_end_clean();
$buffer=str_replace("%TITLE%","Support - Dashboard Deposepatu Reseller",$buffer);
echo $buffer;
$judullaman="Support";
?>
        
        <!-- Page Content -->
        <div id="page-content-wrapper">
		
		<?php include'inc-header.php'; ?>
        
		<div class="row page" >
			<div class="large-12 columns">
			
			<div class="row">
			<div class="large-4 columns">
			<h4>Support</h4>
			</div>
			
			<div class="large-4 columns">
			<a href="single-support-new.php" class="hollow button tiny right">TULIS TIKET</a>
			</div>
			</div>
			
			
			<div class="row">
			<div class="large-12 columns">
			<table>
			  <thead>
				<tr>
				  <th width="140">Departemen</th>
				  <th width="">Subjek</th>
				  <th width="140">Status</th>
				  <th width="140">Terakhir Update</th>
				</tr>
			  </thead>
			  <tbody>
				
			
				<tr>
				  <td>Sales &amp; Marketing</td>
				  <td><a href="single-support.php">#SM 2345 - Pembelian Adidas Seri ABCD 10 Pcs</a></td>	
				<td><span class="warning label">Jawaban Reseller</span></td>				  
				  
				  <td>03/02/2016 12:06</td>
				</tr>
				
				<tr>
				  <td>Billing</td>
				  <td><a href="single-support.php">#BL 2345 - Pembelian Adidas Seri ABCD 10 Pcs</a></td>		
				  <td><span class="success label">Jawaban Deposepatu</span></td>
				  <td>03/02/2016 12:06</td>
				</tr>
				<tr>
				  <td>Support</td>
				  <td><a href="single-support.php">#SP 2345 - Pembelian Adidas Seri ABCD 10 Pcs</a></td>		
				  <td><span class="success label">Jawaban Deposepatu</span></td>
				  <td>03/02/2016 12:06</td>
				</tr>
				
				<tr>
				  <td>Sales &amp; Marketing</td>
				  <td><a href="single-support.php">#SM 4545 - Pembelian Nike Seri ABCD 10 Pcs</a></td>		
				  <td><span class="warning label">Jawaban Reseller</span></td>
				  <td>03/02/2016 12:06</td>
				</tr>
				
				<tr>
				  <td>Sales &amp; Marketing</td>
				  <td><a href="single-support.php">#SM 4545 - Pembelian Nike Seri ABCD 10 Pcs</a></td>		
				  <td><span class="warning label">Jawaban Reseller</span></td>
				  <td>03/02/2016 12:06</td>
				</tr>
				
				<tr>
				  <td>Sales &amp; Marketing</td>
				  <td><a href="single-support.php">#SM 2345 - Pembelian Adidas Seri ABCD 10 Pcs</a></td>		
				  <td><span class="secondary label">Selesai</span></td>
				  <td>03/02/2016 12:06</td>
				</tr>
				
				<tr>
				  <td>Billing</td>
				  <td><a href="single-support.php">#BL 2345 - Pembelian Adidas Seri ABCD 10 Pcs</a></td>		
				  <td><span class="secondary label">Selesai</span></td>
				  <td>03/02/2016 12:06</td>
				</tr>
				<tr>
				  <td>Support</td>
				  <td><a href="single-support.php">#SM 2345 - Pembelian Adidas Seri ABCD 10 Pcs</a></td>		
				  <td><span class="secondary label">Selesai</span></td>
				  <td>03/02/2016 12:06</td>
				</tr>
				
				<tr>
				  <td>Sales &amp; Marketing</td>
				  <td><a href="single-support.php">#SM 4545 - Pembelian Nike Seri ABCD 10 Pcs</a></td>		
				  <td><span class="secondary label">Selesai</span></td>
				  <td>03/02/2016 12:06</td>
				</tr>
				
				<tr>
				  <td>Sales &amp; Marketing</td>
				  <td><a href="single-support.php">#SM 4545 - Pembelian Nike Seri ABCD 10 Pcs</a></td>		
				 <td><span class="secondary label">Selesai</span></td>
				  <td>03/02/2016 12:06</td>
				</tr>
				
			  </tbody>
			</table>
			</div>
			
			<hr>
			
			<div class="large-12 columns">
				<div class="row">
					<div class="small-12 large-4 columns">	
						<div class="button-group">
						  <a class="secondary hollow button">&lsaquo; Sebelumnya</a>
						  <a class="secondary hollow button">Setelahnya &rsaquo;</a>
						</div>
					</div>
					
					<div class="large-4 columns">	
						<div class="row">
						<div class="small-8 columns">
						  <label for="middle-label" class="text-right middle">Per Halaman</label>
						</div>
				
						<div class="small-4 columns">
						  <select>
							<option value="husker">10</option>
							<option value="starbuck">25</option>
							<option value="hotdog">50</option>
							<option value="apollo">100</option>
							<option value="tidakterbatas">Tidak Terbatas</option>
						  </select>
						</div>
							
						</div>
					</div>
				</div>
			</div>
			
			</div>
			


			</div>
		</div>
 
        <!-- /#page-content-wrapper -->
		</div>
		
<?php include'footer.php' ?>
  
