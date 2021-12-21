<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact_model extends CI_Model {

  public function __construct()
  {
    parent::__construct();
  }
  public function getLists(){
    $this->db->where('del','0');
    $query = $this->db->get('contact');
    return $query->result();
  }
  public function addContact($data){
    $this->db->set($data);
    $this->db->insert('contact');
    return $this->db->insert_id();
  }
  public function getDetail($id){
    $this->db->where('id',$id);
    $query = $this->db->get('contact');
    return $query->result();
  }
  public function delete($id){
    $this->db->where('id',$id);
    $this->db->set('del','1');
    $this->db->update('contact');
    return $this->db->affected_rows();
  }
}
