<?php
class Categories_model extends CI_Model {
  private $_table_name =  'wc_categories';
  public function __construct()
  {
    parent::__construct();
  }
  /*
   * BASIC FUNCTION CRUD
   * 
   */
  public function filter($params = array())
  {
    if(count($params) !== 0){
      foreach ($params as $key => $value) {
          $this->db->where($key , $value);
      }
      $query = $this->db->get($this->_table_name);
      return $query->result();
    } else {
      return FALSE;
    }
  }

  public function get($num = -1)
  {
    if($num !== -1){
      $query = $this->db->get($this->_table_name, $num);
    }else{
      $query = $this->db->get($this->_table_name);
    }
    $rs = $query->result();
    if(isset($rs)){
      return $rs;
    } else {
        return FALSE;
    }
  }

  public function insert($params = array())
  {
    if(count($params) !== 0){
      foreach ($params as $key => $param) {
        $this->$key = $param;
      }
      $this->db->insert($this->_table_name, $this);
    } else {
      return FALSE;
    }
  }

  public function update($params = array(), $key = '')
  {
    if(count($params) !== 0 && $key != -1){
      $upd = array();
      foreach ($params as $name => $param) {
        $upd[$name] = $param;
      }
      $this->db->where('key', $key);
      $this->db->update($this->_table_name, $upd);
    } else {
       return FALSE; 
    }
  }
  
  public function delete($id = -1)
  {
    if($i != -1){
      $this->db->where('id', $id);
      $this->db->delete($this->_table_name);
    } else {
       return FALSE; 
    }
  }

  public function rec_count(){
    return count($this->get());
  }
  
  public function init_table($data = array()){
    if(count($data) != 0){
      $this->db->trans_start();
      $this->db->insert_batch($this->_table_name, $data); 
      $this->db->trans_complete();
      if ($this->db->trans_status() === FALSE){
        return FALSE;
      }
    } else {
      return FALSE;
    }
  }
}