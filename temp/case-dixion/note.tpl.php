<?
	$note__text_left = get_field('note__text-left', $id);
	$note__text_right = get_field('note__text-right', $id);
	$note__steps = get_field('note__steps', $id);
?>
<div class="<?=$param['block_prefix'];?>block">
	<div class="container <?=$param['block_prefix'];?>container <?=$param['page_prefix'];?>container">
		<div class="row <?=$param['block_prefix'];?>row">
			<?if ($note__text_left != ""){?>			
			<div class="cols <?=$param['block_prefix'];?>cols  is--cols-4  <?=$param['block_mod'];?>">
				<div class="<?=$param['page_prefix'];?>text-block  ">
					<?=$note__text_left;?>
				</div>		
			</div>
			<?}?>
			<?if ($note__text_right != ""){?>
			<div class="cols <?=$param['block_prefix'];?>cols  is--cols-5  <?=$param['block_mod'];?>">
				<div class="<?=$param['page_prefix'];?>text-block  ">
					<?=$note__text_right;?>					
				</div>
			</div>
			<?}?>
			<?if ($note__steps != ""){?>
			<div class="cols <?=$param['block_prefix'];?>cols  is--cols-3">				
				<div class="<?=$param['block_prefix'];?>step-inner">
					<div class="<?=$param['block_prefix'];?>step">
						<div class="<?=$param['block_prefix'];?>step-num"><?=$note__steps;?></div> <div class="<?=$param['block_prefix'];?>step-text">шагов</div>					
						<div>до нужного результата</div>					
					</div>
					<div class="<?=$param['block_prefix'];?>scrollto">
						<a class="scrollto <?=$param['block_prefix'];?>scrollto-link" href="#to_steps" data-scrollto-diff="-105">
							<div class="<?=$param['block_prefix'];?>scrollto-name">далее</div>
							<div class="<?=$param['block_prefix'];?>scrollto-line"></div>
						</a>
					</div>
				</div>
			</div>			
			<?}?>
		</div>
	</div> 
</div> 
<svg class="<?=$param['block_prefix'];?>after" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1920 140" enable-background="new 0 0 1920 140">
	<polygon class="<?=$param['block_prefix'];?>after-bottom" points="1920,0 0,140 1920,140 "/>
	<polygon class="<?=$param['block_prefix'];?>after-top" points="1920,0 0,140 0,0 "/>
</svg>

