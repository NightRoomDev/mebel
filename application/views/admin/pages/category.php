<div class="col-xl-9 mt-3">
	<div class="container-fluid">
		<div class="row mb-3">
			<div class="col-xl-12 bg-white pt-3 pb-3 rounded z-depth-1" style="margin-top: 80px;">
				<nav aria-label="breadcrumb">
					<ol class="breadcrumb mb-0">
						<li class="breadcrumb-item"><a href="#">Главная</a></li>
						<li class="breadcrumb-item"><a href="#">Категории</a></li>
					</ol>
				</nav>
			</div>
		</div>
		<div class="row">
		<div class="col-xl-12">
			<ul class="nav nav-tabs" id="myTab" role="tablist">
				<li class="nav-item">
					<a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Категория</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Подкатегория</a>
				</li>
			</ul>
			<div class="tab-content" id="myTabContent">
				<div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
					<form class="row bg-white pb-3 rounded z-depth-1 needs-validation" action="" method="post" novalidate>
						<?php 

							if ($flag['category'] == true) {
								echo '<div class="col-xl-12 mt-3">
								<div class="alert alert-success alert-dismissible fade show" role="alert">
									Категория <strong>'.$_POST['type_category'].'</strong> добавлена успешно!
									<button type="button" class="close" data-dismiss="alert" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>
							</div>';
							}

						?>
						<div class="col-xl-4 mt-3">
							<label for="type_category">Категория <span class="text-danger"> *</span></label>
							<input type="text" id="type_category" name="type_category" class="form-control defaultFontSize" placeholder="Введите наименование категории" required>
							<div class="invalid-feedback">
								Введите пожалуйста категорию.
							</div>
						</div>
						<div class="col-xl-2 mt-4">
							<button type="submit" class="btn btn-primary mt-2" name="add_category">Добавить</button>
						</div>
					</form>
				</div>
				<div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
					<form class="row bg-white pb-3 rounded z-depth-1 needs-validation" action="" method="post" novalidate>
						<?php 

							if ($flag['sub_category'] == true) {
								echo '<div class="col-xl-12 mt-3">
								<div class="alert alert-success alert-dismissible fade show" role="alert">
									Подкатегория <strong>'.$_POST['sub_category'].'</strong> добавлена успешно!
									<button type="button" class="close" data-dismiss="alert" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>
							</div>';
							}

						?>
						<div class="col-xl-4 mt-3">
							<label for="id_category">Категория <span class="text-danger"> *</span></label>
							<select name="id_category" id="id_category" class="form-control defaultFontSize" required>
								<option value="0">Выберите категорию</option>
								<?php foreach($show_category as $item_category): ?>
									<option value="<?=$item_category['id_category']?>"><?=$item_category['type_category']?></option>
								<?php endforeach; ?>
							</select>
							<div class="invalid-feedback">
								Выберите пожалуйста категорию.
							</div>
						</div>
						<div class="col-xl-4 mt-3">
							<label for="sub_category">Подкатегория <span class="text-danger"> *</span></label>
							<input type="text" id="sub_category" name="sub_category" class="form-control defaultFontSize" placeholder="Введите наименование подкатегории" required>
							<div class="invalid-feedback">
								Введите пожалуйста подкатегорию.
							</div>
						</div>

						<div class="col-xl-2 mt-4">
							<button type="submit" class="btn btn-primary mt-2" name="add_sub_category">Добавить</button>
						</div>
					</form>
				</div>
			</div>
		</div>
		</div>
		<div class="row mt-3">
			<div class="col-xl-12 bg-white pt-3 pb-3 rounded z-depth-1">
				<h5 class="h6 pb-3 pl-3 pt-3 mb-3" style="background: #ebf2f4">Список категорий</h5>
				<table id="myTable" class="table table-striped table-bordered" style="width:100%">
					<thead class="grey lighten-2">
						<tr>
							<th scope="col" class="text-center">#</th>
							<th scope="col">Категория</th>
							<th scope="col">Подкатегория</th>
							<th scope="col" class="text-center"><i class="fas fa-tools"></i></th>
						</tr>
					</thead>
					<tbody>
						<?php foreach($panelCategoryView as $item): ?>
							<tr>
								<th scope="row" class="vertical-middle text-center"><?=$item['id_sub_category']?></th>
								<td class="vertical-middle"><?=$item['type_category'] ?></td>
								<td class="vertical-middle"><?=$item['name_category'] ?></td>
								<td class="vertical-middle text-center"><a href="" class="btn btn-sm btn-success"><i class="fas fa-pencil-alt"></i></a></td>		
							</tr>
						<?php endforeach; ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
<script>

	var url = document.location.toString();
	
	if (url.match('#')) {
		$('.nav-tabs a[href="#' + url.split('#')[1] + '"]').tab('show');
	} 

	$('.nav-tabs a').on('shown.bs.tab', function (e) {
		window.location.hash = e.target.hash;
	})

</script>

