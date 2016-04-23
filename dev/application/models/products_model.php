<?php

class Products_model extends CI_Model {
  private $_table_name = 'wc_products';
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
  
  public function filter_parent($params_like = array(), $params_where = array(), $num = -1, $order_by = '' , $order_type = 'ASC' , $offset = -1)
  {
    if(count($params_like) !== 0 || count($params_where) !== 0){
      
      if(count($params_like) != 0){
        foreach ($params_like as $key => $value) {
          $tkey = array_keys($value); $tkey = $tkey[0];  
          $tvalue = $value[$tkey];
          $this->db->like($tkey , $tvalue);
        }
      }
      if(count($params_where) != 0){
        foreach ($params_where as $key => $value) {
          $tkey = array_keys($value); $tkey = $tkey[0];  
          $tvalue = $value[$tkey];
          $this->db->where($tkey , $tvalue);
        }
      }
      $this->db->where('remote_id = remote_upsell_id');
      if(!empty($order_by)){
        $this->db->order_by($order_by , $order_type);
      } 
      if($num !== -1){
        $query = $this->db->get($this->_table_name, $num, (($offset != -1) ? $offset : 0));
      }else{
        $query = $this->db->get($this->_table_name);
      }
      //$this->krumo->dpm($this->db->last_query());
      return $query->result();
    } else {
      return FALSE;
    }
  }

  public function get($num = -1, $order_by = '' , $order_type = 'ASC')
  {
    if(!empty($order_by)){
      $this->db->order_by($order_by , $order_type);
    }  
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
  
  public function get_parent($num = -1, $order_by = '' , $order_type = 'ASC', $offset = -1)
  {
    $this->db->where('remote_id = remote_upsell_id');
    if(!empty($order_by)){
      $this->db->order_by($order_by , $order_type);
    }  
    if($num !== -1){
      $query = $this->db->get($this->_table_name, $num , (($offset != -1) ? $offset : 0));
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
  
  public function get_images($id = -1 , $num = -1)
  {
    if( $id != -1){
      if($num !== -1){
        $query = $this->db->where('id_product' , $id)->get('wc_dimages', $num);
      }else{
        $query = $this->db->where('id_product' , $id)->get('wc_dimages');
      }
      $rs = $query->result();
      if(isset($rs)){
        return $rs;
      } else {
          return FALSE;
      }
    }
  }
  
  public function get_variations($id = -1 , $num = -1)
  {
    if( $id != -1){
      if($num !== -1){
        $query = $this->db->where('id_product' , $id)->get('wc_dvariation', $num);
      }else{
        $query = $this->db->where('id_product' , $id)->get('wc_dvariation');
      }
      $rs = $query->result();
      if(isset($rs)){
        return $rs;
      } else {
          return FALSE;
      }
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
      $this->db->where('id', $key);
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
      $this->db->trans_begin();
      //$this->db->insert_batch($this->_table_name, $data); 
      foreach ($data as $key => $new_prd_data) {
        //prepare datail data arrays
        $images = $new_prd_data['images']; // copy images array from product array
        $attributes = $new_prd_data['attributes'];
        $variations = $new_prd_data['variations'];
        unset($new_prd_data['images']); // remove images array from product insert
        unset($new_prd_data['attributes']);
        unset($new_prd_data['variations']);
        //insert header product data
        $this->db->insert($this->_table_name, $new_prd_data); 
        $new_prd_id = $this->db->insert_id();
        //proccess images data
        if(isset($images) && (count($images) != 0)){
          $tmpimages = array();
          foreach ($images as $image) { 
            $image['id_product'] =  $new_prd_id;
            $tmpimages[] = $image;
          }
          $images = $tmpimages;
          $this->db->insert_batch('wc_dimages', $images); 
        }
        if(isset($attributes) && (count($attributes) != 0)){
          $tmpattributes = array();
          foreach ($attributes as $attribute) { 
            $attribute['id_product'] =  $new_prd_id;
            $tmpattributes[] = $attribute;
          }
          $attributes = $tmpattributes;
          $this->db->insert_batch('wc_dattribute', $attributes); 
        }
        if(isset($variations) && (count($variations) != 0)){
          $tmpvariations = array();
          foreach ($variations as $variation) { 
            $variation['id_product'] =  $new_prd_id;
            $tmpvariations[] = $variation;
          }
          $variations = $tmpvariations;
          $this->db->insert_batch('wc_dvariation', $variations); 
        }
      }
      if ($this->db->trans_status() === FALSE){
        $this->db->trans_rollback();
        return FALSE;
      }
      $this->db->trans_commit();
    } else {
      return FALSE;
    }
  }
  
}