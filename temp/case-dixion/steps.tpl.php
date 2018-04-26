<?
	$_prefix 				=	$param['block_prefix'];
	$_prefix_page 			=	$param['page_prefix'];
	$_mod 					=	$param['block_mod'];
	$steps__note 			= 	get_field('steps__note', $id);
	$steps__heading = 			get_field('steps__heading', $id);
	$steps__step1_heading = 	get_field('steps__step1-heading', $id);
	$steps__step1_note = 		get_field('steps__step1-note', $id);
	$steps__step2_heading = 	get_field('steps__step2-heading', $id);
	$steps__step2_note = 		get_field('steps__step2-note', $id);
	$steps__step3_heading = 	get_field('steps__step3-heading', $id);
	$steps__step3_note = 		get_field('steps__step3-note', $id);
	$steps__step4_heading = 	get_field('steps__step4-heading', $id);
	$steps__step4_note = 		get_field('steps__step4-note', $id);
	$steps__step5_heading = 	get_field('steps__step5-heading', $id);
	$steps__step5_note = 		get_field('steps__step5-note', $id);
	$steps__step6_heading = 	get_field('steps__step6-heading', $id);
	$steps__step6_note = 		get_field('steps__step6-note', $id);
	$steps__step7_heading = 	get_field('steps__step7-heading', $id);
	$steps__step7_note = 		get_field('steps__step7-note', $id);
	$steps__step8_heading = 	get_field('steps__step8-heading', $id);
	$steps__step8_note = 		get_field('steps__step8-note', $id);
	$steps__slider = 			get_field('steps__slider', $id);
?>

