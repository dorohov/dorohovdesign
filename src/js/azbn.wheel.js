$(function() {
	
	var block = $('.scroll-page').eq(0);
	var dots = $('.scroll-page__dots').eq(0);
	var blog_navbar;
	
	var scrolling;
	
	var can_scroll = function(timeout){
		if(timeout) {
			setTimeout(function(){
				scrolling = false;
			}, timeout);
		} else {
			scrolling = false;
		}
	};
	
	can_scroll();
	
	if(block.size() && !screenJS.isXS() && !screenJS.isSM() && !device.mobile() && !device.tablet()) {
		
		if(block.hasClass('blog-page-content')) {
			
			$('.scroll-page__slide.last_slide').remove().empty();
			blog_navbar = $('.navbar-site-right').eq(0);
			
		}
		
		if(dots) {
			
			dots.find('.scroll-page__dot').remove().empty();
			
			block.find('.scroll-page__slide').each(function(index){
				
				var slide = $(this);
				var slide_id = slide.attr('data-slide-id') || 0;
				
				var dot = $('<button/>', {
					class : 'scroll-page__dot'
				})
					.attr('data-slide-id', slide_id)
					.on('click', function(event) {
						event.preventDefault();
						
						var __slide_id = block.attr('data-slide-id');
						if(slide_id > __slide_id) {
							for(var i = slide_id + 1; i < __slide_id + 1; i++) {
								block.attr('data-slide-id', i);
							}
						} else if(slide_id < __slide_id) {
							for(var i = slide_id - 1; i > __slide_id - 1; i--) {
								block.attr('data-slide-id', i);
							}
						}
						
						//block.attr('data-slide-id', slide_id);
						block.trigger('azbn.wheel', [{diff:0, next:slide_id, callback:function(){
							can_scroll(633);
						}}]);
					})
					.appendTo(dots)
				;
				
			});
			
			
			
			dots.on('azbn.setDot', function(event, obj){
				
				dots.find('.scroll-page__dot.active').removeClass('active');
				dots.find('.scroll-page__dot[data-slide-id="' + obj.next + '"]').addClass('active');
				
			});
			
		dots.trigger('azbn.setDot', [{next : 0}]);
			
		}
		
		$(document.body).on('azbn.wheel', '.scroll-page', {}, function(event, obj){
			event.preventDefault();
			
			var cb = obj.callback;
			
			if(obj.next == block.find('.scroll-page__slide').length) {
				
			} else {
				
				//event.preventDefault();
				
				block.find('.scroll-page__slide')
					.filter('.active')
						.toggleClass('active')
					.end()
					.eq(obj.next)
						.toggleClass('active')
				;
				
				if(dots) {
					dots.trigger('azbn.setDot', [obj]);
				}
				
			}
			
			cb();
		});
		
		
		$(document.body).on('wheel mousewheel DOMMouseScroll MozMousePixelScroll', '.scroll-page', {}, function(event) {
			//event.preventDefault();
			//diff:event.originalEvent.wheelDelta
			
			if(scrolling) {
				
				event.preventDefault();
				
				return;
				
			} else {
				
				scrolling = true;
				
				var diff = (-event.originalEvent.deltaY) || event.originalEvent.detail || event.originalEvent.wheelDelta;
				var slide = parseInt(block.attr('data-slide-id'));
				var next;
				
				console.warn(diff);
				
				if(blog_navbar && blog_navbar.hasClass('open')) {
					blog_navbar.find('.azbn-blog-menu-btn').trigger('click');
				}
				
				if(diff > 0) {
					
					event.preventDefault();
					
					if(slide > 0) {
						
						next = slide - 1;
						block.attr('data-slide-id', next);
						block.trigger('azbn.wheel', [{diff:diff, next:next, callback:function(){
							can_scroll(633);
						}}]);
						
					} else {
						
						can_scroll();
						
					}
					
				} else if(diff < 0) {
					
					//console.log([slide, block.find('.scroll-page__slide').length, block.find('.scroll-page__slide').length -1, block.hasClass('blog-page-content')].join(','));
					
					if(slide == (block.find('.scroll-page__slide').length - 1) && (block.hasClass('blog-page-content'))) {
						
						if(!blog_navbar.hasClass('open')) {
							blog_navbar.find('.azbn-blog-menu-btn').trigger('click');
						}
						
						can_scroll(633);
						
					} else if(slide < block.find('.scroll-page__slide').length - 1) {
						
						event.preventDefault();
						
						next = slide + 1;
						block.attr('data-slide-id', next);
						block.trigger('azbn.wheel', [{diff:diff, next:next, callback:function(){
							can_scroll(1234);
						}}]);
						
					} else {
						
						event.preventDefault();
						
						can_scroll();
						
					}
					
					
				} else {
					
					//event.preventDefault();
					
					can_scroll();
					
				}
				
				//can_scroll();
				
			}
			
		});
		
	} else {
		
	}
	
});

