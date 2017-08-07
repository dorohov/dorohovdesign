<?

?>
<link rel="stylesheet" type="text/css" href="<? echo $this->path('css');?>/scrollbar.jquery.css">
<script src="<? echo $this->path('plugins');?>/jquery.scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
<script>		
  	$(document).ready(function () {    
		$(".scroller").mCustomScrollbar();
	});
</script>