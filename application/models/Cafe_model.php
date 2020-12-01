<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cafe_model extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }

  public function GetCafe()
  {
    $this->db->select('c.*');
    $this->db->from('cafes c');
    return $this->db->get()->result();
  }
}
