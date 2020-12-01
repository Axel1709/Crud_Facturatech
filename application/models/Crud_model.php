<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Crud_model extends CI_Model{
    public function __construct(){
        $this->load->database();
  }
    function createData(){
      $data = array(

        'matricula' => $this->input->post('matricula'),
        'contraseña' => $this->input->post('contraseña'),
        'estado' => $this->input->post('estado'),
        'nombre' => $this->input->post('nombre'),
        'facultad' => $this->input->post('facultad'),
        'correo' => $this->input->post('correo'),
      //  'rol' => $this->input->post('rol'),
        //Falta Foto
        //falta genero masculino
        //falta genero femenino

        'ocupacion' => $this->input->post('ocupacion'),
        'fecha_nacimiento' => $this->input->post('fecha_nacimiento'),
        'fecha_creacion' => $this->input->post('fecha_creacion')

      );
      $this->db->insert('usuario3', $data);

  }

  function getAllData(){
    $query = $this->db->query('SELECT * FROM usuario3');
    return $query->result();

  }

  function getData($id){
  $query = $this->db->query('SELECT * FROM usuario3 WHERE `id` ='.$id);
  return $query->row();
 }

  function updateData($id){

    $data = array(

      'matricula' => $this->input->post('matricula'),
      'contraseña' => $this->input->post('contraseña'),
      'estado' => $this->input->post('estado'),
      'nombre' => $this->input->post('nombre'),
      'facultad' => $this->input->post('facultad'),
      'correo' => $this->input->post('correo'),
      //  'rol' => $this->input->post('rol'),
      //Falta Foto
      //falta genero masculino
      //falta genero femenino

      'ocupacion' => $this->input->post('ocupacion'),
      'fecha_nacimiento' => $this->input->post('fecha_nacimiento'),
      'fecha_creacion' => $this->input->post('fecha_creacion')

    );
    $this->db->where('id',$id);
    $this->db->update('usuario3', $data);

  }
  function deleteData($id){
    $this->db->where('id',$id);
    $this->db->delete('usuario3');
  }
}
