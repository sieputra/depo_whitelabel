<?php
ob_start();
include("header.php");
$buffer=ob_get_contents();
ob_end_clean();
$buffer=str_replace("%TITLE%","Welcome - Dashboard Deposepatu Reseller",$buffer);
echo $buffer;
$judullaman="Welcome";
?>
 
        
        <!-- Page Content -->
        <div id="page-content-wrapper">
		
		<?php include'inc-header.php'; ?>
        
		<div class="row page" >
			<div class="large-12 columns">
			<div data-alert class="alert-box info">
			  <p>
			  Selamat Datang di DepoSepatu Reseller Dashboard, Kamu bisa mulai memanage penjualan dan website kamu di sini. 
			  Silahkan untuk menjelajahi Dashboard dan mulai memanage website kamu. Jika ada masalah jangan ragu untuk menghubungi Kami. 
			  <strong>Ganbatte !!! ^^</strong>
			  </p>
			  <a href="#" class="close">&times;</a>
			</div>
			</div>
			
		
			<div class="large-12 columns">
			<h4>STATISTIK</h4>
			<div class="row">
				<div class="large-4 columns">
				
				<div class="card-statistic">				
				<h5>TOTAL PENJUALAN</h5>
				<h6>Semua Penjualan</h6>
				<p><sub>Rp</sub>22.590.000</p>
				
				</div>
	
				</div>
				
				<div class="large-4 columns">
				
				
				<div class="card-statistic">				
				<h5>PENJUALAN BULAN INI</h5>
				<h6>Penjualan Sampai <?php echo date("d/m/Y"); ?> </h6>
				<p><sub>Rp</sub>875.000</p>
				
				
				</div>
				
				</div>
				
				<div class="large-4 columns">
				<div class="card-statistic">				
				<h5>Sepatu</h5>
				<h6>Penjualan Sampai <?php echo date("d/m/Y"); ?> </h6>
				<p>35<sub>Sepatu</sub></p>
				
				</div>
				</div>
				
				<div class="large-12 columns">
				<div class="card-statistic">				
				<h6>Reseller Bonus Monthly (100pcs/Bulan)</h6>
				  <div class="progress">
					<span class="meter orange" style="width:35%">
						  <p class="percent">35%</p>
					</span>
				  </div>
				</div>
				</div>
			</div>
			<hr>
			
			<div class="row">
			<div class="small-6 columns">
			<h4>ORDER</h4>
			</div>
			
			<div class="small-6 columns">
				<a href="page-order.php" class="hollow button tiny right tombol-kecil">SEMUA ORDER</a>
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

			  </tbody>
			</table>
			</div>
			</div>
			<hr>
			
			
			
			<div class="row">
			<div class="small-6 columns">
			<h4>BILLING</h4>
			</div>
			
			<div class="small-6 columns">
				<a href="page-billing.php" class="hollow button tiny right tombol-kecil">SEMUA BILLING</a>
			</div>
			</div>
			
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
				  <td><a href="single-invoice.php">DS7051</a></td>
				  <td>25/02/2016</td>
				  <td>02/03/2016</td>
				  <td>Rp 320.000</td>
				  <td>Rp 320.000</td>
				  <td><span class="alert label">Belum Dibayar</span></td>
				  <td><a href="single-invoice.php" class="hollow button tiny right tombol-kecil">Tampilkan</a></td>
				
				</tr>
				<tr>
				  <td><a href="single-invoice.php">DS7054</a></td>
				  <td>25/02/2016</td>
				  <td>02/03/2016</td>
				  <td>Rp 320.000</td>
				  <td>Rp 320.000</td>
				  <td><span class="alert label">Belum Dibayar</span></td>
				  <td><a href="single-invoice.php" class="hollow button tiny right tombol-kecil">Tampilkan</a></td>
				</tr>
				<tr>
				  <td><a href="single-invoice.php">DS7058</a></td>
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
			</div>
			<hr>
			
			<h4>SUPPORT</h4>
				<div class="row">
					<div class="large-4 columns">
						<div class="row">
						<div class="small-6 columns">
						<h5>List Ticket</h5>	
						</div>

						<div class="small-6 columns">
						<a href="page-support.php" class="hollow button tiny right tombol-kecil">SEMUA TIKET</a>
						</div>							
						</div>	

						<table>
						  <thead>
							<tr>
							  <th width="100">Tanggal</th>
							  <th width="">Subjek</th>
							  <th width="">Status</th>
							
							</tr>
						  </thead>
						  <tbody>
							<tr>
							  <td><a href="single-support.php">#TK7056</a></td>
							  <td>Salah Terima Produk</td>
							  <td><span class="warning label">Open</span></td>
							  
							
							</tr>
							<tr>
							  <td><a href="single-support.php">#TK7056</a></td>
							  <td>Kurang 2 Produk</td>
							  <td><span class="success label">Close</span></td>	  
							</tr>
							
							<tr>
							  <td><a href="single-support.php">#TK7056</a></td>
							  <td>Kurang 2 Produk</td>
							  <td><span class="success label">Close</span></td>	  
							</tr>
							
							<tr>
							  <td><a href="single-support.php">#TK7056</a></td>
							  <td>Kurang 2 Produk</td>
							  <td><span class="success label">Close</span></td>	  
							</tr>
							
							<tr>
							  <td><a href="single-support.php">#TK7056</a></td>
							  <td>Kurang 2 Produk</td>
							  <td><span class="success label">Close</span></td>	  
							</tr>
							
							
							
							
						  </tbody>
						</table>
						
						<p class="info">		
						5 List ticket support terakhir yang kamu buat
						</p>
						
					</div>
					
					<div class="large-4 columns">
						<div class="row">
						<div class="small-6 columns">
						<h5>Tulis Tiket</h5>	
						</div>

						<div class="small-6 columns">
						
						</div>							
						</div>	
					
						
								
						<div class="callout">
						<form action="">
						<div class="row">
							<div class="small-3 columns">
							  <label for="middle-label" class="text-right middle">Subjek</label>
							</div>
							<div class="small-9 columns">
							  <input type="text" id="middle-label" placeholder="subjek Pesan">
							</div>
						</div>
						
						<div class="row">
							<div class="small-3 columns">
							  <label for="middle-label" class="text-right middle">Dept.</label>
							</div>
							<div class="small-9 columns">
							  <select>
								<option value="pil1">Sales & Marketing</option>
								<option value="pil2">Support</option>
								<option value="pil3">Billing</option>
							  </select>
							</div>
						 </div>	
						
						<div class="row">
							<div class="small-3 columns">
							  <label for="middle-label" class="text-right middle">Pesan</label>
							</div>
							<div class="small-9 columns">
							  <textarea placeholder="Pesan Kamu" style="height:120px;"></textarea>
							</div>
							
								<div class="large-12  columns">
								<a href="#" class="button tiny right">Kirim</a>
								</div>
						</div>
						
						
						</form>	
						</div>
						
						
					</div>
					
					<div class="large-4 columns">
						<div class="row">
							<div class="small-7 columns">
							<h5>Info DepoSepatu</h5>	
							</div>

							<div class="small-5 columns">
							<a href="page-support.php" class="hollow button tiny right tombol-kecil">SEMUA INFO</a>
							</div>							
						</div>	
					
						
						<div class="callout memo">
						  <h5>Promo Beli Sepatu dapat Kardus</h5>
						  <p>Wah DepoSepatu ngadain Promo lagi nih, Pada kesempatan kali ini DepoSepatu mengadakan promo beli sepatu dapat kardus</p>
						  <a href="#">Selengkapnya</a>
						</div>
					</div>
				</div>
				<hr>
				<h4>MAINTENANCE MODE</h4>
				<div class="row">
					<div class="large-4 columns">
						<p>
						Aktifkan Fitur ini jika Anda Sedang Libur atau Toko tutup sementara.
						</p>
					</div>

					<div class="large-8 columns">
						<div class="row">
							<div class="small-6 large-10 columns">
							  <label for="middle-label" class="text-right middle">Aktifkan Maintenance Mode ?</label>
							</div>
							<div class="small-6 large-2 columns">
							  <select>
								<option value="pil1">TIDAK</option>
								<option value="pil2">YA</option>
							  </select>
							</div>
						 </div>	
					</div>
				</div>
				<hr>
				<a href="#" class="button small right">Simpan</a>
			</div>
		</div>
 
        <!-- /#page-content-wrapper -->
		</div>
		
<?php include'footer.php' ?>
  
