<?php

class Users_model extends CI_Model {

	// Регистраия пользователей
	public function registration($fio, $address, $phone, $email, $login, $password)
	{
		$data = array(
			'fio' => $fio,
			'address' => $address,
			'phone' => $phone,
			'email' => $email,
			'login' => $login,
			'password' => md5($password)
		);

		$query = $this->db->insert('users', $data);
		$id_user = $this->db->query('SELECT `id_user` FROM `users` ORDER BY `id_user` DESC LIMIT 1');

		if ($query) {
			return $id_user->row_array();
		} else {
			return false;
		}

	}

	// Авторизация пользователей
	public function login($login, $passoword)
	{

		$query = $this->db->query('SELECT `id_user`, `fio`, `address`, `phone`, `email`, `login`, `password` FROM `users` WHERE `login` = ? AND `password` = ?', array($login, md5($passoword)));
		if ($query)
		{
			return $query->row_array();
		} else {
			return false;
		}

	}

	// Вывод пользователей
	public function show_users()
	{
		$query = $this->db->query('
		SELECT
		 `id_user`,
		 `fio`,
		 `address`,
		 `phone`,
		 `email`,
		 `login`
		FROM
		 `users`
		');
		return $query->result_array();
	}

	public function details_user($id_user) {
		
	}

}

?>
