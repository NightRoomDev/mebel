<div class="col-xl-9 mt-3">
	<div class="container-fluid">
		<div class="row mb-3">
			<div class="col-xl-12 bg-white pt-3 pb-3 rounded z-depth-1" style="margin-top: 80px;">
				<nav aria-label="breadcrumb">
					<ol class="breadcrumb mb-0">
						<li class="breadcrumb-item"><a href="#">Главная</a></li>
						<li class="breadcrumb-item"><a href="#">Изменение категории</a></li>
					</ol>
				</nav>
			</div>
		</div>
		<form class="row bg-white pb-3 rounded z-depth-1 needs-validation" action="" method="post" novalidate>
			<?php foreach($show_category_update as $item_category):?>
			<div class="col-xl-4 mt-3">
				<label for="type_category">Категория <span class="text-danger"> *</span></label>
				<input type="text" id="type_category" name="type_category" class="form-control defaultFontSize" placeholder="Введите наименование категории" required value="<?=$item_category['type_category']?>">
				<div class="invalid-feedback">
					Введите пожалуйста категорию.
				</div>
			</div>
			<div class="col-xl-5"></div>
			<div class="col-xl-4 mt-3">
				<label for="sub_category">Подкатегория <span class="text-danger"> *</span></label>
				<input type="text" id="sub_category" name="sub_category" class="form-control defaultFontSize" placeholder="Введите наименование подкатегории" required value="<?=$item_category['sub_category']?>">
				<div class="invalid-feedback">
					Введите пожалуйста подкатегорию.
				</div>
			</div>
			<div class="col-xl-7"></div>
			<div class="col-xl-2 mt-4">
				<button type="submit" class="btn btn-primary mt-2">Изменить</button>
			</div>
			<?php endforeach; ?>
		</form>
	</div>
</div>

