<div class="<?=$param['block_prefix'];?>block">
	<div class="container <?=$param['block_prefix'];?>container <?=$param['page_prefix'];?>container">
		<div class="<?=$param['page_prefix'];?>left-line"></div>		
		<div class=" <?=$param['block_prefix'];?>inner">	
			<div class=" <?=$param['block_prefix'];?>note">	
				<?if (get_field('adaptiv__heading', $id)){?>
				<h2 class="<?=$param['page_prefix'];?>heading <?=$param['block_prefix'];?>heading  is--heading"><?=get_field('adaptiv__heading', $id);?></h2>
				<?}?>	
				<?if (get_field('adaptiv__note', $id)){?>	
				<div class="<?=$param['page_prefix'];?>text-block <?=$param['block_prefix'];?>text-block 
				">
					<?=get_field('adaptiv__note', $id);?>
				</div>
				<?}?>
			</div>
			<div class="<?=$param['block_prefix'];?>laptop">
				<img src="<?=$this->path('img');?>/lp-orelstroy/bg-mackbook.png" alt="">
			</div>
		</div>
		<?if (get_field('work_link', $id)){?>
		<div class="<?=$param['block_prefix'];?>footer-link">
			Адрес сайта: <a href="http://<?=get_field('work_link', $id);?>" target="_blank"><?=get_field('work_link', $id);?></a>
		</div>
		<?}?>
		<div class="<?=$param['block_prefix'];?>mobile <?=$param['page_prefix'];?>bg  is--contain"></div>
	</div>
</div>