$(function(){
	
	if(device.desktop()) {
		
		$(document.body).on('mousemove', '.need-mouse-rotate', {}, function(event){
			//console.log(event);
			
			var block = $(this);
			
			block.attr('data-hovered', 1);
			
			var e = {
				x : event.originalEvent.offsetX,
				y : event.originalEvent.offsetY,
			};
			
			var x0 = block.outerWidth(true) / 2;
			var y0 = block.outerHeight(true) / 2;
			
			var _x_d = (e.y - x0) / 14;
			var _y_d = - (e.x - y0) / 21;
			
			block
				.css({
					'transform' : 'rotateX(' + _x_d + 'deg) rotateY(' + _y_d + 'deg)',
				})
			;
			
			//console.log(m);
			
		});
		
		
		$(document.body).on('mouseenter', '.need-mouse-rotate', {}, function(event){
			//console.log(event);
			
			var block = $(this);
			
			$('.need-mouse-rotate[data-hovered="1"]')
				.css({
					'transform' : 'rotateX(' + 0 + 'deg) rotateY(' + 0 + 'deg)',
				})
				.attr('data-hovered', 0);
			;
			
		});
		
		
		$(document.body).on('mouseleave', '.need-mouse-rotate', {}, function(event){
			//console.log(event);
			
			var block = $(this);

			block
				.css({
					'transform' : 'rotateX(' + 0 + 'deg) rotateY(' + 0 + 'deg)',
				})
				.attr('data-hovered', 0);
			;
			
		});
		
		
	}
	
});

$(function(){
	
	
	var input_phone = $('form.form-site [class*="validate[required,custom[phone]]"]').attr('data-valid-as', 'phone');
	var input_email = $('form.form-site [class*="validate[required,custom[email]]"]').attr('data-valid-as', 'email');
	
	var on_event = function(event){
		
		var input = $(this);
		
		var other = null;
		var other_class = '';
		if(input.attr('data-valid-as') == 'email') {
			other = input_phone;
			other_class = 'validate[required,custom[phone]]';
		} else if(input.attr('data-valid-as') == 'phone') {
			other = input_email;
			other_class = 'validate[required,custom[email]]';
		}
		
		var val = input.val();
		
		if(val != '') {
			other.removeClass(other_class);
		} else {
			if(other.hasClass(other_class)) {
				
			} else {
				other.addClass(other_class);
			}
		}
		
	}
	
	
	input_phone.on('keyup blur focus', on_event);
	input_email.on('keyup blur focus', on_event);
	
	
});



