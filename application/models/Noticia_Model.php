<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Noticia_Model extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }
  public function Agregar($data)
  {
    return $this->db->insert('noticias', $data);

  }
  public function Obtener($id)
  {
    $this->db->where('idnoticia', $id);
    return $this->db->get('noticias')->row();
  }
  public function Todos()
  {
    return $this->db->get('noticias')->result();

  }
  public function Eliminar($id)
  {
    $this->db->where('idnoticia', $id);
    return $this->db->delete('noticias');
  }

}
