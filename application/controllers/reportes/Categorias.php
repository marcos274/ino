<?php
defined('BASEPATH') OR exit('No direct script access allowed');
//se crea el controlador categorias
class Categorias extends CI_Controller {
//constructor
	public function __construct(){
		parent::__construct();
		$this->load->model("Categorias_model");
    }

    public function index()
	{
		$data = array(
			'categorias' => $this->Categorias_model->getCategorias(),

		);
		
		$this->load->view('head');
		$this->load->view('menu_head');
		$this->load->view('menu_costado');
		$this->load->view('Categorias/list',$data);
		$this->load->view('plugins_footer');
		$this->load->view('Categorias/script_categorias');
		
}
}
