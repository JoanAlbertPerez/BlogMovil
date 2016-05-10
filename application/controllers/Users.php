<?php
class Users extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->helper('url_helper');
    $this->load->model('usuario_model');
  }


  /*Carga la pagina con el formulario para iniciar sesión */
  public function iniciar_sesion()
  {
    $data = array();
    $data['error'] = $this->session->flashdata('error');
    $this->load->view('templates/header');
    $this->load->view('usuarios/iniciar_sesion');
    $this->load->view('templates/footer');
  }


  /*Recibe información del formulario de inicio de sesión y la compara con la recibida de la tabla de usuarios de la base de datos.
  En caso de coincidir inicia la sesión y abre la pagina de administración, en caso contrario abre la pagina de inicio de sesión con un mensaje de error*/
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


  /*Comprueba que el usuario ha iniciado sesión y lo envia a la pagina de administración, en caso contrario abre la pagina de inicio de sesión*/
  public function logueado() {
    if($this->session->userdata('logueado')){
      $data = array();
      $data['nombre'] = $this->session->userdata('nombre');
      redirect('News/datatable');

    }else{
      redirect('Users/iniciar_sesion');
    }
  }


  /*Cierra la sesión del usuario*/
  public function cerrar_sesion() {
    $usuario_data = array(
      'logueado' => FALSE
    );
    $this->session->set_userdata($usuario_data);
    redirect('Users/iniciar_sesion');
  }
}
