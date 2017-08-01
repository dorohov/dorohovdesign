$(function() {		
	
	$('.iphone-slider').each(function(index){
		
		var block = $(this);
		var cont = block.find('.iphone-slider__container');
		var dots = block.find('.iphone-slider__dots');
		
		dots.empty();
		
		cont.find('.iphone-slider__item').each(function(_index){
			
			var item = $(this);
			
			item.attr('data-item-index', _index);
			
			var li = $('<li/>', {
				class : 'iphone-slider__dot',
			});
			
			var button = $('<button/>', {
				class : 'iphone-slider__dot-btn',
			})
				.attr('data-item-index', _index)
			;
			
			button.appendTo(li);
			li.appendTo(dots);
			
		});
		
		dots.on('click', '.iphone-slider__dot .iphone-slider__dot-btn', null, function(event){
			event.preventDefault();
			
			var button = $(this);
			var li = button.closest('li');
			var _index = button.attr('data-item-index') || 0;
			
			var item = block.find('.iphone-slider__item[data-item-index="' + _index + '"]');
			
			button
				.closest('ul')
					.find('.iphone-slider__dot')
						.removeClass('is--active')
			;
			
			li.addClass('is--active');
			
			block.find('.iphone-slider__item').removeClass('is--active');
			item.addClass('is--active');
			
			var next = item.next('.iphone-slider__item');
			if(next.length) {			
				block.find('.iphone-slider__blurscreen .iphone-slider__blurscreen-inner')
					.attr('style', next.attr('data-style'));
				
			} else {			
				block.find('.iphone-slider__blurscreen .iphone-slider__blurscreen-inner')
					.attr('style', block.find('.iphone-slider__item').eq(0).attr('data-style'));
			}
			
		});
		
		$(document.body).on('click', '.iphone-slider__btn.is--right', {}, function(event){
			event.preventDefault();
			
			var item = dots.find('.iphone-slider__dot.is--active');
			
			var next = item.next('.iphone-slider__dot');
			
			if(next.length) {
				
				next.find('.iphone-slider__dot-btn').trigger('click');
				
			} else {
				
				dots.find('.iphone-slider__dot').eq(0).find('.iphone-slider__dot-btn').trigger('click');
				
			}
			
		});
		$(document.body).on('click', '.iphone-slider__btn.is--left', {}, function(event){
			event.preventDefault();
			
			var item = dots.find('.iphone-slider__dot.is--active');
			
			var prev = item.prev('.iphone-slider__dot');
			
			if(prev.length) {
				
				prev.find('.iphone-slider__dot-btn').trigger('click');
				
			} else {
				
				dots.find('.iphone-slider__dot').eq(-1).find('.iphone-slider__dot-btn').trigger('click');
				
			}
			
		});
		
		dots.find('.iphone-slider__dot').eq(0).find('.iphone-slider__dot-btn').trigger('click');
		
	});
	
	
	
	
	/*
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
		var prev = el.prev('.iphone-slider__item');
		if(prev.size()) {			
			$('.iphone-slider .iphone-slider__blurscreen .iphone-slider__blurscreen-inner')
				.attr('style', prev.attr('data-style'));
			
		} else {			
			$('.iphone-slider .iphone-slider__blurscreen .iphone-slider__blurscreen-inner')
				.attr('style', iphone.find('.iphone-slider__item').eq(0).attr('data-style'));
			
		}
		
	});
	$(document.body).on('click', '.iphone-slider__btn.is--right', {}, function(event){
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
	$(document.body).on('click', '.iphone-slider__btn.is--left', {}, function(event){
			event.preventDefault();
			
			var screens = iphone.find('.iphone-slider__item');
			var active = screens.filter('.is--active');
			
			if(active.size()) {
				
				var prev = active.prev('.iphone-slider__item');
				if(prev.size()) {
					
					screens.removeClass('is--active');
					prev.trigger('azbn.setActive');
					
				} else {
					
					screens.removeClass('is--active');
					screens.eq(0).trigger('azbn.setActive');
					
				}
				
			} else {
				
				screens.eq(0).trigger('azbn.setActive');
				
			}
			
	});
	$('.iphone-slider__btn').trigger('click');
	*/
	
	
});