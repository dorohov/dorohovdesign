	
	$(document.body).on('azbn._spc__tabs-nav._spc__tabs-heading', null, {}, function(event, page_url, addToHistory){
		event.preventDefault();
		
		if(addToHistory == true) {
			// Добавляем запись в историю, используя pushState
			window.history.pushState({href : page_url}, null, page_url);
		}
		
	});
	
	window.addEventListener('popstate', function(event) {
		//alert(JSON.stringify(event.state));
		if(event.state && event.state.target) {
			$(document.body).trigger('azbn._spc__tabs-nav._spc__tabs-heading', [window.location.pathname, event.state.target, false]);
		}
	}, false);
	
	
	$(function(){
		
		var hash = window.location.hash;
		$('._spc__tabs-nav ._spc__tabs-heading[href="' + hash + '"]').trigger('click');
		
	})