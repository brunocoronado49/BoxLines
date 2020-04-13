<?php

class Users extends CI_Model{

	public function __construct(){
		$this->load->database();
	}

	public function create($datos){
		$datos= array(
			'usuario' => $datos['usuario'],
			'nombre' => $datos['nombre'],
			'apellido' => $datos['apellido'],
			'correo' => $datos['correo'],
			'telefono' => $datos['telefono'],
			'edad' => $datos['edad'],
			'genero' => $datos['genero'],
			'peso' => $datos['peso'],
			'est' => $datos['est'],
			'rol' => $datos['rol'],
			'pais' => $datos['pais'],
			'residencia' => $datos['residencia'],
			'contrasena' => $datos['contrasena'],
		);
		if(!$this->db->insert('usuarios', $datos)){
			return false;
		}
		else{
			return true;
		}
	}

	public function getPerfilEdit($id){
		$perfil = $this->db->get_where('usuarios', array('usuarios.id' => $id), 1);
		return $perfil->row_array();
	}

	public function updatePerfil($id, $data){
		$this->db->where('id', $id);
		$this->db->update('usuarios', $data);
	}
}
