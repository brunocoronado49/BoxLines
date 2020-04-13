<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contacto extends CI_Controller {

	public function __construct(){
		parent::__construct();
	}

	public function index(){
		if($this->session->userdata('is_logged')){
			$vista = $this->load->view('contacto', '', true);
			$this->getTemplate($vista);
		}else{
			show_404();
		}
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