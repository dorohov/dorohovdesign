<div class="modal fade" id="modal-servises-reviews" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog _msr__dialog">
		<div class="modal-content _msr__content">
			<div class="modal-body _msr__body" >
				<button type="button" class="btn-site btn-close modal-btn-close" data-dismiss="modal" aria-hidden="true"></button>
				<div class="modal-block _msr__block">					
					<form action="/formsave/" method="POST" class="_apc__form form-site form-site__inline" data-metric-uid="site.formsave.order.<?=$this->post['id'];?>" >
						<input type="hidden" name="key" value="londonisthecapitalofgreatbritain">
						<input type="hidden" name="f[Форма]" id="modal-form-theme" value="Отправить заказ">
						<div class="_apc__form-item">		
							<label class="_apc__form-label" for="f[Имя]"> 
								Здравствуйте, меня зовут
							</label>
							<input type="text" class="_apc__form-input validate[required, custom[onlyLetterSp]]" data-css="name" name="f[Имя]"> ,
						</div>
						<!--
						<div class="_apc__form-item">
							<label class="_apc__form-label" for="">
								из компании
							</label>
							<input type="text" class="_apc__form-input" data-css="company" name="f[Компания]"> .
						</div>
						<div class="_apc__form-item">
							<label class="_apc__form-label" for="">
								Я хочу заказать у вас
							</label>
							<input type="text" class="_apc__form-input validate[required]" data-css="services" name="f[Хочу заказать]"> .
						</div>
						-->
						<div class="_apc__form-item">					
							<label class="_apc__form-label" for="f[Телефон]">
								Вы можете связаться со мной	по телефону
							</label>
							<input type="tel" class="_apc__form-input validate[required,custom[phone]]" data-css="tel" name="f[Телефон]">	
						</div>
						<div class="_apc__form-item">	
							<label class="_apc__form-label" for="">
								и по электронной почте
							</label>
							<input type="email" class="_apc__form-input validate[required,custom[email]]" data-css="email" name="f[E-mail]">
						</div>
						<div class="_apc__form-item">		
							<div class="_frms__agreement">
					            <input class="_frms__agreement-checkbox validate[required]" id="f[processing-rev]" name="f[processing-rev]" checked type="checkbox">
					            <label for="f[processing-rev]" class="_frms__agreement-label"></label>
								<label for="f[processing-rev]" class="_frms__agreement-text">
									Я согласен на обработку <a href="/agreement/">персональных данных</a>
								</label>           
							</div>
						</div>
						<div class="_apc__form-item _apc__form-btn">
							<button type="submit" class="btn-site btn-white-line btn-line">Отправить</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>  

<script>
	$('button[data-toggle=modal]').click(function(){
		var theme = 'Отправить заказ';
		if($(this).attr('data-title') != ''){
			theme = $(this).attr('data-title');
		}
		//$('#modal-servises-reviews').find('.modal-title').html(theme);
		$('#modal-servises-reviews').find('#modal-form-theme').val(theme);
	});
	$('form').each(function(){
		var key = $('input[name=key]').val();
		key = key.replace('london', 'tirana');
		key = key.replace('greatbritain', 'albania');
		$('input[name=key]').val(key);
	});
</script>