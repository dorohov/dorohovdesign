<div class="_ipc__blog">
	<div class="heading-site-block row">
		<h2 class="cols heading-site _ipc__blog-heading">Блог</h2>
		<div class="cols">
			<a href="<?=l(15);?>">Смотреть все записи блога</a>
		</div>
	</div>

	<?if(is_user_logged_in()) {?>
		<?
			$args = array('post_type'=>'post', 'orderby'=>'post_date', 'category_name'=>'blog', 'order'=>'DESC', 'numberposts' => 4);
			$elements = get_posts($args);
		?>

		<div class="blog-block__row">
			<?foreach ($elements as $post ){
				$id = $post->ID;
				$img = $this->Imgs->postImg($id, '420x365');
				if($img == '') {
					$img = '/wp-content/themes/azbnbasetheme/img/default/blog-lock.jpg';
				}	
			?>
			<div class="blog-block__cols  is--cols-3">
				<div class="blog-item__item  is--block">
					<div class="blog-item__row  is--block">
						<div class="blog-item__cols  is--preview  is--block">
							<a href="<?=l($post->ID);?>" class="blog-item__preview"><img src="<?=$img; ?>" alt="<?=$post->post_title;?>"> 
								<div class="blog-item__view">
									<div class="blog-item__view-icon">
										<svg class="icon-svg icon-news-view" role="img">
											<use xlink:href="<?=$this->path('img');?>/svg/sprite.svg#news-view"></use>
										</svg>
									</div> 
								</div> 
							</a>
						</div> 
						<div class="blog-item__cols  is--note  is--block"> 
							<div class="blog-item__date  is--block">
							<?=get_the_date('d.m.Y', $post->ID); ?></div>
							<h4 class="blog-item__heading  is--block">  
								<a href="<?=l($post->ID);?>"><?=$post->post_title;?></a>
							</h4>
							<div class="blog-item__note  is--block">
							<?=get_field('blog_intro', $post->ID);?>
							</div>
							<div><a href="<?=l($post->ID);?>"  class="blog-item__link">Читать далее</a></div>
						</div>
					</div>
				</div>
			</div>
			<?} wp_reset_postdata();?>
		</div>
	<?}else{?>
		<?
		$args = array('post_type'=>'post', 'orderby'=>'post_date', 'category_name'=>'blog', 'order'=>'DESC', 'numberposts' => 3);
		$elements = get_posts($args);
		?>
	<div class="row _ipc__blog-row">
		<?foreach ($elements as $post ){?>
		<div class="cols _ipc__blog-cols">
			<article class="news-item">
				<a href="<?=l($post->ID);?>" class="news-item__preview" style="background-image: url(<?=get_field('blog_img_small', $post->ID); ?>);">
					<div class="news-item__time icon-calendar"><? echo get_the_date('d F Y', $post->ID); ?></div>
				</a>
				<div class="news-item__inner"> 
					<h4 class="news-item__heading"><a href="<?=l($post->ID);?>"><?=$post->post_title;?></a></h4>
					<div class="news-item__note"><?=get_field('blog_intro', $post->ID);?></div>
					<div class="news-item__link"><a href="<?=l($post->ID);?>" class="btn-site btn-link">Читать далее</a></div>
				</div>
			</article>
		</div>
		<?} wp_reset_postdata();?>
	</div>
	<?}?>
</div>