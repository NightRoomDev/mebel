<?php

class AdminController extends CI_Controller{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('help_model');

	}

	// Авторизация в панели управления
	public function login()
	{
		$data['title'] = 'Авторизация в системе';

		$data['flag'] = false;

		if ($this->input->post()) {

			if ($this->input->post('login') == 'sweetheartseven@yandex.ru' && $this->input->post('password') == 'admin') {

				redirect('panel');
				
			} else {
	
				$data['flag'] = true;
	
			}

		}


		
		$this->load->view('admin/templates/header', $data);
		$this->load->view('admin/pages/login', $data);
	}

	// Панель управления - главная страница
	public function panel()
	{
		$data['title'] = 'Панель управления - главная страница';

		$data['count_category'] = $this->help_model->count_category();
		$data['count_users'] = $this->help_model->count_users();
		$data['count_product'] = $this->help_model->count_product();
		$data['count_order'] = $this->help_model->count_order();

		$this->load->view('admin/templates/header', $data);
		$this->load->view('admin/templates/navbar');
		$this->load->view('admin/templates/sidebar');
		$this->load->view('admin/pages/panel');
		$this->load->view('admin/templates/footer');

	}

	// Панель управления - страница товаров 
	public function products()
	{
		$data['title'] = 'Панель управления - товары';

		$this->load->model('product_model');
		$this->load->model('category_model');

		$data['count_category'] = $this->help_model->count_category();
		$data['count_users'] = $this->help_model->count_users();
		$data['count_product'] = $this->help_model->count_product();
		$data['count_order'] = $this->help_model->count_order();

		$data['show_sub_category'] = $this->category_model->show_sub_category();

		$result_thumbnails = "";
		$result_img = "";

		$data['flag'] = false;

		$data['list_colors'] = [
			['title' => 'Белый', 'color' => '#ffffff'],
			['title' => 'Бежевый', 'color' => '#f5f5dc'],
			['title' => 'Коричневый', 'color' => '#964b00'],
			['title' => 'Черный', 'color' => '#000000'],
			['title' => 'Серый', 'color' => '#808080'],
			['title' => 'Голубой', 'color' => '#42aaff']
		];

		if (!empty($_POST)) {

			$image_file = $_FILES['image']['name'];
			$image_file_thumbnails = $_FILES['img_list']['name'];

			$new_color_list = explode('-', $_POST['color_title']);

			$color_title = $new_color_list[0];
			$color = $new_color_list[1];

			for ($i = 0; $i <= count($image_file) - 1; $i++) {

				$extension_image = strtolower(substr(strrchr($_FILES['image']['name'][$i], '.'), 1));
				$file_image = $_FILES['image']['name'][$i];
				$file_image = uniqid();
				$resul_file_image = $file_image .'.'. $extension_image;
				$result_img .= serialize($resul_file_image);

				move_uploaded_file($_FILES['image']['tmp_name'][$i], 'upload/image_product/' . $file_image .'.'. $extension_image);
				
			}	
			
			for ($i = 0; $i <= count($image_file_thumbnails) - 1; $i++) {

				$extension_image_thumbnails = strtolower(substr(strrchr($_FILES['img_list']['name'][$i], '.'), 1));
				$file_image_thumbnails = $_FILES['img_list']['name'][$i];
				$file_image_thumbnails = uniqid();
				$resul_file_image_thumbnails = $file_image_thumbnails .'.'. $extension_image_thumbnails;
				$result_thumbnails .= serialize($resul_file_image_thumbnails);

				move_uploaded_file($_FILES['img_list']['tmp_name'][$i], 'upload/thumbnails/' . $file_image_thumbnails .'.'. $extension_image_thumbnails);
				
			}	

			
			
			$data['product_model'] = $this->product_model->add_product(
				$this->input->post('name_product'),
				$this->input->post('country'),
				$this->input->post('city'),
				$this->input->post('manufacturer'),
				$this->input->post('date_build'),
				$this->input->post('width'),
				$this->input->post('height'),
				$this->input->post('depth'),
				$this->input->post('price'),
				$this->input->post('material'),
				$result_img,
				$result_thumbnails,
				$this->input->post('description'),
				$this->input->post('discount'),
				0,
				0,
				$this->input->post('id_type'),
				$color,
				$color_title,
				$this->input->post('color_title'),
				$this->input->post('count')
			);

			$data['flag'] = true;

		}

		$data['panelProductView'] = $this->product_model->panelProductView();

		$this->load->view('admin/templates/header', $data);
		$this->load->view('admin/templates/navbar');
		$this->load->view('admin/templates/sidebar');
		$this->load->view('admin/pages/products', $data);
		$this->load->view('admin/templates/footer');

	}

	public static function img_view($arrayImage) {
		$img_list = $arrayImage;
		$img_list = explode(';', $img_list);

		for($i = 0; $i <= count($img_list) - 1; $i++) {
			$new_img_list[]= substr($img_list[$i], 6);	
		}	

		return $new_img_list;
	}


	public function category()
	{
		$data['title'] = 'Панель управления - категории';

		$this->load->model('category_model');
		$data['flag'] = [
			'category' => false,
			'sub_category' => false
		];

		if (isset($_POST['add_category']))
		{

			$date['add_category'] = $this->category_model->add_category($this->input->post('type_category'));
			$data['flag']['category'] = true;

		} else if (isset($_POST['add_sub_category'])) {

			$date['add_sub_category'] = $this->category_model->add_sub_category($this->input->post('sub_category'), $this->input->post('id_category'));
			$data['flag']['sub_category'] = true;

		}

		// $data['show_category'] = $this->category_model->show_category();
		$data['panelCategoryView'] = $this->category_model->panelCategoryView();

		$data['count_category'] = $this->help_model->count_category();
		$data['count_users'] = $this->help_model->count_users();
		$data['count_product'] = $this->help_model->count_product();
		$data['count_order'] = $this->help_model->count_order();

		$this->load->view('admin/templates/header', $data);
		$this->load->view('admin/templates/navbar');
		$this->load->view('admin/templates/sidebar', $data);
		$this->load->view('admin/pages/category', $data);
		$this->load->view('admin/templates/footer');
	}

	public function update_category()
	{
		$data['title'] = 'Панель управления - изменение категории';
		$this->load->model('category_model');
		$data['count_row'] = self::count_row('category');

		$data['count_category'] = $this->help_model->count_category();
		$data['count_users'] = $this->help_model->count_users();
		$data['count_product'] = $this->help_model->count_product();
		$data['count_order'] = $this->help_model->count_order();

		$data['show_category_update'] = $this->category_model->show_category_update($this->uri->segment(2, 0));

		if ($this->input->post())
		{
			$date['update_category'] = $this->category_model->update_category(
				$this->uri->segment(2, 0),
				$this->input->post('type_category'),
				$this->input->post('sub_category')
			);
			redirect('category');
		}

		$this->load->view('admin/templates/header', $data);
		$this->load->view('admin/templates/navbar');
		$this->load->view('admin/templates/sidebar', $data);
		$this->load->view('admin/pages/update_category', $data);
		$this->load->view('admin/templates/footer');

	}


	public function users()
	{
		$data['title'] = 'Панель управления - пользователи';

		$this->load->model('users_model');
		$data['show_users'] = $this->users_model->show_users();

		$data['count_category'] = $this->help_model->count_category();
		$data['count_users'] = $this->help_model->count_users();
		$data['count_product'] = $this->help_model->count_product();
		$data['count_order'] = $this->help_model->count_order();

		$this->load->view('admin/templates/header', $data);
		$this->load->view('admin/templates/navbar');
		$this->load->view('admin/templates/sidebar', $data);
		$this->load->view('admin/pages/users', $data);
		$this->load->view('admin/templates/footer');
	}

	public function detailsUser() {

		$data['title'] = 'Панель управления - пользователи';

		$this->load->model('users_model');
		$data['show_users'] = $this->users_model->show_users();

		$data['count_category'] = $this->help_model->count_category();
		$data['count_users'] = $this->help_model->count_users();
		$data['count_product'] = $this->help_model->count_product();
		$data['count_order'] = $this->help_model->count_order();

		$this->load->view('admin/templates/header', $data);
		$this->load->view('admin/templates/navbar');
		$this->load->view('admin/templates/sidebar', $data);
		$this->load->view('admin/pages/detailsUser', $data);
		$this->load->view('admin/templates/footer');

	}

	public function out() {

		redirect('/');

	}


}
?>
