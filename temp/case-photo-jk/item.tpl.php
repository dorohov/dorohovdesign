<div class="orelstroy-page-content padtop">
	<div class="orelstroy__block-content"> 
		<div class="lp-orelstroy__block-content">	
		<?
			$GLOBALS['footer_type'] = 'slide';
			$this->tpl('landing-orelstroy/heading', array(
				"block_prefix" => "orelstroy_hb__",
				"page_prefix" => "lp-orelstroy__",
			));
			$this->tpl('landing-orelstroy/note', array(
				"block_prefix" => "orelstroy_note__",
				"page_prefix" => "lp-orelstroy__",
			));
			$this->tpl('landing-orelstroy/mockup', array(
				"block_prefix" => "orelstroy_mockup__",
				"page_prefix" => "lp-orelstroy__",
			));
			$this->tpl('landing-orelstroy/interface', array(
				"block_prefix" => "orelstroy_interface__",
				"page_prefix" => "lp-orelstroy__",
			));
			$this->tpl('landing-orelstroy/options', array(
				"block_prefix" => "orelstroy_options__",
				"page_prefix" => "lp-orelstroy__",
			));
			$this->tpl('landing-orelstroy/adaptiv', array(
				"block_prefix" => "orelstroy_adaptiv__",
				"page_prefix" => "lp-orelstroy__",
			));
		?>
		</div>
	</div>
</div> 