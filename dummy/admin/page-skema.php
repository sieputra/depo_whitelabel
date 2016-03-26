<?php
ob_start();
include("header.php");
$buffer=ob_get_contents();
ob_end_clean();
$buffer=str_replace("%TITLE%","Skema Warna- Dashboard Deposepatu Reseller",$buffer);
echo $buffer;
$judullaman="Skema Warna";
?>
 
        
        <!-- Page Content -->
        <div id="page-content-wrapper">
		
		<?php include'inc-header.php'; ?>
        
		<div class="row page" >
			<div class="large-12 columns">
				<form action="">
				<h4>Warna</h4>
				<div class="row">
					<div class="large-3 columns">
					<img src="images/ds_skema_01.png" alt="" >
					<input type="radio" name="skemawarna" value="Light Green" id="cl-01" required><label for="cl-01">Light Green</label>
					</div>
					
					<div class="large-3 columns">
					<img src="images/ds_skema_02.png" alt="">
					<input type="radio" name="skemawarna" value="Yellow" id="cl-02" required><label for="cl-02">Yellow</label>
					</div>
					
					<div class="large-3 columns">
					<img src="images/ds_skema_03.png" alt="">
					<input type="radio" name="skemawarna" value="Amber" id="cl-03" required><label for="cl-03">Amber</label>
					</div>
					
					<div class="large-3 columns">
					<img src="images/ds_skema_04.png" alt="">
					<input type="radio" name="skemawarna" value="Deep Orange" id="cl-04" required><label for="cl-04">Deep Orange</label>
					</div>
				</div>
				<br>
				<div class="row">
					<div class="large-3 columns">
					<img src="images/ds_skema_05.png" alt="" >
					<input type="radio" name="skemawarna" value="Pink" id="cl-05" required><label for="cl-05">Pink</label>
					</div>
					
					<div class="large-3 columns">
					<img src="images/ds_skema_06.png" alt="">
					<input type="radio" name="skemawarna" value="Green" id="cl-06" required><label for="cl-06">Green</label>
					</div>
					
					<div class="large-3 columns">
					<img src="images/ds_skema_07.png" alt="">
					<input type="radio" name="skemawarna" value="Lime" id="cl-07" required><label for="cl-07">Lime</label>
					</div>
					
					<div class="large-3 columns">
					<img src="images/ds_skema_08.png" alt="">
					<input type="radio" name="skemawarna" value="Orange" id="cl-08" required><label for="cl-08">Orange</label>
					</div>
				</div>
				<br>
				<div class="row">
					<div class="large-3 columns">
					<img src="images/ds_skema_09.png" alt=""  >
					<input type="radio" name="skemawarna" value="Red" id="cl-09" required><label for="cl-09">Red</label>
					</div>
					
					<div class="large-3 columns">
					<img src="images/ds_skema_10.png" alt="">
					<input type="radio" name="skemawarna" value="Purple" id="cl-10" required><label for="cl-10">Purple</label>
					</div>
					
					<div class="large-3 columns">
					<img src="images/ds_skema_11.png" alt="">
					<input type="radio" name="skemawarna" value="Indigo" id="cl-11" required><label for="cl-11">Indigo</label>
					</div>
					
					<div class="large-3 columns">
					<img src="images/ds_skema_12.png" alt="">
					<input type="radio" name="skemawarna" value="Light blue" id="cl-12" required><label for="cl-12">Light blue <em>(default)</em></label>
					</div>
				</div>
				<br>
				<div class="row">
					<div class="large-3 columns">
					<img src="images/ds_skema_13.png" alt=""  >
					<input type="radio" name="skemawarna" value="Cyan" id="cl-13" required><label for="cl-13">Cyan</label>
					</div>
					
					<div class="large-3 columns">
					<img src="images/ds_skema_14.png" alt="">
					<input type="radio" name="skemawarna" value="Grey" id="cl-14" required><label for="cl-14">Grey</label>
					</div>
					
					<div class="large-3 columns">
					<img src="images/ds_skema_15.png" alt="">
					<input type="radio" name="skemawarna" value="Blue Grey" id="cl-15" required><label for="cl-15">Blue Grey</label>
					</div>
					
					<div class="large-3 columns">
					<img src="images/ds_skema_16.png" alt="">
					<input type="radio" name="skemawarna" value="Deep Purple" id="cl-16" required><label for="cl-16">Deep Purple</label>
					</div>
				</div>
				<br>
				<div class="row">
					<div class="large-3 columns">
					<img src="images/ds_skema_17.png" alt="">
					<input type="radio" name="skemawarna" value="Blue" id="cl-17" required><label for="cl-17">Blue</label>
					</div>
					
					<div class="large-3 columns">
					<img src="images/ds_skema_18.png" alt="">
					<input type="radio" name="skemawarna" value="Teal" id="cl-18" required><label for="cl-18">Teal</label>
					</div>
					
					<div class="large-3 columns">
					<img src="images/ds_skema_19.png" alt="">
					<input type="radio" name="skemawarna" value="Brown" id="cl-19" required><label for="cl-19">Brown</label>
					</div>
					
					<div class="large-3 columns">
					<img src="images/ds_skema_20.png" alt="">
					<input type="radio" name="skemawarna" value="Black" id="cl-20" required><label for="cl-20">Black</label>
					</div>
				</div>
				
				
				
				<hr>
				<a href="#" class="button small right">Simpan</a>
				</form>
			</div>
		</div>
 
        <!-- /#page-content-wrapper -->
		</div>
		
<?php include'footer.php' ?>
  
