<?php
ob_start();
include("header.php");
$buffer=ob_get_contents();
ob_end_clean();
$buffer=str_replace("%TITLE%","Order - Dashboard Deposepatu Reseller",$buffer);
echo $buffer;
$judullaman="Order";
?>




        
        <!-- Page Content -->
        <div id="page-content-wrapper">
		
		<?php include'inc-header.php'; ?>
        
		<div class="row page" >
			<div class="large-12 columns">
			
			<div class="row">
			<div class="large-4 columns">
			<h4>Order</h4>
			</div>
			
			<div class="large-4 columns">
		
			</div>
			</div>
			
			
			<div class="row">
			<div class="large-12 columns">
			<table>
			  <thead>
				<tr>
				  <th width="200">Nama Pemesan</th>
				  <th width="">Pesanan</th>
				  <th width="140">Status</th>
				  <th width="140">Tanggal</th>
				  <th width="100"></th>
				</tr>
			  </thead>
			  <tbody>
				
			
				<tr>
					<td>
						<a href="single-order.php">
		
						Andi Abdullah Bau Massepe
						
						</a>	
					</td>
					
					
					<td>Adidas ZX 630 - A+ [16029M-HTBR]</td>
					<td><span class="secondary label">Belum Diproses</span></td>
					<td>03/02/2016</td>
					<td>
						<a href="single-order.php" class="hollow button tiny right tombol-kecil">Tampilkan</a>
					</td>
				</tr>
				
				<tr>
					<td>
						<a href="single-order.php">
						
						Adnan Kapau Gani
						
						</a>	
					</td>
					
					
					<td>Adidas ZX 630 - A+ [16029M-HTBR]</td>
					<td><span class="secondary label">Belum Diproses</span></td>
					<td>03/02/2016</td>
					<td>
						<a href="single-order.php" class="hollow button tiny right tombol-kecil">Tampilkan</a>
					</td>
				</tr>
				
				<tr>
					<td>
						<a href="single-order.php">
						
						Ahmad Yani
						
						</a>	
					</td>
					
					
					<td>Adidas ZX 630 - A+ [16029M-HTBR]</td>
					<td><span class="secondary label">Belum Diproses</span></td>
					<td>03/02/2016</td>
					<td>
						<a href="single-order.php" class="hollow button tiny right tombol-kecil">Tampilkan</a>
					</td>
				</tr>
				
				<tr>
					<td>
						<a href="single-order.php">
						
						Antasari
						
						</a>	
					</td>
					
					
					<td>Adidas ZX 630 - A+ [16029M-HTBR]</td>
					<td><span class="secondary label">Belum Diproses</span></td>
					<td>03/02/2016</td>
					<td>
						<a href="single-order.php" class="hollow button tiny right tombol-kecil">Tampilkan</a>
					</td>
				</tr>
				
				<tr>
					<td>
						<a href="single-order.php">
						
						Dewi Sartika
						
						</a>	
					</td>
					
					
					<td>Adidas ZX 630 - A+ [16029M-HTBR]</td>
					<td><span class="success label">Sudah Diproses</span></td>
					<td>03/02/2016</td>
					<td>
						<a href="single-order.php" class="hollow button tiny right tombol-kecil">Tampilkan</a>
					</td>
				</tr>
				
				<tr>
					<td>
						<a href="single-order.php">
						
						Erwin Prasetyo
						
						</a>	
					</td>
					
					
					<td>Adidas ZX 630 - A+ [16029M-HTBR]</td>
					<td><span class="success label">Sudah Diproses</span></td>
					<td>03/02/2016</td>
					<td>
						<a href="single-order.php" class="hollow button tiny right tombol-kecil">Tampilkan</a>
					</td>
				</tr>
				
				<tr>
					<td>
						<a href="single-order.php">
						
						Iskandar Muda
					
						</a>	
					</td>
					
					
					<td>Adidas ZX 630 - A+ [16029M-HTBR]</td>
					<td><span class="success label">Sudah Diproses</span></td>
					<td>03/02/2016</td>
					<td>
						<a href="single-order.php" class="hollow button tiny right tombol-kecil">Tampilkan</a>
					</td>
				</tr>
				
				<tr>
					<td>
						<a href="single-order.php">
						
						Jamin Ginting
						
						</a>	
					</td>
					
					
					<td>Adidas ZX 630 - A+ [16029M-HTBR]</td>
					<td><span class="success label">Sudah Diproses</span></td>
					<td>03/02/2016</td>
					<td>
						<a href="single-order.php" class="hollow button tiny right tombol-kecil">Tampilkan</a>
				</tr>
				
				<tr>
					<td>
						<a href="single-order.php">
						
						Kusumah Atmaja
						
						</a>	
					</td>
					
					
					<td>Adidas ZX 630 - A+ [16029M-HTBR]</td>
					<td><span class="success label">Sudah Diproses</span></td>
					<td>03/02/2016</td>
					<td>
						<a href="single-order.php" class="hollow button tiny right tombol-kecil">Tampilkan</a>
					</td>
				</tr>
				
				<tr>
					<td>
						<a href="single-order.php">
						
						Rajiman Wediodiningrat
						
						</a>	
					</td>
					
					
					<td>Adidas ZX 630 - A+ [16029M-HTBR]</td>
					<td><span class="success label">Sudah Diproses</span></td>
					<td>03/02/2016</td>
					<td>
						<a href="single-order.php" class="hollow button tiny right tombol-kecil">Tampilkan</a>
					</td>
				</tr>
				

				
				
			  </tbody>
			</table>
			</div>
			
			<hr>
			
			<div class="large-12 columns">
				<div class="row">
					<div class="small-12 large-8 columns ">	
					
						<ul class="pagination" role="menubar" aria-label="Pagination">
						  <li class="arrow unavailable" aria-disabled="true"><a href="">&laquo; Previous</a></li>
						  <li class="current"><a href="">1</a></li>
						  <li><a href="">2</a></li>
						  <li><a href="">3</a></li>
						  <li><a href="">4</a></li>
						  <li class="unavailable" aria-disabled="true"><a href="">&hellip;</a></li>
						  <li><a href="">12</a></li>
						  <li><a href="">13</a></li>
						  <li class="arrow"><a href="">Next &raquo;</a></li>
						</ul>	
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
  
