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
		$this->load->view('Productos/list',$data);
		$this->load->view('plugins_footer');
		$this->load->view('Productos/script_productos');
		


    }
    public function add()
	{
		$data = array(
			'productos' => $this->Productos_model->getProductos(),

		);
		
		$this->load->view('head');
		$this->load->view('menu_head');
		$this->load->view('menu_costado');
		$this->load->view('Productos/add',$data);
		$this->load->view('plugins_footer');
		
	}
	public function store(){
	
		$descripcion_producto=$this->input->post("descripcion_producto");
		

/*======================Estableciendo prueba en form-validataion===========================*/
		
                        
$this->form_validation->set_rules("descripcion_producto","Nombre de la Producto","required|is_unique[productos.descripcion_producto]");
//$this->form_validation->set_rules("email","Email del Usuario","required|is_unique[usuarios.email]");
//$this->form_validation->set_rules("password","Contraseña","required");

		if ($this->form_validation->run()) {
		$data = array(
			
			'descripcion_producto' => $descripcion_producto,
			'estado_producto' => "1",
			
		);
		if ($this->Productos_model->save($data)) {
			redirect(base_url()."Productos");
		}
		else{
			$this->session->set_flashdata("error","No se pudo actualizar la informacion");
			redirect(base_url()."Productos");
		}
	}
	else{
		$this->add();
	}
}

	public function view($id){
		//$idusuario = $this->input->post("idusuario");
		$data = array(
			'productos' => $this->Productos_model->getProducto($id)
		);
		$this->load->view("Productos/view",$data);
	}
	public function edit($id)
	{
		$data = array(
			'productos'=> $this->Productos_model->getProducto($id)

		);
		$this->load->view('head');
		$this->load->view('menu_head');
		$this->load->view('menu_costado');
		$this->load->view('Productos/edit',$data);
		$this->load->view('plugins_footer');

	}
	public function update(){
		$id_producto = $this->input->post("id_producto");
		$descripcion_producto=$this->input->post("descripcion_producto");
		
		
		$data = array(
			'descripcion_producto' => strtoupper($descripcion_producto),
			'estado_producto' => "1",
		
			
		);
		if ($this->Productos_model->update($id_producto,$data)) {
			$this->session->set_flashdata("success","Datos Actualizados");
			redirect(base_url()."Productos");
		}
		else{
			$this->session->set_flashdata("error","No se pudo actualizar la informacion");
			$this->edit($id_categoria);
			//redirect(base_url()."categorias/edit/".$IdCategoria);
		}
	}
	public function delete($id){
		$data = array('estado_producto' => "3",
	 );
	 $this->Productos_model->update($id,$data);
	 echo "Productos";
	}
}