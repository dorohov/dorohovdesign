var topPosR = $(document).scrollTop();		
var snbr = $('.navbar-site-right');
if(snbr.hasClass('scroll')) {
	if(topPosR < 100) {
		snbr.removeClass('scroll');
	}
} else {
	if(topPosR > 100) {
		snbr.addClass('scroll');
	}
}