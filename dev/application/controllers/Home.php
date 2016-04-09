<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
  public function __construct() {
    parent::__construct();
    $this->load->model('settings_model');
  }
  
  public function index(){
    
    $param['settings'] = $this->settings_model->get_settings('general');
    $data['header'] = $this->load->view('frontend/header' , $param , TRUE);
    $data['footer'] = $this->load->view('frontend/footer' , array() , TRUE);
    $data['container'] = $this->load->view('frontend/home/container' , array() , TRUE);
    $this->load->view('frontend/index' , $data);
  }
}
  