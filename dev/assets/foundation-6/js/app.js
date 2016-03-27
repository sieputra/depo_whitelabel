$(document).foundation();

jQuery('.accordion dt').click(function() {
	//Show first panel
jQuery(this).toggleClass('active').find('i').toggleClass('fa-plus fa-minus')
    .closest('dt').siblings('dt')
    .removeClass('active').find('i').removeClass('fa-minus').addClass('fa-plus');
    
    jQuery(this).next('.accordion_content').slideToggle().siblings('.accordion_content').slideUp();
    
    
});

jQuery('.accordion_content').hide();
jQuery('.accordion > dt:first-of-type').addClass('active').find('i').toggleClass('fa-plus fa-minus');
jQuery('.accordion dd:first-of-type ').show();
jQuery('.accordion dd.ongk ').hide();

	$(document).ready(function () {
		
		$(window).scroll(function () {
			
			if ($(this).scrollTop() > 100) {
				$('.scrollup').fadeIn();
			} else {
				$('.scrollup').fadeOut();
			}
		});

		$('.scrollup').click(function () {
			$("html, body").animate({
				scrollTop: 0
			}, 600);
			return false;
		});

	});

/* SHOW AND HIDE */

$(window).scroll(function() {

    if ($(this).scrollTop()>200)
     {
        $('.ongkir').fadeOut();
     }
    else
     {
      $('.ongkir').fadeIn();
     }
 });
 
$(document).ready(function () {
 $('#lightSlider').lightSlider({
    gallery: true,
    item: 1,
    loop: true,
    slideMargin: 0,
    thumbItem: 5
});
});



// Hide Header on on scroll down
var didScroll;
var lastScrollTop = 0;
var delta = 5;
var navbarHeight = $('header').outerHeight();

$(window).scroll(function(event){
    didScroll = true;
});

setInterval(function() {
    if (didScroll) {
        hasScrolled();
        didScroll = false;
    }
}, 250);

function hasScrolled() {
    var st = $(this).scrollTop();
    
    // Make sure they scroll more than delta
    if(Math.abs(lastScrollTop - st) <= delta)
        return;
    
    // If they scrolled down and are past the navbar, add class .nav-up.
    // This is necessary so you never see what is "behind" the navbar.
    if (st > lastScrollTop && st > navbarHeight){
        // Scroll Down
        $('header').removeClass('nav-down').addClass('nav-up');
    } else {
        // Scroll Up
        if(st + $(window).height() < $(document).height()) {
            $('header').removeClass('nav-up').addClass('nav-down');
        }
    }
    
    lastScrollTop = st;
}

