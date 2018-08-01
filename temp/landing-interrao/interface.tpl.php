<?
	$_prefix 		= $param['block_prefix'];
	$_prefix_page 	= $param['page_prefix'];
	$_heading_mod 	= $param['heading_mod'];
	$_heading 		= get_field('interface__heading', $id);
	$_note_left 	= get_field('interface__note-left', $id);
	$_note_right 	= get_field('interface__note-right', $id);
?>
<div class="<?=$_prefix;?>block">
	<div class="container <?=$_prefix;?>container <?=$_prefix_page;?>container">
		<?if ($_heading != ""){?>
		<h2 class="<?=$_prefix_page;?>heading <?=$_prefix;?>heading  <?=$_heading_mod;?>"><?=$_heading;?></h2>
		<?}?>	
		<div class="row <?=$_prefix;?>row">
			<?if ($_note_left != ""){?>
			<div class="cols <?=$_prefix;?>cols  is--left">
				<div class="<?=$_prefix_page;?>text-block <?=$_prefix;?>text-block">
					<?=$_note_left;?>
				</div>
			</div>
			<?}?>
			<?if ($_note_right != ""){?>
			<div class="cols <?=$_prefix;?>cols  is--right">
				<div class="<?=$_prefix_page;?>text-block <?=$_prefix;?>text-block">
					<?=$_note_right;?>
				</div>
			</div>			
			<?}?>
		</div>
	</div> 
	<?
	$this->tpl('landing-orionprint/bg', array(
		"block_prefix" 	=> $_prefix_page,
		"block_bg"		=>	$this->path('img')."/lp-orionprint/bg-glare-1920x1610.png",
		"block_mod"		=>	"is--glare-1920x1610"
	));
	?>
	<div class="<?=$_prefix;?>owl-block">
		<div class="<?=$_prefix;?>owl">
			<div class="<?=$_prefix;?>owl-item">
				<img src="<?=$this->path('img');?>/lp-orionprint/slider-item1-1130x705.jpg" alt="">
			</div>
			<div class="<?=$_prefix;?>owl-item">
				<img src="<?=$this->path('img');?>/lp-orionprint/slider-item2-1130x705.jpg" alt="">
			</div>
			<div class="<?=$_prefix;?>owl-item">
				<img src="<?=$this->path('img');?>/lp-orionprint/slider-item3-1130x705.jpg" alt="">
			</div>
			<div class="<?=$_prefix;?>owl-item">
				<img src="<?=$this->path('img');?>/lp-orionprint/slider-item4-1130x705.jpg" alt="">
			</div>
		</div>
	</div>
</div>