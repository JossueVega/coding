<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_Model extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }

  public function GetUser($correo,$pass)
  {
    $this->db->select('id_usuario, correo, pass');
    $this->db->from('usuarios');

    $this->db->where('correo', $correo);
    $this->db->where('pass', $pass);
    return $this->db->get()->row();
  }
}
