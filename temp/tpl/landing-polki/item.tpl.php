<div class="dixion-page-content padtop">
	<div class="dixion__block-content"> 
		<div class="lp-dixion__block-content">	
		<?
			$GLOBALS['footer_type'] = 'slide';
			$this->tpl('landing-dixion/heading', array(
				"block_prefix" => "dixion_hb__",
				"page_prefix" => "lp-dixion__",
			));
			$this->tpl('landing-dixion/video', array(
				"block_prefix" => "dixion_video__",
				"page_prefix" => "lp-dixion__",
			));
			$this->tpl('landing-dixion/note', array(
				"block_prefix" => "dixion_note__",
				"page_prefix" => "lp-dixion__",
			));
			$this->tpl('landing-dixion/mobile', array(
				"block_prefix" => "dixion_mobile__",
				"page_prefix" => "lp-dixion__",
			));
			$this->tpl('landing-dixion/interface', array(
				"block_prefix" => "dixion_interface__",
				"page_prefix" => "lp-dixion__",
			));
			$this->tpl('landing-dixion/options', array(
				"block_prefix" => "dixion_options__",
				"page_prefix" => "lp-dixion__",
			));
			$this->tpl('landing-dixion/adaptiv', array(
				"block_prefix" => "dixion_adaptiv__",
				"page_prefix" => "lp-dixion__",
			));
		?>
		</div>
	</div>
</div> 