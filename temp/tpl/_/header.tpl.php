<!DOCTYPE html>
<html <?php language_attributes();?> > 
<head>
<?
$this->tpl('_/head', array());
wp_head();
if(is_single() && get_field('post_add_type', get_post()->ID) == 'landing'){
	$GLOBALS['header_class'] = 'navbar-index';
	?><link href="<? echo $this->path('css');?>/lp-bread.css" rel="stylesheet"> <?
}
if(is_single() && get_field('post_add_type', get_post()->ID) == 'landing-rk-highlight'){
	//$GLOBALS['header_class'] = 'navbar-index';
	?>
	<link href="<? echo $this->path('css');?>/lp-rk-highlight.css" rel="stylesheet">
	<link href="<? echo $this->path('css');?>/animate.min.css" rel="stylesheet">
	
	<script src="<? echo $this->path('js');?>/wow.min.js"></script>
	<?
}
if(is_single() && get_field('post_add_type', get_post()->ID) == 'landing-star'){
	//$GLOBALS['header_class'] = 'navbar-index';
	?>
	<link href="<? echo $this->path('css');?>/lp-star.css" rel="stylesheet">
	<link href="<? echo $this->path('css');?>/animate.min.css" rel="stylesheet">
	
	<script src="<? echo $this->path('js');?>/wow.min.js"></script>
	<script>
	new WOW().init();
	</script>
	<?
}
if(is_single() && get_field('post_add_type', get_post()->ID) == 'landing-yarus'){
	//$GLOBALS['header_class'] = 'navbar-index';
	?>
	<link href="<? echo $this->path('css');?>/lp-yarus.css" rel="stylesheet">
	<?
}
if(is_single() && get_field('post_add_type', get_post()->ID) == 'landing-amd'){
	//$GLOBALS['header_class'] = 'navbar-index';
	?>
	<link href="<? echo $this->path('css');?>/lp-amd.css" rel="stylesheet">
	<?
}
if(is_single() && get_field('post_add_type', get_post()->ID) == 'landing-msk76'){
	?>
	<link href="<? echo $this->path('css');?>/lp-msk76.css" rel="stylesheet">
	<link href="<? echo $this->path('css');?>/iphone-slider.css" rel="stylesheet">
	<?
}
if(is_single() && get_field('post_add_type', get_post()->ID) == 'landing-zenit'){
	?>
	<link href="<? echo $this->path('css');?>/lp-zenit.css" rel="stylesheet">
	<?
}
if(is_single() && get_field('post_add_type', get_post()->ID) == 'landing-enerfit'){
	?>
	<link href="<? echo $this->path('css');?>/lp-enerfit.css" rel="stylesheet">
	<?
}
if(is_single() && get_field('post_add_type', get_post()->ID) == 'landing-roza'){
	//$GLOBALS['header_class'] = 'navbar-index';
	?>
	<link href="<? echo $this->path('css');?>/lp-roza.css" rel="stylesheet">
	<link href="<? echo $this->path('css');?>/animate.min.css" rel="stylesheet">
	
	<script src="<? echo $this->path('js');?>/wow.min.js"></script>
	<?
}
//if( get_post()->ID == 15 || get_post()->post_parent == 15 || get_post()->ID == 13) {
if(get_post()->ID == 13) {
	$GLOBALS['header_class'] = 'navbar-index';
} else {
	$GLOBALS['header_class'] = 'second-navbar';
}
?>
</head>

<?
$logo_hover = '';
if(!is_front_page()) {
	$logo_hover = 'logo-hover ';
}
	$logo_hover = 'logo-hover ';
?>

<body id="go-to-top-target" <?php body_class(); ?> >

<?
if(is_front_page() || get_post()->ID == 5 || get_post()->ID == 15) {
	$this->tpl('_/page-loader', array());
}
?>
<nav class="navbar navbar-site <?=$logo_hover;?> <?echo $GLOBALS['header_class'];?>">
	<div class="container-fluid navbar-container-fluid">
		<div class="row navbar__row">
			<div class="cols navbar__cols-left">
				<div class="navbar-header">
					<div class="row navbar-header__row ">
						<div class="cols navbar-brand__cols">
							<a class="navbar-brand" href="/">
								<img src="<? echo $this->path('img');?>/default/logotip-black.png" data-rjs="2" alt="" class="main" >
								<img src="<? echo $this->path('img');?>/default/logotip-black-hover.png" alt="" class="hover">
							</a>
						</div>
				        <div class="cols navbar-hamburger__cols">
							<button class="hamburger hamburger--emphatic " data-toggle="collapse" data-target="#bs-navbar-collapse" aria-expanded="false" data-toggle-nav=".navbar-site">
								<div class="hamburger-box">
									<div class="hamburger-inner"></div>
								</div>
							</button>
				        </div>

			        </div>
		        </div>
		    </div>	
			<div class="cols navbar__cols-right">
				<div class="navbar-collapse-box">
			        <div class="cols navbar-scroll__cols">
						<button class="hamburger hamburger--emphatic azbn-show-top-menu-btn "  data-collapse-nav=".navbar-site">
							<div class="hamburger-box">
								<div class="hamburger-inner"></div>
							</div>
						</button>					
			        </div>			
					<div class="collapse navbar-collapse" id="bs-navbar-collapse">
						<div class="row navbar-collapse__row">
							<div class="cols navbar-contacts__cols ">
								<div class="row navbar-contacts__row">
									<div class="cols navbar-contacts__cols-tel">
										<div class="navbar-contacts__icon icon-tel"><a href="tel:<?=getContacts('phone1callto');?>"><?=getContacts('phone1');?></a></div>
									</div>
									<div class="cols navbar-contacts__cols-mailto">
										<div class="navbar-contacts__icon icon-mailto"><a href="mailto:<?=getContacts('email');?>"><?=getContacts('email');?></a></div>
									</div>
								</div>
							</div>
							<div class="cols navbar-nav__cols">
								<ul class="nav navbar-nav">
									<li><a href="/">Главная</a></li>
									<li><a href="<?=l(5);?>">Портфолио</a></li>
									<li><a href="<?=l(17);?>">Услуги и цены</a></li>
									<li><a href="<?=l(11);?>">О нас</a></li>
									<li><a href="<?=l(15);?>">Блог</a></li>
									<li><a href="<?=l(13);?>">Контакты</a></li>
								</ul>
							</div>
							<div class="cols navbar-btn__cols">
								<button type="button" data-toggle="modal" data-target="#modal-servises-reviews" data-title="Заказать обратный звонок" class="btn-site btn-gradient">Заказать</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</nav>

<?
if(($this->post['id'] == 13)) {
	?><div class="index-page-content scroll-page" data-slide-id="0"><?
}
?>
<?
if(is_front_page()) {
	?><div class="index-page-content padtop content-site"><?
}
?>