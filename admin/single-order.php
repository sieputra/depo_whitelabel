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
        
		<div class="row page single" >
			<div class="large-12 columns">
			
			<div class="row">
			<div class="small-6 columns">
			<h4>#ORD-2345</h4>
			
			</div>
			
			<div class="small-6 columns">
			
			</div>
			
			</div>
			
			 
			 <?php include'ord.php'; ?>
			 
			
			


			</div>
		</div>
 
        <!-- /#page-content-wrapper -->
		</div>
		
<?php include'footer.php' ?>
  
