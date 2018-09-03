<?
	$_prefix 		= $param['block_prefix'];
	$_prefix_page 	= $param['page_prefix'];
	$_heading_mod 	= $param['heading_mod'];
	$_heading 		= get_field('cabinet__heading', $id);
	$_heading_sm 	= get_field('cabinet__heading-sm', $id);
	$_note_left		= get_field('cabinet__note-left', $id);
	$_note_right	= get_field('cabinet__note-right', $id);
	$_note_sm		= get_field('cabinet__note-sm', $id);
?>
<div class="<?=$_prefix;?>block">
	<div class="container <?=$_prefix_page;?>container  <?=$_prefix;?>container">
		<div class="<?=$_prefix;?>elem">
			<?if ($_heading != ""){?>
			<h2 class="<?=$_prefix_page;?>heading <?=$_prefix;?>heading  <?=$_heading_mod;?>"><?=$_heading;?></h2>
			<?}?>			
			<div class="iphone-slider" data-interval-ms="0">
				<div class="iphone-slider__bg">
					<div class="iphone-slider__container">
						<div class="iphone-slider__item" 
							style="background-image:url(<?=$this->path('img');?>/lp-orionprint/slider-item1-865x540.jpg)"
							data-text="<?=$_note_right;?>"
						></div>
						<div class="iphone-slider__item" 
							style="background-image:url(<?=$this->path('img');?>/lp-orionprint/slider-item2-865x540.jpg)"
							data-text="<?=$_note_left;?>"
						></div>
					</div>
				</div>
				<div class="iphone-slider__blurscreen">
					<div class="iphone-slider__blurscreen-inner  <?=$_prefix_page;?>text-block"></div>
				</div>
				<button type="button" class="iphone-slider__btn  is--right ">
					<span class="iphone-slider__btn-arrow"><svg class="icon-svg icon-lp-orionprint-slider-right" role="img">	<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="<?=$this->path('img');?>/svg/sprite.svg#lp-orionprint-slider-right"></use></svg></span>
				</button>
				<button type="button" class="iphone-slider__btn  is--left ">
					<span class="iphone-slider__btn-arrow"><svg class="icon-svg icon-lp-orionprint-slider-left" role="img"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="<?=$this->path('img');?>/svg/sprite.svg#lp-orionprint-slider-left"></use></svg></span>
				</button>
				<ul class="iphone-slider__dots">
					<li class="iphone-slider__dot is--active">
						<button class="iphone-slider__item-btn" ></button>
					</li>
					<li class="iphone-slider__dot">
						<button class="iphone-slider__item-btn" ></button>
					</li>
				</ul>
				<ul class="iphone-slider__count">
					<li class="iphone-slider__count-item iphone-slider__count-item_number is--active ">03</li>
					<li class="iphone-slider__count-item">/</li>
					<li class="iphone-slider__count-item iphone-slider__count-item_amount">03</li>
				</ul>
			</div>	
		</div>
		<div class="<?=$_prefix;?>elem">
			<?if ($_heading_sm != ""){?>
			<h2 class="<?=$_prefix_page;?>heading <?=$_prefix;?>heading  is--heading  is--small"><?=$_heading_sm;?></h2>
			<?}?>	
			<?if ($_note_sm != ""){?>		
			<div class="<?=$_prefix_page;?>heading-small <?=$_prefix;?>heading-small">
				<?=$_note_sm;?>
			</div>
			<?}?>	
			<div class="<?=$_prefix;?>preview">
				<img src="<?=$this->path('img');?>/lp-orionprint/bg-ipad-1100x560.png" alt="">
			</div> 
		</div> 
	</div> 
	<?
	$this->tpl('landing-orionprint/bg', array(
		"block_prefix" 	=> $_prefix_page,
		"block_bg"		=>	$this->path('img')."/lp-orionprint/basket-preview.jpg",
		"block_mod"		=>	"is--basket-preview"
	));
	$this->tpl('landing-orionprint/bg', array(
		"block_prefix" 	=> $_prefix_page,
		"block_bg"		=>	$this->path('img')."/lp-orionprint/bg-round-2080x2080.png",
		"block_mod"		=>	"is--round-2080x2080"
	));
	?>
</div>