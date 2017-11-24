<div class="<?=$param['block_prefix'];?>block">
	<div class="container <?=$param['block_prefix'];?>container <?=$param['page_prefix'];?>container">
		<div class="<?=$param['block_prefix'];?>inner ">
			<?if (get_field('header__heading', $id)){?>
				<div class="<?=$param['block_prefix'];?>heading ">
					<?=get_field('header__heading', $id);?>
				</div>			
			<?}?>	
			<?if (get_field('work_link', $id)){?>
			<div class="<?=$param['block_prefix'];?>link ">
				<a href="http://<?=get_field('work_link', $id);?>" target="_blank">
					<svg class="icon-svg icon-lp-dixion-logotip" role="img">
						<use xlink:href="<?=$this->path('img');?>/svg/sprite.svg#lp-dixion-logotip"></use>
					</svg>
				</a>
			</div>	
			<?}?>	
			<div class="<?=$param['block_prefix'];?>row row">
				<div class="<?=$param['block_prefix'];?>cols cols">
					<div class="<?=$param['block_prefix'];?>icon-item">
						<img src="<?=$this->path('img');?>/lp-dixion/header-item1.png" alt="">
					</div>
				</div>
				<div class="<?=$param['block_prefix'];?>cols cols">
					<div class="<?=$param['block_prefix'];?>icon-item">
						<img src="<?=$this->path('img');?>/lp-dixion/header-item2.png" alt="">
					</div>
				</div>
				<div class="<?=$param['block_prefix'];?>cols cols">
					<div class="<?=$param['block_prefix'];?>icon-item">
						<img src="<?=$this->path('img');?>/lp-dixion/header-item3.png" alt="">
					</div>
				</div>
			</div>
		</div>	
		<div class="<?=$param['block_prefix'];?>img <?=$param['page_prefix'];?>bg  is--contain  is--center-top" style="background-image: url('<?=$this->path('img');?>/lp-dixion/bg-header.png')"></div>
	</div> 
</div>