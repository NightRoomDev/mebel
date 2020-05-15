<div class="col-md-9">
	<div class="row">
		<div class="col-md-12">
			<div class="accordion-container">
				<div class="set bg-white z-depth-1 text-uppercase">
					<a href="#">
						Подбор по параметрам
						<i class="fa fa-angle-down mr-2 size-arrow-filter"></i>
					</a>
					<div class="content">
						<div class="container pt-4">
							<form action="" class="form-filter row" method="post">
								<div class="col-md-12 mb-2">
									<h6 class="h5 pb-2 border-bottom">Общее</h6>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label for="country" class="font-weight-bold font-size-filter">Страна</label>
										<input type="text" class="form-control rounded-0 font-size-filter" id="country" name="country" placeholder="">
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label for="city" class="font-weight-bold font-size-filter">Город</label>
										<input type="text" class="form-control rounded-0 font-size-filter" id="city" name="city" placeholder="">
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label for="city" class="font-weight-bold font-size-filter">Производитель</label>
										<input type="text" class="form-control rounded-0 font-size-filter" id="city" name="city" placeholder="">
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label for="color" class="font-weight-bold font-size-filter">Цвет</label>
										<select name="color" id="color" class="form-control rounded-0 font-size-filter">
											<option value="">Ничего не выбрано</option>
										</select>
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label for="material" class="font-weight-bold font-size-filter">Материал</label>
										<select name="material" id="material" class="form-control rounded-0 font-size-filter">
											<option value="">Ничего не выбрано</option>
											<option value="Дерево">Дерево</option>
											<option value="Ткань">Ткань</option>
											<option value="Искусственная кожа">Искусственная кожа</option>
											<option value="Натуральная кожа">Натуральная кожа</option>
										</select>
									</div>
								</div>
								<div class="col-md-12 mb-2 mt-2">
									<h6 class="h5 pb-2 border-bottom">Размер</h6>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label for="width" class="font-weight-bold font-size-filter">Ширина, см</label>
										<input type="text" class="form-control rounded-0 mb-2 font-size-filter" id="width" name="width">
										<div id="slider-range-width"></div>
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label for="height" class="font-weight-bold font-size-filter">Высота, см</label>
										<input type="text" class="form-control rounded-0 mb-2 font-size-filter" id="height" name="height">
										<div id="slider-range-height"></div>
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label for="depth" class="font-weight-bold font-size-filter">Глубина, см</label>
										<input type="text" class="form-control rounded-0 mb-2 font-size-filter" id="depth" name="depth">
										<div id="slider-range-depth"></div>
									</div>
								</div>
								<div class="col-md-12 mb-2 mt-2">
									<h6 class="h5 pb-2 border-bottom">Другое</h6>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label for="price" class="font-weight-bold font-size-filter">Цена (руб.)</label>
										<input type="text" class="form-control rounded-0 mb-2 font-size-filter" id="price" name="price">
										<div id="slider-range-price"></div>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="row mt-3 mb-1 pb-2">
		<div class="col-md-12 d-flex justify-content-between">
			<div class="custom-control custom-checkbox mt-1">
				<input type="checkbox" class="custom-control-input" id="availability_checked">
				<label class="custom-control-label" style="font-size: 18px; font-family: Roboto,sans-serif; font-weight: 500" for="availability_checked">Товары в наличии</label>
			</div>
			<div class="custom-control custom-checkbox mt-1">
				<input type="checkbox" class="custom-control-input" id="discount_checked">
				<label class="custom-control-label" style="font-size: 18px; font-family: Roboto,sans-serif; font-weight: 500" for="discount_checked">Наличие скидки</label>
			</div>
			<div class="wrap-view d-flex">
				<a class="border bg-white">
					<i class="fas fa-th-large m-2" style="font-size: 17px"></i>
				</a>
				<a class="border bg-white ml-1">
					<i class="fas fa-list m-2" style="font-size: 17px"></i>
				</a>
			</div>
		</div>
	</div>

	<div class="row">

		<?php if (!empty($show_product)): ?>

			<div class="col-md-12 d-flex mt-3">
				<?php foreach($name_count as $item):?>

					<?php if ($this->uri->segment(2, 0) != NULL):?>
						<h3 class="h3"><?=$item['name_category']?></h3>
						<p class="wrap-count_product pl-4 pr-4 pt-1 pb-1 defaultFontSize ml-2 mt-1 font-weight-bold"><?=$item['count_product'] . " товаров"?></p>
					<?php endif; ?>

				<?php endforeach;?>
			</div>

			<?php foreach($show_product as $item_product): ?>
				<div class="col-4 mt-3">
					<div class="card position-relative">
						<?php if($item_product['discount'] > 0):?>
							<div class="discount bg-primary position-absolute text-white pt-1 pb-1 pl-2 pr-2 text-center font-weight-bold discount-pos">
								<?=$item_product['discount'];?>%
							</div>
						<?php endif; ?>
						<?php 

							$new_img_list = UserController::img_view($item_product['image_product']);						
						
						?>
						<img class="card-img-top border-bottom" src="<?=base_url()?>/upload/image_product/<?=$new_img_list[0]?>" alt="Card image cap">
						<div class="card-body">
							<div class="d-flex justify-content-between">
								<h6 class="card-title"><?=$item_product['title'];?></h6>
								<a href="<?=base_url()?>like_product/<?=$item_product['id_product']?>" class="pl-2 pr-2 mr-0 ml-2 text-dark"><i class="far fa-heart" style="font-size: 20px"></i></a>
							</div>
							<div class="d-flex pb-0">
								<?php if($item_product['discount'] > 0):?>
									<?php
									$discount = ((double)$item_product['price'] / 100) * (double)$item_product['discount'];
									$total = (double)$item_product['price'] - $discount;
									?>
									<p class="card-text mb-1"><del><?=$item_product['price'];?><span class="ml-1">Р</span></del></p>
									<p class="card-text mb-1 ml-2 font-weight-bold text-danger"><?=strtok($total, '.')?><span class="ml-1">Р</span></p>
								<?php else: ?>
									<p class="card-text mb-1 font-weight-bold text-dark"><?=$item_product['price'];?><span class="ml-1">Р</span></p>
								<?php endif; ?>
							</div>
							<div class="d-flex mt-2">
								<p class="d-flex flex-column mb-2">
									<span class="small color-dimensions">Ширина</span>
									<span class="small"><?=$item_product['width'];?> мм</span>
								</p>
								<span class="ml-2 mr-2 pt-1">x</span>
								<p class="d-flex flex-column mb-2">
									<span class="small color-dimensions">Высота</span>
									<span class="small"><?=$item_product['height'];?> мм</span>
								</p>
								<span class="ml-2 mr-2 pt-1">x</span>
								<p class="d-flex flex-column mb-2">
									<span class="small color-dimensions">Глубина</span>
									<span class="small"><?=$item_product['depth'];?> мм</span>
								</p>
							</div>
							<div class="d-flex">
								<a href="<?=base_url()?>details_product/<?=$item_product['id_product']?>" class="btn btn-orange btn-sm pl-3 pr-3 mr-0 ml-0">Подробнее</a>
								<a href="#" class="btn btn-orange btn-sm pl-2 pr-2 mr-0 ml-2"><i class="fas fa-shopping-cart mr-1 ml-1"></i></a>
							</div>
						</div>
					</div>
				</div>
			<?php endforeach; ?>

		<?php else: ?>

		<div class="col-md-12 d-flex justify-content-center" style="height: 400px">
			<h2 class="text-center w-75 align-self-center">
				По данной категории товаров не найдено.
				<br>
				<i class="far fa-sad-tear fa-2x mt-3"></i>
			</h2>
		</div>

		<?php endif; ?>

	</div>
</div>
