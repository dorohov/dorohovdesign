<?
	$args = array('post_type'=>'page', 'orderby'=>'id', 'order'=>'ASC', 'numberposts' => 0, 'include' => '22,24,30,32,44,5645');
	$services = get_posts($args);
?>

<div class="index-page-slide scroll-page__slide active" data-slide-id="0">
	<div class="_ipc__slider index-slide-1">
		<div class="_ipc__slider-left bg-mobile-gradient">
			<div class="row _ipc__slider__services-row">
				<?
					foreach ($services as $post ){
						?>
						<div class="cols _ipc__slider__services-cols">
							<a href="<?=l($post->ID);?>" class="_ipc__slider__services-item"><? echo $post->post_title;?></a>
						</div>
						<?
					}
					wp_reset_postdata();
				?>
			</div>
		</div>
		
		<div class="scroll-page__mouse" ></div>
	</div> 
</div>

<div class="index-page-slide scroll-page__slide " data-slide-id="1">
	<div class="_ipc__slider index-slide-1">
		
		<div class="_ipc__slider-right">
			<a href="<?=getContacts('soc_be');?>" target="_blank" rel="nofollow" class="_ipc__slider-soc soc-site icon-be"></a>
			<a href="<?=getContacts('soc_vk');?>" target="_blank" rel="nofollow" class="_ipc__slider-soc soc-site icon-vk"></a>
			<a href="<?=getContacts('soc_fb');?>" target="_blank" rel="nofollow" class="_ipc__slider-soc soc-site icon-fb"></a>
			<a href="<?=getContacts('soc_tw');?>" target="_blank" rel="nofollow" class="_ipc__slider-soc soc-site icon-tw"></a>
			<a href="<?=getContacts('soc_igm');?>" target="_blank" rel="nofollow" class="_ipc__slider-soc soc-site icon-igm"></a> 
		</div>
		<div class="_ipc__slider-block">
			<div id="carousel-index" class="_ipc__slider-carousel carousel slide carousel-fade" data-ride="carousel">
				<div class="carousel-inner">
					<div class="item" data-text-color="white" style="background-image: url(/wp-content/uploads/2016/12/slide-yarus.jpg);">
							<div class="carousel-caption">
								<a href="<?=l(7203);?>">Разработка фирменного стиля для студии ремонта «Ярус»</a>
							</div>
					</div>
					<div class="item" data-text-color="white" style="background-image: url(/wp-content/uploads/2016/12/slide-rk-calendar.jpg);">
							<div class="carousel-caption">
								<a href="<?=l(7193);?>">Дизайн квартальных календарей с часами для Компании «РегионКорма»</a>
							</div>
					</div>
					<div class="item" data-text-color="white" style="background-image: url(/wp-content/uploads/2016/12/3-zen-min-1.jpg);">
							<div class="carousel-caption">
								<a href="<?=l(7168);?>">Дизайн буклета и презентационного альбома для Строительной компании «Зенит»</a>
							</div>
					</div>
					<div class="item" data-text-color="black" style="background-image: url(/wp-content/uploads/2016/10/slide-05-1.jpg);">
							<div class="carousel-caption">
								<a href="<?=l(5370);?>">Новый бренд и упаковка Орловского Хлебзавода</a>
							</div>
					</div>
					<!-- <div class="item" data-text-color="black" style="background-image: url(<? echo $this->path('img');?>/index/slide-04.jpg);">
							<div class="carousel-caption">
								<a href="<?=l(5114);?>">Редизайн сайта ресторана "Честер Паб"</a>
							</div>
					</div> -->
					<div class="item" data-text-color="black" style="background-image: url(<? echo $this->path('img');?>/index/slide-03.jpg);">
							<div class="carousel-caption">
								<a href="<?=l(4911);?>">Разработка логотипа для центра научной красоты</a>
							</div>
					</div>
					<div class="item" data-text-color="black" style="background-image: url(<? echo $this->path('img');?>/index/slide-06.jpg);">
							<div class="carousel-caption">
								<a href="<?=l(4835);?>">Разработка фирменного стиля микрорайона "Первый"</a>
							</div>
					</div>
					<!-- <div class="item" data-text-color="black" style="background-image: url(<? echo $this->path('img');?>/index/slide-02.jpg);">
							<div class="carousel-caption">
								<a href="<?=l(4337);?>">Серия упаковки молочной продукции</a>
							</div>
					</div>
					<div class="item" data-text-color="white" style="background-image: url(<? echo $this->path('img');?>/index/slide-01.jpg);">
							<div class="carousel-caption">
								<a href="<?=l(4392);?>">Современный имиджевый сайт для фитнес-клуба</a>
							</div>
					</div> -->
	 			</div>
				<a class="left carousel-control" href="#carousel-index" data-slide="prev"></a>
				<a class="right carousel-control" href="#carousel-index" data-slide="next"></a>
			</div>
		</div>
	</div> 
</div>




<?
	$args = array('post_type' => 'post', 'include' => '7203, 5370, 5114, 4835, 4337, 4272, 3113', 'orderby' => 'post__in');
	$projects = get_posts($args);
?>
<div class="index-page-slide scroll-page__slide" data-slide-id="2">
	<div class="_ipc__portfolio index-slide-2 portfolio-block">	
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
<?
	$args = array('post_type'=>'post', 'orderby'=>'post_date', 'category_name'=>'blog', 'order'=>'DESC', 'numberposts' => 3);
	$elements = get_posts($args);
?>
<div class="index-page-slide scroll-page__slide" data-slide-id="3">
	<div class="_ipc__blog index-slide-3">
		<div class="container-fluid _ipc__container-fluid">
			<div class="heading-site-block row">
				<h2 class="cols heading-site _ipc__blog-heading">Блог</h2>
				<div class="cols">
					<a href="<?=l(15);?>">Смотреть все записи блога</a>
				</div>
			</div>
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
		</div>
	</div>
</div> 