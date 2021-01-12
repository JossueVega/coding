<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Poster extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->load->model(array('Poster_Model'));
  }

  function index()
  {
    $datos = array('Ps' => $this->Poster_Model->Todos(), );
    $this->load->view('layouts/head');
    $this->load->view('Posters/index', $datos);
    $this->load->view('layouts/footer');
  }
  public function Create()
  {
    $this->load->view('layouts/head');
    $this->load->view('Posters/Create');
    $this->load->view('layouts/footer');
  }
  public function Agregar()
  {
    $Datos = array('titulo' => $this->input->post('titulo'), 'imag'=>$this->input->post('imag'));
    if ($this->Poster_Model->Agregar($Datos)) {
      redirect(base_url().'Poster/index');
    }
  }
}
