var h_window = $(window).height(), 
	w_window = $(window).width(),

	h_navbar = $('.navbar-site').outerHeight(true),
	h_header = $('.header-site').outerHeight(true),
	h_footer = $('.footer-site').outerHeight(true),
	h_project_nav = $('._bread__btn-project').outerHeight(true),
	h_content_index = h_window - h_navbar,
	h_content_yarus = h_window - h_project_nav,
	h_content = h_window - h_navbar - h_footer;

if (device.mobile() || device.tablet()) {
	$('.navbar').addClass('navbar-fixed-top');
	$('.navbar-btn__cols').appendTo('.navbar-header__row');	 
} else {
}
if (device.mobile()) {
	$('.content-site').removeAttr("style");
	$('._nbr__scroller').removeClass("scroller");
} else {
	$('.content-site').css("min-height", h_content_index);
	//$('.index-page-content').css("height", h_content_index);
	$('.full-window').css("min-height", h_content_index);
	$('._yarus__block-site').css("height", h_window);
	$('._yarus__block-footer').css("height", h_content_yarus);
	$('._yarus__block-header').css("height", h_content_index);
}


$(".navbar-fixed-top").autoHidingNavbar();
$(".scroller").mCustomScrollbar();
