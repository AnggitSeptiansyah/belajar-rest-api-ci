<?php

class Poeple_model extends CI_Model {
  public function getAllPoeple(){
    return $this->db->get('poeple')->result_array();
  }

  public function getPoeple($limit, $start, $keyword = null){
    if( $keyword ){
      $this->db->like('name', $keyword);
      $this->db->or_like('email', $keyword);
    }
    return $this->db->get('poeple', $limit, $start)->result_array();
  }

  public function countAllPoeple(){
    return $this->db->get('poeple')->num_rows();
  }
}