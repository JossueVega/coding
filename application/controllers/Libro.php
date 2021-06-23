<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Libro extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->load->model(array('Libro_Model'));
    //Codeigniter : Write Less Do More
  }

  function index()
  {
    $datos = array('New' => $this->Libro_Model->Todos(), );
    $this->load->view('layouts/head');
    $this->load->view('home/index', $datos);
    $this->load->view('layouts/footer');
  }
  public function Create()
  {
    $this->load->view('layouts/head');
    $this->load->view('home/Create');
    $this->load->view('layouts/footer');
  }
  public function Agregar()
  {
    $Datos = array('titulo' => $this->input->post('titulo'), 'autor'=>$this->input->post('autor'), 'isbm'=>$this->input->post('isbm'),
    'categoria' => $this->input->post('categoria'), 'editorial' => $this->input->post('editorial'), 'edicion' => $this->input->post('edicion'));
    if ($this->Libro_Model->Agregar($Datos)) {
      redirect(base_url().'home/index');
    }
  }
  public function Eliminar()
  {
    if ($this->Libro_Model->Eliminar($id)) {
      redirect(base_url().'home/index');
    }
  }

}
