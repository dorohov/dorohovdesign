<div class="case-page padtop">
	<div class="case__block"> 
		<div class="case__content">	
		<?
			$GLOBALS['footer_type'] = 'slide';
			$this->tpl('case/header', array(
				"block_prefix" 	=> "case-header__",
				"block_mod" 	=> "is--orionprint",
				"page_prefix" 	=> "case__",
			));
			$this->tpl('case/note', array(
				"block_prefix" 	=> "case-note__",
				"block_mod" 	=> "is--orionprint",
				"page_prefix" 	=> "case__",
				"block_id" 		=> "to_note"
			));
			$this->tpl('case-orionprint/steps', array(
				"block_prefix" 	=> "case-steps__",
				"block_mod" 	=> "is--orionprint",
				"page_prefix" 	=> "case__",
				"block_id" 		=> "to_steps"
			));
			$this->tpl('case/result', array(
				"block_prefix" 	=> "case-result__",
				"block_mod" 	=> "is--orionprint",
				"page_prefix" 	=> "case__",
				"block_id" 		=> "to_result"
			));
			$this->tpl('case/income', array(
				"block_prefix" 	=> "case-income__",
				"block_mod" 	=> "is--orionprint",
				"page_prefix" 	=> "case__",
				"block_id" 		=> "to_income"
			));
		?>
		</div>
	</div>
</div>