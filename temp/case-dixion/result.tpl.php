<?
	$result__heading = 	get_field('result__heading', $id);
	$result__note = 	get_field('result__note', $id);
	$result__text = 	get_field('result__text', $id);
?>
<div class="<?=$param['block_prefix'];?>block">
	<div class="container <?=$param['block_prefix'];?>container <?=$param['page_prefix'];?>container">
		<?if($result__heading !=""){?>
		<h2 class="<?=$param['page_prefix'];?>heading <?=$param['block_prefix'];?>heading  is--center  is--heading"><?=$result__heading;?></h2>
		<?}?>		
		<div class="<?=$param['page_prefix'];?>preview">
			<img src="<?=$this->path('img');?>/case-manikur/result-preview-item1.jpg" alt="">
		</div>	
		<?if($result__note !=""){?>
		<div class="<?=$param['page_prefix'];?>text-block <?=$param['block_prefix'];?>text-block  is--manikur">			
			<?=$result__note;?>
		</div>
		<?}?>
		<?=$result__text;?>
	</div> 
</div>