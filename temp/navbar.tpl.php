<?
	
?>
<div class="navbar-site-right <?if($param['right_menu_class']){?>blog fixed<?}else{?>fixed<?}?>">
	<button class="_nbr__btn hamburger hamburger--elastic azbn-blog-menu-btn" data-toggle-rnav=".navbar-site-right">
		<div class="hamburger-box">
			<div class="hamburger-inner"></div>
		</div>
	</button>
	<div class="_nbr__block">
		<div class="_nbr__cols _nbr__cols-left">
			<div class="scroller " data-mcs-theme="opacity" data-mcs-axis="y">
				<div class="_nbr__news-row">
				<?
					if(count($param['elements'])) {
						foreach ($param['elements'] as $element ){
							if($param['filter']){
								if(in_array($element->ID, $param['filter'])){
								?>
								<div class="_nbr__news-cols">
									<article class="_nbr__news-item bg-gradient-black" style="background-image: url(<?=get_field('blog_img_small', $element->ID); ?>)">
										<a href="<?=l($element->ID);?>">
											<div>
												<div class="news-item__time _nbr__news-item__time"><?=date('d.m.Y', strtotime($element->post_date));?></div>
												<h5 class="news-item__heading _nbr__news-item__heading"><?=$element->post_title;?></h5>
											</div>
										</a>
									</article>
								</div>
								<?
								}
							}else{
								?>
								<div class="_nbr__news-cols">
									<article class="_nbr__news-item bg-gradient-black" style="background-image: url(<?=get_field('blog_img_small', $element->ID); ?>)">
										<a href="<?=l($element->ID);?>">
											<div>
												<div class="news-item__time _nbr__news-item__time"><?=date('d.m.Y', strtotime($element->post_date));?></div>
												<h5 class="news-item__heading _nbr__news-item__heading"><?=$element->post_title;?></h5>
											</div>
										</a>
									</article>
								</div>
								<?
							}
						}
					}
					wp_reset_postdata();
				?>
				</div>
			</div>
		</div>
		<div class="_nbr__cols _nbr__cols-right">
			<div class="scroller _nbr__scroller" data-mcs-theme="bace" data-mcs-axis="y">
				<div class="_nbr__item-block">
					<form action="/" class="search-site">
						<div class="input-group">
							<input type="text" name="s" value="<?=get_search_query();?>" class="form-control" placeholder="Поиск по статьям">
							<span class="input-group-btn">
								<button type="submit" class="btn-search"></button>
							</span>
						</div>
					</form>
				</div>
				<div class="_nbr__item-block">
					<ul class="rubric-block">
						<li class="rubric-block__heading"><h5>Рубрики</h5></li>
						<? $categories = get_categories('taxonomy=category&parent=144');
						foreach ($categories as $row) {
							?><li><a href="/<?=$row->slug;?>/"><?=$row->name;?></a></li><?
						} ?>
					</ul>
				</div>
				<div class="_nbr__item-block">
					<ul class="rubric-block">
						<li class="rubric-block__heading"><h5>Архив</h5></li>
						<li><a href="<?=l(6570);?>">2016</a></li>
						<li><a href="<?=l(6568);?>">2015</a></li>
						<li><a href="<?=l(6565);?>">2014</a></li>
						<li><a href="<?=l(6563);?>">2013</a></li>
						<?// wp_get_archives('type=yearly&post_type=post'); ?>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>