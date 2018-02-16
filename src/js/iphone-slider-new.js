$(function() {		
	
	var __getDoubleNum = function(num) {
		num = num || 0;
		if(num < 10) {
			num = '0' + num;
		}
		return num;
	}
	
	$('.iphone-slider').each(function(index){
		
		var block = $(this);
		var cont = block.find('.iphone-slider__container');
		var dots = block.find('.iphone-slider__dots');
		
		var sliderIntv = null,
			sliderIntv_interval_ms = parseInt(block.attr('data-interval-ms')) || 0
		;
		
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
		
		if(block.find('.iphone-slider__count-item_amount').length) {
			block.find('.iphone-slider__count-item_amount').html(__getDoubleNum(dots.find('.iphone-slider__dot').length));
		}
		
		dots.on('click', '.iphone-slider__dot .iphone-slider__dot-btn', null, function(event){
			event.preventDefault();
			
			var button = $(this);
			var li = button.closest('li');
			var _index = parseInt(button.attr('data-item-index') || 0);
			
			if(block.find('.iphone-slider__count-item_number').length) {
				block.find('.iphone-slider__count-item_number').html(__getDoubleNum(_index + 1));
			}
			
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
				block.find('.iphone-slider__blurscreen .iphone-slider__blurscreen-inner')
					.html(next.attr('data-text'));
				
			} else {			
				block.find('.iphone-slider__blurscreen .iphone-slider__blurscreen-inner')
					.attr('style', block.find('.iphone-slider__item').eq(0).attr('data-style'));
				block.find('.iphone-slider__blurscreen .iphone-slider__blurscreen-inner')
					.html(block.find('.iphone-slider__item').eq(0).attr('data-text'));
			}
			
		});
		
		block.find('.iphone-slider__btn.is--right').on('click', function(event){
			event.preventDefault();
			
			var item = dots.find('.iphone-slider__dot.is--active');
			
			var next = item.next('.iphone-slider__dot');
			
			if(next.length) {
				
				next.find('.iphone-slider__dot-btn').trigger('click');
				
			} else {
				
				dots.find('.iphone-slider__dot').eq(0).find('.iphone-slider__dot-btn').trigger('click');
				
			}
			
		});
		
		block.find('.iphone-slider__btn.is--left').on('click', function(event){
			event.preventDefault();
			
			var item = dots.find('.iphone-slider__dot.is--active');
			
			var prev = item.prev('.iphone-slider__dot');
			
			if(prev.length) {
				
				prev.find('.iphone-slider__dot-btn').trigger('click');
				
			} else {
				
				dots.find('.iphone-slider__dot').eq(-1).find('.iphone-slider__dot-btn').trigger('click');
				
			}
			
		});
		
		block.find('.iphone-slider__btn.is--left, .iphone-slider__btn.is--right, .iphone-slider__dots').on('mouseover', function(event){
			
			block.data('interval-pause', 1);
			
		});
		
		block.find('.iphone-slider__btn.is--left, .iphone-slider__btn.is--right, .iphone-slider__dots').on('mouseout', function(event){
			
			block.data('interval-pause', 0);
			
		});
		
		dots.find('.iphone-slider__dot').eq(0).find('.iphone-slider__dot-btn').trigger('click');
		
		if(sliderIntv_interval_ms > 0) {
			
			sliderIntv = setInterval(function(){
				
				var _hover = parseInt(block.data('interval-pause')) || 0;
				
				if(!_hover) {
					
					block.find('.iphone-slider__btn.is--right').trigger('click');
					
				}
				
			}, sliderIntv_interval_ms);
			
		}
		
	});
	
});