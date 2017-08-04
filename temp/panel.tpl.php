<?
	$GLOBALS['footer_type'] = 'slide';
	//
	$args = array('post_type'=>'post', 'orderby'=>'post_date', 'category_name'=>'blog', 'order'=>'DESC', 'numberposts' => 300);
	$elements = get_posts($args);
?>
<?if(is_user_logged_in()) {?>
<div class="blog-block__block">	
	<div class="blog-block__panel  is--gradient">	
		<div class="container-fluid blog-block__container">
			<div class="blog-block__row  is--space-between">
				<div class="blog-block__cols  is--left">
					<div class="blog-block__inner">
						<h1 class="page-heading  is--cyan"><? the_title(); ?></h1>		
						<button type="button" class="blog-block__modal-btn" data-toggle="modal" data-target="#modal-blog"><span>Навигация по разделу</span></button>
						<div class="blog-block__list-row">
							<div class="blog-block__list-cols">
								<div class="blog-item__item  is--inline">
									<div class="blog-item__row  is--inline">
										<div class="blog-item__cols  is--preview  is--inline">
											<a href="/blog-item.html" class="blog-item__preview"><img src="https://placeholdit.imgix.net/~text?txtsize=30&txt=720x345&w=720&h=345" alt=""> 
												<div class="blog-item__view">
													<div class="blog-item__view-icon">
														<svg class="icon-svg icon-news-view" role="img">
															<use xlink:href="<?=$this->path('img');?>/svg/sprite.svg#news-view"></use>
														</svg>
													</div> 
												</div> 
											</a>
										</div> 
										<div class="blog-item__cols  is--note  is--inline"> 
											<div class="blog-item__date  is--inline">26.12.2016</div>
											<h4 class="blog-item__heading  is--inline">  
												<a href="/blog-item.html">Распространенные ошибки при разработке дизайна сайтов</a>
											</h4>
											<div class="blog-item__note  is--inline"><p>Ни для кого не секрет, что прибыль любого сайта<br>  зависит от конверсии. Ее высокие показатели напрямую связаны с юзабилити и дизайном сервиса.</p><p>При удачной взаимосвязи этих двух элементов ресурс становится удобным и комфортным, приятным внешне и эффективным в работе.</p></div>
											<div><a href="/blog-item.html"  class="blog-item__link">Читать далее</a></div>
										</div>
									</div>
								</div>
							</div>  
							<div class="blog-block__list-cols">
								<div class="blog-item__item  is--inline  is--even">
									<div class="blog-item__row  is--inline  is--even">
										<div class="blog-item__cols  is--preview  is--inline  is--even">
											<a href="/blog-item.html" class="blog-item__preview"><img src="https://placeholdit.imgix.net/~text?txtsize=30&txt=720x345&w=720&h=345" alt=""> 
												<div class="blog-item__view">
													<div class="blog-item__view-icon">
														<svg class="icon-svg icon-news-view" role="img">
															<use xlink:href="<?=$this->path('img');?>/svg/sprite.svg#news-view"></use>
														</svg>
													</div> 
												</div> 
											</a>
										</div> 
										<div class="blog-item__cols  is--note  is--inline  is--even"> 
											<div class="blog-item__date  is--inline  is--even">26.12.2016</div>
											<h4 class="blog-item__heading  is--inline  is--even">  
												<a href="/blog-item.html">Распространенные ошибки при разработке дизайна сайтов</a>
											</h4>
											<div class="blog-item__note  is--inline  is--even"><p>Ни для кого не секрет, что прибыль любого сайта<br>  зависит от конверсии. Ее высокие показатели напрямую связаны с юзабилити и дизайном сервиса.</p><p>При удачной взаимосвязи этих двух элементов ресурс становится удобным и комфортным, приятным внешне и эффективным в работе.</p></div>
											<div><a href="/blog-item.html"  class="blog-item__link">Читать далее</a></div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="blog-block__cols  is--right">
					<?
						$this->tpl('blog/navbar', array(
							'elements' => $elements,
						));
					?>
				</div>
			</div>
		</div>
	</div>
	<?
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