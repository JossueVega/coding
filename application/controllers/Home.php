<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->load->model(array('Libro_Model'));

    //Codeigniter : Write Less Do More
  }

  function index()
  {
    $Datos = array('New' =>$this->Libro_Model->Todos(),);
    $this->load->view('layouts/head',);
    $this->load->view('home/index', $Datos);
    $this->load->view('layouts/footer');
  }

} ?>
