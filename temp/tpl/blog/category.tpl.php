<?
	$GLOBALS['footer_type'] = 'hidden';
	//
	$current = get_category(get_query_var('cat'),false);
	$args = array('post_type'=>'post', 'orderby'=>'post_date', 'category_name'=>$current->slug, 'order'=>'DESC', 'numberposts' => 300);
	$elements = get_posts($args);
?>
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