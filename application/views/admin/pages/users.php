<div class="col-xl-9 mt-3">
	<div class="container-fluid">
		<div class="row mb-3">
			<div class="col-xl-12 bg-white pt-3 pb-3 rounded z-depth-1" style="margin-top: 80px;">
				<nav aria-label="breadcrumb">
					<ol class="breadcrumb mb-0">
						<li class="breadcrumb-item"><a href="#">Главная</a></li>
						<li class="breadcrumb-item"><a href="#">Пользователи</a></li>
					</ol>
				</nav>
			</div>
		</div>
		<div class="row mt-3">
			<div class="col-xl-12 bg-white pt-3 pb-3 rounded z-depth-1">
				<h5 class="h6 pb-3 pl-3 pt-3 mb-3" style="background: #ebf2f4">Список пользователей</h5>
				<table id="myTable" class="table table-striped table-bordered" style="width:100%">
					<thead class="grey lighten-2">
					<tr>
						<th scope="col" class="vertical-middle text-center">#</th>
						<th scope="col">ФИО</th>
						<th scope="col">Адрес</th>
						<th scope="col">Эл.почта</th>
						<th scope="col">Телефон</th>
						<th scope="col">Логин</th>
						<th scope="col" class="text-center"><i class="fas fa-eye"></i></th>
					</tr>
					</thead>
					<tbody>
						<?php foreach ($show_users as $item_users): ?>
						<tr>
							<th scope="row" class="vertical-middle text-center"><?=$item_users['id_user']?></th>
							<td class="vertical-middle"><?=$item_users['fio'] ?></td>
							<td class="vertical-middle"><?=$item_users['address']?></td>
							<td class="vertical-middle"><a href="mailto:<?=$item_users['email']?>" class="table-link" style="text-decoration: underline"><?=$item_users['email']?></a></td>
							<td class="vertical-middle"><?=$item_users['phone']?></td>
							<td class="vertical-middle"><?=$item_users['login']?></td>
							<td class="text-center">
								<a href="<?=base_url()?>detailsUser" class="btn btn-success btn-sm"><i class="fas fa-user"></i></a>
							</td>
						</tr>
						<?php endforeach; ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>


