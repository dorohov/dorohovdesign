<meta charset="utf-8" >
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<title><?if(is_category()) {single_cat_title();} else { echo wp_get_document_title();}?></title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<link type="image/x-icon" href="/favicon.ico" rel="shortcut icon" />
<link type="image/x-icon" href="/favicon.ico" rel="icon" />
<link rel="apple-touch-icon" sizes="57x57" href="<? echo $this->path('favicon');?>/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="<? echo $this->path('favicon');?>/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="<? echo $this->path('favicon');?>/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="<? echo $this->path('favicon');?>/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="<? echo $this->path('favicon');?>/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="<? echo $this->path('favicon');?>/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="<? echo $this->path('favicon');?>/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="<? echo $this->path('favicon');?>/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="<? echo $this->path('favicon');?>/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="<? echo $this->path('favicon');?>/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="<? echo $this->path('favicon');?>/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="<? echo $this->path('favicon');?>/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="<? echo $this->path('favicon');?>/favicon-16x16.png">
<link rel="manifest" href="<? echo $this->path('favicon');?>/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="<? echo $this->path('favicon');?>/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">

<?if(is_user_logged_in()) {?>
	<link href="<? echo $this->path('css');?>/site.css" rel="stylesheet">
<?}else{?>
	<link href="<? echo $this->path('css');?>/site-old.css" rel="stylesheet">
<?}?>

<link href="<? echo $this->path('css');?>/azbn.css" rel="stylesheet">
<script src="<? echo $this->path('js');?>/jquery.min.js" ></script>

<!-- vk pixel -->
<!--<script type="text/javascript">(window.Image ? (new Image()) : document.createElement('img')).src = location.protocol + '//vk.com/rtrg?r=CGg0WuMNQWiI9hM6rz7QhrN464DD44VUIhqjvf5cnj2vepYTbrQIuzsKN9mX9DffDLU91kf40bKFfaolSWNHV9q1ima7SsNIrN4iFx25paQWBCepg8FnEXV2bv59ceDAdPlr0L0ngmpHiEARI8ynpjJZ8fOXAgdJ6rBKoVG50Uo-&pixel_id=1000037461';</script>-->

<script type="text/javascript">(window.Image ? (new Image()) : document.createElement('img')).src = 'https://vk.com/rtrg?p=VK-RTRG-124324-52MI0';</script>

<!-- Facebook Pixel Code -->
<script>
!function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
document,'script','https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '1817067838622290'); // Insert your pixel ID here.
fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=1817067838622290&ev=PageView&noscript=1"
/></noscript>
<!-- DO NOT MODIFY -->
<!-- End Facebook Pixel Code -->