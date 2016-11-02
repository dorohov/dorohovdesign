(function(){
	
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
	
})();