<?if(is_user_logged_in()) {?>
<div class="hlebzavod-page-content padtop">	
	<div class="hlebzavod__block-content"> 
		<?
			$GLOBALS['footer_type'] = 'slide';
			$this->tpl('landing/heading', array(
				"block_prefix" => "hlebzavod_hb__",
				"page_prefix" => "lp-hlebzavod__",
			));
		?>
		<div class="lp-hlebzavod__block-content">
			<?
				$this->tpl('landing/logotip', array(
					"block_prefix" => "hlebzavod_logotip__",
					"page_prefix" => "lp-hlebzavod__",
					"block_heading_mod" => "is--center  is--coffe  is--lg",
					"block_text_mod" => "is--xl  is--925  is--device-center",
				));
				$this->tpl('landing/packaging', array(
					"block_prefix" => "hlebzavod_packaging1__",
					"page_prefix" => "lp-hlebzavod__",
					"block_heading_mod" => "is--center  is--coffe  is--lg",
					"block_text_mod" => "is--xl  is--1045  is--center",
				));
				$this->tpl('landing/packaging_hb', array(
					"block_prefix" => "hlebzavod_packaging2__",
					"page_prefix" => "lp-hlebzavod__",
					"block_heading_mod" => "is--center  is--brown  is--xl",
					"block_heading2_mod" => "is--center  is--grey  is--md",
				));
				$this->tpl('landing/packaging_s', array(
					"block_prefix" => "hlebzavod_packaging3__",
					"page_prefix" => "lp-hlebzavod__",
					"block_heading_mod" => "is--brown  is--xl  is--1070  is--device-center",
					"block_text_mod" => "is--1070  is--device-center",
				));
				$this->tpl('landing/packaging_pr', array(
					"block_prefix" => "hlebzavod_packaging4__",
					"page_prefix" => "lp-hlebzavod__",
					"block_heading_mod" => "is--brown  is--xl  is--left-cols-6  is--device-center",
					"block_text_mod" => "is--left-cols-6  is--device-center",
				));
				$this->tpl('landing/packaging_ph', array(
					"block_prefix" => "hlebzavod_packaging5__",
					"page_prefix" => "lp-hlebzavod__",
					"block_heading_mod" => "is--brown  is--xl  is--left-cols-2  is--device-center",
					"block_text_mod" => "is--left-cols-2  is--device-center",
				));
				$this->tpl('landing/footer', array(
					"block_prefix" => "hlebzavod_footer__",
					"page_prefix" => "lp-hlebzavod__",
					"block_heading_mod" => "is--white  is--footer  is--device-center",
				));
			?>	
		</div>
	</div>
</div>
<?} else {?>
<?
	$GLOBALS['footer_type'] = 'slide';
?>
<div class="bread-page-content scroll-page" data-slide-id="0">
<?
	the_content();
?>
<?}?>