<?php
ob_start();
include("header.php");
$buffer=ob_get_contents();
ob_end_clean();
$buffer=str_replace("%TITLE%","Page - Dashboard Deposepatu Reseller",$buffer);
echo $buffer;
$judullaman="Page";
?>





        <!-- Page Content -->
        <div id="page-content-wrapper">

		<?php include'inc-header.php'; ?>

		<div class="row page" >
			<div class="large-12 columns">

			<div class="row">
			<div class="large-4 columns">
			<h4>Page</h4>
			</div>

			<div class="large-4 columns">

			</div>
			</div>


			<div class="row">
			<div class="large-12 columns">
			<table>
			  <thead>
				<tr>
				  <th width="">Judul</th>
				  <th width="200">Tanggal</th>
				  <th width="50">Edit</th>
				</tr>
			  </thead>
			  <tbody>


				<tr>
					<td>
						<a href="single-page.php">
						        Tentang Kami
						</a>
					</td>

					<td><small>Terakhir edit pada</small><br> 03/02/2016</td>
					<td>
            <a href="single-page.php">
						<i class="fa fa-pencil-square-o fa-lg"></i>
						</a>
					</td>
				</tr>

        <tr>
					<td>
						<a href="single-page.php">
						        Cara Pembelian
						</a>
					</td>

					<td><small>Terakhir edit pada</small><br> 03/02/2016</td>
					<td>
            <a href="single-page.php">
						<i class="fa fa-pencil-square-o fa-lg"></i>
						</a>
					</td>
				</tr>

        <tr>
					<td>
						<a href="single-page.php">
						        FAQ
						</a>
					</td>

					<td><small>Terakhir edit pada</small><br> 03/02/2016</td>
					<td>
            <a href="single-page.php">
						<i class="fa fa-pencil-square-o fa-lg"></i>
						</a>
					</td>
				</tr>

        <tr>
					<td>
						<a href="single-page.php">
						        Kontak Kami
						</a>
					</td>

					<td><small>Terakhir edit pada</small><br> 03/02/2016</td>
					<td>
            <a href="single-page.php">
						<i class="fa fa-pencil-square-o fa-lg"></i>
						</a>
					</td>
				</tr>

        <tr>
					<td>
						<a href="single-page.php">
						        Halaman Order
						</a>
					</td>

					<td><small>Terakhir edit pada</small><br> 03/02/2016</td>
					<td>
            <a href="single-page.php">
						<i class="fa fa-pencil-square-o fa-lg"></i>
						</a>
					</td>
				</tr>




			  </tbody>
			</table>
			</div>



			</div>



			</div>
		</div>

        <!-- /#page-content-wrapper -->
		</div>

<?php include'footer.php' ?>
