<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
    $this->load->model(array('Cafe_model'));
  }

  function index()
  {
    $this->load->view('layouts/head');
    $this->load->view('home/index');
    $this->load->view('layouts/footer');
  }
   public function acerca()
   {
     $this->load->view('layouts/head');
     $this->load->view('home/acerca');
     $this->load->view('layouts/footer');
   }

   public function contact()
   {
     $this->load->view('layouts/head');
     $this->load->view('home/contacto');
     $this->load->view('layouts/footer');
   }

   public function Cafes()
   {
     $listacafe=$this->Cafe_model->GetCafe();

     $datos = array('cafes' =>$listacafe , );
     $this->load->view('layouts/head');
     $this->load->view('home/menucafe',$datos);
     $this->load->view('layouts/footer');
   }
} ?>
