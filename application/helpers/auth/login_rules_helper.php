<?php
function getLoginRules(){
	return array(
        array(
            'field' => 'email',
            'label' => 'correo',
			'rules' => 'required|trim|valid_email',
			'errors' => array(
			'required' => 'El %s es requerido.',
			),
        ),
        array(
            'field' => 'password',
            'label' => 'contraseña',
			'rules' => 'required|trim',
			'errors' => array(
                'required' => 'La %s es requerida.',
            ),
        )
	);

}
