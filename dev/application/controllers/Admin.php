<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
  public function debug_me($msg){
    echo "<pre>";
    print_r($msg);
    echo "</pre>";
  }
  
	public function __construct() {
        parent::__construct();
        $this->load->add_package_path(APPPATH.'third_party/debugbar');
        $this->load->library('krumo');
    		if(DEPO_DEBUG){
    		  $this->load->library(array('console'));
          $this->output->enable_profiler(FALSE);
    		}
    }
	
	private function get_login_session(){
		if(!($this->session->has_userdata('userlogin'))){
			return FALSE;
		} else {
			return $this->session->userdata('userlogin');
		}
	}
	
	private function auth_depo_user($postdata){
	  $this->console->debug($postdata);
		if(isset($postdata)){
		  $postdata = base64_decode($postdata['auth']);
      $postdata = explode(':', $postdata);
			$qs = array('username' => $postdata[0] , 'password' => $postdata[1]);	
			$params = array('querystring' => $qs);
			$data = $this->depo_api->call(DEPO_URL_API , '/depo-api/user/generate_auth_cookie/' , $params , 'GET');
			$this->console->debug($data);
			if($data->status == 'error'){
				return $data->error;
			} else if ($data->status == 'ok'){
				$this->session->set_userdata(array('userlogin' => $data->user));
				return "User Loged, Prepared Admin Dashboard...";
			}
		} else {
			return FALSE;
		}
	}
	
	public function login(){
	  $this->load->library(array('depo_api'));
	  ini_set('display_errors', 0);
    $postdata = $_POST;
    $resp = $this->auth_depo_user($postdata);
    $this->session->set_flashdata('resp', $resp );
	}
	
	public function logout(){
		$this->session->sess_destroy();
		redirect('/admin', 'location', 301);
	}
	
	public function index()
	{
		if(!($this->get_login_session())){
			$data = array();
			$data['js_load'] = $this->load->view('backend/login/index-js', array(), TRUE); 
			$this->load->view('backend/login/index', $data);
		} else {
			redirect('/admin/dashboard', 'location');
		}
	}
	
  public function do_action($page = 'dashboard'){
    $retval = array();
    $this->load->model(array('settings_model','tags_model' , 'attributes_model' , 'categories_model' , 'products_model'));
    $settings = $this->settings_model->get_settings('settings');
    $consumer_key = $settings['CUSTOMER_KEY']; 
    $consumer_secret = $settings['CUSTOMER_SECRET']; 
    $store_url = $settings['API_URL']; 
    $api_endpoint = $settings['API_END_POINT']; 
    $retval['cat_count'] = $this->categories_model->rec_count();
    $retval['attr_count'] = $this->attributes_model->rec_count();
    $retval['tag_count'] = $this->tags_model->rec_count();
    $local_data = $this->products_model->get();
    $retval['data'] = $local_data;
    if($page == 'products'){
      $params = array( 'consumer_key' => $consumer_key, 'consumer_secret' => $consumer_secret, 'store_url' => $store_url , 'api_endpoint' => $api_endpoint);
      $this->load->library('wc_api', $params);
      $remote_count = $this->wc_api->get_products_count();
      $local_count = $this->products_model->rec_count();
      if($local_count == 0){
        // Need to initialize Data , return empty array
        //return categories count , tags count, attribute count
        
      } else {
        // Fetch All Data From Database...
        $retval['prd_count'] = $local_count;
        if($local_count == $remote_count){
          // DO Nothing .. Maybe Just Message
        } else {
          // Need Update
          // Maybe Message Firt And then Click Button to update
        }
      }
    }
    return $retval;
  }
  
  public function post_on_admin_page($postdata , $page){
    if($page == 'general'){
      foreach ($postdata as $key => $value) {
        if ( $this->input->post($key) ){
            $this->settings_model->update(array('value' => $this->input->post($key, true)), strtoupper($key)); 
        }
      }
    }
    redirect('/admin/'.$page, 'location', 301);
  }
  
	public function load_admin_pages($page = 'dashboard')
	{
    ini_set('display_errors', 0); 
    $this->load->model('settings_model');
		if(!($this->get_login_session())){
			redirect('/admin', 'location', 301);
		} else {
		  if(isset($_POST) && (count($_POST) !== 0)){
		    $this->post_on_admin_page($_POST , $page);
		  }
      $settings = $this->settings_model->get_settings($page);
			$userlogin = $this->session->userdata('userlogin');
			$data['css_load'] = $this->load->view('backend/'.$page.'/index-css', array(), TRUE);
			$param['title'] = ucfirst($page);
			$param['header'] = $this->load->view('backend/header', $param, TRUE);
			$param['page_data'] = $this->do_action($page);
			$data['sidebar'] = $this->load->view('backend/sidebar', $param, TRUE);
			$param['judullaman'] = ucfirst($page) . ' - Welcome ' . $userlogin->displayname;
      $param['settings'] = $settings;
			$data['container'] = $this->load->view('backend/'.$page.'/container', $param, TRUE);
      $fdata['js_load'] = $this->load->view('backend/'.$page.'/index-js', array(), TRUE);
			$data['footer'] = $this->load->view('backend/footer', $fdata, TRUE);
			$this->load->view('backend/index', $data);
		}
	}

  public function load_settings()
  {
    ini_set('display_errors', 1);
    $this->load->model('settings_model');
    $settings = $this->settings_model->get_settings('settings');
    $postdata = $_POST;
    // If postdata Exsist
    if(isset($postdata) && count($postdata) !== 0){
      //Execute Something
      foreach ($postdata as $key => $value) {
        if ( $this->input->post($key) ){
            $this->settings_model->update(array('value' => $this->input->post($key, true)), strtoupper($key)); 
        }
      }
      redirect('/admin/user/settings', 'location', 301);
    }
    if(!($this->get_login_session())){
      redirect('/admin', 'location', 301);
    } else {
      $this->load->model(array('tags_model' , 'attributes_model' , 'categories_model'));
      $userlogin = $this->session->userdata('userlogin');
      $param['title'] = 'Depo API Settings';
      $param['css_load'] = $this->load->view('backend/settings/index-css', array(), TRUE);
      $data['header'] = $this->load->view('backend/header', $param, TRUE);
      $param['page_data'] = $this->do_action();
      $data['sidebar'] = $this->load->view('backend/sidebar', $param, TRUE);
      $param['judullaman'] = 'Depo API Settings - Welcome ' . $userlogin->displayname;
      $param['settings'] = $settings;
      $param['tags'] = $this->tags_model->rec_count();
      $param['attributes'] = $this->attributes_model->rec_count();
      $param['categories'] = $this->categories_model->rec_count();
      $this->console->debug($param);
      //$this->console->debug($param['api_url'][0]->value);
      $data['container'] = $this->load->view('backend/settings/container', $param, TRUE);
      $paramf['js_load'] = $this->load->view('backend/settings/index-js', array(), TRUE);
      $data['footer'] = $this->load->view('backend/footer', $paramf, TRUE);
      $this->load->view('backend/index', $data);
    }
  }

  public function init_table($table_name = ''){
    if(!($this->get_login_session())){
      //Do Nothing
    } else {
      if(!empty($table_name)){
        ini_set('display_errors', 0);
        $this->load->model(array('tags_model' , 'attributes_model' , 'categories_model' , 'products_model'));
        $this->load->model('settings_model');
        $settings = $this->settings_model->get_settings('settings');
        $consumer_key = $settings['CUSTOMER_KEY']; 
        $consumer_secret = $settings['CUSTOMER_SECRET']; 
        $store_url = $settings['API_URL']; 
        $api_endpoint = $settings['API_END_POINT']; 
        $params = array( 'consumer_key' => $consumer_key, 'consumer_secret' => $consumer_secret, 'store_url' => $store_url , 'api_endpoint' => $api_endpoint);
        $this->load->library('wc_api', $params);
        //----- Do The Rest -------////
        if($table_name == 'tags'){
          if($this->tags_model->rec_count() == 0){
            $data = $this->wc_api->get_tags();
            $this->console->debug($data->product_tags);
            $data_to_insert = array();
            foreach ($data->product_tags as $key => $value) {
              $data_to_insert[] = array('remote_id' => $value->id,
                                      'name' => $value->name,
                                      'slug' => $value->slug,
                                      'description' => $value->description,
                                      );   
            }
            if(!$this->tags_model->init_table($data_to_insert)){
              echo "Success Init Tags";
            } else {
              echo "Something Wrong On Tags Tabel Init...";
            }
          } else {
            echo "Tags Table Already Initialize....";
          }
        } else if($table_name == 'attributes'){
          if($this->attributes_model->rec_count() == 0){
            $data = $this->wc_api->get_attributes();
            $this->console->debug($data->product_attributes);
            $data_to_insert = array();
            foreach ($data->product_attributes as $key => $value) {
              $data_to_insert[] = array('remote_id' => $value->id,
                                      'name' => $value->name,
                                      'slug' => $value->slug,
                                      );   
            }
            if(!$this->attributes_model->init_table($data_to_insert)){
              echo "Success Init Attributes";
            } else {
              echo "Something Wrong On Attributes Tabel Init...";
            }
          } else {
            echo "Attributes Table Already Initialize....";
          }
        } else if($table_name == 'categories'){
          if($this->categories_model->rec_count() == 0){
            $data = $this->wc_api->get_categories();
            $this->console->debug($data->product_categories);
            $data_to_insert = array();
            foreach ($data->product_categories as $key => $value) {
              $data_to_insert[] = array('remote_id' => $value->id,
                                      'remote_parent' => $value->parent,
                                      'name' => $value->name,
                                      'slug' => $value->slug,
                                      'description' => $value->description,
                                      'image' => $value->image,
                                      'product_count' => $value->count,
                                      );   
            }
            if(!$this->categories_model->init_table($data_to_insert)){
              echo "Success Init Categories";
            } else {
              echo "Something Wrong On Categorie Tabel Init...";
            }
          } else {
            echo "Categories Table Already Initialize....";
          }
        } else if($table_name == 'products'){
          $local_count = $this->products_model->rec_count();
          if($local_count == 0){
            $remote_data = $this->wc_api->get_products(array('filter[limit]' => -1));  
            if(isset($remote_data->products)){
              //Proccess the remote data array
              $data_to_insert = array();
              foreach ($remote_data->products as $key => $product) {
                $data_to_insert[] = array('sku' => $product->sku,
                                          'remote_id' => $product->id,
                                          'name' => $product->title,
                                          'remote_sku' => $product->sku,
                                          'remote_upsell_id' => implode('|', $product->upsell_ids),
                                          'remote_url' => $product->permalink,
                                          'price' => $product->price,
                                          'regular_price' => $product->regular_price,
                                          'sale_price' => $product->sale_price,
                                          'description' => $product->short_description,
                                          'tags' =>implode(',', $product->tags), 
                                          'categories' =>implode(',', $product->categories), 
                                          ); 
                  //Variations Array
                if(isset($product->variations) && (count($product->variations) != 0)){
                  foreach ($product->variations as $variation) {
                    $data_to_insert[count($data_to_insert)-1]['variations'][] = array(
                      'sku' => $variation->sku,
                      'remote_id' => $variation->id,
                      'remote_url' => $variation->permalink,
                      'price' => $variation->price,
                      'regular_price' => $variation->regular_price,
                      'sale_price' => $variation->sale_price,
                      'image_json' => json_encode($variation->image),
                      'attributes_json' => json_encode($variation->attributes),
                    );
                  }
                }  
                //Attributes Array
                if(isset($product->attributes) && (count($product->attributes) != 0)){
                  foreach ($product->attributes as $attribute) {
                    //get id local id attribute
                    $mattr = $this->attributes_model->filter(array('name' => $attribute->name));
                    $data_to_insert[count($data_to_insert)-1]['attributes'][] = array(
                      'id_attribute' => $mattr[0]->id,
                      'attribute_slug' => $attribute->slug,
                      'visible' => ($attribute->visible == FALSE) ? 0 : 1,
                      'variation' => ($attribute->variation == FALSE) ? 0 : 1,
                      'options' => implode(',', $attribute->options),
                    );
                  }
                }   
                //Images Array                       
                if(isset($product->images) && (count($product->images) != 0)){
                  foreach ($product->images as $image) {
                    $data_to_insert[count($data_to_insert)-1]['images'][] = array(
                      'remote_id' => $image->id,
                      'id_remote_product' => $product->id,
                      'title_product' => $image->title,
                      'src_product' => $image->src,
                      'alt_product' => $image->alt,
                    );    
                  }
                }
              }              
              //$this->krumo->dpm($data_to_insert);
              if(!$this->products_model->init_table($data_to_insert)){
                echo (count($remote_data->products) ." Products Initialize...."); 
              } else {
                echo "Something Wrong On Product Tabel Init...";
              }
            } else {
              echo ("Please Check Your Connection With Depo Sepatu Server...."); 
            }
          } else {
            echo "Products Table Already Initialize....";
          }
        }
      }
    }
  }
	
}
