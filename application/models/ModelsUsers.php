<?php

class ModelsUsers extends CI_Model{

	public function __construct(){
		$this->load->database();
	}

	public function getUsers(){
		$sql = $this->db->order_by('id', 'DESC')->get('usuarios');
		return $sql->result();
	}

	public function getPaginate($limit, $offset){
		$sql = $this->db->order_by('id', 'DESC')->get('usuarios', $limit, $offset);
		return $sql->result();
	}

	public function getUserPerfil($id){
		$user = $this->db->get_where('usuarios', array('id' => $id), 1);
		return $user->row_array();
	}

	public function guardar($publicaciones){
		$this->db->trans_start();
		$publicaciones['id_usuario'] = $this->db->insert_id();
		$this->db->insert('publicacion', $publicaciones);
		$this->db->trans_complete();
		return !$this->db->trans_status() ? false : true;
	}

	public function getPublicacion(){
		$sql = $this->db->order_by('id','DESC')->get('publicacion');
		return $sql->result();
	}

	public function getPublicacionEdit($id){
		$publicar = $this->db->get_where('publicacion', array('publicacion.id' => $id), 1);
		return $publicar->row_array();
	}

	public function updatePublicacion($id, $data){
		$this->db->where('id', $id);
		$this->db->update('publicacion', $data);
	}

	public function borrarPublicacion($id){
		$this->db->where('id', $id);
		$this->db->delete('publicacion');
	}
	
}