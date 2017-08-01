$(function() {		
	var iphone = $('.iphone-slider__container');
	
	$(document.body).on('azbn.setActive', '.iphone-slider__container .iphone-slider__item', {}, function(event){
		event.preventDefault();
		
		var el = $(this);
		el.addClass('is--active');
		
		var next = el.next('.iphone-slider__item');
		if(next.size()) {			
			$('.iphone-slider .iphone-slider__blurscreen .iphone-slider__blurscreen-inner')
				.attr('style', next.attr('data-style'));
			
		} else {			
			$('.iphone-slider .iphone-slider__blurscreen .iphone-slider__blurscreen-inner')
				.attr('style', iphone.find('.iphone-slider__item').eq(0).attr('data-style'));
			
		}
		
	});
	$(document.body).on('click', '.iphone-slider__btn', {}, function(event){
			event.preventDefault();
			
			var screens = iphone.find('.iphone-slider__item');
			var active = screens.filter('.is--active');
			
			if(active.size()) {
				
				var next = active.next('.iphone-slider__item');
				if(next.size()) {
					
					screens.removeClass('is--active');
					next.trigger('azbn.setActive');
					
				} else {
					
					screens.removeClass('is--active');
					screens.eq(0).trigger('azbn.setActive');
					
				}
				
			} else {
				
				screens.eq(0).trigger('azbn.setActive');
				
			}
			
	});
	$('.iphone-slider__btn').trigger('click');
});