<div class="<?=$_prefix;?>block" id="<?=$param['block_id'];?>">	
	<div class="<?=$_prefix;?>panel  is--bg-top">
		<div class="container <?=$_prefix;?>container <?=$_prefix_page;?>container">
			<div class="<?=$_prefix;?>row row">
				<div class="<?=$_prefix;?>cols cols  is--cols-6  is--step1-note">
					<?if ($steps__note != ""){?>
					<div class="<?=$_prefix_page;?>text-block <?=$_prefix;?>text-block  is--note">
						<?=$steps__note;?>
					</div>
					<?}?>
					<?if ($steps__heading != ""){?>
					<h2 class="<?=$_prefix;?>heading"><?=$steps__heading;?></h2>
					<?}?>
					<?if ($steps__step1_heading != ""){?>
					<div class="<?=$_prefix;?>item  is--step1">
						<div class="<?=$_prefix;?>item-row row">
							<div class="<?=$_prefix;?>item-cols cols  is--num">
								<div class="<?=$_prefix;?>item-num">1</div>
							</div>
							<div class="<?=$_prefix;?>item-cols cols  is--heading">
								<h3 class="<?=$_prefix;?>item-heading">
									<?=$steps__step1_heading;?>
								</h3>
							</div>
						</div>
						<?if ($steps__step1_note != ""){?>
						<div class="<?=$_prefix_page;?>text-block <?=$_prefix;?>item-text">
							<?=$steps__step1_note;?>
						</div>
						<?}?>
					</div>
					<?}?> 
				</div>
				<div class="<?=$_prefix;?>cols cols  is--cols-6  is--step1-slider">
					<?
						$this->tpl('case/macbook', array(
							"block_prefix" 	=> "case-steps__",
							"block_mod" 	=> "is--yarus",
							"page_prefix" 	=> "case__",
						));
					?>
				</div>
			</div>
		</div>
	</div>
	<svg class="<?=$_prefix;?>after" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1920 140" enable-background="new 0 0 1920 140">
		<polygon class="<?=$_prefix;?>after-bottom" points="1920,0 0,140 1920,140 "/>
		<polygon class="<?=$_prefix;?>after-top" points="1920,0 0,140 0,0 "/>
	</svg>
	<div class="<?=$_prefix;?>panel  is--top  <?=$_mod;?>">
		<div class="container <?=$_prefix;?>container <?=$_prefix_page;?>container">
			<div class="<?=$_prefix;?>row row  is--line1  <?=$_mod;?>">
				<div class="<?=$_prefix;?>cols cols  is--cols-4">
					<?if ($steps__step5_note != ""){?>
					<div class="<?=$_prefix;?>text-block">
						<?=$steps__step5_note;?>
					</div>
					<?}?>
				</div>
				<div class="<?=$_prefix;?>cols cols  is--cols-8">
					<div class="<?=$_prefix;?>preview  is--item1  <?=$_mod;?>">
						<div class="<?=$_prefix;?>preview-item"><img src="<?=$this->path('img');?>/case-manikur/preview-step1-item1.jpg" alt=""></div>
					</div>
				</div>
				<div class="<?=$_prefix;?>cols cols  is--cols-4">					
					<?if ($steps__step6_note != ""){?>
					<div class="<?=$_prefix;?>text-block">
						<?=$steps__step6_note;?>
					</div>
					<?}?>
				</div>
				<div class="<?=$_prefix;?>cols cols  is--cols-8">
					<div class="<?=$_prefix;?>preview">
						<div class="<?=$_prefix;?>preview-item"><img src="<?=$this->path('img');?>/case-manikur/preview-step1-item2.jpg" alt=""></div>
					</div>
				</div> 
			</div>
			<div class="<?=$_prefix;?>row row">
				<div class="<?=$_prefix;?>cols cols  is--cols-6">
					<div class="<?=$_prefix;?>preview  is--item2-1  <?=$_mod;?>">
						<div class="<?=$_prefix;?>preview-item"><img src="<?=$this->path('img');?>/case-manikur/preview-step2-item1.jpg" alt=""></div>
					</div>
				</div>
				<div class="<?=$_prefix;?>cols cols  is--cols-6">		
					<?if ($steps__step2_heading != ""){?>
					<div class="<?=$_prefix;?>item">
						<div class="<?=$_prefix;?>item-row row">
							<div class="<?=$_prefix;?>item-cols cols  is--num">
								<div class="<?=$_prefix;?>item-num">2</div>
							</div>
							<div class="<?=$_prefix;?>item-cols cols  is--heading">
								<h3 class="<?=$_prefix;?>item-heading">
									<?=$steps__step2_heading;?>
								</h3>
							</div>
						</div>
						<?if ($steps__step2_note != ""){?>
						<div class="<?=$_prefix_page;?>text-block <?=$_prefix;?>item-text">
							<?=$steps__step2_note;?>
						</div>
						<?}?>
					</div>
					<?}?>
				</div>
				<div class="<?=$_prefix;?>cols cols  is--cols-12">
					<div class="<?=$_prefix;?>preview  is--item2-2  <?=$_mod;?>">
						<div class="<?=$_prefix;?>preview-item"><img src="<?=$this->path('img');?>/case-manikur/preview-step2-item2.jpg" alt=""></div>
					</div>
				</div>
			</div> 
		</div>
	</div>
	<div class="<?=$_prefix;?>panel  is--bg-bottom  <?=$_mod;?>">
		<div class="container <?=$_prefix;?>container <?=$_prefix_page;?>container">
			<div class="<?=$_prefix;?>row row  is--margintop">
				<div class="<?=$_prefix;?>cols cols  is--cols-6">		
					<?if ($steps__step3_heading != ""){?>
					<div class="<?=$_prefix;?>item">
						<div class="<?=$_prefix;?>item-row row">
							<div class="<?=$_prefix;?>item-cols cols  is--num">
								<div class="<?=$_prefix;?>item-num">3</div>
							</div>
							<div class="<?=$_prefix;?>item-cols cols  is--heading">
								<h3 class="<?=$_prefix;?>item-heading">
									<?=$steps__step3_heading;?>
								</h3>
							</div>
						</div>
						<?if ($steps__step3_note != ""){?>
						<div class="<?=$_prefix_page;?>text-block <?=$_prefix;?>item-text">
							<?=$steps__step3_note;?>
						</div>
						<?}?>
					</div>
					<?}?>
				</div>
				<div class="<?=$_prefix;?>cols cols  is--cols-6">
					<div class="<?=$_prefix;?>preview  is--item3-1  <?=$_mod;?>">
						<div class="<?=$_prefix;?>preview-item"><img src="<?=$this->path('img');?>/case-manikur/preview-step3-item1.jpg" alt=""></div>
					</div>
				</div>
				<div class="<?=$_prefix;?>cols cols  is--cols-6">
					<div class="<?=$_prefix;?>preview  is--item3-2  <?=$_mod;?>">
						<div class="<?=$_prefix;?>preview-item"><img src="<?=$this->path('img');?>/case-manikur/preview-step3-item2.jpg" alt=""></div>
					</div>
				</div>
				<div class="<?=$_prefix;?>cols cols  is--cols-6">
					<div class="<?=$_prefix;?>preview  is--item3-3  <?=$_mod;?>">
						<div class="<?=$_prefix;?>preview-item"><img src="<?=$this->path('img');?>/case-manikur/preview-step3-item3.jpg" alt=""></div>
					</div>
				</div>
				<div class="<?=$_prefix;?>cols cols  is--cols-4">
					<?if ($steps__step4_heading != ""){?>
					<div class="<?=$_prefix;?>item  is--step4">
						<div class="<?=$_prefix;?>item-row row">
							<div class="<?=$_prefix;?>item-cols cols  is--num">
								<div class="<?=$_prefix;?>item-num">4</div>
							</div>
							<div class="<?=$_prefix;?>item-cols cols  is--heading">
								<h3 class="<?=$_prefix;?>item-heading">
									<?=$steps__step4_heading;?>
								</h3>
							</div>
						</div>
					</div>
					<?}?>
				</div>
				<div class="<?=$_prefix;?>cols cols  is--cols-8">
					<div class="<?=$_prefix;?>preview  is--item4-1  <?=$_mod;?>">
						<div class="<?=$_prefix;?>preview-item"><img src="<?=$this->path('img');?>/case-manikur/preview-step4-item1.jpg" alt=""></div>
					</div>
				</div>
				<div class="<?=$_prefix;?>cols cols  is--cols-8">
					<div class="<?=$_prefix;?>preview  is--item4-2  <?=$_mod;?>">
						<div class="<?=$_prefix;?>preview-item"><img src="<?=$this->path('img');?>/case-manikur/preview-step4-item2.jpg" alt=""></div>
					</div>
				</div>
				<div class="<?=$_prefix;?>cols cols  is--cols-4">
					<?if ($steps__step4_note != ""){?>
					<div class="<?=$_prefix;?>text-block">
						<?=$steps__step4_note;?>
					</div>
					<?}?>
				</div>
			</div>
		</div>
	</div>
</div>