<?
	//$_prefix 		= $param['block_prefix'];
	//$_prefix_page 	= $param['page_prefix'];
	$_heading 		= get_field('header__heading', $id);
	$_heading_small = get_field('header__heading-sm', $id);
?>
<div class="albina-bilbord-page-content padtop">
	<div class="albina-bilbord__block-content">	
		<div class="lp-albina-bilbord__block-content">	
			<div class="lp-albina-bilbord__panel">
				<img src="<?=$this->path('img');?>/lp-albina-bilbord/bg-step-item1.jpg" alt="" class="img-responsive">
				<div class="lp-albina-bilbord__bg  is--blik-item1" style="background-image: url(<?=$this->path('img');?>/lp-albina-bilbord/bg-blik-840-1260.png)"></div>
				<div class="lp-albina-bilbord__heading-group">
					<?if ($_heading != ""){?>
					<h1 class="lp-albina-bilbord__heading"><?=$_heading;?></h1>
					<?}?>
					<?if ($_heading_small != ""){?>	
					<div class="lp-albina-bilbord__heading-small"><?=$_heading_small;?></div>
					<?}?>
				</div>
			</div>	
			<div class="lp-albina-bilbord__panel">
				<img src="<?=$this->path('img');?>/lp-albina-bilbord/bg-step-item2.jpg" alt="" class="img-responsive">
				<div class="lp-albina-bilbord__bg  is--ipad" style="background-image: url(<?=$this->path('img');?>/lp-albina-bilbord/bg-ipad-1035-800.png)"></div>
				<div class="lp-albina-bilbord__bg  is--blik-item2" style="background-image: url(<?=$this->path('img');?>/lp-albina-bilbord/bg-blik-1035-2060.png)"></div>
			</div>	
			<div class="lp-albina-bilbord__panel">
				<img src="<?=$this->path('img');?>/lp-albina-bilbord/bg-step-item3.jpg" alt="" class="img-responsive">
				<div class="lp-albina-bilbord__bg  is--mackbook" style="background-image: url(<?=$this->path('img');?>/lp-albina-bilbord/bg-mackbook-750-500.png)"></div>
				<div class="lp-albina-bilbord__bg  is--blik-item3" style="background-image: url(<?=$this->path('img');?>/lp-albina-bilbord/bg-blik-890-1715.png)"></div>
			</div>	
			<div class="lp-albina-bilbord__panel">
				<img src="<?=$this->path('img');?>/lp-albina-bilbord/bg-step-item4.jpg" alt="" class="img-responsive">
			</div>
		</div> 
	</div>   
</div>