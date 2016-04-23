<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
  public function debug_me($msg){
    echo "<pre>";
    print_r($msg);
    echo "</pre>";
  }
  
	public function __construct() {
        parent::__construct();
        $this->load->helper(array('html'));
    		if(DEPO_DEBUG){
    		  $this->load->add_package_path(APPPATH.'third_party/debugbar');
          $this->load->library('krumo');
    		  $this->load->library(array('console'));
          $this->output->enable_profiler(FALSE);
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
                                          'date_local_fetch' => strtotime(date('Y-m-d')),
                                          'date_remote_created' => $product->created_at,
                                          'date_remote_updated' => $product->updated_at,
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
	
  private function get_images_on_product($id = -1, $num = -1){
    if($id != -1 && $num != -1){
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
  
  public function do_action($page = 'dashboard' , $action = '' , $id = -1 , $postdata = array() , $getdata = array()){
    $retval = array();
    $this->load->model(array('settings_model','tags_model' , 'attributes_model' , 'categories_model' , 'products_model' , 'pages_model'));
    $settings = $this->settings_model->get_settings('settings');
    $consumer_key = $settings['CUSTOMER_KEY']; 
    $consumer_secret = $settings['CUSTOMER_SECRET']; 
    $store_url = $settings['API_URL']; 
    $api_endpoint = $settings['API_END_POINT']; 
    $retval['cat_count'] = $this->categories_model->rec_count();
    $retval['attr_count'] = $this->attributes_model->rec_count();
    $retval['tag_count'] = $this->tags_model->rec_count();
    $retval['prd_count'] = $this->products_model->rec_count();
    if($page == 'products'){
      if($action == 'publish'){
        $this->products_model->update(array('local_publish' => 1, 'date_local_update' => strtotime(date('d-m-Y H:m:is'))) , $id);
        redirect('/admin/'.$page, 'location', 301);
      }elseif($action == 'unpublish'){
        $this->products_model->update(array('local_publish' => 0 , 'date_local_update' => strtotime(date('Y-m-d H:m:is'))) , $id);
        redirect('/admin/'.$page, 'location', 301);
      }elseif($action == 'filter'){
        //$this->krumo->dpm($getdata);
        $filters = array();
        if(isset($getdata['filter_brand'])){
          $filters[] = array('categories' => $getdata['filter_brand']);
        }
        if(isset($getdata['filter_category'])){
          $filters[] = array('categories' => $getdata['filter_category']);
        }
        if(isset($getdata['search_product'])){
          $filters[] = array('name' => $getdata['search_product']);
        }
        $local_data = $this->products_model->filter_parent($filters, array(), 
                                                            (isset($getdata['num']) ? (int) $getdata['num'] : 20), 
                                                            'date_remote_created' , 
                                                            'DESC', 
                                                            (isset($getdata['curpage']) ? (($getdata['curpage'] - 1) * $getdata['num'])  : -1));
        $retval['total_data'] = count($this->products_model->filter_parent($filters, array(),-1, 'date_remote_created' , 'DESC'));
        //images
        foreach ($local_data as $key => $value) {
          $local_data[$key]->images = $this->_get_images_on_product($value->id , 1);    
        }
        $retval['data'] = $local_data;
        $categories = $this->categories_model->filter(array('slug' => 'brand'));
        if(isset($categories[0])){
          $categories = $categories[0];
          $fcategories = $this->categories_model->filter(array('remote_parent' => $categories->remote_id));
          foreach ($fcategories as $key => $category) {
            $retval['brands'][] = $category;   
          }
        }
        $categories = $this->categories_model->get();
        //Category
        $forbiden = array('brand' , 'sepatu-pria' , 'sepatu-wanita'); 
        foreach ($categories as $key => $category) {
          if($category->remote_parent == 0 && !in_array($category->slug, $forbiden)){
            $retval['categories'][] = $category;   
          }
        }
      }else{
        //$local_data = $this->products_model->get();
        $local_data = $this->products_model->get_parent((isset($getdata['num']) ? (int) $getdata['num'] : 20) , 
                                                          'date_remote_created' , 
                                                          'DESC', 
                                                          (isset($getdata['curpage']) ? (($getdata['curpage'] - 1) * $getdata['num'])  : -1));
        $retval['total_data'] = count($this->products_model->get_parent(-1 , 'date_remote_created' , 'DESC' ));
        $retval['data'] = $local_data;
        $categories = $this->categories_model->filter(array('slug' => 'brand'));
        if(isset($categories[0])){
          $categories = $categories[0];
          $fcategories = $this->categories_model->filter(array('remote_parent' => $categories->remote_id));
          foreach ($fcategories as $key => $category) {
            $retval['brands'][] = $category;   
          }
        }
        $categories = $this->categories_model->get();
        //Category
        $forbiden = array('brand' , 'sepatu-pria' , 'sepatu-wanita'); 
        foreach ($categories as $key => $category) {
          if($category->remote_parent == 0 && !in_array($category->slug, $forbiden)){
            $retval['categories'][] = $category;   
          }
        }
        
        $params = array( 'consumer_key' => $consumer_key, 'consumer_secret' => $consumer_secret, 'store_url' => $store_url , 'api_endpoint' => $api_endpoint);
        foreach($retval['data'] as $key => $value ){
          $retval['data'][$key]->images = $this->get_images_on_product($value->id , 1);
        }
        
        $this->load->library('wc_api', $params);
        $remote_count = $this->wc_api->get_products_count();
        $local_count = $this->products_model->rec_count();
        if($local_count == 0){
          // Need to initialize Data , return empty array
          //return categories count , tags count, attribute count
        } else {
          // Fetch All Data From Database...
          $retval['prd_count'] = $local_count;
          if($local_count == $remote_count->count){
            // DO Nothing .. Maybe Just Message
          } else {
            // Need Update
            // Maybe Message Firt And then Click Button to update
          }
        }
      }
    } elseif ($page == 'page'){
      if($action == 'edit'){
        $local_data = $this->pages_model->filter(array('id' => $id));
        $retval['data'] = $local_data[0];
      } else {
        $local_data = $this->pages_model->get();
        $retval['data'] = $local_data;
      }
    }  elseif ($page == 'shop'){
      $local_data = $this->products_model->get();
      $retval['data'] = $local_data;
    }
    return $retval;
  }
  
  public function post_on_admin_page($postdata = array(), $getdata  = array(), $page = '', $action = '', $id = -1){
    if($page == 'shop'){
      foreach ($postdata as $key => $value) {
        if ( $this->input->post($key) ){
            $this->settings_model->update(array('value' => $this->input->post($key, true)), strtoupper($key)); 
        }
      }
      redirect('/admin/'.$page , 'location', 301);
    } 
    if($page == 'products'){
      if($action == 'edit'){
        $pass_edit_field = array('name' , 'price' , 'description' , 'disc_label_status' , 'disc_label_txt');
        foreach ($postdata as $key => $value) {
          if ( $this->input->post($key) ){
            if(in_array($key, $pass_edit_field)){
              $this->products_model->update(array($key => $this->input->post($key, true)), $id); 
            }
          }
        }
        redirect('/admin/'.$page.'/'.$action.'/'.$id , 'location', 301);
      } else {
        echo $this->uri->uri_string(); die();
      }
    }  
    if($page == 'general'){
      foreach ($postdata as $key => $value) {
        if ( $this->input->post($key) ){
            $this->settings_model->update(array('value' => $this->input->post($key, true)), strtoupper($key)); 
        }
      }
      redirect('/admin/'.$page , 'location', 301);
    }
    if($page == 'page'){
      $this->load->model('pages_model');
      if(!empty($id) && $action == 'edit' && isset($postdata) && count($postdata) !== 0 ){
        //Update Pages
        $this->pages_model->update(array('update_by' => $_SESSION['userlogin']->username, 
                                          'content' => trim($this->input->post('content', true))
                                          ,'date_updated' => date('Y-m-d H:m:s')) , $id);
        $this->session->set_flashdata('msg', 'Edit Pages Success');
      } 
      if($action == 'add' && isset($postdata) && count($postdata) !== 0 ){
        //Insert Pages
        //generate page url
        $count = count($this->pages_model->filter(array('slug' => str_replace(' ', '-', strtolower($this->input->post('title', true))))));
        $new_url = str_replace(' ', '-', strtolower($this->input->post('title', true)));
        if($count != 0){
          $new_url = str_replace(' ', '-', strtolower($this->input->post('title', true))) . '-' . ($count + 1);
        }
        $this->pages_model->insert(array('title' => trim($this->input->post('title', true)),
                                          'content'=> trim($this->input->post('content', true)),
                                          'slug' => trim($new_url),
                                          'date_created' => date('Y-m-d G:i:s'),
                                          'update_by' => $_SESSION['userlogin']->username));
        $this->session->set_flashdata('msg', 'Insert Pages Success');
      } 
      redirect('/admin/'.$page , 'location', 301);
    }
   
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
  
	public function load_admin_pages($page = 'dashboard' , $action = '' , $id = -1)
	{
    ini_set('display_errors', 1); 
    $this->load->model('settings_model');
		if(!($this->get_login_session())){
			redirect('/admin', 'location', 301);
		} else {
		  if($page == 'products'){
		    if($action == 'edit'){
		      $this->load->model('products_model');
		      $param['data'] = $this->products_model->filter(array('id' => $id));
          if(isset($param['data']) && count($param['data']) > 0){
            //images
            foreach ($param['data'] as $key => $value) {
              $param['data'][$key]->images = $this->_get_images_on_product($value->id , 1);    
            }
            //upsell id
            foreach ($param['data'] as $k => $product) {
              $upsell_products = $this->products_model->filter(array('remote_upsell_id' => $product->remote_upsell_id));
              foreach ($upsell_products as $key => $uproduct) {
                 $upsell_products[$key]->images = $this->_get_images_on_product($uproduct->id , 1);  
              }
              $param['data'][$k]->upsell_products = $upsell_products;  
            }
            $param['data'] = $param['data'][0];
          }
          //$this->krumo->dpm($param['data']);
		    }  
		  } 
		  if(isset($_POST) && (count($_POST) !== 0)){
		    $this->post_on_admin_page($_POST , $_GET , $page, $action , $id);
		  }
      if(isset($_GET) && (count($_GET) !== 0)){
        $param['page_data'] = $this->do_action($page, 'filter' , -1 , $_POST , $_GET);
      }
      $settings = $this->settings_model->get_settings($page);
			$userlogin = $this->session->userdata('userlogin');
			$data['css_load'] = $this->load->view('backend/'.$page.'/index-css', array(), TRUE);
			$param['title'] = ucfirst($page);
      $param['css_load'] = $this->load->view('backend/'.$page.'/index-css', array(), TRUE);
			$param['header'] = $this->load->view('backend/header', $param, TRUE);
      if(!isset($param['page_data'])){
			 $param['page_data'] = $this->do_action($page, $action , $id);
      }
			$data['sidebar'] = $this->load->view('backend/sidebar', $param, TRUE);
			$param['judullaman'] = ucfirst($page) . ' - Welcome ' . $userlogin->displayname;
      $param['settings'] = $settings;
      if(isset($_SESSION['msg'])){
        $param['msg'] = $_SESSION['msg'];
      }
      
			$data['container'] = $this->load->view('backend/'.$page.'/container' . (!empty($action) ? '-'.$action : ''), $param, TRUE);
      $param_js['page'] = $page;
      $param_js['action'] = $action;
      $fdata['js_load'] = $this->load->view('backend/'.$page.'/index-js', $param_js, TRUE);
			$data['footer'] = $this->load->view('backend/footer', $fdata, TRUE);
			$this->load->view('backend/index', $data);
		}
	}

  public function load_settings()
  {
    ini_set('display_errors', 0);
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

}
