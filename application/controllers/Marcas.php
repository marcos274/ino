<?php
defined('BASEPATH') OR exit('No direct script access allowed');
//se crea el controlador categorias
class Marcas extends CI_Controller {
//constructor
	public function __construct(){
		parent::__construct();
		$this->load->model("Marcas_model");
    }

    public function index()
	{
		$data = array(
			'marcas' => $this->Marcas_model->getMarcas(),

		);
		
		$this->load->view('head');
		$this->load->view('menu_head');
		$this->load->view('menu_costado');
		$this->load->view('Marcas/list',$data);
		$this->load->view('plugins_footer');
		$this->load->view('footer');
		$this->load->view('Marcas/script_marcas');
		


    }
    public function add()
	{
		$data = array(
			'marcas' => $this->Marcas_model->getMarcas(),

		);
		
		$this->load->view('head');
		$this->load->view('menu_head');
		$this->load->view('menu_costado');
		$this->load->view('Marcas/add',$data);
		$this->load->view('plugins_footer');
		
	}
	public function store(){
	
		$descripcion_marca=$this->input->post("descripcion_marca");
		

/*======================Estableciendo prueba en form-validataion===========================*/
		
                        
$this->form_validation->set_rules("descripcion_marca","Nombre de la Marca","required|is_unique[marcas.descripcion_marca]");
//$this->form_validation->set_rules("email","Email del Usuario","required|is_unique[usuarios.email]");
//$this->form_validation->set_rules("password","Contraseña","required");

		if ($this->form_validation->run()) {
		$data = array(
			
			'descripcion_marca' => $descripcion_marca,
			'estado_marca' => "1",
			
		);
		if ($this->Marcas_model->save($data)) {
			redirect(base_url()."Marcas");
		}
		else{
			$this->session->set_flashdata("error","No se pudo actualizar la informacion");
			redirect(base_url()."Marcas/add");
		}
	}
	else{
		$this->add();
	}
}

	public function view($id){
		//$idusuario = $this->input->post("idusuario");
		$data = array(
			'marcas' => $this->Marcas_model->getMarca($id)
		);
		$this->load->view("Marcas/view",$data);
	}
	public function edit($id)
	{
		$data = array(
			'marcas'=> $this->Marcas_model->getMarca($id)

		);
		$this->load->view('head');
		$this->load->view('menu_head');
		$this->load->view('menu_costado');
		$this->load->view('Marcas/edit',$data);
		$this->load->view('plugins_footer');

	}
	public function update(){
		$id_marca = $this->input->post("id_marca");
		$descripcion_marca=$this->input->post("descripcion_marca");
		
		
		$data = array(
			'descripcion_marca' => strtoupper($descripcion_marca),
			'estado_marca' => "1",
		
			
		);
		if ($this->Marcas_model->update($id_marca,$data)) {
			$this->session->set_flashdata("success","Datos Actualizados");
			redirect(base_url()."Marcas");
		}
		else{
			$this->session->set_flashdata("error","No se pudo actualizar la informacion");
			$this->edit($id_marca);
			//redirect(base_url()."categorias/edit/".$IdCategoria);
		}
	}
	public function delete($id){
		$data = array('estado_marca' => "3",
	 );
	 $this->Marcas_model->update($id,$data);
	 echo "Marcas";
	}
}