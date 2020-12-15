<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Comentary extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
     $this->load->model(array('Comentary_model'));
  }

  function contact()
  {
    $datos = array('comentarios' => $this->Comentary_model->GetAll() );
    $this->load->view('Layouts/head');
    $this->load->view('home/contacto',$datos);
    $this->load->view('Layouts/footer');
  }

  public function Add()
  {
    $datos = array(
      'nombre' =>$this->input->post('nombre'),
      'email' =>$this->input->post('email'),
      'titulo' =>$this->input->post('titulo'),
      'mensaje'=>$this->input->post('mensaje')
    );

    if ($this->Comentary_model->AddComentary($datos)) {
      redirect( base_url().'comentarios');
    }
  }
}
