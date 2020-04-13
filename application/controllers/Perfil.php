<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Perfil extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->library(array('form_validation'));
		$this->load->helper(array('users/users_rules'));
		$this->load->model('ModelsUsers');
		$this->load->model('Users');
	}

	public function index(){
		if($this->session->userdata('is_logged')){
			$data = $this->ModelsUsers->getPublicacion();
			$vista = $this->load->view('perfil', array('data' => $data), true);
			$this->getTemplate($vista);
		}
		else{
			show_404();
		}
	}

	public function editPerfil($id = 0){
		$perfil = $this->Users->getPerfilEdit($id);
		$view = $this->load->view('editarPerfil', array('perfil' => $perfil), true);
		$this->getTemplate($view);
	}

	public function update(){
		if($this->input->server('REQUEST_METHOD') === 'POST'){
			$_id = $this->input->post('_id');
			$usuario = $this->input->post('usuario');
			$nombre = $this->input->post('nombre');
			$apellido = $this->input->post('apellido');
			$correo = $this->input->post('correo');
			$telefono = $this->input->post('telefono');
			$edad = $this->input->post('edad');
			$genero = $this->input->post('genero');
			$peso = $this->input->post('peso');
			$est = $this->input->post('est');
			$rol = $this->input->post('rol');
			$pais = $this->input->post('pais');
			$residencia = $this->input->post('residencia');
			$contrasena = $this->input->post('contrasena');

			$this->form_validation->set_rules(getUpdatePerfilRules());
			if($this->form_validation->run() === false){
				$view = $this->load->view('editarPerfil', '', true);
				$this->getTemplate($view);
			}
			else{
				$data = array(
					'usuario' => $usuario,
					'nombre' => $nombre,
					'apellido' => $apellido,
					'correo' => $correo,
					'telefono' => $telefono,
					'edad' => $edad,
					'genero' => $genero,
					'peso' => $peso,
					'est' => $est,
					'rol' => $rol,
					'pais' => $pais,
					'residencia' => $residencia,
					'contrasena' => $contrasena
				);
				$this->Users->updatePerfil($_id, $data);
				$this->session->set_flashdata('msg', 'Su perfil de usuario '.$usuario.' ha sido actualizado.');
				redirect('perfil');
			}
		}
		else{
			show_404();
		}
	}

	// INICIO de foto de perfil **********************************************************

	public function fotoPerfil(){
		
	}



	// FINAL de foto de perfil ***********************************************************


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