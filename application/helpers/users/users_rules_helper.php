<?php

if(!function_exists('getUpdatePerfilRules')){
	function getUpdatePerfilRules(){
		return array(
			array(
				'field' => 'usuario',
				'label' => 'usuario',
				'rules' => 'required',
				'errors' => array(
					'required' => 'El %s es requerido.',
				),
			),
			array(
				'field' => 'nombre',
				'label' => 'nombre',
				'rules' => 'required',
				'errors' => array(
					'required' => 'El %s es requerido.',
				),
			),
			array(
				'field' => 'apellido',
				'label' => 'apellido',
				'rules' => 'required',
				'errors' => array(
					'required' => 'El %s es requerido.',
				),
			),
			array(
				'field' => 'correo',
				'label' => 'correo',
				'rules' => 'required',
				'errors' => array(
					'required' => 'El %s es requerido.',
				),
			),
			array(
				'field' => 'telefono',
				'label' => 'telefono',
				'rules' => 'required',
				'errors' => array(
					'required' => 'El %s es requerido.',
				),
			),
			array(
				'field' => 'edad',
				'label' => 'edad',
				'rules' => 'required',
				'errors' => array(
					'required' => 'La %s es requerida.',
				),
			),
			array(
				'field' => 'genero',
				'label' => 'genero',
				'rules' => 'required',
				'errors' => array(
					'required' => 'El %s es requerido.',
				),
			),
			array(
				'field' => 'peso',
				'label' => 'peso',
				'rules' => 'required',
				'errors' => array(
					'required' => 'El %s es requerido.',
				),
			),
			array(
				'field' => 'est',
				'label' => 'estatura',
				'rules' => 'required',
				'errors' => array(
					'required' => 'La %s es requerida.',
				),
			),
			array(
				'field' => 'rol',
				'label' => 'rol',
				'rules' => 'required',
				'errors' => array(
					'required' => 'El %s es requerido.',
				),
			),
			array(
				'field' => 'pais',
				'label' => 'país',
				'rules' => 'required',
				'errors' => array(
					'required' => 'El %s es requerido.',
				),
			),
			array(
				'field' => 'residencia',
				'label' => 'residencia',
				'rules' => 'required',
				'errors' => array(
					'required' => 'La %s es requerida.',
				),
			),
			array(
				'field' => 'contrasena',
				'label' => 'contraeña',
				'rules' => 'required',
				'errors' => array(
					'required' => 'La %s es requerida.',
				),
			),
		);
	}

}

if(!function_exists('getUpdatePublicacionRules')){
	function getUpdatePublicacionRules(){
		return array(
			array(
				'field' => 'titulo',
				'label' => 'titulo',
				'rules' => 'required',
				'errors' => array(
					'required' => 'El %s es requerido.',
				),
			),
			array(
				'field' => 'publicacion',
				'label' => 'publicacion',
				'rules' => 'required|max_length[300]',
				'errors' => array(
					'required' => 'La %s es requerida.',
					'max_length' => 'La %s es demasiado grande.',
				),
			),
			array(
				'field' => 'fecha',
				'label' => 'fecha',
				'rules' => 'required',
				'errors' => array(
					'required' => 'La %s es requerida.',
				),
			),
		);
	}
}

if(!function_exists('getCreatePublicacionRules')){
	function getCreatePublicacionRules(){
		return array(
			array(
				'field' => 'titulo',
				'label' => 'titulo',
				'rules' => 'required',
				'errors' => array(
					'required' => 'El %s es requerido.',
				),
			),
			array(
				'field' => 'publicacion',
				'label' => 'publicacion',
				'rules' => 'required|max_length[300]',
				'errors' => array(
					'required' => 'La %s es requerida.',
					'max_length' => 'La %s es demasiado grande.',
				),
			),
			array(
				'field' => 'fecha',
				'label' => 'fecha',
				'rules' => 'required',
				'errors' => array(
					'required' => 'La %s es requerida.',
				),
			),
		);
	}
}


if(!function_exists('getCreateUserRules')){
	function getCreateUserRules(){
		return array(
			array(
				'field' => 'user',
				'label' => 'usuario',
				'rules' => 'required|max_length[100]|is_unique',
				'errors' => array(
					'required' => 'El %s es requerido.',
					'is_unique' => 'El usuario ya existe.',
					'max_length' => 'El nombre de %s es demasiado grande.',
				),
			),
			array(
				'field' => 'correo',
				'label' => 'Correo',
				'rules' => 'required|valid_email',
				'errors' => array(
					'required' => 'El %s es requerido.',
					'valid_email' => 'Debe ser una dirección valida.'
				),
			),
			array(
				'field' => 'name',
				'label' => 'nombre',
				'rules' => 'required',
				'errors' => array(
					'required' => 'El %s es requerido.',
				),
			),
			array(
				'field' => 'apellido',
				'label' => 'apellidos',
				'rules' => 'required',
				'errors' => array(
					'required' => 'Los %s son requeridos.',
				),
			),
			array(
				'field' => 'telefono',
				'label' => 'telefono',
				'rules' => 'required',
				'errors' => array(
					'required' => 'El %s es requerido',
				),
			),
			array(
				'field' => 'residencia',
				'label' => 'residencia',
				'rules' => 'required',
				'errors' => array(
					'required' => 'La %s es requerida',
				),
			),
		);
	}
}