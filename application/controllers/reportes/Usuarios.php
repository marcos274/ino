<?php
defined('BASEPATH') OR exit('No direct script access allowed');
//se crea el controlador categorias
class Usuarios extends CI_Controller {
//constructor
	public function __construct(){
		parent::__construct();
		$this->load->model("Usuarios_model");
    }

    public function index()
	{
		$data = array(
			'usuarios' => $this->Usuarios_model->getUsuarios(),

		);
		
		$this->load->view('head');
		$this->load->view('menu_head');
		$this->load->view('menu_costado');
		$this->load->view('Reportes/usuarioslist',$data);
		$this->load->view('plugins_footer');
		$this->load->view('Usuarios/script_usuarios');
		


    }
}