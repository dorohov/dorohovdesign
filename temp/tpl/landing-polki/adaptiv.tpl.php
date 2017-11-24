<div class="<?=$param['block_prefix'];?>block">
	<div class="<?=$param['block_prefix'];?>inner">
		<div class="container <?=$param['block_prefix'];?>container <?=$param['page_prefix'];?>container">	
			<div class="row <?=$param['block_prefix'];?>row">	
				<div class="cols <?=$param['block_prefix'];?>cols  is--img">	
					<div class="<?=$param['block_prefix'];?>preview  is--hand"><img src="<?=$this->path('img');?>/lp-dixion/bg-hand-mobile.png" alt=""></div>	
				</div>
				<?if (get_field('adaptiv__heading', $id)){?>
				<div class="cols <?=$param['block_prefix'];?>cols  is--heading">
					<h2 class="<?=$param['page_prefix'];?>heading <?=$param['block_prefix'];?>heading  is--heading"><?=get_field('adaptiv__heading', $id);?></h2>
				</div>
				<?}?>	
				<div class="cols <?=$param['block_prefix'];?>cols  is--mockup">
					<div class="<?=$param['block_prefix'];?>preview-block">
						<div class="<?=$param['block_prefix'];?>preview  is--macbook">
							<img src="<?=$this->path('img');?>/lp-dixion/bg-macbook.png" alt="">
						</div>
						<div class="<?=$param['block_prefix'];?>preview  is--ipad">
							<img src="<?=$this->path('img');?>/lp-dixion/bg-ipad.png" alt="">
						</div>
					</div>
				</div>
			</div>
			<?if (get_field('work_link', $id)){?>
			<div class="<?=$param['block_prefix'];?>footer-link">
				Адрес сайта: <a href="http://<?=get_field('work_link', $id);?>" target="_blank"><?=get_field('work_link', $id);?></a>
			</div>
			<?}?>
		</div>
	</div>
</div>