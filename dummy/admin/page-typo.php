<?php
ob_start();
include("header.php");
$buffer=ob_get_contents();
ob_end_clean();
$buffer=str_replace("%TITLE%","Typography - Dashboard Deposepatu Reseller",$buffer);
echo $buffer;
$judullaman="Typography";
?>
 
        
        <!-- Page Content -->
        <div id="page-content-wrapper">
		
		<?php include'inc-header.php'; ?>
        
		<div class="row page" >
			<div class="large-12 columns">
			<form action="">
			<h3>TYPOGRAPHY</h3>
			<h4>Header</h4>

				<div class="preview">
				  <textarea id="editor1">
				  Chocolate cake caramels chocolate.
				  </textarea>
				</div>
			<br>
			<h4>Body</h4>
				<div class="preview">
				  <textarea id="editor2">
				  Donut gingerbread ice cream sugar plum. Marshmallow jelly-o jelly dragée donut chocolate donut sweet. Oat cake soufflé halvah croissant halvah muffin cheesecake. Jelly cake gummies fruitcake macaroon candy lemon drops jujubes chocolate.
				  </textarea>
				</div>
			
			</form>
			
			<div class="hide">
			<hr>
			<h3>COLOR</h3>
			<form action="">
				<div class="large-6 columns">
					<div class="row">
						<div class="large-6 columns">
						Header
						</div>
						
						<div class="large-6 columns">
						kotak warna
						</div>
					</div>
					
					<button class="button jscolor {valueElement:'chosen-value', onFineChange:'setTextColor(this)'} ">
						Pick text color
					</button>

					HEX value: <input id="chosen-value" value="000000">
					
				</div>
				
				<div class="large-6 columns">
					<div class="row">
						<div class="large-6 columns">
						Body
						</div>
						
						<div class="large-6 columns">
						kotak warna
						</div>
					</div>
				</div>
			</form>
			</div>
			
			<div class="button-group right">
				<a href="#" class="button secondary small">Reset</a>	
				<a href="#" class="button small">Simpan</a>
			</div>
				
			
			</div>
		</div>
 
        <!-- /#page-content-wrapper -->
		</div>


  
<?php include'footer.php' ?>
  
