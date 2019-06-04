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
    public function add()
	{
		$data = array(
			'categorias' => $this->Categorias_model->getCategorias(),

		);
		
		$this->load->view('head');
		$this->load->view('menu_head');
		$this->load->view('menu_costado');
		$this->load->view('Categorias/add',$data);
		$this->load->view('plugins_footer');
		
	}
	public function store(){
	
		$descripcion_categoria=$this->input->post("descripcion_categoria");
		

/*======================Estableciendo prueba en form-validataion===========================*/
		
                        
$this->form_validation->set_rules("descripcion_categoria","Nombre de la Categoria","required|is_unique[categorias.descripcion_categoria]");
//$this->form_validation->set_rules("email","Email del Usuario","required|is_unique[usuarios.email]");
//$this->form_validation->set_rules("password","Contraseña","required");

		if ($this->form_validation->run()) {
		$data = array(
			
			'descripcion_categoria' => $descripcion_categoria,
			'estado_categoria' => "1",
			
		);
		if ($this->Categorias_model->save($data)) {
			redirect(base_url()."Categorias");
		}
		else{
			$this->session->set_flashdata("error","No se pudo actualizar la informacion");
			redirect(base_url()."Categorias");
		}
	}
	else{
		$this->add();
	}
}

	public function view($id){
		//$idusuario = $this->input->post("idusuario");
		$data = array(
			'categorias' => $this->Categorias_model->getCategoria($id)
		);
		$this->load->view("Categorias/view",$data);
	}
	public function edit($id)
	{
		$data = array(
			'categorias'=> $this->Categorias_model->getCategoria($id)

		);
		$this->load->view('head');
		$this->load->view('menu_head');
		$this->load->view('menu_costado');
		$this->load->view('Categorias/edit',$data);
		$this->load->view('plugins_footer');

	}
	public function update(){
		$id_categoria = $this->input->post("id_categoria");
		$descripcion_categoria=$this->input->post("descripcion_categoria");
		
		
		$data = array(
			'descripcion_categoria' => strtoupper($descripcion_categoria),
			'estado_categoria' => "1",
		
			
		);
		if ($this->Categorias_model->update($id_categoria,$data)) {
			$this->session->set_flashdata("success","Datos Actualizados");
			redirect(base_url()."Categorias");
		}
		else{
			$this->session->set_flashdata("error","No se pudo actualizar la informacion");
			$this->edit($id_categoria);
			//redirect(base_url()."categorias/edit/".$IdCategoria);
		}
	}
	public function delete($id){
		$data = array('estado_categoria' => "3",
	 );
	 $this->Categorias_model->update($id,$data);
	 echo "Categorias";
	}
}