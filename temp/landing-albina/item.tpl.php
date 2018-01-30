<div class="polki-page-content padtop">
	<div class="polki__block-content"> 
		<div class="lp-polki__block-content">	
		<?
			$GLOBALS['footer_type'] = 'slide';
			$this->tpl('landing-polki/heading', array(
				"block_prefix" 	=> "polki_hb__",
				"page_prefix" 	=> "lp-polki__",
			));
			$this->tpl('landing-polki/mockup', array(
				"block_prefix" 	=> "polki_mockup__",
				"page_prefix" 	=> "lp-polki__",
			));
			$this->tpl('landing-polki/about', array(
				"block_prefix" 	=> "polki-about__",
				"page_prefix" 	=> "lp-polki__",
				"block_heading_mod" 	=> "is--heading  is--center",
			));
			$this->tpl('landing-polki/interface', array(
				"block_prefix" 	=> "polki-interface__",
				"page_prefix"	=> "lp-polki__",
				"block_heading_mod" 	=> "is--heading  is--center",
			));
			$this->tpl('landing-polki/preview', array(
				"block_prefix" 	=> "polki-preview__",
				"page_prefix" 	=> "lp-polki__",
			));
			$this->tpl('landing-polki/adaptiv', array(
				"block_prefix" 	=> "polki-adaptiv__",
				"page_prefix"	 => "lp-polki__",
				"block_heading_mod" 	=> "is--heading  is--center",
			));
		?>
		</div>
	</div>
</div> 