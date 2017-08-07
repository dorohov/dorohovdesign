<?
	$GLOBALS['footer_type'] = 'hidden';
	//
	$current = get_category(get_query_var('cat'),false);
	$args = array('post_type'=>'post', 'orderby'=>'post_date', 'category_name'=>$current->slug, 'order'=>'DESC', 'numberposts' => 300);
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