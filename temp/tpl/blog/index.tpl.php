<?
	$GLOBALS['footer_type'] = 'slide';
	//
	$args = array('post_type'=>'post', 'orderby'=>'post_date', 'category_name'=>'blog', 'order'=>'DESC', 'numberposts' => 300);
	$elements = get_posts($args);
?>
<?if(is_user_logged_in()) {?>
<?/*if(1) {*/?>
<div class="blog-block__block">
	<?
		$this->tpl('blog/panel', array(
			'elements' => $elements,
		));
		$this->tpl('blog/element', array(
			'elements' => $elements,
		));
	?>	
</div>	
<?}else{?>


<div class="blog-page-content scroll-page" data-slide-id="0">

	<div class="scroll-page__dots left black50">
		<div class="scroll-page__dot active"></div>
		<div class="scroll-page__dot"></div>
		<div class="scroll-page__dot"></div>
		<div class="scroll-page__dot"></div>
		<div class="scroll-page__dot"></div>
		<div class="scroll-page__dot"></div>
		<div class="scroll-page__dot"></div>
		<div class="scroll-page__dot"></div>
		<div class="scroll-page__dot"></div>
		<div class="scroll-page__dot"></div>
	</div>
<?
	$this->tpl('blog/blogelement', array(
		'elements' => $elements,
	));
	$this->tpl('blog/blogmenu', array(
		'elements' => $elements,
	));
	wp_reset_postdata();
?>
<?}?>