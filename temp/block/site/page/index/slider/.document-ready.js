/*(function(){
	
	setTimeout(function(){
		
		var block = $('.scroll-page__mouse');
		
		block
			.animate({
				opacity : 0,
			}, 777,
			function(){
				block
					.empty()
					.remove()
			})
		;
		
	}, 7000);
	
})();*/

(function(){
	
	var block = $('.scroll-page__mouse');
	
	if(SS) {
		
		var viewed = SS.get('scroll-page__mouse_viewed');
		
		if(viewed) {
			block
				.empty()
				.remove()
			;
		} else {
			SS.set('scroll-page__mouse_viewed', 1);
		}
		
	}
	
})();