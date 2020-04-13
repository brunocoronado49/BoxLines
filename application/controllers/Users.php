<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->library(array('pagination'));
		$this->load->model('ModelsUsers');
	}

	public function index($offset = 0){
		if($this->session->userdata('is_logged')){
			$data = $this->ModelsUsers->getUsers();
			$config['base_url'] = base_url('users/index');
			$config['per_page'] = 5;
			$config['total_rows'] = count($data);
			$config['full_tag_open'] = '<div class="pagging text-center"><nav><ul class="pagination">';
			$config['full_tag_close'] = '</ul></nav></div>';
			$config['num_tag_open'] = '<li class="page-item"><span class="page-link">';
			$config['num_tag_close'] = '</span></li>';
			$config['cur_tag_open'] = '<li class="page-item active"><span class="page-link">';
			$config['cur_tag_close'] = '<span class="sr-only">(current)</span></span></li>';
			$config['next_tag_open'] = '<li class="page-item"><span class="page-link">';
			$config['next_tag_close'] = '<span aria-hidden="true"></span></span></li>';
			$config['prev_tag_open'] = '<li class="page-item"><span class="page-link">';
			$config['prev_tag_close'] = '</span></li>';
			$config['first_tag_open'] = '<li class="page-item"><span class="page-link">';
			$config['first_tag_close'] = '</span></li>';
			$config['last_tag_open'] = '<li class="page-item"><span class="page-link">';
			$config['last_tag_close'] = '</span></li>';

			$this->pagination->initialize($config);

			$page = $this->ModelsUsers->getPaginate($config['per_page'], $offset);

			$vista = $this->load->view('show_users', array('data' => $page), true);
			$this->getTemplate($vista);
		}
		else{
			show_404();
		}
	}

	public function perfilUser($id = 0){
		$user = $this->ModelsUsers->getUserPerfil($id);
		$data = $this->ModelsUsers->getPublicacion();
		$vista = $this->load->view('usuarios', array('user' => $user, 'data' => $data), true);
		$this->getTemplate($vista);
	}

	public function getTemplate($view){
		$data = array(
			'head' => $this->load->view('layout/head', '', true),
			'nav' => $this->load->view('layout/nav', '', true),
			'aside' => $this->load->view('layout/aside', '', true),
			'content' => $view,
			'footer' => $this->load->view('layout/footer', '', true),
		);
		$this->load->view('dashboard', $data);
	}

}