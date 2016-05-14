jQuery(document).ready(function ($) {
  $.ajax({
    url: "<?php echo base_url(); ?>home/load_qty_product/<?php echo $products->remote_id; ?>",
    dataType: 'json',
    beforeSend : function(e){
                   $('.load').html('Processing...');
                 },
    error : function( jqXHR ,  textStatus,  errorThrown ){
              alert(textStatus);
            },
    success : function( data, textStatus, jqXHR ){
                $.each(data, function(index, variation) {
                  var write_status = 'Stok Tinggal Sedikit';
                  if(variation['qty'] <= 0 ){
                    write_status = '<font color="#F00">Stok Habis</font>';
                  } else if (variation['qty'] >= 2 ){
                    write_status = 'Stok Tersedia';
                  }
                  $('#'+variation['id']).html(write_status);
                });
              },
  });
});