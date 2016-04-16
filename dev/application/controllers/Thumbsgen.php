<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Thumbsgen extends CI_Controller {
  public function __construct() {
      parent::__construct();
      $this->load->helper(array('html'));
      $this->load->library(array('thumbs'));
  }
  
  public function load($uri , $width , $height){
    ini_set('display_errors', 0); 
    $query = $_GET;
    unset($_GET);
    $filename = base64_decode(rawurldecode($uri),true);
    $img_set[0] = $width;
    $img_set[1] = $height;
    // Width
    if($img_set[0] > 0){
      $_GET['w'] =  $img_set[0];
    }else{
      if($img_set[0] == 'small'){
        $_GET['w'] =  100;
      }elseif($img_set[0] == 'large'){
        $_GET['w'] =  1024;
      }else{
        $_GET['w'] =  200;
      }
    }
    
    // Height
    if(isset($img_set[1])){
      if($img_set[1] > 0){
        $_GET['h'] = $img_set[1];
      }else{
        if($img_set[1] == 'small'){
          $_GET['h'] =  100;
        }elseif($img_set[1] == 'large'){
          $_GET['h'] =  1024;
        }else{
          exit();
        }
      }
    }
    
    // Image quality, default is 72
    $_GET['q'] = ((isset($query['q']) && in_array($query['q'],array(12,72,100))) ? $query['q'] : 72);
    
    // Zoom crop
    $_GET['zc'] = ((isset($query['zc']) && $query['zc'] > 0) ? $query['zc'] : 0);
    
    $_GET['test'] = ((isset($query['test']) && $query['test'] == 1) ? 1 : 0);
    
    $_GET['src'] = $filename;
    //echo "<pre>";
    //print_r($_GET);
    //echo "</pre>";
    // Start timthumb
    timthumb::start();
    
    exit();
  }
}
  