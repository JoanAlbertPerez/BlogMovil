<?php
class Usuario_model extends CI_Model{
  function __construct()
  {
    $this->load->database();
  }

  /*Sacar información de la bbdd (parte usuarios)*/
  public function login($user, $pass)
  {
    $this->db->select('id, nombre');
    $this->db->from('usuarios');
    $this->db->where('nombre', $user);
    $this->db->where('contrasena', $pass);
    $consulta = $this->db->get();
    $result = $consulta->row();
    return $result;
  }
}


?>
