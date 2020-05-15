<header>
	<nav class="navbar navbar-expand-lg navbar-dark stylish-color-dark">
		<div class="container">
			<a class="navbar-brand mb-2" href="/">
				<img src="../../../img/logo-full.svg" width="110" alt="Логотип">
			</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
					aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav mr-auto">
					<li class="nav-item">
						<a class="nav-link" href="/">Главная</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?php echo base_url()?>about">О нас</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?php echo base_url()?>contacts">Контакты</a>
					</li>
				</ul>
				<ul class="navbar-nav nav-flex-icons">
					<li class="nav-item">
						<a class="nav-link" href="<?php echo base_url()?>personal_area">
							<i class="fas fa-user mr-1"></i>Личный кабинет
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?php echo base_url()?>logout">
							<i class="fas fa-sign-out-alt mr-1"></i> Выйти
						</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>
</header>
<script>
	$('.navbar-nav a').each(function () {
		var location = window.location.href;
		var link = this.href;
		if(location == link) {
			$($(this).parent()).addClass('active');
		}
	});
</script>
<main class="mt-3">

	<div class="container">
		<div class="row">
			<div class="col-9 offset-3">
				<ul class="nav justify-content-end py-2">
					<li class="nav-item">
						<a class="nav-link text-dark" href="#!"><i class="fas fa-heart"></i></a>
					</li>
					<li class="nav-item">
						<a class="nav-link text-dark" href="#!"><i class="fas fa-shopping-cart"></i></a>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row">
