<?php
  class Users extends CI_Controller
  {
    public function __construct()
    {
      parent::__construct();
      $this->load->helper('url_helper');
      $this->load->model('usuario_model');
    }

    public function iniciar_sesion()
    {
      $data = array();
      $data['error'] = $this->session->flashdata('error');
      $this->load->view('templates/header');
      $this->load->view('usuarios/iniciar_sesion');
      $this->load->view('templates/footer');
    }

    public function iniciar_sesion_post()
    {
      if ($this->input->post()) {
        $nombre = $this->input->post('nombre');
        $contrasena = $this->input->post('contrasena');
        $this->load->model('usuario_model');
        $usuario = $this->usuario_model->login($nombre, $contrasena);
        if ($usuario) {
          $usuario_data = array('id' => $usuario->id,'nombre' => $usuario->nombre,'logueado' => TRUE);
          $this->session->set_userdata($usuario_data);
          redirect('Users/logueado');
        } else {
          $this->session->set_flashdata('error', 'El usuario o la contraseña son incorrectos.');
          redirect('Users/iniciar_sesion');
        }
      } else {
        $this->iniciar_sesion();
      }
    }

    public function logueado() {
      if($this->session->userdata('logueado')){
        $data = array();
        $data['nombre'] = $this->session->userdata('nombre');
        redirect('News/datatable');

      }else{
        redirect('Users/iniciar_sesion');
      }
    }

    public function cerrar_sesion() {
      $usuario_data = array(
        'logueado' => FALSE
      );
      $this->session->set_userdata($usuario_data);
      redirect('Users/iniciar_sesion');
    }
  }
