<?php
ob_start();
include("header.php");
$buffer=ob_get_contents();
ob_end_clean();
$buffer=str_replace("%TITLE%","Invoice - Dashboard Deposepatu Reseller",$buffer);
echo $buffer;
$judullaman="Invoice";
?>


        
        <!-- Page Content -->
        <div id="page-content-wrapper">
		
		<?php include'inc-header.php'; ?>
        
		<div class="row page single" >
			<div class="large-12 columns">
			
			<div class="row">
			<div class="small-6 columns">
			<h4>#INV-2345</h4>
			
			</div>
			
			<div class="small-6 columns">
			<a class="cetak right hollow button" href="javascript:;" data-url= "cetak-invoice.php">
			 <i class="fa fa-print fa-lg"></i> cetak invoice
			 </a>
			</div>
			
			</div>
			
			 
			 <?php include'inv.php'; ?>
			 
			
			


			</div>
		</div>
 
        <!-- /#page-content-wrapper -->
		</div>
		
<?php include'footer.php' ?>
  
