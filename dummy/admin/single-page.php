<?php
ob_start();
include("header.php");
$buffer=ob_get_contents();
ob_end_clean();
$buffer=str_replace("%TITLE%","Ubah Halaman - Dashboard Deposepatu Reseller",$buffer);
echo $buffer;
$judullaman="Ubah Halaman";
?>

        <!-- Page Content -->
        <div id="page-content-wrapper">

		<?php include'inc-header.php'; ?>

		<div class="row page single" >
			<div class="large-12 columns">

			<div class="row">
			<div class="large-4 columns">
			<h4>Ubah Halaman</h4>

			</div>

			<div class="large-4 columns">

			</div>
			</div>

			<form action="">
			<div class="row">
			<div class="large-12 columns">


				<div class="callout">
				<h5>Detail Halaman</h5>
				<p>Ubah deskripsi halaman sesuai dengan kebutuhan Anda</p>
				<hr>
					<div class="row">
					<div class="large-3 columns">
					  <label for="right-label" class="right inline">Judul Halaman</label>
					</div>
					<div class="large-9 columns">
					  <input type="text" id="right-label" placeholder="Tentang Kami">
					</div>
				</div>

				<div class="row">
					<div class="large-3 columns">
					    <label for="right-label" class="right inline" style="margin-top:20px;">Konten Halaman</label>
					</div>
					<div class="large-9 columns">
						<div class="row">
              <div class="large-12 columns">
                <div id="right-label">
                  <?php include'text-editor.php' ?>
                </div>

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
