<?
	$_prefix 		= $param['block_prefix'];
	$_prefix_page 	= $param['page_prefix'];
	$_heading_mod 	= $param['heading_mod'];
	$_heading 		= get_field('adaptiv__heading', $id);
	$_note 			= get_field('adaptiv__note', $id);
	$_link 			= get_field('work_link', $id);
?>
<div class="<?=$_prefix;?>block">
	<div class="<?=$_prefix;?>inner">
		<div class="container <?=$_prefix;?>container <?=$_prefix_page;?>container">
			<?if ($_heading != ""){?>
			<h2 class="<?=$_prefix_page;?>heading <?=$_prefix;?>heading  <?=$_heading_mod;?>"><?=$_heading;?></h2>
			<?}?>
			<?if ($_note != ""){?>	
			<div class="<?=$_prefix_page;?>text-block  <?=$_prefix;?>text-block">
				<?=$_note;?>
			</div>
			<?}?>
			<div class="<?=$_prefix;?>preview-block">
				<div class="<?=$_prefix;?>preview  is--imac">
					<img src="<?=$this->path('img');?>/lp-orionprint/bg-imac-1010x910.png" alt="">
				</div>
				<div class="<?=$_prefix;?>preview  is--iphone">
					<img src="<?=$this->path('img');?>/lp-orionprint/bg-iphone-310x780.png" alt="">
				</div>
				<div class="<?=$_prefix;?>preview  is--mackbook">
					<img src="<?=$this->path('img');?>/lp-orionprint/bg-mackbook-835x625.png" alt="">
				</div> 
			</div>
			<?if ($_link != ""){?>
			<div class="<?=$_prefix;?>footer-link">
				Адрес сайта: <a href="http://<?=$_link;?>/" target="_blank"><?=$_link;?></a>
			</div>
			<?}?>
		</div>
		<?
			$this->tpl('landing-orionprint/bg', array(
				"block_prefix" 	=> $_prefix_page,
				"block_bg"		=>	$this->path('img')."/lp-orionprint/bg-interface-1920x550.png",
				"block_mod"		=>	"is--interface-1920x550"
			));
		?>
	</div>
	<?
		$this->tpl('landing-orionprint/bg', array(
			"block_prefix" 	=> $_prefix_page,
			"block_bg"		=>	$this->path('img')."/lp-orionprint/bg-glare-1250x1250.png",
			"block_mod"		=>	"is--glare-1250x1250"
		));
		$this->tpl('landing-orionprint/bg', array(
			"block_prefix" 	=> $_prefix_page,
			"block_bg"		=>	$this->path('img')."/lp-orionprint/bg-plane-355x355.png",
			"block_mod"		=>	"is--plane-355x355"
		));
		$this->tpl('landing-orionprint/bg', array(
			"block_prefix" 	=> $_prefix_page,
			"block_bg"		=>	$this->path('img')."/lp-orionprint/bg-plane-160x160.png",
			"block_mod"		=>	"is--plane-160x160"
		));
	?>
</div>