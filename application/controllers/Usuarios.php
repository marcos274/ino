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
		$this->load->view('Usuarios/list',$data);
		$this->load->view('plugins_footer');
		$this->load->view('Usuarios/script_usuarios');
		


    }
    public function add()
	{
		$data = array(
			'usuarios' => $this->Usuarios_model->getUsuarios(),

		);
		
		$this->load->view('head');
		$this->load->view('menu_head');
		$this->load->view('menu_costado');
		$this->load->view('Usuarios/add',$data);
		$this->load->view('plugins_footer');
		
	}
	public function store(){
	
		$descripcion_usuario=$this->input->post("descripcion_usuario");
		

/*======================Estableciendo prueba en form-validataion===========================*/
		
                        
$this->form_validation->set_rules("descripcion_usuario","Nombre de la Categoria","required|is_unique[usuarios.descripcion_usuario]");
//$this->form_validation->set_rules("email","Email del Usuario","required|is_unique[usuarios.email]");
//$this->form_validation->set_rules("password","Contraseña","required");

		if ($this->form_validation->run()) {
		$data = array(
			
			'descripcion_usuario' => $descripcion_usuario,
			'estado_usuario' => "1",
			
		);
		if ($this->Usuarios_model->save($data)) {
			redirect(base_url()."Usuarios");
		}
		else{
			$this->session->set_flashdata("error","No se pudo actualizar la informacion");
			redirect(base_url()."Usuarios");
		}
	}
	else{
		$this->add();
	}
}

	public function view($id){
		//$idusuario = $this->input->post("idusuario");
		$data = array(
			'usuarios' => $this->Usuarios_model->getUsuario($id)
		);
		$this->load->view("Usuarios/view",$data);
	}
	public function edit($id)
	{
		$data = array(
			'usuarios'=> $this->Usuarios_model->getUsuario($id)

		);
		$this->load->view('head');
		$this->load->view('menu_head');
		$this->load->view('menu_costado');
		$this->load->view('Usuarios/edit',$data);
		$this->load->view('plugins_footer');

	}
	public function update(){
		$id_usuario = $this->input->post("id_usuario");
		$descripcion_usuario=$this->input->post("descripcion_usuario");
		
		
		$data = array(
			'descripcion_usuario' => strtoupper($descripcion_usuario),
			'estado_usuario' => "1",
		
			
		);
		if ($this->Usuarios_model->update($id_usuario,$data)) {
			$this->session->set_flashdata("success","Datos Actualizados");
			redirect(base_url()."Usuarios");
		}
		else{
			$this->session->set_flashdata("error","No se pudo actualizar la informacion");
			$this->edit($id_usuario);
			//redirect(base_url()."categorias/edit/".$IdCategoria);
		}
	}
	public function delete($id){
		$data = array('estado_usuario' => "3",
	 );
	 $this->Usuarios_model->update($id,$data);
	 echo "Usuarios";
	}
}