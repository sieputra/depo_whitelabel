<?php
ob_start();
include("header.php");
$buffer=ob_get_contents();
ob_end_clean();
$buffer=str_replace("%TITLE%","Billing - Dashboard Deposepatu Reseller",$buffer);
echo $buffer;
$judullaman="Billing";
?>
 
        
        <!-- Page Content -->
        <div id="page-content-wrapper">
		
		<?php include'inc-header.php'; ?>
        
		<div class="row page" >
			<div class="large-12 columns">
			
			
			<h4>BILLING</h4>
			<div class="row">
			<div class="large-12 columns">
			<table>
			  <thead>
				<tr>
				  <th width="140">Invoice #</th>
				  <th width="140">Tanggal</th>
				  <th width="140">Jatuh Tempo</th>
				  <th width="140">Total</th>
				  <th width="140">Balance</th>
				  <th width="140">Status</th>
				  <th width=""></th>
				</tr>
			  </thead>
			  <tbody>
				<tr>
				  <td><a href="single-invoice.php">INV-7051</a></td>
				  <td>25/02/2016</td>
				  <td>02/03/2016</td>
				  <td>Rp 320.000</td>
				  <td>Rp 320.000</td>
				  <td><span class="alert label">Belum Dibayar</span></td>
				  <td><a href="single-invoice.php" class="hollow button tiny right tombol-kecil">Tampilkan</a></td>
				
				</tr>
				<tr>
				  <td><a href="single-invoice.php">INV-7054</a></td>
				  <td>25/02/2016</td>
				  <td>02/03/2016</td>
				  <td>Rp 320.000</td>
				  <td>Rp 320.000</td>
				  <td><span class="alert label">Belum Dibayar</span></td>
				  <td><a href="single-invoice.php" class="hollow button tiny right tombol-kecil">Tampilkan</a></td>
				</tr>
				<tr>
				  <td><a href="single-invoice.php">INV-7058</a></td>
				  <td>25/02/2016</td>
				  <td>02/03/2016</td>
				  <td>Rp 320.000</td>
				  <td>Rp 320.000</td>
				  <td><span class="alert label">Belum Dibayar</span></td>
				  <td><a href="single-invoice.php" class="hollow button tiny right tombol-kecil">Tampilkan</a></td>
				</tr>
				
				<tr>
				  <td><a href="single-invoice.php">INV-7058</a></td>
				  <td>25/02/2016</td>
				  <td>02/03/2016</td>
				  <td>Rp 320.000</td>
				  <td>Rp 320.000</td>
				  <td><span class="success label">Lunas</span></td>
				  <td><a href="single-invoice.php" class="hollow button tiny right tombol-kecil">Tampilkan</a></td>
				</tr>
				
				<tr>
				  <td><a href="single-invoice.php">INV-7058</a></td>
				  <td>25/02/2016</td>
				  <td>02/03/2016</td>
				  <td>Rp 320.000</td>
				  <td>Rp 320.000</td>
				  <td><span class="alert label">Belum Dibayar</span></td>
				  <td><a href="single-invoice.php" class="hollow button tiny right tombol-kecil">Tampilkan</a></td>
				</tr>
				
				<tr>
				  <td><a href="single-invoice.php">INV-7058</a></td>
				  <td>25/02/2016</td>
				  <td>02/03/2016</td>
				  <td>Rp 320.000</td>
				  <td>Rp 320.000</td>
				  <td><span class="secondary label">Dibatalkan</span></td>
				  <td><a href="single-invoice.php" class="hollow button tiny right tombol-kecil">Tampilkan</a></td>
				</tr>
				
				<tr>
				  <td><a href="single-invoice.php">INV-7058</a></td>
				  <td>25/02/2016</td>
				  <td>02/03/2016</td>
				  <td>Rp 320.000</td>
				  <td>Rp 320.000</td>
				  <td><span class="alert label">Belum Dibayar</span></td>
				  <td><a href="single-invoice.php" class="hollow button tiny right tombol-kecil">Tampilkan</a></td>
				</tr>
				
				<tr>
				  <td><a href="single-invoice.php">INV-7058</a></td>
				  <td>25/02/2016</td>
				  <td>02/03/2016</td>
				  <td>Rp 320.000</td>
				  <td>Rp 320.000</td>
				  <td><span class="alert label">Belum Dibayar</span></td>
				  <td><a href="single-invoice.php" class="hollow button tiny right tombol-kecil">Tampilkan</a></td>
				</tr>
				
				<tr>
				  <td><a href="single-invoice.php">INV-7058</a></td>
				  <td>25/02/2016</td>
				  <td>02/03/2016</td>
				  <td>Rp 320.000</td>
				  <td>Rp 320.000</td>
				  <td><span class="alert label">Belum Dibayar</span></td>
				  <td><a href="single-invoice.php" class="hollow button tiny right tombol-kecil">Tampilkan</a></td>
				</tr>
				
				<tr>
				  <td><a href="single-invoice.php">INV-7058</a></td>
				  <td>25/02/2016</td>
				  <td>02/03/2016</td>
				  <td>Rp 320.000</td>
				  <td>Rp 320.000</td>
				  <td><span class="alert label">Belum Dibayar</span></td>
				  <td><a href="single-invoice.php" class="hollow button tiny right tombol-kecil">Tampilkan</a></td>
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
  
