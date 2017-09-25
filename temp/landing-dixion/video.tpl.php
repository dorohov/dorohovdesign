<div class="<?=$param['block_prefix'];?>block <?=$param['page_prefix'];?>bg  is--contain  is--center-top" style="background-image: url('<?=$this->path('img');?>/lp-orelstroy/bg-header.jpg')">
	<div class="container <?=$param['block_prefix'];?>container <?=$param['page_prefix'];?>container">
		<div class="<?=$param['page_prefix'];?>left-line"></div>
		<div class="<?=$param['block_prefix'];?>row row">
			<?if (get_field('header__heading', $id)){?>
			<div class="<?=$param['block_prefix'];?>cols cols  is--heading">
				<div class="<?=$param['block_prefix'];?>heading ">
					<?=get_field('header__heading', $id);?>
				</div>
			</div>
			<?if (get_field('header__heading-sm', $id)){?>
			<div class="<?=$param['block_prefix'];?>cols cols  is--heading-sm">
				<div class="<?=$param['block_prefix'];?>heading-small ">
					<?=get_field('header__heading-sm', $id);?>
				</div>
			</div>
			<?}?>
			<?}?>
			<div class="<?=$param['block_prefix'];?>cols cols  is--img"></div>
			<?if (get_field('header__note', $id)){?>
			<div class="<?=$param['block_prefix'];?>cols cols  is--text">
				<div class="<?=$param['block_prefix'];?>text ">
					<?=get_field('header__note', $id);?>
				</div>
			</div>
			<?}?>
		</div>	
	
	</div> 	
	<div class="<?=$param['block_prefix'];?>imac <?=$param['page_prefix'];?>bg  is--contain"></div>
	<div class="<?=$param['block_prefix'];?>flover <?=$param['page_prefix'];?>bg  is--contain"></div>
	<div class="<?=$param['block_prefix'];?>book <?=$param['page_prefix'];?>bg  is--contain"></div>

	<?if (get_field('video__link', $id)){?>
	<div class="<?=$param['block_prefix'];?>video">
		<video class="<?=$param['block_prefix'];?>video-player lp-video" data-appear-top-offset="-300" preload="none" controls="" poster="<?=$this->path('img');?>/lp-orelstroy/poster.jpg">
			<source src="http://dorohovdesign.ru/wp-content/themes/azbnbasetheme/video/<?=get_field('video__link', $id);?>" type="video/mp4">  
		</video>
	</div>
	<?}?>
	<div class="<?=$param['block_prefix'];?>adv">
		<div class="<?=$param['block_prefix'];?>adv-row row">
			<div class="<?=$param['block_prefix'];?>adv-cols cols">
				<div class="<?=$param['block_prefix'];?>adv-item">
					<svg class="icon-svg icon-orelstroy-adv-item1" role="img"><use xlink:href="<?=$this->path('img');?>/svg/sprite.svg#orelstroy-adv-item1"></use></svg>
				</div>
			</div>
			<div class="<?=$param['block_prefix'];?>adv-cols cols">
				<div class="<?=$param['block_prefix'];?>adv-item">
					<svg class="icon-svg icon-orelstroy-adv-item2" role="img"><use xlink:href="<?=$this->path('img');?>/svg/sprite.svg#orelstroy-adv-item2"></use></svg>
				</div>
			</div>
			<div class="<?=$param['block_prefix'];?>adv-cols cols">
				<div class="<?=$param['block_prefix'];?>adv-item">
					<svg class="icon-svg icon-orelstroy-adv-item3" role="img"><use xlink:href="<?=$this->path('img');?>/svg/sprite.svg#orelstroy-adv-item3"></use></svg>
				</div>
			</div>
			<div class="<?=$param['block_prefix'];?>adv-cols cols">
				<div class="<?=$param['block_prefix'];?>adv-item">
					<svg class="icon-svg icon-orelstroy-adv-item4" role="img"><use xlink:href="<?=$this->path('img');?>/svg/sprite.svg#orelstroy-adv-item4"></use></svg>
				</div>
			</div>
			<div class="<?=$param['block_prefix'];?>adv-cols cols">
				<div class="<?=$param['block_prefix'];?>adv-item">
					<svg class="icon-svg icon-orelstroy-adv-item5" role="img"><use xlink:href="<?=$this->path('img');?>/svg/sprite.svg#orelstroy-adv-item5"></use></svg>
				</div>
			</div>
		</div>
	</div>
</div>