'use strict';
$(function() {
	//portfolio-item
	$('._picp__owl').owlCarousel({
		margin: 0,
		loop: true,
		items:1,	
		navText: [],
		autoplay:true,
		smartSpeed: 500,
		autoplayTimeout:10000,
		responsive:{
		   	0:{
				nav: false,
				dots: true,
		   	},
		   	768:{
				nav: true,
				dots: false,
		   	},
		}
	});
	//lp-star
	$('._sbnb__owl').owlCarousel({
		margin: 0,
		items:1,	
		navText: [],
		nav: false,
		dots: true
	});
	$('._sbtb__tablet-p-owl').owlCarousel({
		margin: 0,
		items:1,	
		navText: [],
		nav: false,
		dots: true
	});
	$('._sbtb__tablet-l-owl').owlCarousel({
		margin: 0,
		items:1,	
		navText: [],
		nav: false,
		dots: true
	});	
	//lp-roza
	$('._rbr__owl').owlCarousel({
		margin: 0,
		items:1,	
		navText: [],
		loop: true,
		autoplay: true,
		autoplayTimeout: 3500,
		smartSpeed: 500,
		responsive:{
		   	0:{
				nav: false,
				dots: true,
		   	},
		   	1025:{
				nav: true,
				dots: true,
		   	},
		}
	});
	//lp-msk76
	$('.msk_rvb__owl').owlCarousel({
		navText: [],
		loop: true,
		center: true,
		//autoplay: true,
		autoplayTimeout: 3500,
		smartSpeed: 500,
		dots: true,
		responsive:{
			0:{
				nav: false,
				items: 1,
				margin: 0
			},
			560:{
				nav: false,
				items: 2,
				margin: 30,
			},
			768:{
				nav: true,	
				items: 2,
				margin: 30,
			},
		}
	});
});