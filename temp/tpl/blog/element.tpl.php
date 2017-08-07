<div class="blog-block__panel  is--white">	
	<div class="container-fluid"> 
		<div class="blog-block__row">
		<?
			$i=0;
			
			$elements = $param['elements'];
			array_shift($elements);
			array_shift($elements);
			
			foreach ($elements as $element ){
				$id = $element->ID;
				$img = $this->Imgs->postImg($id, '420x365');
				if($img == '') {
					$img = '/wp-content/themes/azbnbasetheme/img/default/blog-lock.jpg';
				}	
			?>
			<div class="blog-block__cols  is--cols-3">
				<div class="blog-item__item  is--block">
					<div class="blog-item__row  is--block">
						<div class="blog-item__cols  is--preview  is--block">
							<a href="<?=l($element->ID);?>" class="blog-item__preview"><img src="<?=$img; ?>" alt="<?=$element->post_title;?>"> 
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
							<div class="blog-item__date  is--block"><?=date('d.m.Y', strtotime($element->post_date));?></div>
							<h4 class="blog-item__heading  is--block">  
								<a href="<?=l($element->ID);?>"><?=$element->post_title;?></a>
							</h4>
							<div class="blog-item__note  is--block">
							<?=$element->blog_intro;?>
							</div>
							<div><a href="<?=l($element->ID);?>"  class="blog-item__link">Читать далее</a></div>
						</div>
					</div>
				</div>
			</div>
				
				<?
				$i++;
				//if($i > 9){break;}
			}
			?>
		</div>
	</div>
</div>