<?
	$_prefix 		= $param['block_prefix'];
	$_prefix_page 	= $param['page_prefix'];
	$_heading 		= get_field('header__heading', $id);
	$_heading_small = get_field('header__heading-sm', $id);
	$_heading_firm 	= get_field('header__heading-firm', $id);
	$_header_note 	= get_field('header__note', $id);
	$_video 		= get_field('video__link', $id);
	$_bg 			= $param['block_bg'];
?>
<div class="<?=$_prefix;?>block" style="background-image: url(<?=$_bg;?>)">
	<?
	$this->tpl('landing-orionprint/bg', array(
		"block_prefix" 	=> $_prefix_page,
		"block_bg"		=>	$this->path('img')."/lp-orionprint/bg-header-1900x1080.png",
		"block_mod"		=>	"is--header-1900x1080"
	));
	?>
	<div class="container <?=$_prefix;?>container <?=$_prefix_page;?>container">
		<div class="<?=$_prefix;?>elem  is--header">
			<div class="<?=$_prefix;?>inner ">				
				<?if ($_heading != ""){?>
				<div class="<?=$_prefix;?>heading"><?=$_heading;?></div>
				<?}?>				
				<?if ($_heading_small != ""){?>	
				<div class="<?=$_prefix;?>heading-small"><?=$_heading_small;?></div> 
				<?}?>
			</div>		
			<div class="<?=$_prefix;?>scrollto">
				<a class="scrollto <?=$_prefix;?>scrollto-link" href="#video-block" data-scrollto-diff="-105">Вниз</a>
			</div>	
		</div> 	
		<?if ($_video != ""){?>	
		<div class="<?=$_prefix;?>elem  is--video"  id="video-block">
			<div class="<?=$_prefix;?>video">
				<video class="<?=$_prefix;?>video-player lp-video" preload="none" controls="" poster="<?=$this->path('img');?>/lp-orionprint/poster.jpg">
					<source src="/wp-content/themes/azbnbasetheme/video/<?=get_field('video__link', $id);?>" type="video/mp4">  
				</video>
			</div>    
		</div> 
		<?}?>
	</div> 
</div>  