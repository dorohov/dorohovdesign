<div class="<?=$param['block_prefix'];?>block">
	<div class="container <?=$param['block_prefix'];?>container <?=$param['page_prefix'];?>container">
		<?if (get_field('interface__heading', $id)){?>
		<h2 class="<?=$param['page_prefix'];?>heading <?=$param['block_prefix'];?>heading  is--heading  is--center"><?=get_field('interface__heading', $id);?></h2>
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
	</div> 
	<div class="<?=$param['block_prefix'];?>owl-block">
		<div class="<?=$param['block_prefix'];?>owl">
			<div class="<?=$param['block_prefix'];?>owl-item">
				<img src="<?=$this->path('img');?>/lp-dixion/slider-item1.jpg" alt="">
			</div>
			<div class="<?=$param['block_prefix'];?>owl-item">
				<img src="<?=$this->path('img');?>/lp-dixion/slider-item2.jpg" alt="">
			</div>
			<div class="<?=$param['block_prefix'];?>owl-item">
				<img src="<?=$this->path('img');?>/lp-dixion/slider-item3.jpg" alt="">
			</div>
		</div>
	</div>
</div>