
	<?
	if(is_single() && get_field('post_add_type', get_post()->ID) == 'landing') {
	?>
	<?if(is_user_logged_in()) {?>
	<footer class="footer-site notop">
	<?} else {?>
	<div class="index-page-slide last_slide">
	<footer class="footer-site index notop">
	<?}?>
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
			|| get_field('post_add_type', get_post()->ID) == 'landing-inleco'
			|| get_field('post_add_type', get_post()->ID) == 'landing-manikur'
			|| get_field('post_add_type', get_post()->ID) == 'landing-orelstroy'
			|| get_field('post_add_type', get_post()->ID) == 'landing-dixion'
			|| get_field('post_add_type', get_post()->ID) == 'case-photo-jk'
			|| get_field('post_add_type', get_post()->ID) == 'case-orionprint'
			|| get_field('post_add_type', get_post()->ID) == 'case-modern'
			|| get_field('post_add_type', get_post()->ID) == 'case-yarus'
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
					<form action="/formsave/" class="form-site inline azbn7__marketing" method="POST" data-marketing-target="form.submit.workwithus" >
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
<script src="<? echo $this->path('js');?>/document-ready.js?v=<?=date('Ymd');?>" ></script>
<script src="<? echo $this->path('js');?>/azbn.wheel.js?v=<?=date('Ymd');?>" ></script>
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
		get_field('post_add_type', get_post()->ID) == 'landing-dixion' ||
		is_single()
		 
	){
		$this->tpl('_/owl', array());
	}
?>

<? 	//autoplay video
	if(
		get_field('post_add_type', get_post()->ID) == 'landing-orelstroy' ||
		get_field('post_add_type', get_post()->ID) == 'landing-zenit' ||
		get_field('post_add_type', get_post()->ID) == 'landing-enerfit' ||
		get_field('post_add_type', get_post()->ID) == 'landing-msk76' ||
		get_field('post_add_type', get_post()->ID) == 'landing-manikur' ||
		get_field('post_add_type', get_post()->ID) == 'landing-dixion' ||
		is_single()
		 
	){
		$this->tpl('_/autoplay-video', array());
	}
?>
<? 	//iphone-slider-new
	if(
		get_field('post_add_type', get_post()->ID) == 'landing-zenit' ||
		get_field('post_add_type', get_post()->ID) == 'landing-enerfit' ||
		get_field('post_add_type', get_post()->ID) == 'landing-orelstroy' ||
		get_field('post_add_type', get_post()->ID) == 'landing-inleco' ||
		is_single()
		 
	){?>
		<script src="<? echo $this->path('js');?>/iphone-slider-new.js"></script> 
<?	}
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
	<script src="<? echo $this->path('js');?>/iphone-slider.js"></script>
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


</body>
</html>