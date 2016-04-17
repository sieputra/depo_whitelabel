
<div class="title-bar" data-responsive-toggle="widemenu" data-hide-for="medium" >
  <div class="title-bar-left">
    <button class="menu-icon" type="button" data-open="offCanvasLeft"></button>
    <span class="title-bar-title">
      <?php echo anchor('' , '<img class="" src="'. base_url() .'assets/frontend/logo.png" style="height:20px;width:auto;">', array('alt' => 'Beranda'));?>
    </span>
  </div>
  <div class="title-bar-right">
    <span class="title-bar-title">
      <ul class="sosmed">
        <?php if(!empty($settings['FACEBOOK'])){  ?>
        <li>
          <?php echo anchor($settings['FACEBOOK'], '<i class="fa fa-facebook-official fa-lg"></i>', array('class' => 'facebook'));?>
        </li>
        <?php } ?>
        <?php if(!empty($settings['TWITTER'])){  ?>
        <li>
          <?php echo anchor($settings['TWITTER'], '<i class="fa fa-twitter-square fa-lg"></i>', array('class' => 'twitter'));?>
        </li>
        <?php } ?>
        <?php if(!empty($settings['INSTAGRAM'])){  ?>
        <li>
          <?php echo anchor($settings['INSTAGRAM'], '<i class="fa fa-instagram fa-lg"></i>', array('class' => 'instagram'));?>
        </li>
        <?php } ?>
      </ul>
    </span>
  </div>
</div>

<!-- off-canvas left menu -->
<div class="off-canvas position-left" id="offCanvasLeft" data-off-canvas>
  <ul class="vertical dropdown menu" data-dropdown-menu style="margin-top: 60px;">
    <li><?php echo anchor('' , 'Beranda', array('alt' => 'Beranda'));?></li>
    <?php
    if (isset($favorite) && count($favorite) != 0){
    ?>
    <li>
    <?php    
      echo anchor('product/'.$favorite->id.'/'.htmlentities(urlencode(str_replace(' ', '-', strtolower($favorite->name)))) , 'Produk Favorit' , array() );
    ?>
    </li>
    <?php
    }
    ?>
    <li><?php
      echo anchor('products' , 'Product Terbaru' , array());
      ?>
    </li>
<li><hr></li>
<!-- Pages Menu Load-->
<?php 
if(isset($pages) && count($pages)!== 0){ 
  foreach ($pages as $key => $page) {
      ?>
      <li>
        <?php echo anchor($page->slug , $page->title, array('alt' => $page->title));?>
        </li>
      <?php
  }
 } 
?>
<!-- Pages Menu Load-->
  </ul>
</div>
<!-- "wider" top-bar menu for 'medium' and up -->
<header class="nav-down hide-for-small-only">
  <div id="widemenu" class="top-bar" >
    <div class="top-bar-left">
      <ul class="dropdown menu" data-dropdown-menu>
        <li class="menu-text">
          <?php
          echo anchor('' , img(array('src' => base_url() . 'assets/frontend/logo.png', 'style' => 'height:25px;width:auto;') ) , array('style' => 'padding:0px;'));
          ?>
        </li>
        <li >
          <?php echo anchor('' , 'Beranda', array('alt' => 'Beranda'));?>
        </li>
        <?php
        if (isset($favorite) && count($favorite) != 0){
        ?>
        <li>
        <?php    
          echo anchor('product/'.$favorite->id.'/'.htmlentities(urlencode(str_replace(' ', '-', strtolower($favorite->name)))) , 'Produk Favorit' , array() );
        ?>
        </li>
        <?php
        }
        ?>
        <li><?php
          echo anchor('products' , 'Product Terbaru' , array());
          ?>
        </li>
        <!-- Pages Menu Load-->
        <?php if(isset($pages) && count($pages)!== 0){ ?>
        <li class="has-submenu">
          <a href="#" style="padding:0px;padding-right:20px;">Info</a>
          <ul class="menu submenu vertical arrow_box " data-submenu >
           <?php 
            if(isset($pages) && count($pages)!== 0){ 
              foreach ($pages as $key => $page) {
                  ?>
                  <li>
                    <?php echo anchor($page->slug , $page->title, array('alt' => $page->title));?>
                    </li>
                  <?php
              }
             } 
            ?>
          </ul>
        </li>
        <?php } ?>
        <!-- Pages Menu Load-->
      </ul>
    </div>
    <div class="top-bar-right">
      <ul class="menu sosmed">
        <?php if(!empty($settings['FACEBOOK'])){  ?>
        <li>
          <?php echo anchor($settings['FACEBOOK'], '<i class="fa fa-facebook-official fa-3x"></i>', array('class' => 'facebook'));?>
        </li>
        <?php } ?>
        <?php if(!empty($settings['TWITTER'])){  ?>
        <li>
          <?php echo anchor($settings['TWITTER'], '<i class="fa fa-twitter-square fa-3x"></i>', array('class' => 'twitter'));?>
        </li>
        <?php } ?>
        <?php if(!empty($settings['INSTAGRAM'])){  ?>
        <li>
          <?php echo anchor($settings['INSTAGRAM'], '<i class="fa fa-instagram fa-3x"></i>', array('class' => 'instagram'));?>
        </li>
        <?php } ?>
      </ul>
    </div>
  </div>
 </header>