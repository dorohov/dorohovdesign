<?
	$GLOBALS['footer_class'] = 'notop';
	//
	$tags = get_the_category($post->ID);
	$next_post = get_previous_post(true);
	$prev_post = get_next_post(true);
	if(empty($prev_post) || empty($next_post)){
		$args = array('post_type'=>'post', 'orderby'=>'rand', 'category_name'=>'blog', 'numberposts' => 1, 'exclude' => $post->ID);
		$rand_post = get_posts($args);
	}
	//
	foreach($tags as $tag){
		if($tag->cat_ID != 144){
			$current .= $tag->category_nicename.',';
		}
	}
	$args = array('post_type'=>'post', 'orderby'=>'post_date', 'category_name'=>$current, 'order'=>'DESC', 'numberposts' => 300);
	$elements = get_posts($args);
?>
<div class="blog-item-page-content padtop">
	<?if(is_user_logged_in()) {
	?>
	<header class="blog-item-header bg-gradient-black" style="background-image: url(<?=get_field('blog_img_big', $post->ID); ?>)">
		<div class="_bih__inner">
			<div class="news-item__time blog-item-panel__time"><? echo get_the_date('d.m.Y'); ?></div>
			<h1 class="blog-item-panel__heading"><? the_title(); ?></h1>
			<div class="blog-item-panel__tags">
				<div class="row">
					<? foreach($tags as $tag){
						if($tag->cat_ID != 144){
							?><div class="cols"><a href="/<?=$tag->category_nicename;?>/"><?=$tag->cat_name;?></a></div><?
					}} ?>
				</div>
			</div>
		</div>
	</header>
	<?}else{?>
	<header class="blog-item-header bg-gradient-black" style="background-image: url(<?=get_field('blog_img_big', $post->ID); ?>)">
		<div class="_bih__inner">
			<div class="news-item__time blog-item__time"><? echo get_the_date('d.m.Y'); ?></div>
			<h1 class="blog-item__heading"><? the_title(); ?></h1>
			<div class="blog-item__tags">
				<div class="row">
					<? foreach($tags as $tag){
						if($tag->cat_ID != 144){
							?><div class="cols"><a href="/<?=$tag->category_nicename;?>/"><?=$tag->cat_name;?></a></div><?
					}} ?>
				</div>
			</div>
		</div>
	</header>
	<?}?>
	<div class="container _bip__container">
		<div class="text-block">
			<? the_content(); ?>
			
			<h4>Поделиться статьей</h4>
			<script src="//yastatic.net/es5-shims/0.0.2/es5-shims.min.js"></script>
			<script src="//yastatic.net/share2/share.js"></script>
			<div class="ya-share2" data-services="vkontakte,facebook,odnoklassniki,moimir,gplus,twitter,blogger,delicious,digg,reddit,evernote,lj,pocket,qzone,renren,sinaWeibo,surfingbird,tencentWeibo,tumblr,viber,whatsapp,skype,telegram,collections" data-limit="5"></div>
			
			<div class="info-panel">
				Получить дополнительную информацию и&nbsp;заказать услугу Вы&nbsp;можете позвонив нам по&nbsp;телефону&nbsp;<a href="tel:<?=getContacts('phone1');?>"><?=getContacts('phone1');?></a> или&nbsp;написав на&nbsp;почту <a href="mailto:<?=getContacts('email');?>"><?=getContacts('email');?></a>
			</div>
			
		</div>
		<div class="tags-block">
			<div class="row">
				<? foreach($tags as $tag){
					if($tag->cat_ID != 144){
						?><div class="cols"><a href="/<?=$tag->category_nicename;?>/"><?=$tag->cat_name;?></a></div><?
				}} ?>
			</div>
		</div>
	</div>
</div>
<div class="blog-item-pn">
	<div class="_bipn__row">
		<? if(!empty($prev_post) ){ ?>
		<div class="_bipn__cols _bipn__cols-left">
			<a href="<?=l($prev_post->ID );?>" class="blog-item _bipn__blog-item bg-gradient-black" style="background-image: url(<?=get_field('blog_img_small', $prev_post->ID); ?>)">
				<div class="_bipn__blog-item__inner">
					<div class="news-item__time _bipn__news-item__time"><?=date('d.m.Y', strtotime($prev_post->post_date));?></div>
					<h4 class="blog-item__heading _bipn__blog-item__heading">
						<?=$prev_post->post_title;?>
					</h4>
					<div class="_bipn__blog-item__link">Предыдущая статья</div>
				</div>
			</a>
		</div>
		<?} else {
			foreach($rand_post as $prev_post){
			?>
			<div class="_bipn__cols _bipn__cols-left">
				<a href="<?=l($prev_post->ID );?>" class="blog-item _bipn__blog-item bg-gradient-black" style="background-image: url(<?=get_field('blog_img_small', $prev_post->ID); ?>)">
					<div class="_bipn__blog-item__inner">
						<div class="news-item__time _bipn__news-item__time"><?=date('d.m.Y', strtotime($prev_post->post_date));?></div>
						<h4 class="blog-item__heading _bipn__blog-item__heading">
							<?=$prev_post->post_title;?>
						</h4>
						<div class="_bipn__blog-item__link">Предыдущая статья</div>
					</div>
				</a>
			</div>
			<? }
		}?>
		<? if(!empty($next_post) ){ ?>
		<div class="_bipn__cols _bipn__cols-right">
			<a href="<?=l($next_post->ID );?>" class="blog-item _bipn__blog-item bg-gradient-black" style="background-image: url(<?=get_field('blog_img_small', $next_post->ID); ?>)">
				<div class="_bipn__blog-item__inner">
					<div class="news-item__time _bipn__news-item__time"><?=date('d.m.Y', strtotime($next_post->post_date));?></div>
					<h4 class="blog-item__heading _bipn__blog-item__heading">
						<?=$next_post->post_title;?>
					</h4>
					<div class="_bipn__blog-item__link">Следующая статья</div>
				</div>
			</a>
		</div>
		<?} else {
			foreach($rand_post as $next_post){
			?>
			<div class="_bipn__cols _bipn__cols-right">
				<a href="<?=l($next_post->ID );?>" class="blog-item _bipn__blog-item bg-gradient-black" style="background-image: url(<?=get_field('blog_img_small', $next_post->ID); ?>)">
					<div class="_bipn__blog-item__inner">
						<div class="news-item__time _bipn__news-item__time"><?=date('d.m.Y', strtotime($next_post->post_date));?></div>
						<h4 class="blog-item__heading _bipn__blog-item__heading">
							<?=$next_post->post_title;?>
						</h4>
						<div class="_bipn__blog-item__link">Следующая статья</div>
					</div>
				</a>
			</div>
			<? }
		}?>
	</div>
</div>
<?
	$this->tpl('blog/blogmenu', array(
		'elements' => $elements,
		'right_menu_class' => 'blog',
	));
	wp_reset_postdata();
?>