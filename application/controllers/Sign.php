<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sign extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
    $this->load->model(array('Admin_Model'));
  }

  function index()
  {
    if ($this->session->set_admindata('login')) {
      redirect(base_url().'Home');

    }
    else {
      $this->load->view('Auth/sign');
    }

  }
  public function Login()
  {
    $correo=$this->input->post('correo');
    $pasword=$this->input->post('pass');
    $user=$this->Admin_Model->GetAdmin($correo,$pass);

    if (!$user) {
    $this->session->set_flashdata("Error", "El usuario no ha introducido los datos correctamente");
     redirect (base_url());
   }
   elseif ($user->correo) {
     $acceso = array(
       'id_admin' =>$user->Id_admin,
       'correo' =>$user->correo,

       'login'=>TRUE
     );
     $this->session->set_admindata($acceso);
     redirect(base_url().'Home');
   }
  }
  function LogOff()
  {
  $this->session->sess_destroy();
  redirect(base_url());
  }

  }
