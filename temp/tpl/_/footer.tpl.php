<?if(is_user_logged_in()) {?>
	<?
	if(is_single() && get_field('post_add_type', get_post()->ID) == 'landing') {
	?>
	<div class="index-page-slide last_slide">
	<footer class="footer-site index notop">
	<?} elseif ($this->post['id'] == 5) {?>
	<footer class="footer-site">
	<?} else {?>
	<footer class="footer-site notop">
	<?}?>
		<?if
			(
			is_single() && get_field('post_add_type', get_post()->ID) == 'portfolio'
			|| get_field('post_add_type', get_post()->ID) == 'landing'
			|| get_field('post_add_type', get_post()->ID) == 'landing-star'
			|| get_field('post_add_type', get_post()->ID) == 'landing-amd'
			|| get_field('post_add_type', get_post()->ID) == 'landing-rk-highlight'
			|| get_field('post_add_type', get_post()->ID) == 'landing-yarus'
			|| get_field('post_add_type', get_post()->ID) == 'landing-msk76'
			|| get_field('post_add_type', get_post()->ID) == 'landing-roza'
			|| get_field('post_add_type', get_post()->ID) == 'landing-zenit'
			|| get_field('post_add_type', get_post()->ID) == 'landing-enerfit'
			){
				$this->tpl('_/footer-lp-nav', array());	
			}	
		?>
		<div class="_fs__bg-btn-left"></div>
		<div class="_fs__bg-btn-right"></div>
		<div class="_fs__bg-btn-center"></div>
		<a href="#go-to-top-target" class="_fs__btn-top go-to-top active"></a>
		<div class="_fs__inner">
			<div class="container">
				<?if($this->post['id'] != -11){?><div class="form-site__footer">
					<h2 class="_fsf__heading">Хотите работать с нами?</h2>
					<div class="_fsf__note">
						Заполните форму ниже и мы свяжемся с вами в ближайшее время.
					</div>
					<form action="/formsave/" class="form-site inline" method="POST" data-metric-uid="site.formsave.workwithus" >
						<input type="hidden" name="key" value="londonisthecapitalofgreatbritain">
						<input type="hidden" name="f[Форма]" value="Заявка со страницы (<? the_title(); ?>)">
						<div class="_frms__input icon-user">
							<input type="text" class="_frms__form-control form-control validate[required, custom[onlyLetterSp]]" name="f[Имя]" placeholder="Ваше имя">
						</div>	
						<div class="_frms__input icon-phone">
							<input type="text" class="_frms__form-control form-control validate[required,custom[phone]]" name="f[Телефон]" placeholder="Ваш телефон">
						</div>
						<div class="_frms__input icon-comment">
							<input type="text" class="_frms__form-control form-control validate[required,custom[email]]" name="f[Email]" placeholder="Ваш Email">
						</div>
						<!--
						<div class="_frms__input icon-phone">
							<input type="text" class="_frms__form-control form-control validate[required]" name="f[Телефон/e-mail]" placeholder="Ваше телефон или email">
						</div>
						<div class="_frms__input icon-comment">
							<input type="text" class="_frms__form-control form-control validate[required]" name="f[Коментарий]" placeholder="Ваш коментарий">
						</div>
						-->
						<div class="_frms__input _msr__form-btn btn">
							<button type="submit" class="btn-site btn-white-line btn-line">Отправить</button>
						</div>
						<div class="_frms__input full">
							<div class="_frms__agreement">
					            <input class="_frms__agreement-checkbox validate[required]" id="f[processing-footer]" name="f[processing-footer]" checked type="checkbox">
					            <label for="f[processing-footer]" class="_frms__agreement-label"></label>
								<label for="f[processing-footer]" class="_frms__agreement-text">
									Я согласен на обработку <a href="/agreement/">персональных данных</a>
								</label>           
							</div>
						</div>		
					</form>	
				</div><?}?>
				<div class="row _fs__row">
					<div class="cols _fs__logotip-cols">
						<div><a href="/"><img src="<? echo $this->path('img');?>/default/logotip-white.png" alt="" data-rjs="2"></a></div>
					</div>
					<div class="cols _fs__address-cols"><?=getContacts('address');?></div>
					<div class="cols _fs__phone-cols">
						<div><a href="tel:<?=getContacts('phone1callto');?>"><?=getContacts('phone1');?></a></div>
						<div><a href="tel:<?=getContacts('phone2callto');?>"><?=getContacts('phone2');?></a></div>
					</div>
					<div class="cols _fs__email-cols">
						<div><a href="mailto:<?=getContacts('email');?>"><?=getContacts('email');?></a></div>
					</div>
				</div>
			</div>
		</div>
		<div class="_fs__soc-block">
			<a href="<?=getContacts('soc_be');?>" target="_blank" rel="nofollow" class="_fs__soc soc-site icon-be"></a>
			<a href="<?=getContacts('soc_vk');?>" target="_blank" rel="nofollow" class="_fs__soc soc-site icon-vk"></a>
			<!-- <a href="<?//=getContacts('soc_drb');?>" target="_blank" rel="nofollow" class="_fs__soc soc-site icon-drb"></a> -->
			<a href="<?=getContacts('soc_fb');?>" target="_blank" rel="nofollow" class="_fs__soc soc-site icon-fb"></a>
			<a href="<?=getContacts('soc_tw');?>" target="_blank" rel="nofollow" class="_fs__soc slider-soc soc-site icon-tw"></a>
			<a href="<?=getContacts('soc_igm');?>" target="_blank" rel="nofollow" class="_fs__soc soc-site icon-igm"></a> 
		</div>
	</footer>
	<?
	if(is_single() && get_field('post_add_type', get_post()->ID) == 'landing') {
	?></div><?}?>
<?}else{?>

<?
	$args = array('post_type'=>'page', 'orderby'=>'id', 'order'=>'ASC', 'numberposts' => 0, 'include' => '22,24,30,32,44,5645');
	$services = get_posts($args);

	//echo $this->post['id'];
	//if($this->post['id'] != 13 && $this->post['id'] != 17 && get_post()->post_parent != 17) {

	if(is_front_page() || (($this->post['id'] == 17 || get_post()->post_parent == 17))) {
?>
<!--<div class="index-page-slide last_slide">
<footer class="footer-site index notop">-->
<footer class="footer-site notop">

<?} elseif($this->post['id'] == 13 || is_search()) {?>

<?}elseif(($GLOBALS['footer_type'] == 'slide' && get_field('post_add_type', get_post()->ID) == 'landing') || $GLOBALS['footer_type'] == 'hidden' || (get_post()->ID == 15) || is_category(array('blog', 'pr', 'akcii', 'brending', 'dizain', 'interesnoe', 'marketing', 'novosti', 'process', 'sozdanie-i-prodvizhenie-sajtov', 'firmennyj-stil', 'poligrafi'))){?>
<div class="index-page-slide last_slide">
<footer class="footer-site index notop">
	<?
	if(is_single() && get_field('post_add_type', get_post()->ID) == 'landing'){
		$this->tpl('_/footer-lp-nav', array());
	}
	
}else if(is_single() && get_field('post_add_type', get_post()->ID) == 'landing-star') {
	
	?>
	<footer class="footer-site notop">
	<?
	$this->tpl('_/footer-lp-nav', array());
}else if(is_single() && get_field('post_add_type', get_post()->ID) == 'landing-yarus') {
	
	?>
	<footer class="footer-site notop">
	<?
	$this->tpl('_/footer-lp-nav', array());
}else if(is_single() && get_field('post_add_type', get_post()->ID) == 'landing-amd') {
	
	?>
	<footer class="footer-site notop">
	<?
	$this->tpl('_/footer-lp-nav', array());
}else if(is_single() && get_field('post_add_type', get_post()->ID) == 'landing-rk-highlight') {
	
	?>
	<footer class="footer-site notop">
	<?
	$this->tpl('_/footer-lp-nav', array());
	}else if(is_single() && get_field('post_add_type', get_post()->ID) == 'landing-msk76') {
	
	?>	
	<footer class="footer-site notop">
	<?
	$this->tpl('_/footer-lp-nav', array());
	}else if(is_single() && get_field('post_add_type', get_post()->ID) == 'landing-zenit') {
	
	?>
	<footer class="footer-site notop">
	<?
	$this->tpl('_/footer-lp-nav', array());
}else if(is_single() && get_field('post_add_type', get_post()->ID) == 'landing-roza') {
	
	?>
	<footer class="footer-site notop">
	<?
	$this->tpl('_/footer-lp-nav', array());

} else {?>
<footer class="footer-site <?=$GLOBALS['footer_class'];?>">
<?
}
?>


<?
if(($this->post['id'] != 13 && $this->post['id'] != 17 && get_post()->post_parent != 17 &&  !is_search()) || (($this->post['id'] == 17 || get_post()->post_parent == 17))) {
?>

	<?
	if(is_single() && get_field('post_add_type', get_post()->ID) == 'portfolio'){
		$this->tpl('_/footer-lp-nav', array());
	}
	?>

	<div class="_fs__bg-btn-left"></div>
	<div class="_fs__bg-btn-right"></div>
	<div class="_fs__bg-btn-center"></div>
	<a href="#go-to-top-target" class="_fs__btn-top go-to-top active"></a>
	<div class="_fs__inner">
		<div class="container">
			<?if($this->post['id'] != -11){?><div class="form-site__footer">
				<h2 class="_fsf__heading">Хотите работать с нами?</h2>
				<div class="_fsf__note">
					Заполните форму ниже и мы свяжемся с вами в ближайшее время.
				</div>
				<form action="/formsave/" class="form-site inline" method="POST" data-metric-uid="site.formsave.workwithus" >
					<input type="hidden" name="key" value="londonisthecapitalofgreatbritain">
					<input type="hidden" name="f[Форма]" value="Заявка со страницы (<? the_title(); ?>)">
					<div class="_frms__input icon-user">
						<input type="text" class="_frms__form-control form-control validate[required, custom[onlyLetterSp]]" name="f[Имя]" placeholder="Ваше имя">
					</div>	
					<div class="_frms__input icon-phone">
						<input type="text" class="_frms__form-control form-control validate[required,custom[phone]]" name="f[Телефон]" placeholder="Ваш телефон">
					</div>
					<div class="_frms__input icon-comment">
						<input type="text" class="_frms__form-control form-control validate[required,custom[email]]" name="f[Email]" placeholder="Ваш Email">
					</div>
					<!--
					<div class="_frms__input icon-phone">
						<input type="text" class="_frms__form-control form-control validate[required]" name="f[Телефон/e-mail]" placeholder="Ваше телефон или email">
					</div>
					<div class="_frms__input icon-comment">
						<input type="text" class="_frms__form-control form-control validate[required]" name="f[Коментарий]" placeholder="Ваш коментарий">
					</div>
					-->
					<div class="_frms__input _msr__form-btn btn">
						<button type="submit" class="btn-site btn-white-line btn-line">Отправить</button>
					</div>
					<div class="_frms__input full">
						<div class="_frms__agreement">
				            <input class="_frms__agreement-checkbox validate[required]" id="f[processing-footer]" name="f[processing-footer]" checked type="checkbox">
				            <label for="f[processing-footer]" class="_frms__agreement-label"></label>
							<label for="f[processing-footer]" class="_frms__agreement-text">
								Я согласен на обработку <a href="/agreement/">персональных данных</a>
							</label>           
						</div>
					</div>		
				</form>	
			</div><?}?>
			<div class="row _fs__row">
				<div class="cols _fs__logotip-cols">
					<div><a href="/"><img src="<? echo $this->path('img');?>/default/logotip-white.png" alt="" data-rjs="2"></a></div>
				</div>
				<div class="cols _fs__address-cols"><?=getContacts('address');?></div>
				<div class="cols _fs__phone-cols">
					<div><a href="tel:<?=getContacts('phone1callto');?>"><?=getContacts('phone1');?></a></div>
					<div><a href="tel:<?=getContacts('phone2callto');?>"><?=getContacts('phone2');?></a></div>
				</div>
				<div class="cols _fs__email-cols">
					<div><a href="mailto:<?=getContacts('email');?>"><?=getContacts('email');?></a></div>
				</div>
			</div>
		</div>
	</div>
	<div class="_fs__soc-block">
		<a href="<?=getContacts('soc_be');?>" target="_blank" rel="nofollow" class="_fs__soc soc-site icon-be"></a>
		<a href="<?=getContacts('soc_vk');?>" target="_blank" rel="nofollow" class="_fs__soc soc-site icon-vk"></a>
		<!-- <a href="<?//=getContacts('soc_drb');?>" target="_blank" rel="nofollow" class="_fs__soc soc-site icon-drb"></a> -->
		<a href="<?=getContacts('soc_fb');?>" target="_blank" rel="nofollow" class="_fs__soc soc-site icon-fb"></a>
		<a href="<?=getContacts('soc_tw');?>" target="_blank" rel="nofollow" class="_fs__soc slider-soc soc-site icon-tw"></a>
		<a href="<?=getContacts('soc_igm');?>" target="_blank" rel="nofollow" class="_fs__soc soc-site icon-igm"></a> 
	</div>

<?
}
?>

<?
if(is_front_page() || ($this->post['id'] == 17)) {?>
</footer>
<!--</div>-->

<?} elseif($this->post['id'] == 13 || is_search()) {?>

<?}elseif($GLOBALS['footer_type'] == 'slide'){?>
</div>
</div>
<?}else{?>
</footer>
<?}?>


<?
//}
?>

</div>
<?}?>



