<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->library(array('form_validation', 'session'));
		$this->load->helper(array('auth/login_rules'));
		$this->load->model('Auth');
	}

	public function index(){
		$this->load->view('login');
	}

	public function validate(){
		$this->form_validation->set_error_delimiters('', '');
		$rules = getLoginRules();
		$this->form_validation->set_rules($rules);
		if($this->form_validation->run() === false){
			$this->output->set_status_header(400);
			$errors = array (
				'email' => form_error('email'),
				'password' => form_error('password'),
			);
			echo json_encode($errors);
		}
		else{
			$usr = $this->input->post('email');
			$pass = $this->input->post('password');
			if(!$res = $this->Auth->login($usr, $pass)){
				echo json_encode(array('msg'=> 'Verifica tus datos'));
				$this->output->set_status_header(401);
				exit;
			}
			$data = array(
				'id' => $res->id,
				'rol' => $res->rol,
				'genero' => $res->genero,
				'nombre' => $res->nombre,
				'correo' => $res->correo,
				'edad' => $res->edad,
				'peso' => $res->peso,
				'est' => $res->est,
				'pais' => $res->pais,
				'apellido' => $res->apellido,
				'telefono' => $res->telefono,
				'usuario' => $res->usuario,
				'residencia' => $res->residencia,
				'is_logged' => true,
			);
			$this->session->set_userdata($data);
			$this->session->set_flashdata('msg', 'Bienvenido/a al sistema de BOXlines ' . $data['nombre']);
			echo json_encode(array("url" => base_url('dashboard')));
		}
	}

	public function logout(){
		$vars = array('id', 'rol', 'genero', 'nombre', 'correo', 'edad', 'peso', 'est', 'pais', 'apellido', 'telefono', 'usuario', 'residencia', 'is_logged');
		$this->session->unset_userdata($vars);
		$this->session->sess_destroy();
		redirect('login');
	}

}
