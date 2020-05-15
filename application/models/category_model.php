<?php

class Category_model extends CI_Model
{

	// Добавление новой категории
	public function add_category($type_category)
	{
		$this->db->insert('category', array('type_category' => $type_category));
	}

	// Добавление новой подкатегории
	public function add_sub_category($name_category, $id_category) {
		$this->db->insert('sub_category', array('name_category' => $name_category, 'id_category' => $id_category));
	}

	// Вывод категорий
	public function show_category()
	{
		$query = $this->db->get('category');
		return $query->result_array();
	}

	// Вывод подкатегорий
	public function show_sub_category() {
		$query = $this->db->get('sub_category');
		return $query->result_array();
	}

	// Вывод категории при изменении
	public function show_category_update($id_category)
	{
		$query = $this->db->get_where('category', array('id_category' => $id_category));
		return $query->result_array();
	}

	public function panelCategoryView() {
		$query = $this->db->query("SELECT `id_sub_category`, `type_category`, `name_category` FROM `category`, `sub_category` WHERE `sub_category`.`id_category` = `category`.`id_category`");
		return $query->result_array();
	}

	// Изменение категории
	public function update_category($id_category, $type_category, $sub_category)
	{
		$this->db->set('type_category', $type_category);
		$this->db->set('sub_category', $sub_category);
		$this->db->where('id_category', $id_category);
		$this->db->update('category');
	}

	// Удаление категории
	public function delete_category($id_category)
	{
		$this->db->delete('category', array('id_category' => $id_category));
	}


}

?>
