<?
$i=0;
foreach ($param['elements'] as $element ){
	?>
	<div class="scroll-page__slide <?if($i==0){?>active<?}?>" data-slide-id="<?=$i;?>">
		<div class="blog-page-slide bg-gradient-black" style="background-image: url(<?=get_field('blog_img_big', $element->ID); ?>)">
			<div class="_bpc__block">
				<article class="blog-item _bpc__blog-item" data-onhover=".blog-page-slide">
					<div class="news-item__time blog-item__time"><?=date('d.m.Y', strtotime($element->post_date));?></div>
					<h3 class="blog-item__heading"><a href="<?=l($element->ID);?>"><?=$element->post_title;?></a></h3>
					<div class="blog-item__tags">
						<div class="row">
							<? $tags = get_the_category($element->ID);
								foreach($tags as $tag){
								if($tag->cat_ID != 144){
									?><div class="cols"><a href="/<?=$tag->category_nicename;?>/"><?=$tag->cat_name;?></a></div><?
								}} ?>
						</div>
					</div>
					<div class="blog-item__link">
						<a href="<?=l($element->ID);?>" class="btn-look"></a>
					</div>
				</article>
			</div>
		</div>
	</div>
	<?
	$i++;
	if($i > 9){break;}
}
?>