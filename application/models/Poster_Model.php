<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Poster_Model extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }
  public function Agregar($data)
  {
    return $this->db->insert('posters', $data);

  }
  public function Obtener($id)
  {
    $this->db->where('idpost', $id);
    return $this->db->get('posters')->row();
  }
  public function Todos()
  {
    return $this->db->get('posters')->result();

  }
  public function Eliminar($id)
  {
    $this->db->where('idpost', $id);
    return $this->db->delete('posters');
  }

}
