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
  
  private function _get_favorite_product(){
    $this->load->model(array('products_model'));
    $settings = $this->settings_model->get_settings('shop');
    $idfav = $settings['SHOP_FAVORITE'];
    $retval = array();
    if(!empty($idfav)){
      $products = $this->products_model->filter(array('id' => $idfav));
      foreach ($products as $key => $product) {
         $products[$key]->images = $this->_get_images_on_product($product->id); 
      }
      $retval = $products;
    }
    return $retval[0];
  }
  
  private function _get_images_on_product($id = -1, $num = -1){
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
  
  private function _get_variations_on_product($id = -1, $num = -1){
    if($id != -1 ){
      $this->load->model(array('products_model')); 
      $tmp = $this->products_model->get_variations($id, $num);
      foreach ($tmp as $key => $value) {
        $tmp[$key]->image_json = json_decode($tmp[$key]->image_json);
        $tmp[$key]->attributes_json = json_decode($tmp[$key]->attributes_json);
      }
      return $tmp;
    } else {
      return FALSE;
    }
  }
  
  private function _get_newest_product($location = 'home'){
    $this->load->model(array('products_model'));
    $settings = $this->settings_model->get_settings('shop');
    if($location == 'home') {
      $num = $settings['SHOW_HOME'];
    } elseif($location == 'product') {
      $num = $settings['SHOW_PRODUCT_PAGE'];
    }
    $data = $this->products_model->get_parent($num , 'date_remote_created' , 'DESC');
    if(isset($data) && count($data) > 0){
      foreach ($data as $key => $value) {
        $data[$key]->images = $this->_get_images_on_product($value->id , 1);    
      }
      return $data;
    } else {
      return FALSE;
    }
  }

  private function _get_kategori($hash = ''){
    $this->load->model(array('products_model','settings_model'));
    $settings = $this->settings_model->get_settings('shop');
    $num = $settings['SHOW_PRODUCT_PAGE'];
    $cats = base64_decode(str_replace(array('-', '_', '~'), array('+', '/', '='),$hash));
    $cats = explode('|', $cats);
    
    $params_like = array();$params_where = array();
    foreach ($cats as $key => $cat) {
      $params_like[] = array('categories' => $cat);    
    }
    
    $data = $this->products_model->filter_parent($params_like, $params_where, $num , 'date_remote_created' , 'DESC');
   // $this->krumo->dpm($data);die();
    if(isset($data) && count($data) > 0){
      foreach ($data as $key => $value) {
        $data[$key]->images = $this->_get_images_on_product($value->id , 1);    
      }
      return $data;
    } else {
      return FALSE;
    }
  }
  
  private function _prepare_menu_kategori(){
    $retval = array();
    $this->load->model(array('categories_model'));  
    $categories = $this->categories_model->get();
    //Category
    $forbiden = array('brand' , 'sepatu-pria' , 'sepatu-wanita'); 
    foreach ($categories as $key => $category) {
      if($category->remote_parent == 0 && !in_array($category->slug, $forbiden)){
        $category->id_tohash = $category->name;
        $retval['kategori'][] = $category;   
      }
    }
    //Men
    $categories = $this->categories_model->filter(array('slug' => 'sepatu-pria'));
    if(isset($categories[0])){
      $categories = $categories[0];
      $pass_slug = array('sepatu-lari','sepatu-hikingoutdoor' ,'sepatu-casual' , 'sepatu-futsal','sepatu-bola','sepatu-safety');
      $allcats = $this->categories_model->get();
      foreach ($allcats as $key => $cat) {
        if($category->remote_parent == 0 && in_array($cat->slug, $pass_slug)){
          $cat->id_tohash = $categories->name.'|'.$cat->name;
          $retval['pria'][] = $cat;  
        }    
      }
    }
    //Woman
    $categories = $this->categories_model->filter(array('slug' => 'sepatu-wanita'));
    if(isset($categories[0])){
      $categories = $categories[0];
      $pass_slug = array('sepatu-lari','sepatu-tennis','sepatu-traininggym','sepatu-hikingoutdoor');
      $allcats = $this->categories_model->get();
      foreach ($allcats as $key => $cat) {
        if($category->remote_parent == 0 && in_array($cat->slug, $pass_slug)){
          $cat->id_tohash = $categories->name.'|'.$cat->name;
          $retval['wanita'][] = $cat;  
        }    
      }
    }
    // Brand
    $categories = $this->categories_model->filter(array('slug' => 'brand'));
    if(isset($categories[0])){
      $categories = $categories[0];
      $fcategories = $this->categories_model->filter(array('remote_parent' => $categories->remote_id));
      foreach ($fcategories as $key => $category) {
        $category->id_tohash = $category->name;
        $retval['merek'][] = $category;   
      }
    }
    return $retval;
  }
  
  public function index(){
    $param['settings'] = $this->settings_model->get_settings('general');
    $param['pages'] = $this->pages_model->get(array('id', 'slug', 'title'));
    $param['favorite'] = $this->_get_favorite_product();
    $param['menu'] = $this->load->view('frontend/menu' , $param , TRUE);
    $data['header'] = $this->load->view('frontend/header' , $param , TRUE);
    $data['footer'] = $this->load->view('frontend/footer' , array() , TRUE);
    $paramhero['data'] = $this->_get_favorite_product();
    $paramcontainer['hero'] = $this->load->view('frontend/home/container-favorite' , $paramhero , TRUE);
    $paramcontainer['info'] = $this->load->view('frontend/home/container-info' , array() , TRUE);
    $paramnewest['data'] = $this->_get_newest_product();
    $paramcontainer['newest'] = $this->load->view('frontend/home/container-newest' , $paramnewest , TRUE);
    $data['container'] = $this->load->view('frontend/home/container' , $paramcontainer , TRUE);
    $this->load->view('frontend/index' , $data);
  }
  
  public function load_page($page = 'info'){
    ini_set('display_errors', 0);
    $param['settings'] = $this->settings_model->get_settings('general');
    $param['pages'] = $this->pages_model->get(array('id', 'slug', 'title'));
    $param['favorite'] = $this->_get_favorite_product();
    $param['menu'] = $this->load->view('frontend/menu' , $param, TRUE);
    $data['header'] = $this->load->view('frontend/header' , $param , TRUE);
    $data['footer'] = $this->load->view('frontend/footer' , array() , TRUE);
    $param_container['page'] = $this->pages_model->filter(array('slug' => $page), array('id', 'slug', 'title' , 'content'));
    $param_container['page'] = $param_container['page'][0];
    $data['container'] = $this->load->view('frontend/pages/container' , $param_container , TRUE);
    $this->load->view('frontend/index' , $data);
  }
  
  public function product_detail($id = -1){
    $this->load->model('settings_model');
    
    $this->load->model(array('products_model', 'categories_model' , 'tags_model'));
    $products = $this->products_model->filter(array('id' => $id));
    
    //imagess
    foreach ($products as $key => $product) {
       $products[$key]->images = $this->_get_images_on_product($product->id); 
    }
    //variations
    foreach ($products as $key => $product) {
       $products[$key]->variations = $this->_get_variations_on_product($product->id); 
    }
    //tags
    foreach ($products as $k => $product) {
      $tmp = explode(',', $product->tags);
      $stags = array();
      foreach ($tmp as $key => $value) {
        $new_value = new stdClass();
        $tag = $this->tags_model->filter(array('name' => $value));
        $new_value->id = $tag[0]->id ;
        $new_value->name = $tag[0]->name ;
        $new_value->slug = $tag[0]->slug ;
        $stags[$key] = $new_value;
      }
      $products[$k]->tags = $stags;
    }
    //categories
    foreach ($products as $k => $product) {
      $tmp = explode(',', $product->categories);
      $scat = array();
      foreach ($tmp as $key => $value) {
        $new_value = new stdClass();
        $tag = $this->categories_model->filter(array('name' => $value));
        $new_value->id = $tag[0]->id ;
        $new_value->name = $tag[0]->name ;
        $new_value->slug = $tag[0]->slug ;
        $scat[$key] = $new_value;
      }
      $products[$k]->categories = $scat;
    }
    //upsell id
    foreach ($products as $k => $product) {
      $upsell_products = $this->products_model->filter(array('remote_upsell_id' => $product->remote_upsell_id));
      foreach ($upsell_products as $key => $uproduct) {
         $upsell_products[$key]->images = $this->_get_images_on_product($uproduct->id , 1);  
         
        
      }
      $products[$k]->upsell_products = $upsell_products;  
    }
    //$this->krumo->dpm($products);
    //die();
    $param['pages'] = $this->pages_model->get(array('id', 'slug', 'title'));  
    $param['settings'] = $this->settings_model->get_settings('shop');
    $param['favorite'] = $this->_get_favorite_product();
    $param['menu'] = $this->load->view('frontend/menu' , $param , TRUE);
    $param['cssload'] = $this->load->view('frontend/products/index-css' , array() , TRUE);
    $data['header'] = $this->load->view('frontend/header' , $param , TRUE);
    $datafooter['jsload'] = $this->load->view('frontend/products/index-js' , (isset($products[0])) ? array('products' => $products[0]) : array() , TRUE);
    $data['footer'] = $this->load->view('frontend/footer' , $datafooter , TRUE);
    $paramcontainer['products'] = $products[0];
    $paramcontainer['settings_general'] = $this->settings_model->get_settings('general');
    $data['container'] = $this->load->view('frontend/products/container' , $paramcontainer , TRUE);
    $this->load->view('frontend/index' , $data);
  }

  public function load_qty_product($parent_remote_ids = -1){
    //fucntion to handle ajax call from home controller, not used for normal controller
    $retval = FALSE;  
    if($parent_remote_ids != -1){
      $settings = $this->settings_model->get_settings('settings');
      $consumer_key = $settings['CUSTOMER_KEY']; 
      $consumer_secret = $settings['CUSTOMER_SECRET']; 
      $store_url = $settings['API_URL']; 
      $api_endpoint = $settings['API_END_POINT']; 
      $params = array( 'consumer_key' => $consumer_key, 'consumer_secret' => $consumer_secret, 'store_url' => $store_url , 'api_endpoint' => $api_endpoint);
      $this->load->library('wc_api', $params);
      $data = $this->wc_api->get_product($parent_remote_ids); 
      $tvariations = array();
      foreach ($data->product->variations as $key => $variation) {
       $tvariations[] = array( 'id' => $variation->id , 
                                'var_name' => (isset($variation->attributes[0]->option)) ? $variation->attributes[0]->option : '',
                                'qty' => $variation->stock_quantity);     
      }

      $retval = json_encode($tvariations);

    }
    echo $retval;
  }

  public function products($action = '' , $hash = ''){
    $param['pages'] = $this->pages_model->get(array('id', 'slug', 'title'));  
    $param['favorite'] = $this->_get_favorite_product();
    $param['menu_data'] = $this->_prepare_menu_kategori();
    $param['menu'] = $this->load->view('frontend/menu' , $param , TRUE);
    $data['header'] = $this->load->view('frontend/header' , $param , TRUE);
    $data['footer'] = $this->load->view('frontend/footer' , array() , TRUE);
    $paramcontainer['settings_general'] = $this->settings_model->get_settings('general');
    if(empty($action)){
      $paramnewest['data'] = $this->_get_newest_product('product');
      $paramcontainer['show'] = $this->load->view('frontend/products/container-newest' , $paramnewest , TRUE);
    } elseif($action == 'category') {
      $paramnewest['data'] = $this->_get_kategori($hash);
      $paramcontainer['show'] = $this->load->view('frontend/products/container-newest' , $paramnewest , TRUE);  
    }
    $data['container'] = $this->load->view('frontend/products/container-all' , $paramcontainer , TRUE);
    $this->load->view('frontend/index' , $data);
  }
}
  