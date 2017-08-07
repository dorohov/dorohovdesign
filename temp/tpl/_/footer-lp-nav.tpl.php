<?
	$next_post = get_previous_post(true);
	$prev_post = get_next_post(true);
	if(empty($prev_post) || empty($next_post)){
		$args = array('post_type'=>'post', 'orderby'=>'rand', 'category_name'=>'portfolio', 'numberposts' => 1, 'exclude' => $post->ID);
		$rand_post = get_posts($args);
	}
?>
<div class="_bread__btn-project">
	<div class="_bipn__row">
		<? if(!empty($prev_post) ){ ?>
		<div class="_bipn__cols _bipn__cols-left">
			<a href="<?=l($prev_post->ID );?>" class="blog-item _bipn__blog-item bg-gradient-black" style="background-image: url(<?=get_the_post_thumbnail_url($prev_post->ID, 'full'); ?>)">
				<div class="_bipn__blog-item__inner">
					<h4 class="blog-item__heading _bipn__blog-item__heading">Предыдущий проект</h4>
				</div>
			</a>
		</div>
		<?} else {
			foreach($rand_post as $prev_post){
			?>
			<div class="_bipn__cols _bipn__cols-left">
				<a href="<?=l($prev_post->ID );?>" class="blog-item _bipn__blog-item bg-gradient-black" style="background-image: url(<?=get_the_post_thumbnail_url($prev_post->ID, 'full'); ?>)">
					<div class="_bipn__blog-item__inner">
						<h4 class="blog-item__heading _bipn__blog-item__heading">Предыдущий проект</h4>
					</div>
				</a>
			</div>
			<? }
		}
		if(!empty($next_post) ){ ?>
		<div class="_bipn__cols _bipn__cols-right">
			<a href="<?=l($next_post->ID );?>" class="blog-item _bipn__blog-item bg-gradient-black" style="background-image: url(<?=get_the_post_thumbnail_url($next_post->ID, 'full'); ?>)">
				<div class="_bipn__blog-item__inner">
					<h4 class="blog-item__heading _bipn__blog-item__heading">Следующий проект</h4>
				</div>
			</a>
		</div>
		<?} else {
			foreach($rand_post as $next_post){
			?>
			<div class="_bipn__cols _bipn__cols-right">
				<a href="<?=l($next_post->ID );?>" class="blog-item _bipn__blog-item bg-gradient-black" style="background-image: url(<?=get_the_post_thumbnail_url($next_post->ID, 'full'); ?>)">
					<div class="_bipn__blog-item__inner">
						<h4 class="blog-item__heading _bipn__blog-item__heading">Следующий проект</h4>
					</div>
				</a>
			</div>
			<? }
		}?>
	</div>
</div>


