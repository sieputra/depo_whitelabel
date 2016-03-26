  </div>
    <script src="js/vendor/jquery.js"></script>
    <script src="js/foundation.min.js"></script>
    <script>
      $(document).foundation();
    </script>
    <script src="js/toggle-class.js"></script>
	<script src="js/jscolor.js"></script>

  <script src="js/text-editor/jquery-te-1.4.0.min.js"></script>
  <script type="text/javascript">
    $(".editor").jqte();
  </script>




  <script>
	function setTextColor(picker) {
		document.getElementsByTagName('body')[0].style.color = '#' + picker.toString()
	}
	</script>



<script>
jQuery( document ).ready( function( $ ) {
$('.namacss').css('width', '40%').css('width', '-=130px');
});
</script>


	<script>
	// Hide all the elements in the DOM that have a class of "box"
	$('.responform').hide();
	$('.respontiketkirim').hide();
	$('.responcancel').hide();

	// Make sure all the elements with a class of "clickme" are visible and bound
	// with a click event to toggle the "box" state
	$('.respontiket').each(function() {
		$(this).show(0).on('click', function(e) {
			// This is only needed if your using an anchor to target the "box" elements
			e.preventDefault();

			// Find the next "box" element in the DOM
			$(this).next('.responform').slideToggle('slow');
			$('.responform').show();
			$('.respontiket').hide();
			$('.respontiketkirim').show();
		});
	});

	$('.responcancel').each(function() {
		$(this).show(0).on('click', function(e) {
			// This is only needed if your using an anchor to target the "box" elements
			e.preventDefault();

			// Find the next "box" element in the DOM
			$(this).next('.responform').slideToggle('slow');
			$('.responform').hide();
			$('.respontiket').show();
			$('.respontiketkirim').hide();
		});
	});
	</script>


	<script type='text/javascript'>
 $(function(){
  function openPrintWindow(url, name, specs) {
    var printWindow = window.open(url, name, specs);
    var printAndClose = function () {
      if (printWindow.document.readyState == 'complete') {
        clearInterval(sched);
        printWindow.print();
        printWindow.close();
     }
    }
      var sched = setInterval(printAndClose, 200);
   };

 jQuery(document).ready(function ($) {
   $(".cetak").on("click", function (e) {

    var myUrl = $(this).attr('data-url');
    alert(myUrl);

    e.preventDefault();
    openPrintWindow(myUrl, "to_print", "width=700,height=400,_blank");
   });
 });

 });

  </script>



  </body>
</html>
