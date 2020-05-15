
<div class="col-xl-9 mt-3 main-panel-section">
	<div class="container-fluid">
		<div class="row mb-3">
			<div class="col-xl-12 bg-white pt-3 pb-3 rounded z-depth-1" style="margin-top: 80px;">
				<nav aria-label="breadcrumb">
					<ol class="breadcrumb mb-0">
						<li class="breadcrumb-item"><a href="#">Главная</a></li>
						<li class="breadcrumb-item"><a href="#">Продукты</a></li>
					</ol>
				</nav>
			</div>
		</div>
		<form class="row bg-white pt-3 pb-3 rounded z-depth-1 needs-validation" action="" method="post" enctype="multipart/form-data" novalidate>
			<?php 

				if ($flag == true) {
					echo '<div class="col-xl-12">
					<div class="alert alert-success alert-dismissible fade show" role="alert">
						Товар <strong>'.$_POST['name_product'].'</strong> добавлен успешно!
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
				</div>';
				}
			?>
			<div class="col-xl-3">
				<label for="name_product">Наименование <span class="text-danger"> *</span></label>
				<input type="text" id="name_product" name="name_product" class="form-control defaultFontSize" placeholder="Наименование товара" required>
				<div class="invalid-feedback">
					Введите пожалуйста наименование.
				</div>
			</div>
			<div class="col-xl-3">
				<label for="country">Страна</label>
				<input type="text" id="country" name="country" class="form-control defaultFontSize" placeholder="Страна производства" required>
				<div class="invalid-feedback">
					Введите пожалуйста страну.
				</div>
			</div>
			<div class="col-xl-3">
				<label for="city">Город <span class="text-danger"> *</span></label>
				<input type="text" id="city" name="city" class="form-control defaultFontSize" placeholder="Город производства" required>
				<div class="invalid-feedback">
					Введите пожалуйста город.
				</div>
			</div>
			<div class="col-xl-3">
				<label for="manufacturer">Производитель <span class="text-danger"> *</span></label>
				<input type="text" id="manufacturer" name="manufacturer" class="form-control defaultFontSize" placeholder="Наименование производителя" required>
				<div class="invalid-feedback">
					Введите пожалуйста производителя.
				</div>
			</div>
			<div class="col-xl-3 mt-3">
				<label for="date_build">Дата изготовления <span class="text-danger"> *</span></label>
				<input type="date" id="date_build" name="date_build" class="form-control defaultFontSize" placeholder="Дата произдвоства" required>
				<div class="invalid-feedback">
					Выберите пожалуйста дату изготовления.
				</div>
			</div>
			<div class="col-xl-2 mt-3">
				<label for="width">Ширина <span class="text-danger"> *</span></label>
				<input type="text" id="width" name="width" class="form-control defaultFontSize" placeholder="Ширина(мм)" required>
				<div class="invalid-feedback">
					Введите пожалуйста ширину.
				</div>
			</div>
			<div class="col-xl-2 mt-3">
				<label for="height">Высота <span class="text-danger"> *</span></label>
				<input type="text" id="height" name="height" class="form-control defaultFontSize" placeholder="Высота(мм)" required>
				<div class="invalid-feedback">
					Введите пожалуйста высоту.
				</div>
			</div>
			<div class="col-xl-2 mt-3">
				<label for="depth">Глубина <span class="text-danger"> *</span></label>
				<input type="text" id="depth" name="depth" class="form-control defaultFontSize" placeholder="Глубина(мм)" required>
				<div class="invalid-feedback">
					Введите пожалуйста глубину.
				</div>
			</div>
			<div class="col-xl-3 mt-3">
				<label for="material">Материал <span class="text-danger"> *</span></label>
				<input type="text" id="material" name="material" class="form-control defaultFontSize" placeholder="Материал" required>
				<div class="invalid-feedback">
					Введите пожалуйста материал.
				</div>
			</div>
			<div class="col-xl-3 mt-3">
				<label for="color_title">Цвет <span class="text-danger"> *</span></label>
				<select name="color_title" id="color_title" class="form-control defaultFontSize" required>
					<option value="">Выберите цвет</option>
					<?php foreach($list_colors as $item_color): ?>
						<option value="<?=$item_color['title'] . '-' .$item_color['color']?>"><?=$item_color['title']?></option>
					<?php endforeach; ?>
				</select>
				<div class="invalid-feedback">
					Выберите пожалуйста цвет.
				</div>
			</div>
			<div class="col-xl-3 mt-3">
				<label for="price">Стоимость <span class="text-danger"> *</span></label>
				<input type="number" id="price" name="price" class="form-control defaultFontSize" placeholder="Стоимость товара" required>
				<div class="invalid-feedback">
					Введите пожалуйста стоимость.
				</div>
			</div>
			<div class="col-xl-3 mt-3">
				<label for="discount">Скидка</label>
				<input type="number" id="discount" name="discount" class="form-control defaultFontSize" placeholder="Скидка" required>
				<div class="invalid-feedback">
					Введите пожалуйста скидку.
				</div>
			</div>
			<div class="col-xl-3 mt-3">
				<label for="id_type">Категория <span class="text-danger"> *</span></label>
				<select name="id_type" id="id_type" class="form-control defaultFontSize" required>
					<option value="">Выберите категорию</option>
					<?php foreach($show_sub_category as $item_sub_category):?>
					<option value="<?=$item_sub_category['id_sub_category']?>"><?=$item_sub_category['name_category']?></option>
					<?php endforeach;?>
				</select>
				<div class="invalid-feedback">
					Выберите пожалуйста категорию.
				</div>
			</div>
			<div class="col-xl-2 mt-3">
				<label for="count">Кол-во</label>
				<input type="number" class="form-control defaultFontSize" name="count" id="count" placeholder="Кол-во" required>
				<div class="invalid-feedback">
					Выберите пожалуйста количество.
				</div>
			</div>
			<div class="col-xl-5 mt-3">
				<label for="image">Изображение <span class="text-danger"> *</span></label>
				<div class="input-group">
					<div class="input-group-prepend">
						<span class="input-group-text defaultFontSize" id="inputGroupFileAddon01"><i class="fas fa-images"></i></span>
					</div>
					<div class="custom-file">
						<input type="file" id="image" name="image[]" multiple class="custom-file-input" id="inputGroupFile01"
							   aria-describedby="inputGroupFileAddon01" required>
						<label class="custom-file-label" for="inputGroupFile01">Выберите файл</label>
					</div>
				</div>
			</div>
			<div class="col-xl-5 mt-3">
				<label for="img_list">Миниатюры <span class="text-danger"> *</span></label>
				<div class="input-group">
					<div class="input-group-prepend">
						<span class="input-group-text defaultFontSize" id="inputGroupFileAddon01"><i class="fas fa-images"></i></span>
					</div>
					<div class="custom-file">
						<input type="file" id="img_list" name="img_list[]" multiple  class="custom-file-input" id="inputGroupFile01"
							   aria-describedby="inputGroupFileAddon01" required>
						<label class="custom-file-label" for="inputGroupFile01">Выберите файл</label>
					</div>
				</div>
			</div>
			<div class="col-xl-12 mt-3">
				<div class="form-group">
					<label for="description">Описание <span class="text-danger"> *</span></label>
					<textarea name="description" id="description" class="form-control defaultFontSize" cols="30" rows="4" placeholder="Описание товара" required></textarea>
					<div class="invalid-feedback">
						Выберите пожалуйста описание товара.
					</div>
				</div>
			</div>
			<div class="col-xl-2">
				<button type="submit" class="btn btn-primary ml-0 defaultFontSize">Добавить</button>
			</div>
		</form>
		<div class="row mt-3">
			<div class="col-xl-12 bg-white pt-3 pb-3 rounded z-depth-1">
				<div class="row ml-0 mr-0">
					<div class="col-12 pr-0 pl-0">
						<h5 class="h6 pb-3 pl-3 pt-3 mb-3" style="background: #ebf2f4">Карточки товаров</h5>
					</div>
				</div>
				<div class="row ml-0 mr-0">

					<?php foreach($panelProductView as $item): ?>

					<div class="jumbotron text-center hoverable p-4 mb-3">
						<div class="row">
							<?php $new_img_list = AdminController::img_view($item['image_product']); ?>
							<div class="col-md-4 offset-md-1 mx-1 my-1">
								<div class="view overlay">
									<img src="<?=base_url()?>upload/image_product/<?=$new_img_list[0]?>" class="img-fluid" alt="Sample image for first version of blog listing">
									<a>
										<div class="mask rgba-white-slight"></div>
									</a>
								</div>
							</div>
							<div class="col-md-7 text-md-left ml-1 mt-1">
								<a href="#!">
									<h6 class="h6"><?=$item['title'];?></h6>
								</a>
								<p class="font-weight-normal mb-1 d-flex justify-content-between border-bottom">
									<span>Категория:</span>
									<span><?=$item['name_category'];?></span>
								</p>
								<p class="font-weight-normal mb-1 d-flex justify-content-between border-bottom">
									<span>Страна / город:</span>
									<span><?=$item['country'] .' / '. $item['city']?></span>
								</p>
								<p class="font-weight-normal mb-1 d-flex justify-content-between border-bottom">
									<span>Производитель:</span>
									<span><?=$item['manufacturer'];?></span>
								</p>
								<p class="font-weight-normal mb-1 d-flex justify-content-between border-bottom">
									<span>Дата производства:</span>
									<span><?=str_replace('-', '/', $item['date_manufacturing'])?></span>
								</p>
								<p class="font-weight-normal mb-1 d-flex justify-content-between border-bottom">
									<span>Габариты:</span>
									<span><?=$item['width'] .' x '. $item['height'] .' x '. $item['depth'];?></span>
								</p>
								<p class="font-weight-normal mb-1 d-flex justify-content-between border-bottom">
									<span>Материал:</span>
									<span><?=$item['material'];?></span>
								</p>
								<p class="font-weight-normal mb-1 d-flex justify-content-between border-bottom">
									<span>Цвет:</span>
									<span>
										<span class="d-inline-block rounded-circle mr-1 border" style="width: 18px; height: 18px; margin-top: 2px; background:<?=$item['color'];?>"></span>
										<span><?=$item['color_title'];?></span>
									</span>
								</p>
								<div class="d-flex justify-content-between">
									<div class="price_and_discount d-flex">
										<?php if($item['discount'] > 0): ?>
											<?php 
												$discount = ((double)$item['price'] / 100) * (double)$item['discount'];
												$total = (double)$item['price'] - $discount;	
											?>
											<h6 class="h6 grey-text mt-2 pt-1"><del><?=$item['price']?><span class="ml-1">Р</span></del></h6>
											<h6 class="h6 text-danger mt-2 pt-1 ml-3"><?=floor($total)?><span class="ml-1">Р</span></h6>
										<? else: ?>
											<h6 class="h6 grey-text mt-2 pt-1"><?=$item['price']?><span class="ml-1">Р</span></h6>
										<?php endif; ?>
									</div>
									<div class="group-btn">
										<a class="btn btn-success btn-sm"><i class="fas fa-pencil-alt"></i></a>
										<a class="btn btn-danger btn-sm"><i class="fas fa-times"></i></a>
									</div>
								</div>
							</div>
						</div>
					</div>

					<?php endforeach; ?>

				</div>
			</div>
		</div>
	</div>
</div>



