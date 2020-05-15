<div class="col-md-9">
	<?php foreach($details_product as $item_product): ?>
	<div class="row mt-1">
		<div class="col-lg-12 d-flex">
			<h3 class="h3"><?=$item_product['title'];?></h3>
			<h5 class="ml-2 mt-1">#<?=$item_product['id_product'];?></h5>
		</div>
	</div>
	<?php 

		$new_img_list = UserController::img_view($item_product['image_product']);	
		$new_thumbnails_list = UserController::img_view($item_product['thumbnails']);	
						
	?>
	<div class="row mt-2">
		<div class="col-lg-8 bg-white">
			<div class="row">
				<div class="col-lg-12 mt-3">
					<div class="slider slider-for">
						<?php for($i = 0; $i < count($new_img_list) - 1; $i++): ?>
							<div class="item-slider">
								<img src="<?=base_url()?>upload/image_product/<?=$new_img_list[$i]?>" class="img-fluid" alt="">
							</div>
						<?php endfor;?>
					</div>
				</div>
				<div class="col-lg-12 position-relative">
					<button class="btn-slick arrow-prev" style="width: 25px; left: 20px"><i class="fas fa-angle-left"></i></button>
					<button class="btn-slick arrow-next" style="width: 25px; right: 20px !important"><i class="fas fa-angle-right"></i></button>
					<div class="slider slider-nav d-flex justify-content-between pt-2">
						<?php for($i = 0; $i < count($new_thumbnails_list) - 1; $i++): ?>
							<div class="item-slider">
								<img src="<?=base_url()?>upload/thumbnails/<?=$new_thumbnails_list[$i]?>" class="img-fluid" alt="" width="120">
							</div>
						<?php endfor;?>
					</div>
				</div>
			</div>

		</div>
		<div class="col-lg-4 bg-white">
			<div class="d-flex mt-4">
				<div class="wrap-star">
					<i class="fas fa-star size-star is-star"></i>
					<i class="fas fa-star size-star is-star"></i>
					<i class="fas fa-star size-star is-star"></i>
					<i class="fas fa-star size-star is-star"></i>
					<i class="fas fa-star size-star is-star"></i>
				</div>
				<a href="#" class="feedback mt-1 ml-2">Отзывы (2)</a>
			</div>
			<?php 
				$discount = ((double)$item_product['price'] / 100) * (double)$item_product['discount'];
				$total = (double)$item_product['price'] - $discount;
			?>
			<div class="d-flex">
				<h4 class="h3 font-weight-bold mt-2"><?=floor($total);?><span class="ml-1">Р</span></h4>
			
			</div>
			<div class="d-flex">
				<del><h6 class="font-italic" style="color: #666"><?=$item_product['price'];?><span class="ml-1">Р</span></h6></del>
				<span class="h6 text-danger font-weight-bold ml-2">- <?=$item_product['discount'];?>%</span>
			</div>
			<div class="d-flex flex-column mt-2 mb-2 border-top border-bottom pt-2">
				<div class="delivery-methods flex-column mb-2 d-flex">
					<div class="wrapper w-100">
						<img src="https://hoff.ru/local/templates/redesign/frontend/dist/images/required/delivery.svg" style="width: 40px; padding-bottom: 5px" alt="">
						<span class="font-weight-bold d-inline-block ml-2 mt-1" style="font-size: 18px">Курьером</span>
					</div>
					<div class="wrapper w-100 mt-2">
						<img src="https://hoff.ru/local/templates/redesign/frontend/dist/images/required/pickup.svg" style="width: 40px" alt="">
						<span class="font-weight-bold d-inline-block ml-2 mt-1" style="font-size: 18px">Самовывоз</span>
					</div>
				</div>
			</div>
			<p style="font-size: 16px" class="mt-2">Доступно для доставки <?=$item_product['count'];?> шт.</p>
			<div class="d-flex">
				<a href="#form-feedback" class="btn btn-outline-primary w-100 item-link">Оставить отзыв</a>
			</div>
			<div class="d-flex mt-3">
				<a href="<?=base_url()?>like_product/<?=$item_product['id_product'];?>" class="pl-2 pr-2 mr-0 ml-2 text-dark align-self-center"><i class="far fa-heart" style="font-size: 20px"></i></a>
				<a href="<?=base_url()?>checkout_order/<?=$item_product['id_product'];?>" class="btn btn-orange btn-sm p-3 ml-3 w-100"><i class="fas fa-shopping-cart mr-1 ml-1 mt-1"></i> КУПИТЬ</a>
			</div>
		</div>
	</div>
	<div class="row mt-3">
		<div class="col-lg-12 bg-white pr-4 pl-4 pt-4">
			<h5 class="h6 pb-3 pl-3 pt-3" style="background: #ebf2f4">Описание</h5>
			<p class="border-bottom pb-3 pt-2"><?=$item_product['description'];?></p>
		</div>
		<div class="col-lg-12 bg-white pl-4 pr-4 pb-5">
			<p class="font-weight-normal mb-2 d-flex justify-content-between border-bottom-dotted">
				<span>Категория:</span>
				<span><?=$item_product['name_category'];?></span>
			</p>
			<p class="font-weight-normal mb-2 mt-2 d-flex justify-content-between border-bottom-dotted">
				<span>Страна / город:</span>
				<span><?=$item_product['country'];?> / <?=$item_product['city'];?></span>
			</p>
			<p class="font-weight-normal mb-2 mt-2 d-flex justify-content-between border-bottom-dotted">
				<span>Производитель:</span>
				<span><?=$item_product['manufacturer'];?></span>
			</p>
			<p class="font-weight-normal mb-2 mt-2 d-flex justify-content-between border-bottom-dotted">
				<span>Дата производства:</span>
				<?php $date_manufacturing = str_replace('-', '/', $item_product['date_manufacturing']) ?>
				<span><?=$date_manufacturing;?></span>
			</p>
			<p class="font-weight-normal mb-2 mt-2 d-flex justify-content-between border-bottom-dotted">
				<span>Габариты:</span>
				<span><?=$item_product['width'];?> мм х <?=$item_product['height'];?> мм х <?=$item_product['depth'];?> мм</span>
			</p>
			<p class="font-weight-normal mb-2 mt-2 d-flex justify-content-between border-bottom-dotted">
				<span>Материал:</span>
				<span><?=$item_product['material'];?></span>
			</p>
			<p class="font-weight-normal mb-2 mt-2 d-flex justify-content-between border-bottom-dotted">
				<span>Цвет:</span>
				<span class="d-flex">
					<span class="d-inline-block rounded-circle mr-1 border" style="width: 18px; height: 18px; margin-top: 2px; background:<?=$item_product['color'];?>"></span>
					<span><?=$item_product['color_title'];?></span>
				</span>
			</p>
		</div>
	</div>
	<div class="row bg-white mt-3" id="item-link-element">
		<div class="col-lg-12 pr-0 pl-0">
			<div class="accordion-container">
				<div class="set">
					<a class="pl-4 pr-4 link_details_feedback"><span class="pl-2">Оставить отзыв<i class="fa fa-angle-down"></i></span></a>
					<div class="content">
						<div class="container pt-4">
							<form action="" class="form-feedback row" method="post">
								<div class="col-lg-4 ml-3">
									<div class="form-group">
										<label for="country" class="font-weight-bold">Как к вам обращаться <span class="text-danger"> *</span></label>
										<input type="text" class="form-control rounded-0 font-size-filter" id="country" name="country" placeholder="">
									</div>
								</div>
								<div class="col-lg-4 ml-3">
									<div class="form-group">
										<label for="country" class="font-weight-bold">Введите E-mail <span class="text-danger"> *</span></label>
										<input type="email" class="form-control rounded-0 font-size-filter" id="country" name="country" placeholder="">
									</div>
								</div>
								<div class="col-lg-12">
									<div class="d-flex">
										<p style="color: #a1a1a1" class="font-size-filter mb-2">Оцените товар</p>
										<div class="wrap-star mt-2">
											<i class="fas fa-star size-star is-star"></i>
											<i class="fas fa-star size-star is-star"></i>
											<i class="fas fa-star size-star is-star"></i>
											<i class="fas fa-star size-star is-star"></i>
											<i class="fas fa-star size-star is-star"></i>
										</div>
									</div>
								</div>
								<div class="col-lg-8 ml-3 pr-0">
									<div class="form-group">
										<label for="country" class="font-weight-bold">Отзыв <span class="text-danger"> *</span></label>
										<textarea name="" id="" class="form-control rounded-0 font-size-filter" rows="4"></textarea>
									</div>
								</div>
								<div class="col-lg-3">
									<p style="color: #a1a1a1" class="font-size-filter mt-3 pt-3">Все отзывы публикуются после проверки модератором.</p>
								</div>
								<div class="col-lg-8 ml-3 pr-0">
									<div class="form-group">
										<label for="country" class="font-weight-bold">Артикулы товара</label>
										<input type="email" class="form-control rounded-0 font-size-filter" id="country" name="country" placeholder="">
									</div>
								</div>
								<div class="col-lg-3">
									<p style="color: #a1a1a1" class="font-size-filter mt-3">Здесь вы можете вставить артикулы товаров.</p>
								</div>
								<div class="col-lg-2">
									<div class="form-group">
										<input type="submit" class="form-control btn btn-orange h-100">
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="row bg-white mt-3 pb-4">
		<div class="col-lg-12 pr-4 pl-4 pt-4 mb-4">
			<h5 class="h6 pb-3 pl-3 pt-3" style="background: #ebf2f4">Все отзывы</h5>
		</div>
		<div class="col-lg-12 pl-4 pr-4 pb-5">
			<h6 class="h6 ml-3">Ирина</h6>
			<div class="d-flex ml-3">
				<div class="wrap-star">
					<i class="fas fa-star size-star is-star"></i>
					<i class="fas fa-star size-star is-star"></i>
					<i class="fas fa-star size-star is-star"></i>
					<i class="fas fa-star size-star is-star"></i>
					<i class="fas fa-star size-star is-star"></i>
				</div>
				<p class="feedback mt-1 ml-2">05 мая 2020</з>
			</div>
			<p class="ml-3">Очень довольны покупкой, диван без швов, спать на нем одно удовольствие.</p>
			<a href="#" class="ml-3" style="border-bottom: 1px dotted">Ответить</a>
			<hr>
			<h6 class="h6 ml-3">Юлия</h6>
			<div class="d-flex ml-3">
				<div class="wrap-star">
					<i class="fas fa-star size-star is-star"></i>
					<i class="fas fa-star size-star is-star"></i>
					<i class="fas fa-star size-star is-star"></i>
					<i class="fas fa-star size-star is-star"></i>
					<i class="fas fa-star size-star is-star"></i>
				</div>
				<p class="feedback mt-1 ml-2">29 апреля 2020</з>
			</div>
			<p class="ml-3">Диван в целом хороший, спать удобно. Купили не так давно , посмотрим дальнейшем его эксплуатацию . Единственное что гремят ламелили, иногда.</p>
			<a href="#" class="ml-3" style="border-bottom: 1px dotted">Ответить</a>
			<hr>
		</div>
	</div>
	<?php endforeach; ?>
</div>

