<?
	$GLOBALS['footer_type'] = 'slide';
?>
<div class="inleco-page-content padtop">
	<div class="inleco__block-content"> 
		<div class="lp-inleco__block-content">		
			<div class="inleco_hb__block lp-inleco__bg is--cover" style="background-image: url('<?=$this->path('img');?>/lp-inleco/bg-header.jpg')">
				<div class="container lp-inleco__container inleco_hb__container">
					<div class="inleco_hb__inner">

						<?if (get_field('header_heading', $id)){?>
						<div class="inleco_hb__header-name ">
							<?=get_field('header_heading', $id);?>
						</div>
						<?if (get_field('work_link', $id)){?>
						<div class="inleco_hb__link">
							<a href="http://<?=get_field('work_link', $id);?>" target="_blank"><img src="<?=$this->path('img');?>/lp-inleco/logotip.png" alt=""></a>
						</div>	
						<?}?>
						<?}?>
					</div>
					<div class="inleco_hb__scrollto">
						<a class="scrollto inleco_hb__scrollto-link" href="#step1" data-scrollto-diff="0">
							<svg class="icon-svg icon-mouse" role="img"><use xlink:href="<?=$this->path('img');?>/svg/sprite.svg#mouse"></use></svg>
						</a>
					</div>
				</div> 
			</div>    	
			<div class="inleco_s1b__block" id="step1">
				<div class="inleco_s1b__inner">
					<div class="inleco_s1b__imack lp-inleco__bg  is--contain"></div>
					<div class="inleco_s1b__mackbook lp-inleco__bg  is--contain"></div>
					<div class="inleco_s1b__iphone lp-inleco__bg  is--contain"></div>
				</div>
			</div>
			<div class="inleco_s2b__block">
				<div class="container lp-inleco__container">
					<?if (get_field('step2_heading', $id)){?>
					<h2 class="lp-inleco__heading inleco_s2b__heading  is--heading  is--center"><?=get_field('step2_heading', $id);?></h2>
					<?}?>
					<div class="row inleco_s2b__row">	
						<?if (get_field('step2_text_left', $id)){?>	
						<div class="cols inleco_s2b__cols  ">
							<div class="lp-inleco__text-block  ">
								<?=get_field('step2_text_left', $id);?>
							</div>		
						</div>
						<?}?>	
						<?if (get_field('step2_text_right', $id)){?>	
						<div class="cols inleco_s2b__cols  ">
							<div class="lp-inleco__text-block  ">
								<?=get_field('step2_text_right', $id);?>
							</div>		
						</div>
						<?}?>	
					</div>
				</div> 
			</div>
			<div class="inleco_s3b__block">
				<div class="inleco_s3b__inner">
					<div class="inleco_s3b__item  is--first">
						<img src="<?=$this->path('img');?>/lp-inleco/step3-item1.png">			
					</div>
					<div class="inleco_s3b__item  is--second">
						<img src="<?=$this->path('img');?>/lp-inleco/step3-item2.png">			
					</div>
					<div class="inleco_s3b__item  is--third">
						<img src="<?=$this->path('img');?>/lp-inleco/step3-item3.png">			
					</div>
				</div>
			</div>
			<div class="inleco_s4b__block">
				<div class="container lp-inleco__container">
					<?if (get_field('step4_heading', $id)){?>
					<h2 class="lp-inleco__heading inleco_s4b__heading  is--heading  is--center"><?=get_field('step4_heading', $id);?></h2>
					<?}?>
					<div class="row inleco_s4b__row">	
						<?if (get_field('step4_text_left', $id)){?>	
						<div class="cols inleco_s4b__cols  is--left">
							<div class="lp-inleco__text-block">
								<?=get_field('step4_text_left', $id);?>
							</div>		
						</div>
						<?}?>	
						<?if (get_field('step4_text_right', $id)){?>	
						<div class="cols inleco_s4b__cols  is--right">
							<div class="lp-inleco__text-block  ">
								<?=get_field('step4_text_right', $id);?>
							</div>		
						</div>
						<?}?>	
					</div>
					<div class="iphone-slider">
						<div class="iphone-slider__bg">
							<div class="iphone-slider__container">
								<div class="iphone-slider__item  is--active" 
									data-style="background-image:url(<?=$this->path('img');?>/lp-inleco/step4-item3.jpg)"
								></div>
								<div class="iphone-slider__item" 
									data-style="background-image:url(<?=$this->path('img');?>/lp-inleco/step4-item1.jpg)"
								></div>
								<div class="iphone-slider__item" 
									data-style="background-image:url(<?=$this->path('img');?>/lp-inleco/step4-item2.jpg)"
								></div>
							</div>
						</div>
						<div class="iphone-slider__blurscreen">
							<div class="iphone-slider__blurscreen-inner"></div>
						</div>
						<button type="button" class="iphone-slider__btn  is--left ">
							<span class="iphone-slider__btn-arrow"><svg class="icon-svg icon-lp-enerfit-arrow-left" role="img"><use xlink:href="<?=$this->path('img');?>/svg/sprite.svg#lp-enerfit-arrow-left"></use></svg></span>
						</button>
						<button type="button" class="iphone-slider__btn  is--right ">
							<span class="iphone-slider__btn-arrow"><svg class="icon-svg icon-lp-enerfit-arrow-right" role="img"><use xlink:href="<?=$this->path('img');?>/svg/sprite.svg#lp-enerfit-arrow-right"></use></svg></span>
						</button>
						<ul class="iphone-slider__dots">
						</ul>
						<ul class="iphone-slider__count">
							<li class="iphone-slider__count-item iphone-slider__count-item_number is--active">01</li>
							<li class="iphone-slider__count-item">/</li>
							<li class="iphone-slider__count-item iphone-slider__count-item_amount">03</li>
						</ul>
					</div>	
				</div> 
			</div>
			<div class="inleco_s5b__block lp-inleco__bg  is--cover">
				<div class=" inleco_s5b__inner">
					<?if (get_field('step5_heading', $id)){?>
					<h2 class="lp-inleco__heading inleco_s5b__heading  is--heading"><?=get_field('step5_heading', $id);?></h2>
					<?}?>
					<?if (get_field('step5_text', $id)){?>
					<div class="lp-inleco__text-block inleco_s5b__text-block 
					">
						<?=get_field('step5_text', $id);?>
					</div>
					<?}?>		
				</div>
				<div class="inleco_s5b__bg"><img src="<?=$this->path('img');?>/lp-inleco/bg-step5.jpg" alt=""></div>	
				<div class="inleco_s5b__modal lp-inleco__bg  is--contain"></div>
			</div>
			<div class="inleco_s6b__block">
				<div class="container lp-inleco__container">
					<?if (get_field('step6_heading', $id)){?>
					<h2 class="lp-inleco__heading inleco_s5b__heading  is--heading  is--center"><?=get_field('step6_heading', $id);?></h2>
					<?}?>
					<div class=" inleco_s6b__inner">			
						<?if (get_field('step6_text', $id)){?>
						<div class="lp-inleco__text-block inleco_s6b__text-block 
						">
							<?=get_field('step6_text', $id);?>
						</div>
						<?}?>	
						<div class="inleco_s6b__laptop">
							<img src="<?=$this->path('img');?>/lp-inleco/step6-mackbook.png" alt="">
						</div>
					</div>
					<?if (get_field('work_link', $id)){?>
					<div class="inleco_s6b__footer-link">
						Адрес сайта: <a href="http://<?=get_field('work_link', $id);?>" target="_blank"><?=get_field('work_link', $id);?></a>
					</div>
					<?}?>
					<div class="inleco_s6b__mobile lp-inleco__bg  is--contain"></div>
				</div>
			</div>
		</div> 
	</div>   
</div>