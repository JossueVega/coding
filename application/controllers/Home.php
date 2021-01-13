<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->load->model(array('Poster_Model', 'Noticia_Model'));

    //Codeigniter : Write Less Do More
  }

  function index()
  {
    $Datos = array('Ps' => $this->Poster_Model->Todos(), 'New' =>$this->Noticia_Model->Todos(),);
    $this->load->view('layouts/head');
    $this->load->view('home/index', $Datos);
    $this->load->view('layouts/footer');
  }

} ?>
