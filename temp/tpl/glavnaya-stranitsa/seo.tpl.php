<div class="_ipc__seo">
	<div class="row _ipc__seo-row">
		<div class="cols _ipc__seo-cols-left">	
			<div class="text-block _ipc__seo-text-block">
				<h1 class="_ipc__seo-heading">
					<?=get_field("heading", $id);?>
				</h1>
				<?
					the_content();
				?>
			</div>
		</div>
		<div class="cols _ipc__seo-cols-right">
			<h3 class="_ipc__seo-heading-h3">
				<?=get_field("note_heading", $id);?>
			</h3>
			<?=get_field("note_text", $id);?>
		</div>
	</div>	
</div>