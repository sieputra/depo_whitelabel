<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
  public function __construct() {
    parent::__construct();
    $this->load->model(array('settings_model', 'pages_model'));
  }
  
  public function index(){    
    $param['settings'] = $this->settings_model->get_settings('general');
    $param['pages'] = $this->pages_model->get(array('id', 'slug', 'title'));
    $param['menu'] = $this->load->view('frontend/menu' , $param , TRUE);
    $data['header'] = $this->load->view('frontend/header' , $param , TRUE);
    $data['footer'] = $this->load->view('frontend/footer' , array() , TRUE);
    $data['container'] = $this->load->view('frontend/home/container' , array() , TRUE);
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
  