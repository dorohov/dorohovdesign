<?
	$_prefix 		= $param['block_prefix'];
	$_prefix_page 	= $param['page_prefix'];
	$_heading 		= get_field('header__heading', $id);
	$_heading_small = get_field('header__heading-sm', $id);
?>
<div class="<?=$_prefix;?>block">
	<div class="container <?=$_prefix_page;?>container">
		<?if ($_heading != ""){?>
		<div class="<?=$_prefix;?>heading"><?=$_heading;?></div>
		<?}?>
		<?if ($_heading_small != ""){?>	
		<div class="<?=$_prefix;?>heading-small"><?=$_heading_small;?></div> 
		<?}?>
		<div class="<?=$_prefix;?>preview">
			<img src="<?=$this->path('img');?>/lp-polki/bg-polka.png" alt="<?=$_heading;?> <?=$_heading_small;?>">
		</div>
		<div class="<?=$_prefix;?>scrollto">
			<a class="scrollto <?=$_prefix;?>scrollto-link" href="#step1" data-scrollto-diff="0">
				<svg class="icon-svg icon-mouse" role="img">
					<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="<?=$this->path('img');?>/svg/sprite.svg#mouse"></use>
				</svg>
			</a>
		</div>
	</div> 
</div>