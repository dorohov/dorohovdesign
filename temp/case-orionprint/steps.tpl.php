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
				<div class="<?=$param['block_prefix'];?>cols cols  is--cols-6  is--step1-slider">
					<?
					if(count($steps__slider)) {						
					?>
					<div class="<?=$param['block_prefix'];?>mac-slider  <?=$param['block_mod'];?>">
						<div id="carousel-example-generic" class="carousel slide carousel-fade <?=$param['block_prefix'];?>mac-slider-carousel" data-ride="carousel">
							<ol class="carousel-indicators <?=$param['block_prefix'];?>mac-slider-indicators  <?=$param['block_mod'];?>">
								<?	
									$i = 1;		
									foreach($steps__slider as $index => $id) { 
								?>
								<li data-target="#carousel-example-generic" data-slide-to="<?=$index;?>" <?if ($index == 0) echo 'class="active"'?>>
									<?if ($i > 9){?>
									<?=$i;?>
									<?}else{?>
									0<?=$i;?>
									<?}?>
								</li>								
								<?$i++;}?>
							</ol>
							<div class="<?=$param['block_prefix'];?>mac-slider-bg  <?=$param['page_prefix'];?>bg  is--contain  <?=$param['block_mod'];?>"> 
								<div class="carousel-inner <?=$param['block_prefix'];?>mac-slider-inner">
									<?		
									foreach($steps__slider as $index => $id) {
										$preview = $this->Imgs->rawImg($id, '601x375');
									?>
									<div class="item <?=$param['block_prefix'];?>mac-slider-item <?if($index == 0) echo "active"?>">
										<img src="<?=$preview;?>" alt="">
									</div>
									<?}?> 
								</div>
							</div>
						</div>
					</div>
					<?}?>
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
				<div class="<?=$param['block_prefix'];?>cols cols  is--cols-6  is--preview-2">
					<div class="<?=$param['block_prefix'];?>preview  is--step2">
						<div class="<?=$param['block_prefix'];?>preview-item  is--item1"><img src="<?=$this->path('img');?>/case-photo-jk/preview-step2-item1.png" alt=""></div>
						<div class="<?=$param['block_prefix'];?>preview-item  is--item2"><img src="<?=$this->path('img');?>/case-photo-jk/preview-step2-item2.png" alt=""></div>
					</div>
				</div>
				<div class="<?=$param['block_prefix'];?>cols cols  is--cols-6  is--preview-3">
					<div class="<?=$param['block_prefix'];?>preview  is--step3">
						<div class="<?=$param['block_prefix'];?>preview-item  is--item3"><img src="<?=$this->path('img');?>/case-photo-jk/preview-step3-item1.png" alt=""></div>
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
	<div class="<?=$param['block_prefix'];?>panel  is--bg-bottom">
		<div class="container <?=$param['block_prefix'];?>container <?=$param['page_prefix'];?>container">
			<div class="<?=$param['block_prefix'];?>row row">
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
				<div class="<?=$param['block_prefix'];?>cols cols  is--cols-6  is--preview-4">
					<div class="<?=$param['block_prefix'];?>preview  is--step4">
						<div class="<?=$param['block_prefix'];?>preview-item  is--item4"><img src="<?=$this->path('img');?>/case-photo-jk/preview-step4-item1.jpg" alt=""></div>
					</div>
				</div>
				<div class="<?=$param['block_prefix'];?>cols cols  is--cols-6  is--preview-5">
					<div class="<?=$param['block_prefix'];?>preview-heading">
						<h4>Запустили несколько стилизованных фотопроектов:</h4>
					</div>
					<div class="<?=$param['block_prefix'];?>preview-row row">
						<div class="<?=$param['block_prefix'];?>preview-cols cols  is--cols-6">
							<p>Иван-купала</p>
							<div class="<?=$param['block_prefix'];?>preview  is--step5">
								<div class="<?=$param['block_prefix'];?>preview-item  is--item5"><img src="<?=$this->path('img');?>/case-photo-jk/preview-step5-item1.jpg" alt=""></div>
							</div>
						</div>
						<div class="<?=$param['block_prefix'];?>preview-cols cols  is--cols-6">	
							<p>Свадебная акция</p>
							<div class="<?=$param['block_prefix'];?>preview  is--step5">
								<div class="<?=$param['block_prefix'];?>preview-item  is--item5"><img src="<?=$this->path('img');?>/case-photo-jk/preview-step5-item2.jpg" alt=""></div>
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
									<?=$steps__step1_heading;?>
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
</div>