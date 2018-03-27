"use strict";
$(function() {
    $("._picp__owl").owlCarousel({
        margin: 0,
        loop: !0,
        items: 1,
        navText: [],
        autoplay: !0,
        smartSpeed: 500,
        autoplayTimeout: 1e4,
        responsive: {
            0: {
                nav: !1,
                dots: !0
            },
            768: {
                nav: !0,
                dots: !1
            }
        }
    }), $("._sbnb__owl").owlCarousel({
        margin: 0,
        items: 1,
        navText: [],
        nav: !1,
        dots: !0
    }), $("._sbtb__tablet-p-owl").owlCarousel({
        margin: 0,
        items: 1,
        navText: [],
        nav: !1,
        dots: !0
    }), $("._sbtb__tablet-l-owl").owlCarousel({
        margin: 0,
        items: 1,
        navText: [],
        nav: !1,
        dots: !0
    }), $("._rbr__owl").owlCarousel({
        margin: 0,
        items: 1,
        navText: [],
        loop: !0,
        autoplay: !0,
        autoplayTimeout: 3500,
        smartSpeed: 500,
        responsive: {
            0: {
                nav: !1,
                dots: !0
            },
            1025: {
                nav: !0,
                dots: !0
            }
        }
    }), $(".msk_rvb__owl").owlCarousel({
        navText: [],
        loop: !0,
        center: !0,
        autoplayTimeout: 3500,
        smartSpeed: 500,
        dots: !0,
        responsive: {
            0: {
                nav: !1,
                items: 1,
                margin: 0
            },
            560: {
                nav: !1,
                items: 2,
                margin: 30
            },
            768: {
                nav: !0,
                items: 2,
                margin: 30
            }
        }
    }), $(".dixion_interface__owl").owlCarousel({
        navText: [],
        loop: !0,
        center: !0,
        autoplayTimeout: 3500,
        smartSpeed: 500,
        dots: !0,
        nav: !1,
        responsive: {
            0: {
                nav: !1,
                items: 1,
                autoWidth: !1,
                margin: 10
            },
            560: {
                nav: !1,
                items: 2,
                autoWidth: !1,
                margin: 30
            },
            768: {
                nav: !0,
                items: 2,
                autoWidth: !1,
                margin: 30
            },
            1025: {
                autoWidth: !0,
                margin: 100,
                nav: !0
            }
        }
    }),	//lp-orionprint
	$('.orionprint_interface__owl').owlCarousel({
		navText: [],
		loop: true,
		center: true,
		//autoplay: true,
		autoplayTimeout: 3500,
		smartSpeed: 500,
		dots: true,
		nav: false,
		responsive:{
			0:{
				nav: false,
				items: 1,
				autoWidth:false,
				margin: 10
			},
			560:{
				nav: false,
				items: 2,
				autoWidth:false,
				margin: 30,
			},
			768:{
				nav: true,
				items: 2,
				autoWidth:false,
				margin: 30,
			},
			1025:{
				autoWidth:true,
				margin: 100,
				nav: true,
			}
		}
	}),
		//lp-crema.html
	$(".crema_interface__owl").owlCarousel({
			navText: [],
			loop: !0,
			center: !0,
			autoplayTimeout: 3500,
			smartSpeed: 500,
			dots: !0,
			nav: !1,
			responsive: {
					0: {
							nav: !1,
							items: 1,
							autoWidth: !1,
							margin: 10
					},
					560: {
							nav: !1,
							items: 1,
							autoWidth: !1,
							margin: 30
					},
					768: {
							nav: !0,
							items: 1,
							autoWidth: !1,
							margin: 30
					},
					1025: {
							autoWidth: !0,
							items: 1,
							margin: 100,
							nav: !0
					}
			}
});

});
