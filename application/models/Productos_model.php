<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Productos_model extends CI_MOdel {

     public function getProductos(){
        // $resultados = $this->db->get("categorias");
        //return $resultados->result();
 $this->db->from("productos");
         //$resultados = $this->db->get("marcas");
        $this->db->where("estado_producto","1");
        $resultados=$this->db->get();
        return $resultados->result();

    }


     public function getProducto($id){
        $this->db->where("id_producto",$id);
          $resultados = $this->db->get("productos");
            return $resultados->row();

    }

    public function getRoles(){
        $resultados = $this->db->get("roles");
        return $resultados->result();
    }
    public function save($data){
        return $this->db->insert("productos",$data);
    }
//funcion que recibe como parametro el user y contraseña
    public function login($username, $password){
        //consultas a la base de datos
        $this->db->where("username",$username);//se llama a la clase db, al metodo where
        $this->db->where("password",$password);
//captura de los valores con get de la tabla usuarios
        $resultados = $this->db->get("productos");
//se crea una condicion de los registros
//si es mayor a 0 entonces, devolver las filas que existen
        if ($resultados->num_rows()>0) {
            return $resultados->row();
        }
        else{
            return false;
        }
    }
    public function update($id,$data){
        $this->db->where("id_producto",$id);
        return $this->db->update("productos",$data);

}
}