$(document).foundation();
$(".editor").jqte();
function setActive() {
  aObj = document.getElementById('nav').getElementsByTagName('a');
  for(i=0;i<aObj.length;i++) {
    <?php
      if($action == 'edit' ){
        ?>
        if(aObj[i].href == '<?php echo base_url() .'admin/'. $page .'.html'?>'){
          aObj[i].className='active';
        }
        <?php
      }
    ?>
    if(document.location.href.indexOf(aObj[i].href)>=0) {
      aObj[i].className='active';
    }
  }
}

////// --------------- Module  JS
jQuery(document).ready(function ($) {
  setActive();
  $('#init').click(function(e){
    e.preventDefault(e);
    $.ajax({
     method: "POST",
     url: "<?php echo base_url() ?>admin/init/products",
     success : function( msg ) {
        $('#init').html(msg + ', Redirect Now...');        
        window.setTimeout(window.location='<?php echo base_url() ?>admin/products.html' , 1000);
     },
     error : function(a,b,c){
       $('#init').html('(' + a.status + ') ' + c);
     },
     beforeSend : function(){
       $('#init').html('Processsed');
       $('#init').prop('disabled', true);
     },
  });
  });
  
  $( "#num" ).change(function() {
    $('#frm_produk').submit();
  });
  
  $( ".curpage" ).click(function() {
    $('#frm_produk').submit();
  });
  
  $( ".stock_qty" ).each(function( index ) {
    var remote_id = $(this).attr('id');
    console.log( $(this).attr('id') + ' processing...');
    $.ajax({
      url: "<?php echo base_url(); ?>admin/get_qty_product/"+remote_id,
      dataType: 'json',
      beforeSend : function(e){
                     $('#'+remote_id).html('Processing...');
                   },
      error : function( jqXHR ,  textStatus,  errorThrown ){
                alert(textStatus);
              },
      success : function( data, textStatus, jqXHR ){
                  var var_name = new Array();var i = 0;
                  $.each(data, function(index, variation) {
                    if(variation['qty'] != 0){
                    var_name[i] = variation['var_name'];
                    i++;
                    }
                  });
                  $('#'+remote_id).html(var_name.join(', '));
                },
    });
  });
});
////// --------------- Module  JS
