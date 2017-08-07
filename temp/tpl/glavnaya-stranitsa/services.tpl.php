<?
/////// services
$args = array('post_type'=>'page', 'orderby'=>'id', 'order'=>'ASC', 'numberposts' => 0, 'include' => '22,24,30,32,44,5645');
$services = get_posts($args);
?>
<div class="_ipc__services">
	<div class="row _ipc__services-row">
		<?
			foreach ($services as $post ){
		?>
			<div class="cols _ipc__services-cols">
				<a href="<?=l($post->ID);?>" class="_ipc__services-item" data-heading="<? echo $post->post_title;?>">
					<div class="_ipc__services-item-inner">
						<h3 class="_ipc__services-item-heading"><? echo $post->post_title;?></h3>
						<div class="_ipc__services-item-note"><?=get_field('mainpage_preview', $post->ID);?></div>
					</div>
				</a>
			</div>
		<?
			}
			wp_reset_postdata();
		?>
	</div>
</div>	