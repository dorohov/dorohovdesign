<?
	$income__note = 	get_field('income__note', $id);
	if($income__note != ""){
?>
<div class="<?=$param['block_prefix'];?>block">
	<div class="container <?=$param['block_prefix'];?>container <?=$param['page_prefix'];?>container">
		<div class="<?=$param['block_prefix'];?>inner">	
			<?=$income__note;?>	
		</div>
	</div>
</div>
<?}?>