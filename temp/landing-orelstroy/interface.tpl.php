<div class="<?=$param['block_prefix'];?>block">
	<div class="container <?=$param['block_prefix'];?>container <?=$param['page_prefix'];?>container">
		<div class="<?=$param['page_prefix'];?>left-line"></div>
		<div class="<?=$param['page_prefix'];?>left-line"></div>
		<?if (get_field('interface__heading', $id)){?>
		<h2 class="<?=$param['page_prefix'];?>heading <?=$param['block_prefix'];?>heading  is--heading"><?=get_field('interface__heading', $id);?></h2>
		<?}?>
		<div class="row <?=$param['block_prefix'];?>row">
			<?if (get_field('interface__note-left', $id)){?>			
			<div class="cols <?=$param['block_prefix'];?>cols  is--left">
				<div class="<?=$param['page_prefix'];?>text-block  ">
					<?=get_field('interface__note-left', $id);?>
				</div>		
			</div>	
			<?}?>	
			<?if (get_field('interface__note-right', $id)){?>	
			<div class="cols <?=$param['block_prefix'];?>cols  is--right">
				<div class="<?=$param['page_prefix'];?>text-block  ">
					<?=get_field('interface__note-right', $id);?>
				</div>
			</div>
			<?}?>
		</div>

		<div class="is--owl  iphone-slider">
			<div class="is--owl  iphone-slider__bg">
				<div class="is--owl  iphone-slider__container">
					<div class="is--owl  iphone-slider__item  is--active"
						data-style="background-image:url(<?=$this->path('img');?>/lp-orelstroy/slider-item1.jpg)"
					></div>
					<div class="is--owl  iphone-slider__item" 
						data-style="background-image:url(<?=$this->path('img');?>/lp-orelstroy/slider-item2.jpg)"
					></div>
					<div class="is--owl  iphone-slider__item"
						data-style="background-image:url(<?=$this->path('img');?>/lp-orelstroy/slider-item3.jpg)"
					></div>
				</div>
			</div>
			<div class="is--owl  iphone-slider__blurscreen">
				<div class="is--owl  iphone-slider__blurscreen-inner"></div>
			</div>
			<button type="button" class="is--owl  iphone-slider__btn  is--left ">
				<span class="is--owl  iphone-slider__btn-arrow"><svg class="icon-svg icon-lp-enerfit-arrow-left" role="img"><use xlink:href="<?=$this->path('img');?>/svg/sprite.svg#lp-enerfit-arrow-left"></use></svg></span>
			</button>
			<button type="button" class="is--owl  iphone-slider__btn  is--right ">
				<span class="is--owl  iphone-slider__btn-arrow"><svg class="icon-svg icon-lp-enerfit-arrow-right" role="img"><use xlink:href="<?=$this->path('img');?>/svg/sprite.svg#lp-enerfit-arrow-right"></use></svg></span>
			</button>
			<ul class="is--owl  iphone-slider__dots">
			</ul>
			<ul class="is--owl  iphone-slider__count">
				<li class="is--owl  iphone-slider__count-item  is--active is--owl  iphone-slider__count-item_number">01</li>
				<li class="is--owl  iphone-slider__count-item">/</li>
				<li class="is--owl  iphone-slider__count-item is--owl  iphone-slider__count-item_amount">03</li>
			</ul>
		</div>	
	</div> 
</div>