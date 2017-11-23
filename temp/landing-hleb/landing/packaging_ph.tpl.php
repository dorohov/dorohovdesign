<?
	$_prefix = $param['block_prefix'];
	$_prefix_page = $param['page_prefix'];
	$heading = get_field('packaging_ph_heading', $id);
	$heading_mod = $param['block_heading_mod'];
	$text = get_field('packaging_ph_note', $id);
	$text_mod = $param['block_text_mod'];
?>
<div class="<?=$_prefix_page;?>panel">
	<div class="<?=$_prefix;?>panel">
		<div class="<?=$_prefix_page;?>block-inner  <?=$_prefix;?>block">
			<div class="<?=$_prefix_page;?>block-container  container">
				<?if($heading !=""){?>
				<h2 class="<?=$_prefix_page;?>heading  <?=$heading_mod?>"><?=$heading;?></h2>
				<?}?>
				<?if($text !=""){?>
				<div class="<?=$_prefix_page;?>text-block  <?=$_prefix;?>text-block  <?=$text_mod?>"><?=$text;?></div>
				<?}?>
			</div>
			<?
				$this->tpl('landing/bg', array(
					"block_prefix" => "lp-hlebzavod__",
					"block_mod" => "is--croissant-line",
					"block_bg" => "bg-croissant-line.png",
				));
			?>
		</div>
		<?
			$this->tpl('landing/bg', array(
				"block_prefix" => "lp-hlebzavod__",
				"block_mod" => "is--packaging-item6",
				"block_bg" => "packaging-item6.png",
			));
		?>
	</div>
	<?
		$this->tpl('landing/bg', array(
			"block_prefix" => "lp-hlebzavod__",
			"block_mod" => "is--cookies-two",
			"block_bg" => "bg-cookies-two.png",
		));
	?>
</div>