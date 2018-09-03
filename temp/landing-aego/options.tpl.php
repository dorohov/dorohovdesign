<?
	$_prefix 		= $param['block_prefix'];
	$_prefix_page 	= $param['page_prefix'];
	$_heading_mod 	= $param['heading_mod'];
	$_heading 		= get_field('option__heading', $id);
	$_heading_sm 	= get_field('option__heading-sm', $id);
	$_note 			= get_field('option__note', $id);
	$_note_sm		= get_field('option__note-sm', $id);
?>
<div class="<?=$_prefix;?>block">	
	<?
	$this->tpl('landing-orionprint/bg', array(
		"block_prefix" 	=> $_prefix_page,
		"block_bg"		=>	$this->path('img')."/lp-orionprint/bg-plane-320x320.png",
		"block_mod"		=>	"is--plane-320x320"
	));
	$this->tpl('landing-orionprint/bg', array(
		"block_prefix" 	=> $_prefix_page,
		"block_bg"		=>	$this->path('img')."/lp-orionprint/bg-round-980x980.png",
		"block_mod"		=>	"is--round-980x980"
	));
	?>
	<div class="container <?=$_prefix;?>container <?=$_prefix_page;?>container  is--top">
		<div class="<?=$_prefix;?>inner  is--top">
			<?if ($_heading != ""){?>
			<h2 class="<?=$_prefix_page;?>heading <?=$_prefix;?>heading  <?=$_heading_mod;?>"><?=$_heading;?></h2>
			<?}?>
			<?if ($_note != ""){?>		
			<div class="<?=$_prefix_page;?>text-block <?=$_prefix;?>text-block  is--blue">
				<?=$_note;?>
			</div>
			<?}?>
		</div>	
	</div>
	<?
	$this->tpl('landing-orionprint/bg', array(
		"block_prefix" 	=> $_prefix_page,
		"block_bg"		=>	$this->path('img')."/lp-orionprint/enter-modal.png",
		"block_mod"		=>	"is--enter-modal"
	));
	?>
	<div class="container <?=$_prefix;?>container <?=$_prefix_page;?>container  is--bottom">
		<div class="<?=$_prefix;?>inner  is--bottom">
			<?if ($_heading_sm != ""){?>
			<h2 class="<?=$_prefix_page;?>heading <?=$_prefix;?>heading  <?=$_heading_mod;?>"><?=$_heading_sm;?></h2>
			<?}?>	
			<?if ($_note_sm != ""){?>		
			<div class="<?=$_prefix_page;?>text-block <?=$_prefix;?>text-block  is--blue  is--bottom">
				<?=$_note_sm;?>
			</div>
			<?}?>
		</div>
	</div>	
	<?
	$this->tpl('landing-orionprint/bg', array(
		"block_prefix" 	=> $_prefix_page,
		"block_bg"		=>	$this->path('img')."/lp-orionprint/bg-ipad-1000x1150.png",
		"block_mod"		=>	"is--ipad-1000x1150"
	));
	$this->tpl('landing-orionprint/bg', array(
		"block_prefix" 	=> $_prefix_page,
		"block_bg"		=>	$this->path('img')."/lp-orionprint/bg-plane-300x300.png",
		"block_mod"		=>	"is--plane-300x300"
	));
	?>
</div>