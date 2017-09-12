<div class="<?=$param['block_prefix'];?>block">
	<div class="container <?=$param['block_prefix'];?>container <?=$param['page_prefix'];?>container">
		<div class="<?=$param['page_prefix'];?>left-line"></div>
		<?if (get_field('project-note__heading', $id)){?>
		<h2 class="<?=$param['page_prefix'];?>heading <?=$param['block_prefix'];?>heading  is--heading"><?=get_field('project-note__heading', $id);?></h2>
		<?}?>
		<div class="row <?=$param['block_prefix'];?>row">
			<?if (get_field('project-note__left', $id)){?>			
			<div class="cols <?=$param['block_prefix'];?>cols  is--cols-5">
				<div class="<?=$param['page_prefix'];?>text-block  ">
					<?=get_field('project-note__left', $id);?>
				</div>		
			</div>	
			<?}?>	
			<?if (get_field('project-note__right', $id)){?>	
			<div class="cols <?=$param['block_prefix'];?>cols  is--cols-7">
				<div class="<?=$param['page_prefix'];?>text-block  ">
					<?=get_field('project-note__right', $id);?>
				</div>
			</div>
			<?}?>
		</div>
	</div> 
</div>