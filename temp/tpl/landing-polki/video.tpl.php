<?if (get_field('video__link', $id)){?>
<div class="<?=$param['block_prefix'];?>block">
	<div class="<?=$param['block_prefix'];?>video">
		<video class="<?=$param['block_prefix'];?>video-player lp-video" preload="none" controls="" poster="<?=$this->path('img');?>/lp-dixion/poster.jpg">
			<source src="http://dorohovdesign.ru/wp-content/themes/azbnbasetheme/video/<?=get_field('video__link', $id);?>" type="video/mp4">  
		</video>
	</div>
	<div class="<?=$param['block_prefix'];?>iphone <?=$param['page_prefix'];?>bg  is--contain"></div>
	<div class="<?=$param['block_prefix'];?>pans <?=$param['page_prefix'];?>bg  is--contain"></div>
	<div class="<?=$param['block_prefix'];?>folder <?=$param['page_prefix'];?>bg  is--contain"></div>
</div>    
<?}?>