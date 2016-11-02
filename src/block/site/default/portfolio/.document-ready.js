$('.portfolio-item').hover(
	function(){
		$(this).addClass('active');
	},
	function(){
		$(this).removeClass('active');
	}
);
$('.portfolio-item').on('click', function(){
	$(this).parent().toggleClass("active");
});