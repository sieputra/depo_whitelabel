<?php
define('TABLE_NAME', 'settings');
class Settings_model extends CI_Model {
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
      $query = $this->db->get(TABLE_NAME);
      return $query->result();
    } else {
      return FALSE;
    }
  }

  public function get($num = -1)
  {
    if($num !== -1){
      $query = $this->db->get(TABLE_NAME, $num);
    }else{
      $query = $this->db->get(TABLE_NAME);
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
      $this->db->insert(TABLE_NAME, $this);
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
      $this->db->update(TABLE_NAME, $upd);
    } else {
       return FALSE; 
    }
  }
  
  public function delete($id = -1)
  {
    if($i != -1){
      $this->db->where('id', $id);
      $this->db->delete(TABLE_NAME);
    } else {
       return FALSE; 
    }
  }
   /*
   * CUSTOM DB FUNCTION
   * 
   */
   
   public function get_settings($module = '')
   {
     if(!empty($module)){
       $vars = $this->filter(array('module' => $module));
       $tmp = array();
       foreach ($vars as $key => $value) {
          $tmp[$value->key] = $value->value; 
       }
       return $tmp;
     }else{
       return FALSE;
     }
   }
   
   public function rec_count(){
      return count($this->get());
    }
}