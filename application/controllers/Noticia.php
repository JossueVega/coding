<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Noticia extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->load->model(array('Noticia_Model'));
  }

  function index()
  {
    $datos = array('New' => $this->Noticia_Model->Todos(), );
    $this->load->view('layouts/head');
    $this->load->view('Noticia/index', $datos);
    $this->load->view('layouts/footer');
  }
  public function Create()
  {
    $this->load->view('layouts/head');
    $this->load->view('Noticia/Create');
    $this->load->view('layouts/footer');
  }
  public function Agregar()
  {
    $Datos = array('titulo' => $this->input->post('titulo'), 'mensaje'=>$this->input->post('mensaje'), 'imag'=>$this->input->post('imag'));
    if ($this->Noticia_Model->Agregar($Datos)) {
      redirect(base_url().'home/index');
    }
  }
}
