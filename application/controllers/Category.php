<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
     $this->load->model(array('Category_model'));
  }

  function index()
  {
    $datos = array('category' => $this->Category_model->GetAll() );
    $this->load->view('Layouts/head');
    $this->load->view('category/index',$datos);
    $this->load->view('Layouts/footer');
  }

  public function Add()
  {
    $datos = array(
      'Name' =>$this->input->post('Name'),
      'Description'=>$this->input->post('Description')
    );

    if ($this->Category_model->AddCategory($datos)) {
      redirect( base_url().'Category');
    }
  }
}
