<?
	$_prefix 		= $param['block_prefix'];
	$_prefix_page 	= $param['page_prefix'];
	$_heading_mod 	= $param['heading_mod'];
	$_heading 		= get_field('project-note__heading', $id);
	$_note_left 	= get_field('project-note__left', $id);
	$_note_right 	= get_field('project-note__right', $id);
?>
<div class="<?=$_prefix;?>block">
	<?
	$this->tpl('landing-orionprint/bg', array(
		"block_prefix" 	=> $_prefix_page,
		"block_bg"		=>	$this->path('img')."/lp-orionprint/bg-round-885x855.png",
		"block_mod"		=>	"is--round-885x855"
	));
	?>
	<div class="container <?=$_prefix;?>container <?=$_prefix_page;?>container">
		<?if ($_heading != ""){?>
		<h2 class="<?=$_prefix_page;?>heading <?=$_prefix;?>heading  <?=$_heading_mod;?>"><?=$_heading;?></h2>
		<?}?>
		<?if ($_note_left != ""){?>	
		<div class="<?=$_prefix_page;?>text-block  <?=$_prefix;?>text-block">
			<?=$_note_left;?>
		</div>
		<?}?>
		<div class="<?=$_prefix;?>preview">
			<img src="<?=$this->path('img');?>/lp-orionprint/about-icon.png" alt="">
		</div>
	</div> 
	<?
	$this->tpl('landing-orionprint/bg', array(
		"block_prefix" 	=> $_prefix_page,
		"block_bg"		=>	$this->path('img')."/lp-orionprint/bg-ipad-800x580.png",
		"block_mod"		=>	"is--ipad-800x580"
	));
	?>
</div> 