$(function(){
	
	$(document.body).on('click', '.portfolio-item a', {}, function(event){
		event.preventDefault();
		
		var btn = $(this);
		var item = btn.parent().parent();
		
		$('.portfolio-ajax-div').empty().remove();
		
		var iframe = $('<iframe/>', {
			'src' : btn.attr('href'),
		});
		
		var coord = {
			l : item.offset().left,
			t : item.offset().top,
		};
		coord.w = item.outerWidth(true);
		coord.h = item.outerHeight(true);
		
		var div = $('<div/>', {
			'class' : 'portfolio-ajax-div',
		})
			.css({
				'left' : coord.l,
				'width' : coord.w,
				'top' : coord.t,
				'height' : coord.h,
			})
			.appendTo($(document.body))
		;
		
		setTimeout(function(){
			
			div
				.addClass('open');
			;
			
			$(document.body)
				.addClass('overflow-hidden')
			;
			
			setTimeout(function(){
				
				if(SS) {
					
					SS.set('view_portfolio', 1);
					
				}
				
				location.href = btn.attr('href');
			}, 1024);
			
			
		}, 365);
		
	});
	
});

$(function(){
	
	$(document.body)
		.addClass('overflow-hidden')
	;
	
	if(SS && $('.portfolio-item-page-white').length) {
		
		var yes = parseInt(SS.get('view_portfolio'));
		
		SS.set('view_portfolio', 0);
		
		if(yes) {
			
			$('.portfolio-item-page-white.open').removeClass('open');
			
			$(document.body)
				.removeClass('overflow-hidden')
			;
			
			setTimeout(function(){
				
				$('.portfolio-item-page-white').empty().remove();
				
			}, 1234);
			
		} else {
			
			$(document.body)
				.removeClass('overflow-hidden')
			;
			
			$('.portfolio-item-page-white.open').empty().remove();
			
			//console.log(123);
			
		}
		
	} else if($('.portfolio-item-page-white').length) {
		
		$('.portfolio-item-page-white.open').removeClass('open');
		
		$(document.body)
			.removeClass('overflow-hidden')
		;
		
		setTimeout(function(){
			
			$('.portfolio-item-page-white').empty().remove();
			
		}, 1234);
		
	} else {
		
		$(document.body)
			.removeClass('overflow-hidden')
		;
		
	}
	
});


$(function(){
	
	/*
	$(document.body).on('click', '.navbar-site-right.open .azbn-blog-menu-btn', {}, function(event){
		//azbn-show-top-menu-btn
		$('.navbar.navbar-site .azbn-show-top-menu-btn').trigger('click');
		
	});
	*/
	
});


$(function(){
	
	$(document.body).on('click', '#carousel-index .carousel-control', {}, function(event){
		$('#carousel-index').carousel('pause');
	});
	
});






/*




function getAverageRGB(imgEl) {
	
	var blockSize = 5, // only visit every 5 pixels
		defaultRGB = {r:0,g:0,b:0}, // for non-supporting envs
		canvas = document.createElement('canvas'),
		context = canvas.getContext && canvas.getContext('2d'),
		data, width, height,
		i = -4,
		length,
		rgb = {r:0,g:0,b:0},
		count = 0;
		
	if (!context) {
		return defaultRGB;
	}
	
	height = canvas.height = imgEl.naturalHeight || imgEl.offsetHeight || imgEl.height;
	width = canvas.width = imgEl.naturalWidth || imgEl.offsetWidth || imgEl.width;
	
	context.drawImage(imgEl, 0, 0);
	
	try {
		data = context.getImageData(0, 0, width, height);
	} catch(e) {
		return defaultRGB;
	}
	
	length = data.data.length;
	
	while ( (i += blockSize * 4) < length ) {
		++count;
		rgb.r += data.data[i];
		rgb.g += data.data[i+1];
		rgb.b += data.data[i+2];
	}
	
	// ~~ used to floor values
	rgb.r = ~~(rgb.r/count);
	rgb.g = ~~(rgb.g/count);
	rgb.b = ~~(rgb.b/count);
	
	return rgb;
	
}



function getAverageRGB(imgEl) {
    var canvas = document.createElement('canvas'),
        context = canvas.getContext && canvas.getContext('2d'),
        data;
        
    if (!context) {
        return [0,0,0];
    }
    
    canvas.height = canvas.width = 1;
    context.drawImage(imgEl, 0, 0, 1, 1);
    
    try {
        data = context.getImageData(0, 0, 1, 1);
    } catch(e) {
        
    }
    return data.data;    
}
*/