<? $this->tpl('_/form', array()); ?>

<? 
	//o-nas
	if ($this->post['id'] == 11){
		$this->tpl('_/modals/video', array());
	}
?>
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

<script src="<? echo $this->path('js');?>/bootstrap.min.js" ></script>
<script src="<? echo $this->path('js');?>/jquery.bootstrap-autohidingnavbar.min.js" ></script>
<script src="<? echo $this->path('js');?>/device.min.js" ></script>
<script src="<? echo $this->path('js');?>/storage.js" ></script>
<script src="<? echo $this->path('js');?>/moment/moment.min.js" ></script>
<script src="<? echo $this->path('js');?>/jquery-plugin/jquery.appear.js"></script> 
<script src="<? echo $this->path('js');?>/jquery.maskedinput.js" ></script>
<script src="<? echo $this->path('js');?>/document-ready.js" ></script>
<script src="<? echo $this->path('js');?>/azbn.wheel.js" ></script>
<script src="<? echo $this->path('js');?>/jquery.validationEngine-ru.min.js" ></script>
<script src="<? echo $this->path('js');?>/jquery.validationEngine.min.js" ></script>
<script src="<? echo $this->path('js');?>/svg4everybody.min.js" ></script>
<script>svg4everybody();</script> 

<? 	//scrollbar in blog, blog-item pages
	if(	get_post()->ID == 15 ||
		is_single() ||
		is_category(array('blog', 'pr', 'akcii', 'brending', 'dizain', 'interesnoe', 'marketing', 'novosti', 'process', 'sozdanie-i-prodvizhenie-sajtov', 'firmennyj-stil', 'poligrafi')) 
		){
		$this->tpl('_/scrollbar', array());
	}
