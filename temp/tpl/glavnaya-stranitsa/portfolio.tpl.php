<?
	/////portfolio
	$args = array('post_type' => 'post', 'include' => '8432, 8325, 8305, 5370, 5114, 4835, 4272', 'orderby' => 'post__in');
	$projects = get_posts($args);
	?>
	<div class="_ipc__portfolio">	
		<h2 class="_ipc__portfolio-heading heading-site">Последние проекты</h2>
		<div class="portfolio-block">
			<div class="_ipc__portfolio-row portfolio-block">
				<?foreach ($projects as $post ){ ?>
				<div class="_ipc__portfolio-cols portfolio-cols">
					<div class="portfolio-item _ipc__portfolio-item need-mouse-rotate">
						<a href="<?=l($post->ID);?>">
							<div class="portfolio-item__preview" style="background-image: url(<?=get_the_post_thumbnail_url($post->ID, 'full'); ?>);"></div>
							<div class="portfolio-item__note"> 
								<div class="portfolio-item__note-flex">
									<div>
										<h5 class="portfolio-item__heading"><?=$post->post_title;?></h5>
										<div><?=get_post_meta($post->ID, 'gallery_introtext_area', true);?></div>
									</div>
								</div>
							</div>
						</a>
					</div>
				</div>
				<?} wp_reset_postdata();?>
				<div class="_ipc__portfolio-cols portfolio-cols">
					<div class="portfolio-item _ipc__portfolio-item">
						<a href="<?=l(5);?>">
							<div class="portfolio-item__link"> 
								<div class="portfolio-item__link-flex">
									<div class="_link">Посмотреть все работы</div>
								</div>
							</div>
						</a>
					</div>
				</div>
			</div>		
		</div> 
	</div>