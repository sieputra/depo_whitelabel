        <section class="area-footer">
        <div class="row">
                  <div class="large-4 medium-4 columns">
                   <p><a href="index.php"><img src="<?php echo base_url() ?>assets/frontend/images/logo-white.png" alt="" style="width:200px;height:auto;"></a></p>
               <p>Katalog Sepatu online © 2016 <a href="index.php">Lookbook - Edited</a></p>
               <p>Penjual Sepatu Online terpercaya Anda</p>
                  </div>
        
        </div>
        </section>
        <div class="btt scrollup ">
        <p class="text-align:center;">
        <i class="fa fa-angle-up fa-3x" style="margin-top:5px;margin-left:14px;color:#FFFFFF;"></i>
        </p>
        </div>
      </div>
    <!-- close wrapper, no more content after this -->
    </div>
  </div>
  <script src="<?php echo base_url() ?>assets/foundation-6/js/vendor/jquery.min.js"></script>
  <script src="<?php echo base_url() ?>assets/foundation-6/js/vendor/what-input.min.js"></script>
  <script src="<?php echo base_url() ?>assets/foundation-6/js/foundation.js"></script>
  <script src="<?php echo base_url() ?>assets/foundation-6/js/app.js"></script>
  <!-- Other JS plugins can be included here -->
  <script src="<?php echo base_url() ?>assets/frontend/js/lightslider/js/lightslider.min.js"></script>
  <script src="<?php echo base_url() ?>assets/frontend/js/simple-lightbox/simple-lightbox.min.js"></script>
  <script>
    $(function(){
      var $gallery = $('.gallery a').simpleLightbox();
      
      $gallery.on('show.simplelightbox', function(){
        console.log('Requested for showing');
      })
      .on('shown.simplelightbox', function(){
        console.log('Shown');
      })
      .on('close.simplelightbox', function(){
        console.log('Requested for closing');
      })
      .on('closed.simplelightbox', function(){
        console.log('Closed');
      })
      .on('change.simplelightbox', function(){
        console.log('Requested for change');
      })
      .on('next.simplelightbox', function(){
        console.log('Requested for next');
      })
      .on('prev.simplelightbox', function(){
        console.log('Requested for prev');
      })
      .on('nextImageLoaded.simplelightbox', function(){
        console.log('Next image loaded');
      })
      .on('prevImageLoaded.simplelightbox', function(){
        console.log('Prev image loaded');
      })
      .on('changed.simplelightbox', function(){
        console.log('Image changed');
      })
      .on('nextDone.simplelightbox', function(){
        console.log('Image changed to next');
      })
      .on('prevDone.simplelightbox', function(){
        console.log('Image changed to prev');
      })
      .on('error.simplelightbox', function(e){
        console.log('No image found, go to the next/prev');
        console.log(e);
      });
    });
    <?php echo (isset($jsload) && !empty($jsload) ? $jsload : '')?>
  </script> 
  </body>
</html> 