<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
  public function __construct() {
    parent::__construct();
    $this->load->model(array('settings_model', 'pages_model'));
    $this->load->helper(array('html'));
    if(DEPO_DEBUG){
      $this->load->add_package_path(APPPATH.'third_party/debugbar');
      $this->load->library('krumo');
      $this->load->library(array('console'));
      $this->output->enable_profiler(FALSE);
    }
  }
  
  private function get_favorite_product(){
    $this->load->model(array('products_model'));
    $settings = $this->settings_model->get_settings('shop');
    $idfav = $settings['SHOP_FAVORITE'];
    $retval = array();
    if(!empty($idfav)){
      $products = $this->products_model->filter(array('id' => $idfav));
      foreach ($products as $key => $product) {
         $products[$key]->images = $this->get_images_on_product($product->id); 
      }
      $retval = $products;
    }
    return $retval[0];
  }
  
  private function get_images_on_product($id = -1, $num = -1){
    if($id != -1 ){
      $this->load->model(array('products_model')); 
      if($num == 1){
        $tmp = $this->products_model->get_images($id, $num);
        if(isset($tmp[0])){
          return $tmp[0]->src_product; 
        } else {
          return FALSE;
        }
      } else {
        return $this->products_model->get_images($id, $num);
      }
    } else {
      return FALSE;
    }
  }
  
  private function get_newest_product(){
    $this->load->model(array('products_model'));
    $settings = $this->settings_model->get_settings('shop');
    $num = $settings['SHOW_HOME'];
    $data = $this->products_model->get($num , 'date_remote_created' , 'DESC');
    if(isset($data) && count($data) > 0){
      foreach ($data as $key => $value) {
        $data[$key]->images = $this->get_images_on_product($value->id , 1);    
      }
      return $data;
    } else {
      return FALSE;
    }
  }
  
  public function index(){    
    $param['settings'] = $this->settings_model->get_settings('general');
    $param['pages'] = $this->pages_model->get(array('id', 'slug', 'title'));
    $param['menu'] = $this->load->view('frontend/menu' , $param , TRUE);
    $data['header'] = $this->load->view('frontend/header' , $param , TRUE);
    $data['footer'] = $this->load->view('frontend/footer' , array() , TRUE);
    $paramhero['data'] = $this->get_favorite_product();
    $paramcontainer['hero'] = $this->load->view('frontend/home/container-favorite' , $paramhero , TRUE);
    $paramnewest['data'] = $this->get_newest_product();
    $paramcontainer['newest'] = $this->load->view('frontend/home/container-newest' , $paramnewest , TRUE);
    $data['container'] = $this->load->view('frontend/home/container' , $paramcontainer , TRUE);
    $this->load->view('frontend/index' , $data);
  }
  
  public function load_page($page = 'info'){
    ini_set('display_errors', 0);
    $param['settings'] = $this->settings_model->get_settings('general');
    $param['pages'] = $this->pages_model->get(array('id', 'slug', 'title'));
    $param['menu'] = $this->load->view('frontend/menu' , $param, TRUE);
    $data['header'] = $this->load->view('frontend/header' , $param , TRUE);
    $data['footer'] = $this->load->view('frontend/footer' , array() , TRUE);
    $param_container['page'] = $this->pages_model->filter(array('slug' => $page), array('id', 'slug', 'title' , 'content'));
    $param_container['page'] = $param_container['page'][0];
    $data['container'] = $this->load->view('frontend/pages/container' , $param_container , TRUE);
    $this->load->view('frontend/index' , $data);
  }
}
  