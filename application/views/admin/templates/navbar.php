<header>
	<nav class="navbar fixed-top navbar-expand-lg navbar-dark stylish-color-dark scrolling-navbar">
		<a class="navbar-brand ml-4 mr-5 pl-5 pr-5 mb-2" href="<?php echo base_url() ?>panel"><img src="../../../img/logo-full.svg" width="110" alt="Логотип"></a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
				aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item">
					<a class="nav-link" href="<?=base_url()?>panel">Главная <span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item">
					<a class="nav-link min-sidebar" href="#"><i class="fas fa-search"></i></a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#"><i class="fas fa-compress-arrows-alt"></i></a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#"><i class="fas fa-cogs"></i></a>
				</li>
			</ul>
			<ul class="navbar-nav nav-flex-icons">
				<li class="nav-item">
					<a href="<?=base_url()?>out" class="nav-link"><i class="fas fa-sign-out-alt"></i>Выйти</a>
				</li>
			</ul>
		</div>
	</nav>
</header>
<script>

	var flag = false;

	$('.min-sidebar').on('click', function() {


		flag = !flag;

		if (flag == true) {
			$('.fullheight-sidebar').removeClass('col-xl-3').addClass('col-xl-1');
			$('.main-panel-section').removeClass('col-xl-9').addClass('col-xl-11');
		} else {
			$('.fullheight-sidebar').removeClass('col-xl-1').addClass('col-xl-3');
			$('.main-panel-section').removeClass('col-xl-11').addClass('col-xl-9');
		}

	});
</script>
