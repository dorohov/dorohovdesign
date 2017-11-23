<?
	$_prefix = $param['block_prefix'];
	$_prefix_page = $param['page_prefix'];
	$heading = get_field('packaging_hb_heading', $id);
	$heading2 = get_field('packaging_hb_heading_small', $id);
	$heading_mod = $param['block_heading_mod'];
	$heading2_mod = $param['block_heading2_mod'];
?>
<div class="<?=$_prefix_page;?>panel">
	<div class="<?=$_prefix_page;?>block-inner  <?=$_prefix;?>block">
		<div class="<?=$_prefix_page;?>block-container  container">
			<?if($heading !=""){?>
			<h2 class="<?=$_prefix_page;?>heading  <?=$heading_mod?>"><?=$heading;?></h2>
			<?}?>
			<img src="<?=$this->path('img');?>/lp-hlebzavod/packaging-item2.png" class="img-responsive" alt="" class="<?=$_prefix_page;?>preview">

			<?if($heading2 !=""){?>
			<h2 class="<?=$_prefix_page;?>heading <?=$_prefix;?>heading-two  <?=$heading2_mod?>"><?=$heading2;?></h2>
			<?}?>
			<img src="<?=$this->path('img');?>/lp-hlebzavod/packaging-item3.png" class="img-responsive" alt="" class="<?=$_prefix_page;?>preview">
		</div>
		<?
			$this->tpl('landing/bg', array(
				"block_prefix" => "lp-hlebzavod__",
				"block_mod" => "is--mill-line",
				"block_bg" => "bg-mill-line.png",
			));
			$this->tpl('landing/bg', array(
				"block_prefix" => "lp-hlebzavod__",
				"block_mod" => "is--bread-line",
				"block_bg" => "bg-bread-line.png",
			));
		?>
	</div>
</div>	