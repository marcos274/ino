<?php
defined('BASEPATH') OR exit('No direct script access allowed');
//se crea el controlador categorias
class Productos extends CI_Controller {
//constructor
	public function __construct(){
		parent::__construct();
		$this->load->model("Productos_model");
    }

    public function index()
	{
		$data = array(
			'productos' => $this->Productos_model->getProductos(),

		);
		
		$this->load->view('head');
		$this->load->view('menu_head');
		$this->load->view('menu_costado');
		$this->load->view('Reportes/Productos',$data);
		$this->load->view('plugins_footer');
		$this->load->view('Productos/script_productos');
		


    }
    
}