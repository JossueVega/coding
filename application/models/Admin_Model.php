<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_Model extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }

  public function GetAdmin($correo,$pass)
  {
    $this->db->select('id_amin, correo, pass');
    $this->db->from('administracion');

    $this->db->where('correo', $correo);
    $this->db->where('pass', $pass);
    return $this->db->get()->row();
  }
}
