$('img').addClass('img-responsive');
$('.text-block ul').addClass('ul-site');
var url = window.location.pathname;
$('.navbar-nav a[href="'+url+'"]').parent().addClass('active'); 
$('._ppc__btn-block .btn-grey-light[href="'+url+'"]').addClass('active'); 
$('._ipc__slider-carousel .item').eq(0).addClass('active');

if(url != "/"){
	//$('<li><a href="/">Главная</a></li>').prependTo($('.navbar-nav'));
}
$('.text-block table').addClass('table table-bordered');
$('.text-block .table.table-bordered').parent().addClass('table-responsive');
$('.text-block img').parent().addClass('_tb__img'); 
$('.fancybox').fancybox({
	prevEffect : 'none',
	nextEffect : 'none',
});
// конструкция для активации fancybox <a class="fancybox-buttons" data-fancybox-group="button" href="" data-title=""><img src="" alt="" /></a>
$('.fancybox-buttons').fancybox({
	openEffect  : 'none',
	closeEffect : 'none',
	prevEffect : 'none',
	nextEffect : 'none',
	closeBtn  : false,
	helpers : {
		title : {
			type : 'inside'
		},
		buttons	: {}
	},
	afterLoad : function() {
		this.title = this.title;
	}
});
if (device.mobile() || device.tablet()) {
//if (device.tablet()) {
	$('._fs__soc-block').clone().appendTo('.navbar-collapse');
}
$('#portfolio-filter option[value="'+url+'"]').attr('selected' , 'selected'); 
$('#portfolio-filter').on('change', function () {
	if($(this).val() != '' || $(this).val() != 'undefined') {					
		window.location=$(this).val();
		return false;			
	}
});
$("form.form-site").validationEngine(
	'attach', {
		promptPosition : "bottomLeft",
		scroll: false
	}
);
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
retinajs();
var nsro = $('.navbar-site-right');
if(nsro.hasClass('open')){
	$(this).siblings('.navbar-site').toggleClass('visible');
}

//landing-star
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
//landing-roza
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