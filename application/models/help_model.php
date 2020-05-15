<?php

class Help_model extends CI_Model {

	// Количество категорий
	public function count_category()
	{
		$query = $this->db->query('SELECT COUNT(*) as count_row FROM category');
		return $query->result_array();
	}

	// Количество пользователей
	public function count_users()
	{
		$query = $this->db->query('SELECT COUNT(*) as count_row FROM users');
		return $query->result_array();
	}

	// Количество товаров
	public function count_product()
	{
		$query = $this->db->query('SELECT COUNT(*) as count_row FROM product');
		return $query->result_array();
	}

	// Количество заказов
	public function count_order()
	{
		$query = $this->db->query('SELECT COUNT(*) as count_row FROM mebel.order');
		return $query->result_array();
	}

}

?>