?>
<? 	//owl in portfolio-item, lp-star, lp-roza pages
	if(
		get_field('post_add_type', get_post()->ID) == 'landing-roza' ||
		get_field('post_add_type', get_post()->ID) == 'landing-star' ||
		get_field('post_add_type', get_post()->ID) == 'landing-msk76' ||
		is_single()
		 
	){
		$this->tpl('_/owl', array());
	}
?>
<?	//google-map in contacts page
	if(get_post()->ID == 13){
		$this->tpl('_/google-maps', array());
	}
?>

<script src="<? echo $this->path('js');?>/retina.min.js" ></script>


<? wp_footer();?>
<script>
	var last = parseInt($('.scroll-page__slide').last().attr('data-slide-id'));
	last += 1;
	$('.last_slide').attr('data-slide-id', last).addClass('scroll-page__slide');
	
</script>
<?if(is_single() && get_field('post_add_type', get_post()->ID) == 'landing-roza') {
	
	?>
	<script>
			if (device.mobile() || device.tablet()) {} else{
				new WOW().init();
			}
		</script>
<? } ?>
<?if(is_single() && get_field('post_add_type', get_post()->ID) == 'landing-amd') {
	
	?>
	<script src="<? echo $this->path('js');?>/jquery.scrolly.js"></script>
	<script>
		$(document).ready(function(){
			if (!device.mobile()) {
				$('.parallax').scrolly({bgParallax: false});
			}
		});
	</script>
<? } ?>
<?if(is_single() && get_field('post_add_type', get_post()->ID) == 'landing-rk-highlight') {
	
	?>
	<script>
		if (device.mobile() || device.tablet()) {

		} else {
			new WOW().init();
		}
	</script>
<? } ?>
<?if(is_single() && get_field('post_add_type', get_post()->ID) == 'landing-msk76') {
	
	?>
	<script src="<? echo $this->path('js');?>/jquery-plugin/jquery.appear.js"></script>
	<script>
		$(document).ready(function(){
			$(document.body).on('appear', '.lp-video', function(e, $affected) {
				$(this).get(0).play();
			});
			$(document.body).on('disappear', '.lp-video', function(e, $affected) {
				$(this).get(0).pause();
			});
			$(".lp-video").appear({force_process: true});
		});
	</script>
		
	<script src="<? echo $this->path('js');?>/iphone-slider.js"></script>
<? } ?>
<?if(is_single() && get_field('post_add_type', get_post()->ID) == 'landing-zenit') {
	
	?>
	<script src="<? echo $this->path('js');?>/jquery-plugin/jquery.appear.js"></script>
	<script>
		$(document).ready(function(){
			$(document.body).on('appear', '.lp-video', function(e, $affected) {
				$(this).get(0).play();
			});
			$(document.body).on('disappear', '.lp-video', function(e, $affected) {
				$(this).get(0).pause();
			});
			$(".lp-video").appear({force_process: true});
		});
	</script>
		
	<script src="<? echo $this->path('js');?>/iphone-slider-new.js"></script> 
<? } ?>
<?if(is_single() && get_field('post_add_type', get_post()->ID) == 'landing-enerfit') {
	
	?>
	<script src="<? echo $this->path('js');?>/jquery-plugin/jquery.appear.js"></script>
	<script>
		$(document).ready(function(){
			$(document.body).on('appear', '.lp-video', function(e, $affected) {
				$(this).get(0).play();
			});
			$(document.body).on('disappear', '.lp-video', function(e, $affected) {
				$(this).get(0).pause();
			});
			$(".lp-video").appear({force_process: true});
		});
	</script>
		
	<script src="<? echo $this->path('js');?>/iphone-slider-new.js"></script> 
<? } ?>
<?
/* --------- Счетчики вставляем сюда --------- */
$this->tpl('_/metrika', array());
/* --------- /Счетчики вставляем сюда --------- */
?>

<script type="text/javascript" src="//vk.com/js/api/openapi.js?136"></script> 
<!-- VK Widget --> 
<div id="vk_community_messages"></div> 
<script type="text/javascript"> 
VK.Widgets.CommunityMessages("vk_community_messages", 41023473, {}); 
</script>




<script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 953868736;
var google_custom_params = window.google_tag_params;
var google_remarketing_only = true;
/* ]]> */
</script>
<style>
	iframe[name="google_conversion_frame"]{
		position: absolute;
		bottom: 0;
		z-index: -1;
	}
</style>
<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/953868736/?guid=ON&amp;script=0"/>
</div>
</noscript>


<!-- AppAzbnRu counter -->
<script>
(function(){
	
	var l = window.location;
	var t = new Date().getTime();
	
	var i = document.createElement('img');
	i.width = 0; i.height = 0;
	i.onload = function(){document.body.appendChild(i);};
	i.setAttribute('src', 'http://app.azbn.ru/counter/common/?h=' + l.hostname + '&p=' + l.port + '&lt=' + t);
	
})();
</script>
<!-- /AppAzbnRu counter -->


</body>
</html>