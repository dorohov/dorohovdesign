<?

?>

<!-- Yandex.Metrika counter -->
<script type="text/javascript">
(function (d, w, c) {
	(w[c] = w[c] || []).push(function() {
		try {
			w.yaCounter20026843 = new Ya.Metrika({id:20026843,
					webvisor:true,
					clickmap:true,
					trackLinks:true,
					accurateTrackBounce:true});
		} catch(e) { }
	});
	
	var n = d.getElementsByTagName("script")[0],
		s = d.createElement("script"),
		f = function () { n.parentNode.insertBefore(s, n); };
	s.type = "text/javascript";
	s.async = true;
	s.src = (d.location.protocol == "https:" ? "https:" : "http:") + "//mc.yandex.ru/metrika/watch.js";
	
	if (w.opera == "[object Opera]") {
		d.addEventListener("DOMContentLoaded", f, false);
	} else { f(); }
})(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="//mc.yandex.ru/watch/20026843" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->

<!--
<script>
	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
	
	ga('create', 'UA-100083935-1', 'auto');
	ga('send', 'pageview');
	
</script>
-->

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
 
  ga('create', 'UA-69958047-2', 'auto');
  ga('send', 'pageview');
 
</script>

<script>

$(function(){
	
	$('form[data-metric-uid]').on('submit', function(event){
		
		var form = $(this);
		var uid = form.attr('data-metric-uid') || 'site.formsave.order.default';
		
		ga('send', 'event', 'form', uid);
		//yaCounter20026843.reachGoal(uid);
		
		if(Ya.Metrika) {
			
			//ctrl.Yandex = Ya.Metrika.counters()[0].id
			
			for(var i in window) {
				if(i.toLowerCase().indexOf('yacounter') > -1) {
					
					var yac = window[i];
					
					yac.reachGoal(uid);
					
				}
			}
			
		}
		
	});
	
})

</script>