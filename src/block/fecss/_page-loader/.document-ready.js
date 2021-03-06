/*
$(window).load(function(event){
	$('.page-loader').removeClass('active');
});
*/

	$('.page-loader .close-loader').on('click',function(event){
		event.preventDefault();
		$('.page-loader').removeClass('active');
	});
	
	$(document.body).on('click.fecss', '.page-loader.active ._czr__preloader-process-container ._czr__preloader-process-level' ,function(event){
		event.preventDefault();
		$('.page-loader')
			.data('window-can-close-it', true)
			.data('counter-can-close-it', true)
			.trigger('fecss.can-close-it');
	});
	
	$(document.body).on('fecss.can-close-it', '.page-loader' ,function(event){
		event.preventDefault();
		
		if($(this).data('counter-can-close-it') && $(this).data('window-can-close-it')) {
			$(this).removeClass('active');//.delay(2000).empty().remove();
			
			if(SS) {
				
				SS.set('page-loader__visit__' + window.location.pathname, 1);
				
			}
		}
		
	});
	
	$(window).load(function(event){
		$('.page-loader')
			.data('window-can-close-it', true)
			.trigger('fecss.can-close-it');
		
		$('.page-loader ._czr__preloader-process-container ._czr__preloader-process-level').data('fast-page-loading', true);
	});
	
	
	
	if(SS) {
		
		var __ss_page = parseInt(SS.get('page-loader__visit__' + window.location.pathname));
		
		if(__ss_page) {
			$('.page-loader')
				.data('window-can-close-it', true)
				.data('counter-can-close-it', true)
				.trigger('fecss.can-close-it');
		} else {
			
		}
		
	}
	
	
	
	$(function(){
		var pl = $('.page-loader.active');
		var b = $('._czr__preloader-process-container ._czr__preloader-process-level', pl).eq(0);
		
		if(b.size()) {
			
			var pos = 0;
			
			b.css({'width' : pos + '%'}).attr('data-pos', pos);
			
			var intr = setInterval(function() {
				
				var check = Math.random();
				
				if(check > 0.5 && pos < 99) {
					
					pos++;
					
					$('._azbn__preloader-percent').text(pos);
					
					if(b.data('fast-page-loading')) {
						pos = pos + 5;
					}
					
					b.css({
						'width' : pos + '%',
					})
						.attr('data-pos', pos);
					
				} else if(pos > 98) {
					
					clearInterval(intr);
					
					$('.page-loader')
						.data('counter-can-close-it', true)
						.trigger('fecss.can-close-it');
					
				}
				
			}, 42);
		}
	});