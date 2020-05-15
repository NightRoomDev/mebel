<?php

class UserController extends CI_Controller{

	// Главная страница
	public function index()
	{

		$this->load->model('category_model');

		$data['title'] = 'Главная';

		if ($this->session->has_userdata('id_user'))
		{
			$navbar = 'navbar_user';
		}
		else
		{
			$navbar = 'navbar';
		}

		$data['show_category'] = $this->category_model->show_category();

		$this->load->view('user/templates/header', $data);
		$this->load->view('user/templates/' . $navbar);
		$this->load->view('user/pages/modalLogin', $data);
		$this->load->view('user/templates/sidebar', $data);
		$this->load->view('user/pages/index', $data);
		$this->load->view('user/templates/footer');
	}

	// Страница "о нас"
	public function about()
	{
		$data['title'] = 'О нас';

		if ($this->session->has_userdata('id_user'))
		{
			$navbar = 'navbar_user';
		}
		else
		{
			$navbar = 'navbar';
		}

		$this->load->view('user/templates/header', $data);
		$this->load->view('user/templates/' . $navbar);
		$this->load->view('user/pages/modalLogin');
		$this->load->view('user/pages/aboutUs');
		$this->load->view('user/templates/footer');
	}

	// Страница "контакты"
	public function contacts()
	{
		$data['title'] = 'Контакты';

		if ($this->session->has_userdata('id_user'))
		{
			$navbar = 'navbar_user';
		}
		else
		{
			$navbar = 'navbar';
		}

		$this->load->view('user/templates/header', $data);
		$this->load->view('user/templates/' . $navbar);
		$this->load->view('user/pages/modalLogin');
		$this->load->view('user/pages/contacts');
		$this->load->view('user/templates/footer');
	}

	// Страница "товары"
	public function product_list()
	{

		$id_category = $this->uri->segment(2, 0);

		$data['title'] = 'Все товары';

		$this->load->model('product_model');
		$this->load->model('category_model');

		$data['show_product'] = $this->product_model->show_product($id_category);
		$data['name_count'] = $this->product_model->name_count($id_category);
		$data['show_category'] = $this->category_model->show_category();

		$this->load->view('user/templates/header', $data);
		$this->load->view('user/templates/navbar');
		$this->load->view('user/pages/modalLogin');
		$this->load->view('user/templates/sidebar', $data);
		$this->load->view('user/pages/all_products', $data);
		$this->load->view('user/templates/footer');

	}

	public function details_product()
	{

		$data['title'] = 'Подробнее';

		$id_product = $this->uri->segment(2, 0);

		$this->load->model('product_model');
		$this->load->model('category_model');

		$data['details_product'] = $this->product_model->details_product($id_product);
		$data['show_category'] = $this->category_model->show_category();

		$this->load->view('user/templates/header', $data);
		$this->load->view('user/templates/navbar');
		$this->load->view('user/pages/modalLogin');
		$this->load->view('user/templates/sidebar', $data);
		$this->load->view('user/pages/details_product', $data);
		$this->load->view('user/templates/footer');

	}

	public static function img_view($arrayImage) {
		$img_list = $arrayImage;
		$img_list = explode(';', $img_list);

		for($i = 0; $i <= count($img_list) - 1; $i++) {
			$new_img_list[]= substr($img_list[$i], 6);	
		}	

		return $new_img_list;
	}

	// Страница "регистрации"
	public function registration()
	{
		$data['title'] = 'Регистрация';

		$this->load->model('users_model');

		if ($this->input->post())
		{
			$data['registration'] = $this->users_model->registration(
				$this->input->post('fio'),
				$this->input->post('address'),
				$this->input->post('phone'),
				$this->input->post('email'),
				$this->input->post('login'),
				$this->input->post('password')
			);

			if ($data['registration'])
			{

				$userdata = array(
					'id_user' => $data['registration']['id_user'],
					'fio' => $this->input->post('fio')
				);

				$this->session->set_userdata($userdata);
				redirect('/');
			}

		}

		$this->load->view('user/templates/header', $data);
		$this->load->view('user/templates/navbar');
		$this->load->view('user/pages/modalLogin');
		$this->load->view('user/pages/registration');
		$this->load->view('user/templates/footer');
	}

	// Авторизация
	public function login()
	{

		$this->load->model('users_model');
		$data['login'] = $this->users_model->login(
			$this->input->post('login'),
			$this->input->post('password')
		);

		if ($data['login'])
		{

			$userdata = array(
				'id_user' => $data['login']['id_user'],
				'fio' => $data['login']['fio']
			);

			$this->session->set_userdata($userdata);
			redirect('/');

		}

	}

	// Выход
	public function logout()
	{
		$this->session->unset_userdata('id_user');
		$this->session->unset_userdata('fio');
		$this->session->sess_destroy();
		redirect('/');
	}

}
?>
