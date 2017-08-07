<?
	$GLOBALS['footer_type'] = 'hidden';
	//
	$args = array('post_type'=>'post', 'orderby'=>'post_date', 'category_name'=>'blog', 'year'=>get_post()->post_title, 'order'=>'DESC', 'numberposts' => 300);
	$query = new WP_Query;
	$elements = $query->query($args);
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