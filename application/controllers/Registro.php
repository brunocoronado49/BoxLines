<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registro extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Users');
		$this->load->library(array('form_validation'));
	}

	public function index(){
		$this->load->view('registro');
	}

	public function create(){
		$usuario = $this->input->post('usuario');
		$nombre = $this->input->post('nombre');
		$apellido = $this->input->post('apellido');
		$correo = $this->input->post('correo');
		$telefono = $this->input->post('telefono');
		$edad = $this->input->post('edad');
		$genero =  $this->input->post('genero');
		$peso = $this->input->post('peso');
		$est = $this->input->post('est');
		$rol = $this->input->post('rol');
		$pais = $this->input->post('pais');
		$residencia = $this->input->post('residencia');
		$contrasena = $this->input->post('contrasena');
		$c_confirm = $this->input->post('c_confirm');

		$config = array(
			array(
				'field' => 'usuario',
				'label' => 'usuario',
				'rules' => 'required',
				'error' => array('required' => 'El %s es inválido.')
			),
			array(
				'field' => 'correo',
				'label' => 'correo',
				'rules' => 'required|valid_email',
				'error' => array('required' => 'El %s es inválido.')
			),
		);

		$this->form_validation->set_rules($config);
		if($this->form_validation->run() === false){
			$this->load->view('registro');
			echo "<h3>Error al registrar</h3>";
		}
		else{
			$datos = array(
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
				'contrasena' => $contrasena,
			);

			if(!$this->Users->create($datos)){
				$data['msg'] = 'Error al registrar.';
				$this->load->view('registro', $data);
			}
			else{
				$data['msg'] = 'Registrado correctamente.';
				$this->load->view('registro', $data);
			}
		}
	}
}