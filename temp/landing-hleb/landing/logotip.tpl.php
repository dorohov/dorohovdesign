<?
	$_prefix = $param['block_prefix'];
	$_prefix_page = $param['page_prefix'];
	$heading = get_field('logo_heading', $id);
	$heading_mod = $param['block_heading_mod'];
	$text = get_field('logo_note', $id);
	$text_mod = $param['block_text_mod'];
?>
<div class="<?=$_prefix_page;?>panel" id="logotip">
	<div class="<?=$_prefix_page;?>block-inner  <?=$_prefix;?>block">
		<div class="<?=$_prefix_page;?>block-container  container">
			<?if($heading !=""){?>
			<h2 class="<?=$_prefix_page;?>heading  <?=$heading_mod?>"><?=$heading;?></h2>
			<?}?>
			<?if($text !=""){?>
			<div class="<?=$_prefix_page;?>text-block  <?=$_prefix;?>text-block  <?=$text_mod?>"><?=$text;?></div>
			<?}?>
			<div class="<?=$_prefix;?>step">
				<div class="<?=$_prefix;?>step-row row">
					<div class="<?=$_prefix;?>step-cols cols  is--item">
						<div class="<?=$_prefix;?>step-item">
							<div class="<?=$_prefix;?>step-preview">
								<svg class="icon-svg lp-hlebzavod-sun" role="img">
									<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="<?=$this->path('img');?>/svg/sprite.svg#lp-hlebzavod-sun"></use>
								</svg>
							</div>
							<div class="<?=$_prefix;?>step-note">
								Выращенный под солнцем
							</div>
						</div>
					</div>
					<div class="<?=$_prefix;?>step-cols cols  is--plus">
						<div class="<?=$_prefix;?>step-plus">
							<svg class="icon-svg lp-hlebzavod-plus" role="img">
								<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="<?=$this->path('img');?>/svg/sprite.svg#lp-hlebzavod-plus"></use>
							</svg>
						</div>
					</div>
					<div class="<?=$_prefix;?>step-cols cols  is--item">
						<div class="<?=$_prefix;?>step-item">
							<div class="<?=$_prefix;?>step-preview">
								<svg class="icon-svg lp-hlebzavod-like" role="img">
									<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="<?=$this->path('img');?>/svg/sprite.svg#lp-hlebzavod-like"></use>
								</svg>
							</div>
							<div class="<?=$_prefix;?>step-note">
								Сделан с любовью
							</div>
						</div>
					</div>
					<div class="<?=$_prefix;?>step-cols cols  is--plus">
						<div class="<?=$_prefix;?>step-plus">
							<svg class="icon-svg lp-hlebzavod-plus" role="img">
								<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="<?=$this->path('img');?>/svg/sprite.svg#lp-hlebzavod-plus"></use>
							</svg>
						</div>
					</div>
					<div class="<?=$_prefix;?>step-cols cols  is--item">
						<div class="<?=$_prefix;?>step-item">
							<div class="<?=$_prefix;?>step-preview">
								<svg class="icon-svg lp-hlebzavod-wheat" role="img">
									<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="<?=$this->path('img');?>/svg/sprite.svg#lp-hlebzavod-wheat"></use>
								</svg>
							</div>
							<div class="<?=$_prefix;?>step-note">Натуральный продукт</div>
						</div>
					</div>
					<div class="<?=$_prefix;?>step-cols cols">
						<div class="<?=$_prefix;?>step-arrow">
							<svg class="icon-svg lp-hlebzavod-wheat" role="img">
								<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="<?=$this->path('img');?>/svg/sprite.svg#lp-hlebzavod-arrow"></use>
							</svg>
						</div>
					</div>
					<div class="<?=$_prefix;?>step-cols cols  is--logotip">
						<div class="<?=$_prefix;?>logotip">
							<img src="<?=$this->path('img');?>/lp-hlebzavod/logotip.png" alt="">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?
		$this->tpl('landing/bg', array(
			"block_prefix" => "lp-hlebzavod__",
			"block_mod" => "is--bread",
			"block_bg" => "bg-bread.png",
		));
	?>
</div>	