<?php
class News extends CI_Controller {

  public function __construct()
  {
    parent::__construct();
    $this->load->model('news_model');
    $this->load->helper('url_helper');
  }


  /*Envia la información de la base de datos solicitada a traves del modelo news_model/get_news en forma de array*/
  public function view($slug = NULL)
  {
    $data['news_item'] = $this->news_model->get_news($slug);

    if (empty($data['news_item']))
    {
      show_404();
    }

    $data['title'] = $data['news_item']['title'];

    $this->load->view('templates/header', $data);
    $this->load->view('news/view', $data);
    $this->load->view('templates/footer');
  }


  /**/
  public function index()
  {
    $data['news'] = $this->news_model->get_news();
    $data['title'] = 'Entradas Recientes';

    $this->load->view('templates/header', $data);
    $this->load->view('news/index', $data);
    $this->load->view('templates/footer');
  }


  /*Recibe la información del formulario para crear nuevas noticias, lo valida y envia la información al modelo news_model/set_news para crear asi la nueva noticia
  Si la noticia es creada con exito abre la pagina principal donde pueden verse todas las noticias*/
  public function create()
  {
    $this->load->helper('form');
    $this->load->library('form_validation');

    $data['title'] = 'Crear nueva entrada';

    $this->form_validation->set_rules('title','Title', 'required');
    $this->form_validation->set_rules('text', 'Text', 'required');

    if ($this->form_validation->run() === FALSE){
      $this->load->view('templates/header', $data);
      $this->load->view('news/create');
      $this->load->view('templates/footer');
    }else {
      $this->news_model->set_news();
      redirect('news');
    }
  }


  /*Recibe la ID de la noticia que el administrador quiere borrar y la envia al modelo news_model/delete para borrarla.
  Si la noticia es borrada con exito abre la pagina principal donde pueden verse todas las noticias */
  public function delete()
  {
    $this->load->helper('form');
    $this->news_model->delete($this->input->post('id'));
    redirect('news');
  }


  /*Envia la información de la base de datos solicitada a traves del modelo news_model/get_news en forma de array para poder dibujar un datatable*/
  public function datatable()
  {
    $data['news'] = $this->news_model->get_news();

    if (empty($data['news']))
    {
      show_404();
    }

    $this->load->view('templates/header', $data);
    $this->load->view('usuarios/logueado', $data);
    $this->load->view('templates/footer');
  }


  /*Recibe la ID de la noticia que el administrador quiere borrar y la envia al modelo news_model/delete para borrarla.
  Si la noticia es borrada con exito abre la pagina con el datatable */
  public function delete_datatable()
  {
    $this->load->helper('form');
    $this->news_model->delete($this->input->post('id'));
    redirect('News/datatable');
  }

}
