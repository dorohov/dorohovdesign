<?php
/*  */

/*
if ( have_posts() ) {
	while ( have_posts() ) {
		the_post();
		$Azbn->post['id'] = get_the_ID();
		get_header();
		printf(__('Search Results for: %s', 'twentyfifteen'), get_search_query());
		the_content();
		get_footer();
	}
}*/
$ids = array();
if(have_posts()){
	while(have_posts()){
		the_post();
		if($post->post_type == 'post'){
			$ids[] = $post->ID;
		}
	}
}
if(have_posts()){
	$b_tpl = 'blog';
	$GLOBALS['header_class'] = 'navbar-index';
	//
	$Azbn->tpl('_/header', array());
	$args = array('post_type'=>'post', 'orderby'=>'post_date', 'category_name'=>'blog', 'order'=>'DESC', 'numberposts' => 300);
	$elements = get_posts($args);
	$GLOBALS['footer_type'] = 'slide';
	?>
	<div class="blog-page-content scroll-page" data-slide-id="0">
	<?
	$Azbn->tpl('blog/blogelement-search', array(
		'elements' => $elements,
		'filter' => $ids,
	));
	$Azbn->tpl('blog/blogmenu', array(
		'elements' => $elements,
		'filter' => $ids,
	));
}else{
	/*
	$Azbn->tpl('_/header', array());
	?>
	<div class="content-site padtop">
		<div class="container-fluid" >
			<h1>Печаль! Мы ничего не нашли по запросу «<?echo get_search_query();?>»</h1>
			<p><a href="/" >Перейти на главную страницу</a></p>
		</div>
	</div>
	<?
	*/
	
		$GLOBALS['header_class'] = 'navbar-index';
		$Azbn->tpl('_/header', array());
		?>
		<div class="index-page-content scroll-page" data-slide-id="0" >
			<div class="index-page-slide scroll-page__slide fix active" data-slide-id="0">
				<div class="error-page-content full-window bg-gradient-invers">
					<div class="_epc__inner">
						<div>
							<h1 class="_epc__heading-site">Мы ничего не нашли по запросу «<?=get_search_query();?>»</h1>
							<div class="_epc__img"><img src="<?=$Azbn->path('img');?>/default/404.png" alt=""></div>
							<div class="_epc__text-heading">Вы можете:</div>
							<div>Позвонить нам и задать вопрос <a href="tel:<?=getContacts('phone1callto');?>"><?=getContacts('phone1');?></a></div>
							<div>Начать поиск с <a href="/">главной страницы</a></div>
							<div></div>
						</div>
					</div>
				</div> 
			</div>
		<?
		$GLOBALS['footer_class'] = 'hide';
		//$Azbn->tpl('_/footer', array());
	
}
$Azbn->tpl('_/footer', array());