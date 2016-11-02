$(document.body).on('click', '._spc__tabs-nav ._spc__tabs-heading', {}, function(event){
	event.preventDefault();
	
	var btn = $(this);
	
	var page_url = btn.attr('data-page-url');
	
	if(page_url && typeof page_url != 'undefined' && page_url != 'undefined') {
		$(document.body).trigger('azbn._spc__tabs-nav._spc__tabs-heading', [page_url, true]);
	}
	
})