<?php
  /**
   *
   */
  class Log extends CI_Model
  {

    function __construct()
    {
      parent::__construct();
    }
    public function login($user, $pass)
    {
        $this->db->select('id, nombre');
        $this->db->from('usuarios');
        $this->db->where('nombre', $user);
        $this->db->where('contrasena' $pass);
        $consulta = $this->db->get();
        $result = $consulta->row();
        return $result;
    }
  }
  

 ?>
