<div class="flex-body">
	<form class="form-signin text-center needs-validation" action="" method="post" novalidate>
		<img class="mb-4" src="https://img.icons8.com/bubbles/2x/admin-settings-male.png" alt="" width="112" height="112">
		<?php if($flag == true) {
			echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
			Логин или пароль введен не верно.
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			</button>
		</div>';
		}
			
		?>
		<h1 class="h4 mb-3 font-weight-normal">Вход в систему</h1>
		<label for="login" class="sr-only">Email address</label>
		<input type="email" id="login" class="form-control" placeholder="Логин" name="login" required autofocus>
		<label for="password" class="sr-only">Password</label>
		<input type="password" id="password" class="form-control" placeholder="Пароль" name="password" required>
		<button class="btn btn-md btn-orange btn-block" type="submit">Войти</button>
		<p class="mt-5 mb-3 text-muted">&copy; 2020. ФИТУ 2- 5.</p>
	</form>
</div>

