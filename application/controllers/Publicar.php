<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Publicar extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->library(array('form_validation'));
		$this->load->helper(array('users/users_rules'));
		$this->load->model('ModelsUsers');
	}

	public function index(){
		if($this->session->userdata('is_logged')){
			$vista = $this->load->view('publicar', '', true);
			$this->getTemplate($vista);
		}
		else{
			show_404();
		}
	}

	// Funciones para crud
	public function publicar(){
		$titulo = $this->input->post('titulo');
		$publicacion = $this->input->post('publicacion');
		$fecha = $this->input->post('fecha');
		$usuario = $this->input->post('usuario');
		$this->form_validation->set_rules(getCreatePublicacionRules());

		if($this->form_validation->run() === false){
			$this->output->set_status_header(400);
		}
		else{
			$publicaciones = array(
				'titulo' => $titulo,
				'publicacion' => $publicacion,
				'fecha' => $fecha,
				'usuario' => $usuario
			);

			if(!$this->ModelsUsers->guardar($publicaciones)){
				$this->output->set_status_header(500);
			}
			else{
				$this->session->set_flashdata('msg', 'Se publicó el contenido.');
				redirect(base_url('dashboard'));
			}
		}
		$vista = $this->load->view('publicar', '', true);
		$this->getTemplate($vista);
	}

	public function editar($id = 0){
		$publicar = $this->ModelsUsers->getPublicacionEdit($id);
		$view = $this->load->view('editarPublicacion', array('publicar' => $publicar), true);
		$this->getTemplate($view);
	}

	public function update(){
		if($this->input->server('REQUEST_METHOD') === 'POST'){
			$_id = $this->input->post('_id');
			$titulo = $this->input->post('titulo');
			$publicacion = $this->input->post('publicacion');
			$fecha = $this->input->post('fecha');
			$usuario = $this->input->post('usuario');
			$this->form_validation->set_rules(getUpdatePublicacionRules());

			if($this->form_validation->run() === false){
				$view = $this->load->view('editarPublicacion', '', true);
				$this->getTemplate($view);
			}
			else{
				$data = array(
					'titulo' => $titulo,
					'publicacion' => $publicacion,
					'fecha' => $fecha,
					'usuario' => $usuario
				);
				$this->ModelsUsers->updatePublicacion($_id, $data);
				$this->session->set_flashdata('msg', 'La Publicación fue  actualizada correctamente.');
				redirect('dashboard');
			}
		}
		else{
			show_404();
		}
	}

	public function delete(){
		$_id = $this->input->post('id', true);
		if(empty($_id)){
			$this->output->set_output(json_encode(array('msg' => 'El id no puede ser vacio.')));
		}
		else{
			$this->ModelsUsers->borrarPublicacion($_id);
			$this->output->set_status_header(200);
		}
	}

// terminan las funciones para crud

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