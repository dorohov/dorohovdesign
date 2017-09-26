<?
	$steps__note = 				get_field('steps__note', $id);
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

<div class="<?=$param['block_prefix'];?>block" id="<?=$param['block_id'];?>">	
	<div class="<?=$param['block_prefix'];?>panel  is--bg-top">
		<div class="container <?=$param['block_prefix'];?>container <?=$param['page_prefix'];?>container">
			<div class="<?=$param['block_prefix'];?>row row">
				<div class="<?=$param['block_prefix'];?>cols cols  is--cols-6  is--step1-note">
					<?if ($steps__note != ""){?>
					<div class="<?=$param['page_prefix'];?>text-block <?=$param['block_prefix'];?>text-block  is--note">
						<?=$steps__note;?>
					</div>
					<?}?>
					<?if ($steps__heading != ""){?>
					<h2 class="<?=$param['block_prefix'];?>heading"><?=$steps__heading;?></h2>
					<?}?>
					<?if ($steps__step1_heading != ""){?>
					<div class="<?=$param['block_prefix'];?>item  is--step1">
						<div class="<?=$param['block_prefix'];?>item-row row">
							<div class="<?=$param['block_prefix'];?>item-cols cols  is--num">
								<div class="<?=$param['block_prefix'];?>item-num">1</div>
							</div>
							<div class="<?=$param['block_prefix'];?>item-cols cols  is--heading">
								<h3 class="<?=$param['block_prefix'];?>item-heading">
									<?=$steps__step1_heading;?>
								</h3>
							</div>
						</div>
						<?if ($steps__step1_note != ""){?>
						<div class="<?=$param['page_prefix'];?>text-block <?=$param['block_prefix'];?>item-text">
							<?=$steps__step1_note;?>
						</div>
						<?}?>
					</div>
					<?}?> 
				</div>
				<div class="<?=$param['block_prefix'];?>cols cols  is--cols-6">
					<div class="<?=$param['block_prefix'];?>preview">
						<div class="<?=$param['block_prefix'];?>preview-item  is--center  is--shadow"><img src="<?=$this->path('img');?>/case-yarus/preview-step1-item1.jpg" alt=""></div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<svg class="<?=$param['block_prefix'];?>after" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1920 140" enable-background="new 0 0 1920 140">
		<polygon class="<?=$param['block_prefix'];?>after-bottom" points="1920,0 0,140 1920,140 "/>
		<polygon class="<?=$param['block_prefix'];?>after-top" points="1920,0 0,140 0,0 "/>
	</svg>
	<div class="<?=$param['block_prefix'];?>panel">
		<div class="container <?=$param['block_prefix'];?>container <?=$param['page_prefix'];?>container">
			<div class="<?=$param['block_prefix'];?>row row">
				<div class="<?=$param['block_prefix'];?>cols cols  is--cols-6">		
					<?if ($steps__step2_heading != ""){?>
					<div class="<?=$param['block_prefix'];?>item  is--step2">
						<div class="<?=$param['block_prefix'];?>item-row row">
							<div class="<?=$param['block_prefix'];?>item-cols cols  is--num">
								<div class="<?=$param['block_prefix'];?>item-num">2</div>
							</div>
							<div class="<?=$param['block_prefix'];?>item-cols cols  is--heading">
								<h3 class="<?=$param['block_prefix'];?>item-heading">
									<?=$steps__step2_heading;?>
								</h3>
							</div>
						</div>
						<?if ($steps__step2_note != ""){?>
						<div class="<?=$param['page_prefix'];?>text-block <?=$param['block_prefix'];?>item-text">
							<?=$steps__step2_note;?>
						</div>
						<?}?>
					</div>
					<?}?>
				</div>				
				<div class="<?=$param['block_prefix'];?>cols cols  is--cols-6">
					<div class="<?=$param['block_prefix'];?>preview-row row">
						<div class="<?=$param['block_prefix'];?>preview-cols cols  is--cols-6">
							<div class="<?=$param['block_prefix'];?>preview  is--step5">
								<div class="<?=$param['block_prefix'];?>preview-item  is--shadow"><img src="<?=$this->path('img');?>/case-yarus/preview-step2-item1.jpg" alt=""></div>
							</div>
						</div>
						<div class="<?=$param['block_prefix'];?>preview-cols cols  is--cols-6">
							<div class="<?=$param['block_prefix'];?>preview  is--step5">
								<div class="<?=$param['block_prefix'];?>preview-item  is--shadow"><img src="<?=$this->path('img');?>/case-yarus/preview-step2-item2.jpg" alt=""></div>
							</div>
						</div>
					</div>
				</div>	
				<div class="<?=$param['block_prefix'];?>cols cols  is--cols-6  is--preview-3">
					<div class="<?=$param['block_prefix'];?>preview">
						<div class="<?=$param['block_prefix'];?>preview-item  is--shadow"><img src="<?=$this->path('img');?>/case-yarus/preview-step3-item1.jpg" alt=""></div>
					</div>
				</div>
				<div class="<?=$param['block_prefix'];?>cols cols  is--cols-6">		
					<?if ($steps__step3_heading != ""){?>
					<div class="<?=$param['block_prefix'];?>item  is--step3">
						<div class="<?=$param['block_prefix'];?>item-row row">
							<div class="<?=$param['block_prefix'];?>item-cols cols  is--num">
								<div class="<?=$param['block_prefix'];?>item-num">3</div>
							</div>
							<div class="<?=$param['block_prefix'];?>item-cols cols  is--heading">
								<h3 class="<?=$param['block_prefix'];?>item-heading">
									<?=$steps__step3_heading;?>
								</h3>
							</div>
						</div>
						<?if ($steps__step3_note != ""){?>
						<div class="<?=$param['page_prefix'];?>text-block <?=$param['block_prefix'];?>item-text">
							<?=$steps__step3_note;?>
						</div>
						<?}?>
					</div>
					<?}?>
				</div>
			</div>
		</div>
	</div>	

	<div class="<?=$param['block_prefix'];?>panel  is--bg-bottom  is--yarus">
		<div class="container <?=$param['block_prefix'];?>container <?=$param['page_prefix'];?>container">
			<div class="<?=$param['block_prefix'];?>row row  is--margintop">
				<div class="<?=$param['block_prefix'];?>cols cols  is--cols-6">		
					<?if ($steps__step4_heading != ""){?>
					<div class="<?=$param['block_prefix'];?>item  is--step4">
						<div class="<?=$param['block_prefix'];?>item-row row">
							<div class="<?=$param['block_prefix'];?>item-cols cols  is--num">
								<div class="<?=$param['block_prefix'];?>item-num">4</div>
							</div>
							<div class="<?=$param['block_prefix'];?>item-cols cols  is--heading">
								<h3 class="<?=$param['block_prefix'];?>item-heading">
									<?=$steps__step4_heading;?>
								</h3>
							</div>
						</div>
						<?if ($steps__step4_note != ""){?>
						<div class="<?=$param['page_prefix'];?>text-block <?=$param['block_prefix'];?>item-text">
							<?=$steps__step4_note;?>
						</div>
						<?}?>
					</div>
					<?}?>
				</div>

				<div class="<?=$param['block_prefix'];?>cols cols  is--cols-6">
					<div class="<?=$param['block_prefix'];?>preview  is--yarus-preview-4">
						<div class="<?=$param['block_prefix'];?>preview-item  is--shadow"><img src="<?=$this->path('img');?>/case-yarus/preview-step4-item1.jpg" alt=""></div>
						<div class="<?=$param['block_prefix'];?>preview-item  is--shadow  is--yarus-abs-4-2"><img src="<?=$this->path('img');?>/case-yarus/preview-step4-item2.jpg" alt=""></div>
					</div>
				</div>
				<div class="<?=$param['block_prefix'];?>cols cols  is--cols-6  is--preview-5">
					<div class="<?=$param['block_prefix'];?>preview-row row">
						<div class="<?=$param['block_prefix'];?>preview-cols cols  is--cols-6">
							<div class="<?=$param['block_prefix'];?>preview  is--step5">
								<div class="<?=$param['block_prefix'];?>preview-item  is--shadow"><img src="<?=$this->path('img');?>/case-yarus/preview-step5-item1.jpg" alt=""></div>
							</div>
						</div>
						<div class="<?=$param['block_prefix'];?>preview-cols cols  is--cols-6">
							<div class="<?=$param['block_prefix'];?>preview  is--step5">
								<div class="<?=$param['block_prefix'];?>preview-item  is--shadow"><img src="<?=$this->path('img');?>/case-yarus/preview-step5-item2.jpg" alt=""></div>
							</div>
						</div>
					</div>
				</div>
				<div class="<?=$param['block_prefix'];?>cols cols  is--cols-6">		
					<?if ($steps__step5_heading != ""){?>
					<div class="<?=$param['block_prefix'];?>item  is--step5">
						<div class="<?=$param['block_prefix'];?>item-row row">
							<div class="<?=$param['block_prefix'];?>item-cols cols  is--num">
								<div class="<?=$param['block_prefix'];?>item-num">5</div>
							</div>
							<div class="<?=$param['block_prefix'];?>item-cols cols  is--heading">
								<h3 class="<?=$param['block_prefix'];?>item-heading">
									<?=$steps__step5_heading;?>
								</h3>
							</div>
						</div>
						<?if ($steps__step5_note != ""){?>
						<div class="<?=$param['page_prefix'];?>text-block <?=$param['block_prefix'];?>item-text">
							<?=$steps__step5_note;?>
						</div>
						<?}?>
					</div>
					<?}?>
				</div>
			</div>
		</div>
	</div>
	<div class="<?=$param['block_prefix'];?>panel  is--yarus">
		<div class="container <?=$param['block_prefix'];?>container <?=$param['page_prefix'];?>container">
			<div class="<?=$param['block_prefix'];?>row row  is--margintop">
				<div class="<?=$param['block_prefix'];?>cols cols  is--cols-6">	
					<?if ($steps__step6_heading != ""){?>
					<div class="<?=$param['block_prefix'];?>item  is--step6">
						<div class="<?=$param['block_prefix'];?>item-row row">
							<div class="<?=$param['block_prefix'];?>item-cols cols  is--num">
								<div class="<?=$param['block_prefix'];?>item-num">6</div>
							</div>
							<div class="<?=$param['block_prefix'];?>item-cols cols  is--heading">
								<h3 class="<?=$param['block_prefix'];?>item-heading">
									<?=$steps__step6_heading;?>
								</h3>
							</div>
						</div>
						<?if ($steps__step6_note != ""){?>
						<div class="<?=$param['page_prefix'];?>text-block <?=$param['block_prefix'];?>item-text">
							<?=$steps__step6_note;?>
						</div>
						<?}?>
					</div>
					<?}?>
				</div>
				<div class="<?=$param['block_prefix'];?>cols cols  is--cols-6">		
					<?if ($steps__step7_heading != ""){?>
					<div class="<?=$param['block_prefix'];?>item  is--paddingleft">
						<div class="<?=$param['block_prefix'];?>item-row row">
							<div class="<?=$param['block_prefix'];?>item-cols cols  is--num">
								<div class="<?=$param['block_prefix'];?>item-num">7</div>
							</div>
							<div class="<?=$param['block_prefix'];?>item-cols cols  is--heading">
								<h3 class="<?=$param['block_prefix'];?>item-heading">
									<?=$steps__step7_heading;?>
								</h3>
							</div>
						</div>
						<?if ($steps__step7_note != ""){?>
						<div class="<?=$param['page_prefix'];?>text-block <?=$param['block_prefix'];?>item-text">
							<?=$steps__step7_note;?>
						</div>
						<?}?>
					</div>
					<?}?>
				</div>
			</div>
		</div>
	</div>
	<div class="<?=$param['block_prefix'];?>panel  is--bg-bottom  is--yarus">
		<div class="container <?=$param['block_prefix'];?>container <?=$param['page_prefix'];?>container">
			<div class="<?=$param['block_prefix'];?>row row">
				<div class="<?=$param['block_prefix'];?>cols cols  is--cols-6">		
					<?if ($steps__step8_heading != ""){?>
					<div class="<?=$param['block_prefix'];?>item">
						<div class="<?=$param['block_prefix'];?>item-row row">
							<div class="<?=$param['block_prefix'];?>item-cols cols  is--num">
								<div class="<?=$param['block_prefix'];?>item-num">8</div>
							</div>
							<div class="<?=$param['block_prefix'];?>item-cols cols  is--heading">
								<h3 class="<?=$param['block_prefix'];?>item-heading">
									<?=$steps__step8_heading;?>
								</h3>
							</div>
						</div>
						<?if ($steps__step8_note != ""){?>
						<div class="<?=$param['page_prefix'];?>text-block <?=$param['block_prefix'];?>item-text">
							<?=$steps__step8_note;?>
						</div>
						<?}?>
					</div>
					<?}?>
				</div>
				<div class="<?=$param['block_prefix'];?>cols cols  is--cols-6">			<?
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
</div>