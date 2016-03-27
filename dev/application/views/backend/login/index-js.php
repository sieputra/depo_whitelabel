$('#btn-submit').click(function(){
	$.ajax({
	  method: "POST",
	  url: "<?php echo base_url() ?>admin/user/login",
	  data: 'email='+$('#email').val()+'&password='+$('#password').val(),
	})
	  .done(function( msg ) {
	    $('#message').html(msg);
	    $('.alert-box').show();
	  });
});
