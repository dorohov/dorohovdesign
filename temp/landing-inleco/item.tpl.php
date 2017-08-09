<?
	$GLOBALS['footer_type'] = 'slide';
?>
<div class="enerfit-page-content padtop">
	<div class="enerfit__block-content"> 
		<div class="lp-enerfit__block-content">		
			<div class="enerfit_hb__block lp-enerfit__bg is--cover" style="background-image: url('<?=$this->path('img');?>/lp-enerfit/bg-header.jpg')">
				<div class="container lp-enerfit__container enerfit_hb__container">
					<div class="enerfit_hb__inner">

						<?if (get_field('header_heading', $id)){?>
						<div class="enerfit_hb__header-name ">
							<?=get_field('header_heading', $id);?>
						</div>
						<?if (get_field('work_link', $id)){?>
						<div class="enerfit_hb__link">
							<a href="http://<?=get_field('work_link', $id);?>" target="_blank"><img src="<?=$this->path('img');?>/lp-enerfit/logotip.png" alt=""></a>
						</div>	
						<?}?>
						<?}?>
					</div>
					<div class="enerfit_hb__scrollto">
						<a class="scrollto enerfit_hb__scrollto-link" href="#step1" data-scrollto-diff="0">
							<svg class="icon-svg icon-mouse" role="img"><use xlink:href="<?=$this->path('img');?>/svg/sprite.svg#mouse"></use></svg>
						</a>
					</div>
					<div class="enerfit_hb__line"></div>
				</div> 
			</div>    	
			<div class="enerfit_s1b__block lp-enerfit__bg  is--cover" id="step1">
				<div class="enerfit_s1b__line"></div>
				<div class="container lp-enerfit__container enerfit_s1b__container">
					<?if (get_field('step1_heading', $id)){?>
					<h2 class="lp-enerfit__heading enerfit_s1b__heading  is--vertical  is--black10"><?=get_field('step1_heading', $id);?></h2>
					<?}?>
					<?if (get_field('video', $id)){?>
					<div class="enerfit_s1b__video">
						<video class="enerfit_s1b__video-player lp-video" id="zenit-video" preload="none" controls="" poster="<?=$this->path('img');?>/lp-enerfit/poster.jpg">
							<source src="/wp-content/themes/azbnbasetheme/video/<?=get_field('video', $id);?>" type="video/mp4">  
						</video>
					</div> 
					<?}?>
				</div> 
				<div class="enerfit_s1b__flower1 lp-enerfit__bg  is--contain"></div>
				<div class="enerfit_s1b__flower2 lp-enerfit__bg  is--contain"></div>
				<div class="enerfit_s1b__notebook lp-enerfit__bg  is--contain"></div>
			</div>
			<div class="enerfit_s2b__block">
				<div class="container lp-enerfit__container">
					<?if (get_field('step2_heading', $id)){?>
					<h2 class="lp-enerfit__heading enerfit_s2b__heading  is--heading  is--center"><?=get_field('step2_heading', $id);?></h2>
					<?}?>
					<div class="row enerfit_s2b__row">	
						<?if (get_field('step2_text_left', $id)){?>	
						<div class="cols enerfit_s2b__cols  ">
							<div class="lp-enerfit__text-block  ">
								<?=get_field('step2_text_left', $id);?>
							</div>		
						</div>
						<?}?>	
						<?if (get_field('step2_text_right', $id)){?>	
						<div class="cols enerfit_s2b__cols  ">
							<div class="lp-enerfit__text-block  ">
								<?=get_field('step2_text_right', $id);?>
							</div>		
						</div>
						<?}?>	
					</div>
				</div> 
			</div>
			<div class="enerfit_s3b__block">
				<div class="enerfit_s3b__inner">
					<div class="enerfit_s3b__item  is--first">
						<img src="<?=$this->path('img');?>/lp-enerfit/preview-item1.png">			
					</div>
					<div class="enerfit_s3b__item  is--second">
						<img src="<?=$this->path('img');?>/lp-enerfit/preview-item2.png">			
					</div>
					<div class="enerfit_s3b__item  is--third">
						<img src="<?=$this->path('img');?>/lp-enerfit/preview-item3.png">			
					</div>
				</div>
			</div>
			<svg class="enerfit_s3b__after" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1920 350" enable-background="new 0 0 1920 350">
				<polygon class="enerfit_s3b__after-bottom" points="1920,0 0,350 1920,350 "/>
				<polygon class="enerfit_s3b__after-top" points="1920,0 0,350 0,0 "/>
			</svg>
			<div class="enerfit_s4b__block">
				<div class="container lp-enerfit__container">
					<?if (get_field('step4_heading', $id)){?>
					<h2 class="lp-enerfit__heading enerfit_s4b__heading  is--heading  is--center"><?=get_field('step4_heading', $id);?></h2>
					<?}?>
					<?if (get_field('step4_text', $id)){?>
					<div class="lp-enerfit__text-block enerfit_s4b__text-block">
						<?=get_field('step4_text', $id);?>
					</div>
					<?}?>
					<div class="iphone-slider">
						<div class="iphone-slider__bg">
							<div class="iphone-slider__container">
								<div class="iphone-slider__item  is--active" 
									style="background-image:url(<?=$this->path('img');?>/lp-enerfit/slider-item1-sm.jpg)"
									data-style="background-image:url(<?=$this->path('img');?>/lp-enerfit/slider-item3-lg.jpg)"
								></div>
								<div class="iphone-slider__item" 
									style="background-image:url(<?=$this->path('img');?>/lp-enerfit/slider-item2-sm.jpg)"
									data-style="background-image:url(<?=$this->path('img');?>/lp-enerfit/slider-item1-lg.jpg)"
								></div>
								<div class="iphone-slider__item" 
									style="background-image:url(<?=$this->path('img');?>/lp-enerfit/slider-item3-sm.jpg)"
									data-style="background-image:url(<?=$this->path('img');?>/lp-enerfit/slider-item2-lg.jpg)"
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
			<svg class="enerfit_s4b__after" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1920 350" enable-background="new 0 0 1920 350">
				<polygon class="enerfit_s4b__after-bottom" points="1920,0 0,350 1920,350 "/>
				<polygon class="enerfit_s4b__after-top" points="1920,0 0,350 0,0 "/>
			</svg>
			<div class="enerfit_s5b__block">
				<div class="container lp-enerfit__container">
					<?if (get_field('step5_heading', $id)){?>
					<h2 class="lp-enerfit__heading enerfit_s5b__heading  is--heading  is--center"><?=get_field('step5_heading', $id);?></h2>
					<?}?>
					<div class=" enerfit_s5b__inner">	

						<?if (get_field('step5_text', $id)){?>
						<div class="lp-enerfit__text-block enerfit_s5b__text-block 
						">
							<?=get_field('step5_text', $id);?>
						</div>
						<?}?>	
						<h2 class="lp-enerfit__heading enerfit_s5b__heading  is--vertical-invert  is--black10  is--laptop">Laptop version</h2> 
						<div class="enerfit_s5b__laptop">
							<img src="<?=$this->path('img');?>/lp-enerfit/bg-laptop.png" alt="">
						</div>
					</div>
				</div> 
			</div>
			<svg class="enerfit_s5b__after" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1920 320" enable-background="new 0 0 1920 320">
				<polygon class="enerfit_s5b__after-bottom" points="1920,0 0,320 1920,320 "/>
				<polygon class="enerfit_s5b__after-top" points="1920,0 0,320 0,0 "/>
			</svg>
			<div class="enerfit_s5b__footer">
				<div class="container lp-enerfit__container">
					<?if (get_field('work_link', $id)){?>
					<div class="enerfit_s5b__footer-link">
						Адрес сайта: <a href="http://<?=get_field('work_link', $id);?>" target="_blank"><?=get_field('work_link', $id);?></a>
					</div>
					<?}?>
					<h2 class="lp-enerfit__heading enerfit_s5b__heading  is--vertical  is--black10  is--mobile">Mobile version</h2> 
					<div class="enerfit_s5b__mobile lp-enerfit__bg  is--contain"></div>
				</div>
			</div>
		</div> 
	</div>   
</div>