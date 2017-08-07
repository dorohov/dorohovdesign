<?

$queried_object = get_queried_object();

?>
<div class="blog-block__navbar">
	<div class="modal fade modal__modal" id="modal-blog" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog modal__dialog">
			<div class="modal-content modal__content">
				<div class="modal-body modal__body" >
					<h3 class="modal-title modal__title">Рубрики</h3>
					<button type="button" class="modal__close" data-dismiss="modal" aria-hidden="true">
						<svg class="icon-svg icon-close" role="img">
							<use xlink:href="<?=$this->path('img');?>/svg/sprite.svg#close"></use>
						</svg>
					</button>
					<div class="dropdown modal__search-block">
						<a data-toggle="dropdown" class="modal__search-btn" href="#">
							<svg class="icon-svg icon-search" role="img">
								<use xlink:href="<?=$this->path('img');?>/svg/sprite.svg#search"></use>
							</svg>
						</a>
						<div class="dropdown-menu modal__search-dropdown">
							<form action="/" class="modal__search-form">
								<input type="text" name="s" value="<?=get_search_query();?>" placeholder="Поиск по статьям" class="modal__search-input">
								<button type="submit" class="modal__search-submit">
									<svg class="icon-svg icon-search" role="img">
										<use xlink:href="<?=$this->path('img');?>/svg/sprite.svg#search"></use>
									</svg>
								</button>
							</form>
						</div>
						<a data-toggle="dropdown" class="modal__search-btn  is--close" href="#">
							<svg class="icon-svg icon-close" role="img">
								<use xlink:href="<?=$this->path('img');?>/svg/sprite.svg#close"></use>
							</svg>
						</a>
					</div>
					<ul class="modal__navbar">
						<? $categories = get_categories('taxonomy=category&parent=144');
							foreach ($categories as $row) {
						?>
						<li class="modal__navbar-item <?if(property_exists($queried_object, 'term_id')){if($queried_object->term_id == $row->term_id) {echo 'is--active';}}?> ">
							<a href="/<?=$row->slug;?>/" class="modal__navbar-link  ">
								<span><?=$row->name;?></span>
							</a>
						</li>
						<? } ?>
					</ul>
				</div>
			</div>
		</div>
	</div> 
</div>