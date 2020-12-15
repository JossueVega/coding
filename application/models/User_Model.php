<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_Model extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }

  public function GetUser($user,$password)
  {
    $this->db->select('Idusuario,correo,usuario');
    $this->db->from('users');
    $this->db->where('usuario', $user);
    $this->db->where('pasword', $password);
    return $this->db->get()->row();
  }
}
