$(document).foundation();
$(".editor").jqte();
function setTextColor(picker) {
	document.getElementsByTagName('body')[0].style.color = '#' + picker.toString()
}

function setActive() {
  aObj = document.getElementById('nav').getElementsByTagName('a');
  for(i=0;i<aObj.length;i++) {
    <?php
      if($action == 'edit' || $action == 'add'){
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
window.onload = setActive;

jQuery(document).ready(function ($) {
  setActive();
});