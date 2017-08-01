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
			if(next.size()) {			
				block.find('.iphone-slider__blurscreen .iphone-slider__blurscreen-inner')
					.attr('style', next.attr('data-style'));
				
			} else {			
				block.find('.iphone-slider__blurscreen .iphone-slider__blurscreen-inner')
					.attr('style', block.find('.iphone-slider__item').eq(0).attr('data-style'));
			}
			
		});
		
		dots.find('.iphone-slider__dot').eq(0).find('.iphone-slider__dot-btn').trigger('click');
		
	});
	
});