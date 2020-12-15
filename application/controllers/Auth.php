<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
    $this->load->model(array('User_Model'));
  }

  function index()
  {
    if ($this->session->set_userdata('login')) {
      redirect(base_url().'Home');
    }
    else {
      $this->load->view('Auth/login');
    }

  }
  public function Login()
  {
    $correo=$this->input->post('correo');
    $pasword=$this->input->post('pasword');
    $user=$this->User_Model->GetUser($correo,$pasword);
    
    if (!$user) {
    $this->session->set_flashdata("Error", "El usuario no ha introducido los datos correctamente");
     redirect (base_url());
   }
   elseif ($user->usuario==$correo) {
     $acceso = array(
       'idusuario' =>$user->Idusuario,
       'correo' =>$user->correo,
       'usuario'=>$user->usuario,
       'login'=>TRUE
     );
     $this->session->set_userdata($acceso);
     redirect(base_url().'Home');
   }
  }
  function LogOff()
  {
  $this->session->sess_destroy();
  redirect(base_url());
  }

  }
