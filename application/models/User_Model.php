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
    $this->db->select('u.idusuario,u.correo,u.usuario,r.tipo rol');
    $this->db->from('users u');
    $this->db->join('usersrol ur', 'u.idusuario = ur.idusuario', 'inner');
    $this->db->join('roles r', 'r.idrol = ur.idrol', 'inner');
    $this->db->where('usuario', $user);
    $this->db->where('pasword', $password);
    return $this->db->get()->row();
  }
}
