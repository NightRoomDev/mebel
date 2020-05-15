<div class="col-md-3">
	<div class="set">
		<p class="bg-white z-depth-1 text-uppercase h-style">Каталог</p>
	</div>

	<div class="accordion z-depth-1" id="accordionExample">
		<div class="card rounded-0">
		<div class="card-header p-0" id="heading">
			<h5 class="mb-0 bg-white main-catalog-item">
				<a href="<?=base_url()?>product_list" class="btn btn-link w-100 p-2 pl-3 m-0 mt-1 mb-1 text-left" style="text-decoration: none; text-transform: none; font-size: 15px !important">
					<i class="fas fa-long-arrow-alt-right mr-2 orange-color"></i> 
					Все товары
				</a>
			</h5>
		</div>
		</div>
		<?php foreach ($show_category as $item_category):?>
		<div class="card z-depth-0">
			<div class="card-header p-0" id="heading<?=$item_category['id_category'];?>">
				<h5 class="mb-0 bg-white main-catalog-item">
					<button class="btn btn-link w-100 p-2 pl-3 m-0 mt-1 mb-1 text-left" style="text-decoration: none; text-transform: none; font-size: 15px !important" type="button" data-toggle="collapse" data-target="#collapse<?=$item_category['id_category'];?>" aria-expanded="true" aria-controls="collapseOne">
						<i class="fas fa-long-arrow-alt-right mr-2 orange-color"></i> 
						<?=$item_category['type_category'];?>
					</button>
				</h5>
			</div>
			<div id="collapse<?=$item_category['id_category'];?>" class="collapse" aria-labelledby="heading<?=$item_category['id_category'];?>"
				 data-parent="#accordionExample">
				<div class="card-body">
					<div class="list-group catalog-hover">
						<?php

							$query = $this->db->query('SELECT * FROM `sub_category` WHERE `sub_category`.`id_category` = ?', array($item_category['id_category']));
							$show_sub_category = $query->result_array();

							foreach ($show_sub_category as $item_sub_category)
							{
								echo '<a href="' . base_url(). 'product_list/' . $item_sub_category['id_sub_category'] . '" class="list-group-item list-group-item-action border-0" style="font-size: 15px !important">' . $item_sub_category['name_category'] . '</a>';
							}

						?>
					</div>
				</div>
			</div>
		</div>
		<?php endforeach; ?>
	</div>
</div>

