<div class="<?=$param['block_prefix'];?>block">
	<div class="container <?=$param['block_prefix'];?>container <?=$param['page_prefix'];?>container">
		<div class="<?=$param['page_prefix'];?>left-line"></div>
		<div class="row <?=$param['block_prefix'];?>row">
			<div class="<?=$param['block_prefix'];?>cols cols  is--note">
				<?if (get_field('options__heading', $id)){?>
				<h2 class="<?=$param['page_prefix'];?>heading <?=$param['block_prefix'];?>heading  is--heading"><?=get_field('options__heading', $id);?></h2>
				<?}?>	
				<?if (get_field('options__heading-sm', $id)){?>	
				<div class="<?=$param['page_prefix'];?>text-block <?=$param['block_prefix'];?>text-block		">
					<?=get_field('options__heading-sm', $id);?>
				</div>
				<?}?>
			</div>
			<div class="<?=$param['block_prefix'];?>cols cols  is--img">
				<img src="<?=$this->path('img');?>/lp-orelstroy/bg-house.jpg" alt="">
			</div>
		</div>
		
					
	</div>
	
	<div class="iphone-slider  is--ipad">
		<div class="iphone-slider__bg  is--ipad">
			<div class="iphone-slider__container  is--ipad">
				<div class="iphone-slider__item  is--active  is--ipad"
					data-style="background-image:url(<?=$this->path('img');?>/lp-orelstroy/slider2-item2.jpg)"
				></div>
				<div class="iphone-slider__item  is--ipad" 
					data-style="background-image:url(<?=$this->path('img');?>/lp-orelstroy/slider2-item1.jpg)"
				></div>
			</div>
		</div>
		<div class="iphone-slider__blurscreen  is--ipad">
			<div class="iphone-slider__blurscreen-inner  is--ipad"></div>
		</div>
			<button type="button" class="is--ipad  iphone-slider__btn  is--left ">
				<span class="is--ipad  iphone-slider__btn-arrow"><svg class="icon-svg icon-lp-enerfit-arrow-left" role="img"><use xlink:href="<?=$this->path('img');?>/svg/sprite.svg#lp-enerfit-arrow-left"></use></svg></span>
			</button>
			<button type="button" class="is--ipad  iphone-slider__btn  is--right ">
				<span class="is--ipad  iphone-slider__btn-arrow"><svg class="icon-svg icon-lp-enerfit-arrow-right" role="img"><use xlink:href="<?=$this->path('img');?>/svg/sprite.svg#lp-enerfit-arrow-right"></use></svg></span>
			</button>
		<ul class="iphone-slider__dots  is--ipad">
		</ul>
		<ul class="iphone-slider__count  is--ipad">
			<li class="iphone-slider__count-item  is--active iphone-slider__count-item_number  is--ipad">01</li>
			<li class="iphone-slider__count-item  is--ipad">/</li>
			<li class="iphone-slider__count-item iphone-slider__count-item_amount  is--ipad">03</li>
		</ul>
	</div>
	<?if (get_field('options__note', $id)){?>	
	<div class="<?=$param['block_prefix'];?>note">
		<div class="<?=$param['page_prefix'];?>text-block <?=$param['block_prefix'];?>note-block">
			<?=get_field('options__note', $id);?>
		</div>
	</div>
	<?}?>
</div>