<?php
defined('BASEPATH') OR exit('No direct script access allowed');
//se crea el controlador categorias
class Clientes extends CI_Controller {
//constructor
	public function __construct(){
		parent::__construct();
		$this->load->model("Clientes_model");
    }

    public function index()
	{
		$data = array(
			'clientes' => $this->Clientes_model->getClientes(),

		);
		
		$this->load->view('head');
		$this->load->view('menu_head');
		$this->load->view('menu_costado');
		$this->load->view('Reportes/clienteslist',$data);
		$this->load->view('plugins_footer');
		$this->load->view('Clientes/script_clientes');
		


    }
   
}