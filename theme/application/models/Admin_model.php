<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model {

  public function __construct()
  {
    parent::__construct();
  }
  public function login($username,$password){
    $this->db->where('username',$username);
    $this->db->where('password',$password);
    $query = $this->db->get('admin');
    return $query->num_rows() == 1 ? $query->row() : false;
  }
}
