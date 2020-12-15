<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Comentary_model extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }

  public function AddComentary($datos)
  {
   return $this->db->insert('comentarios', $datos);
  }

  public function GetAll()
  {
    return $this->db->get('comentarios')->result();;
  }
}
