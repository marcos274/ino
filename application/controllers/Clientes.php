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
		$this->load->view('Clientes/list',$data);
		$this->load->view('plugins_footer');
		$this->load->view('Clientes/script_clientes');
		


    }
    public function add()
	{
		$data = array(
			'clientes' => $this->Clientes_model->getClientes(),

		);
		
		$this->load->view('head');
		$this->load->view('menu_head');
		$this->load->view('menu_costado');
		$this->load->view('Clientes/add',$data);
		$this->load->view('plugins_footer');
		
	}
	public function store(){
	
		$nombre_cliente=$this->input->post("nombre_cliente");
		$nro_doc_cliente=$this->input->post("nro_doc_cliente");
		$direccion_cliente=$this->input->post("direccion_cliente");
		$telefono_cliente=$this->input->post("telefono_cliente");
		
		

/*======================Estableciendo prueba en form-validataion===========================*/
		
                        
$this->form_validation->set_rules("nombre_cliente","Nombre de la Cliente","required|is_unique[clientes.nombre_cliente]");
//$this->form_validation->set_rules("email","Email del Usuario","required|is_unique[usuarios.email]");
//$this->form_validation->set_rules("password","Contraseña","required");

		if ($this->form_validation->run()) {
		$data = array(
			
			'nombre_cliente' => $nombre_cliente,
			'nro_doc_cliente' => $nro_doc_cliente,
			'direccion_cliente' => $direccion_cliente,
			'telefono_cliente' => $telefono_cliente,
			'estado_cliente' => "1",
			
		);
		if ($this->Clientes_model->save($data)) {
			redirect(base_url()."Clientes");
		}
		else{
			$this->session->set_flashdata("error","No se pudo actualizar la informacion");
			redirect(base_url()."Clientes");
		}
	}
	else{
		$this->add();
	}
}

	public function view($id){
		//$idusuario = $this->input->post("idusuario");
		$data = array(
			'clientes' => $this->Clientes_model->getCliente($id)
		);
		$this->load->view("Clientes/view",$data);
	}
	public function edit($id)
	{
		$data = array(
			'clientes'=> $this->Clientes_model->getCliente($id)

		);
		$this->load->view('head');
		$this->load->view('menu_head');
		$this->load->view('menu_costado');
		$this->load->view('Clientes/edit',$data);
		$this->load->view('plugins_footer');

	}
	public function update(){
		$id_cliente = $this->input->post("id_cliente");
		$nombre_cliente=$this->input->post("nombre_cliente");
		$nro_doc_cliente=$this->input->post("nro_doc_cliente");
		$direccion_cliente=$this->input->post("direccion_cliente");
		$telefono_cliente=$this->input->post("telefono_cliente");
		
		$data = array(
			'nombre_cliente' => strtoupper($nombre_cliente),
			'nro_doc_cliente' => strtoupper($nro_doc_cliente),
			'direccion_cliente' => strtoupper($direccion_cliente),
			'telefono_cliente' => strtoupper($telefono_cliente),
			'estado_cliente' => "1",
		
			
		);
		if ($this->Clientes_model->update($id_cliente,$data)) {
			$this->session->set_flashdata("success","Datos Actualizados");
			redirect(base_url()."Clientes");
		}
		else{
			$this->session->set_flashdata("error","No se pudo actualizar la informacion");
			$this->edit($id_cliente);
			//redirect(base_url()."categorias/edit/".$IdCategoria);
		}
	}
	public function delete($id){
		$data = array('estado_cliente' => "3",
	 );
	 $this->Clientes_model->update($id,$data);
	 echo "Clientes";
	}
}