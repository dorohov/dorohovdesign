<?
	$_prefix = $param['block_prefix'];
	$_prefix_page = $param['page_prefix'];
	$heading = get_field('logo_heading', $id);
	$heading_mod = $param['block_heading_mod'];
	$text = get_field('logo_note', $id);
	$text_mod = $param['block_text_mod'];
?>
<div class="<?=$_prefix_page;?>panel">
	<div class="<?=$_prefix_page;?>block-inner  <?=$_prefix;?>block">
		<div class="<?=$_prefix_page;?>block-container  container">
			<?if($heading !=""){?>
			<h2 class="<?=$_prefix_page;?>heading  <?=$heading_mod?>"><?=$heading;?></h2>
			<?}?>
			<?if($text !=""){?>
			<div class="<?=$_prefix_page;?>text-block  <?=$_prefix;?>text-block  <?=$text_mod?>"><?=$text;?></div>
			<?}?>
			<img src="<?=$this->path('img');?>/lp-hlebzavod/packaging-item1.png" class="img-responsive" alt="" class="<?=$_prefix_page;?>preview">
		</div>
	</div>
</div>	