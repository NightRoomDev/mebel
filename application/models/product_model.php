<?php

class Product_model extends CI_Model {

	// Добавление товара
	public function add_product(
		$title,
		$country,
		$city,
		$manufacturer,
		$date_manufacturing,
		$width,
		$height,
		$depth,
		$price,
		$material,
		$image_product,
		$thumbnails,
		$description,
		$discount,
		$leader,
		$count_view,
		$id_category,
		$color,
		$color_title,
		$count
	)
	{
		$data = array(
			'title' => $title,
			'country' => $country,
			'city' => $city,
			'manufacturer' => $manufacturer,
			'date_manufacturing' => $date_manufacturing,
			'width' => $width,
			'height' => $height,
			'depth' => $depth,
			'price' => $price,
			'material' => $material,
			'image_product' => $image_product,
			'thumbnails' => $thumbnails,
			'description' => $description,
			'discount' => $discount,
			'leader' => $leader,
			'count_view' => $count_view,
			'id_sub_category' => $id_category,
			'color' => $color,
			'color_title' => $color_title,
			'count' => $count
		);
		$this->db->insert('product', $data);
	}

	public  function name_count($id_category = NULL)
	{

		if ($id_category)
		{
			$sql = "SELECT `name_category`, COUNT(*) AS `count_product` FROM product, sub_category WHERE `product`.`id_sub_category` = `sub_category`.`id_sub_category` AND `sub_category`.`id_sub_category` = ? GROUP BY `name_category`";
			$query = $this->db->query($sql, array($id_category));

		} else {
			$sql = "SELECT `name_category`, COUNT(*) AS `count_product` FROM product, sub_category WHERE `product`.`id_sub_category` = `sub_category`.`id_sub_category` GROUP BY `name_category`";
			$query = $this->db->query($sql);
		}
		return $query->result_array();
	}

	// Вывод списка товаров
	public function show_product($id_category = NULL)
	{
		if ($id_category)
		{
			$query = $this->db->query('
				SELECT
				 `id_product`,
				 `title`,
				 `country`,
				 `city`,
				 `manufacturer`,
				 `date_manufacturing`,
				 `width`,
				 `height`,
				 `depth`,
				 `image_product`,
				 `description`,
				 `price`,
				 `discount`
				FROM
				 `product`,
				 `sub_category`
				WHERE
				 `product`.`id_sub_category` = `sub_category`.`id_sub_category`
				AND 
				 `sub_category`.`id_sub_category` = ?
			', array($id_category));
		} else {
			$query = $this->db->query('
				SELECT
				 `id_product`,
				 `title`,
				 `country`,
				 `city`,
				 `manufacturer`,
				 `date_manufacturing`,
				 `width`,
				 `height`,
				 `depth`,
				 `image_product`,
				 `description`,
				 `price`,
				 `discount`
				FROM
				 `product`,
				 `sub_category`
				WHERE
				 `product`.`id_sub_category` = `sub_category`.`id_sub_category`
			');
		}
		return $query->result_array();
	}

	public function details_product($id_product)
	{
		$sql = "SELECT 
				`id_product`,
				`title`,
				`country`,
				`city`,
				`manufacturer`,
				`date_manufacturing`,
				`width`,
				`height`,
				`depth`,
				`image_product`,
				`thumbnails`,
				`description`,
				`material`,
				`color_title`,
				`color`,
				`count`,
				`price`,
				`discount`, 
				`name_category`
				FROM `product`, `sub_category`
				WHERE `product`.`id_sub_category` = `sub_category`.`id_sub_category` AND `product`.`id_product` = ?";
		$query = $this->db->query($sql, array($id_product));
		return $query->result_array();
	}

	public function panelProductView() {
		
		$sql = "SELECT 
			`id_product`,
			`title`,
			`country`,
			`city`,
			`manufacturer`,
			`date_manufacturing`,
			`width`,
			`height`,
			`depth`,
			`image_product`,
			`thumbnails`,
			`description`,
			`material`,
			`color_title`,
			`color`,
			`count`,
			`price`,
			`discount`, 
			`name_category`
			FROM `product`, `sub_category`
			WHERE `product`.`id_sub_category` = `sub_category`.`id_sub_category`";
		$query = $this->db->query($sql);
		return $query->result_array();
		
	}

}

?>
