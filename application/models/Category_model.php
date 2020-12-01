<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category_model extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }

  public function AddCategory($datos)
  {
   return $this->db->insert('Category', $datos);
  }

  public function GetAll()
  {
    return $this->db->get('Category')->result();;
  }
}
