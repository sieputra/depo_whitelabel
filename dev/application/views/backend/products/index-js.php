$(document).foundation();

function setActive() {
  aObj = document.getElementById('nav').getElementsByTagName('a');
  for(i=0;i<aObj.length;i++) {
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
});
////// --------------- Module  JS
