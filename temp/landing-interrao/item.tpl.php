<div class="orionprint-page-content padtop">
	<div class="orionprint__block-content"> 
		<div class="lp-orionprint__block-content">	
		<?
			$GLOBALS['footer_type'] = 'slide';
			$this->tpl('landing-orionprint/heading', array(
				"block_prefix" 	=> "orionprint_hb__",
				"page_prefix" 	=> "lp-orionprint__",
				"block_bg"		=>	$this->path('img')."/lp-orionprint/bg-header.jpg",
			));
			$this->tpl('landing-orionprint/note', array(
				"block_prefix" 	=> "orionprint_note__",
				"page_prefix" 	=> "lp-orionprint__",
				"heading_mod" 	=> "is--heading  is--center  is--xl"
			));
			$this->tpl('landing-orionprint/mockup', array(
				"block_prefix" 	=> "orionprint_mockup__",
				"page_prefix" 	=> "lp-orionprint__",
				"block_bg"		=>	$this->path('img')."/lp-orionprint/bg-mockup.jpg",
			));
			$this->tpl('landing-orionprint/interface', array(
				"block_prefix" => "orionprint_interface__",
				"page_prefix" => "lp-orionprint__",
				"heading_mod" 	=> "is--heading  is--center  is--white"
			));
			$this->tpl('landing-orionprint/options', array(
				"block_prefix" => "orionprint_options__",
				"page_prefix" => "lp-orionprint__",
				"heading_mod" 	=> "is--heading  is--lg"
			));
			$this->tpl('landing-orionprint/cabinet', array(
				"block_prefix" => "orionprint_cabinet__",
				"page_prefix" => "lp-orionprint__",
				"heading_mod" 	=> "is--heading  is--center"
			));
			$this->tpl('landing-orionprint/adaptiv', array(
				"block_prefix" => "orionprint_adaptiv__",
				"page_prefix" => "lp-orionprint__",
				"heading_mod" 	=> "is--heading  is--center"
			));
		?>
		</div>
	</div>
</div> 