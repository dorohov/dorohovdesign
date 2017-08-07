<?
$elements = $param['elements'];
//var_dump($elements);

$element = array();

$element[] = array_shift($elements);
$element[] = array_shift($elements);

$queried_object = get_queried_object();

$__title = '';

if(property_exists($queried_object, 'term_id')){
	
	if($queried_object->term_id) {
		$__title = $queried_object->name;
	}
	
} else {
	
	if($this->post['id']) {
		$__title = t($this->post['id']);
	}
	
}

?>

<div class="blog-block__panel  is--gradient">	
	<div class="container-fluid blog-block__container">
		<div class="blog-block__row  is--space-between">
			<div class="blog-block__cols  is--left">
				<div class="blog-block__inner">
					<h1 class="page-heading  is--cyan"><?=$__title;?></h1>		
					<button type="button" class="blog-block__modal-btn" data-toggle="modal" data-target="#modal-blog"><span>Навигация по разделу</span></button>
					<div class="blog-block__list-row">
						
						<?
						foreach($element as $el_index => $el) {
							$id = $el->ID;
							$img = $this->Imgs->postImg($id, '720x345');
							if($img == '') {
								$img = '/wp-content/themes/azbnbasetheme/img/default/blog-lock.jpg';
							}
							$link = l($id);
						?>
						
						<div class="blog-block__list-cols">
							<div class="blog-item__item  is--inline <?if($el_index == 1){echo 'is--even';}?> ">
								<div class="blog-item__row  is--inline">
									<div class="blog-item__cols  is--preview  is--inline <?if($el_index == 1){echo 'is--even';}?> ">
										<a href="<?=$link;?>" class="blog-item__preview"><img src="<?=$img;?>" alt=""> 
											<div class="blog-item__view">
												<div class="blog-item__view-icon">
													<svg class="icon-svg icon-news-view" role="img">
														<use xlink:href="<?=$this->path('img');?>/svg/sprite.svg#news-view"></use>
													</svg>
												</div> 
											</div> 
										</a>
									</div> 
									<div class="blog-item__cols  is--note  is--inline <?if($el_index == 1){echo 'is--even';}?> "> 
										<div class="blog-item__date  is--inline"><?=date('d.m.Y', strtotime($el->post_date));?></div>
										<h4 class="blog-item__heading  is--inline">  
											<a href="<?=$link;?>"><?=t($el->ID);?></a>
										</h4>
										<div class="blog-item__note  is--inline <?if($el_index == 1){echo 'is--even';}?> "><?=get_field('blog_intro', $id);?></div>
										<div><a href="<?=$link;?>"  class="blog-item__link">Читать далее</a></div>
									</div>
								</div>
							</div>
						</div>
						
						<?
						}
						?>
						
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