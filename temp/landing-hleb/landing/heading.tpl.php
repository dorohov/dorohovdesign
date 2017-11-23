<?
	$_prefix = $param['block_prefix'];
	$_prefix_page = $param['page_prefix'];
	$heading = get_field('header_heading', $id);
	$heading_small = get_field('header_heading_small', $id);
?>
<div class="<?=$_prefix;?>block"  style="background-image: url('<?=$this->path('img');?>/lp-hlebzavod/bg-header.jpg')">
	<div class="container <?=$_prefix;?>container <?=$_prefix_page;?>container">
		<div class="<?=$_prefix;?>inner ">
			<?if($heading !=""){?>
			<div class="<?=$_prefix;?>heading "><?=$heading;?></div>
			<?}?>
			<?if($heading_small !=""){?>
			<div class="<?=$_prefix;?>heading-small "><?=$heading_small;?></div>
			<?}?>	
		</div>	
	</div> 	
	<div class="<?=$_prefix;?>scrollto">
		<a class="scrollto <?=$_prefix;?>scrollto-link" href="#logotip" data-scrollto-diff="-105">
			<svg class="icon-svg icon-mouse" role="img">
				<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="<?=$this->path('img');?>/svg/sprite.svg#mouse"></use>
			</svg>
		</a>
	</div>	
	<div class="<?=$_prefix_page;?>block-content-before">
		<div class="<?=$_prefix_page;?>block-inner  is--before">
			<div class="<?=$_prefix_page;?>block-container  container  is--before"></div>
		</div>
	</div>	
</div>    