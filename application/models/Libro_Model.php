<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Libro_Model extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }
  public function Agregar($data)
  {
    return $this->db->insert('libros', $data);

  }
  public function Obtener($id)
  {
    $this->db->where('id_libro', $id);
    return $this->db->get('libros')->row();
  }
  public function Todos()
  {
    return $this->db->get('libros')->result();

  }
  public function Eliminar($id)
  {
    $this->db->where('id_libro', $id);
    return $this->db->delete('libros');
  }

}
