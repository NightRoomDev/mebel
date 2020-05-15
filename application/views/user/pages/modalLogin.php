<div class="modal fade" id="orangeModalSubscription" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
	 aria-hidden="true">
	<div class="modal-dialog modal-notify modal-warning light-blue darken-3" role="document">
		<!--Content-->
		<form class="modal-content needs-validation" action="login" method="post" novalidate>
			<!--Header-->
			<div class="modal-header text-center stylish-color-dark">
				<h5 class="modal-title white-text w-100 font-weight-bold py-2">Авторизация</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true" class="white-text">&times;</span>
				</button>
			</div>

			<!--Body-->
			<div class="modal-body">
				<div class="md-form mb-5">
					<i class="fas fa-user prefix grey-text fa-3x"></i>
					<input type="text" id="login" name="login" class="form-control validate defaultFontSize" required>
					<label data-error="wrong" data-success="right" for="login" class="defaultFontSize">Ваш логин</label>
				</div>

				<div class="md-form">
					<i class="fas fa-lock prefix grey-text"></i>
					<input type="password" id="password" name="password" class="form-control validate defaultFontSize" required>
					<label data-error="wrong" data-success="right" for="password" class="defaultFontSize">Ваш пароль</label>
				</div>
			</div>

			<!--Footer-->
			<div class="modal-footer justify-content-center d-flex justify-content-between">
				<p>Нет аккаунта? <a href="<?php echo base_url()?>registration">Создайте!</a></p>
				<button type="submit" class="btn btn-orange waves-effect defaultFontSize">Войти <i class="fas fa-paper-plane-o ml-1"></i></button>
			</div>
		</form>
		<!--/.Content-->
	</div>
</div>


