<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	public function __construct() {
        parent::__construct();
        $this->load->add_package_path(APPPATH.'third_party/debugbar');
        $this->load->library(array('console' , 'depo_api'));
		if(DEPO_DEBUG){
        	$this->output->enable_profiler(TRUE);
		}
    }
	
	private function get_login_session(){
		if(!($this->session->has_userdata('userlogin'))){
			return FALSE;
		} else {
			return TRUE;
		}
	}
	
	private function auth_depo_user($postdata){
		if(isset($postdata)){
			$qs = array('username' => $postdata['email'] , 'password' => $postdata['password']);	
			$params = array('querystring' => $qs);
			$data = $this->depo_api->call(DEPO_URL_API , '/depo-api/user/generate_auth_cookie/' , $params , 'GET');
			$this->console->debug($data);
			if($data->status == 'error'){
				return $data->error;
			} else if ($data->status == 'ok'){
				$this->session->set_userdata(array('userlogin' => $data->user));
				return "User Loged, Prepared Admin Dashboard... <script>setTimeout(window.location='".base_url()."admin', 5000);</script>";
			}
		} else {
			return FALSE;
		}
	}
	
	public function login(){
		$postdata = $_POST;
		echo $this->auth_depo_user($postdata);
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
			redirect('/admin/dashboard', 'location', 301);
		}
	}
	
	public function load_admin_pages($page = 'dashboard')
	{ 
		if(!($this->get_login_session())){
			redirect('/admin', 'location', 301);
		} else {
			$userlogin = $this->session->userdata('userlogin');
			$data['js_load'] = $this->load->view('backend/'.$page.'/index-js', array(), TRUE);
			$data['css_load'] = $this->load->view('backend/'.$page.'/index-css', array(), TRUE);
			$param['title'] = ucfirst($page);
			$data['header'] = $this->load->view('backend/header', $param, TRUE);
			$data['sidebar'] = $this->load->view('backend/sidebar', array(), TRUE);
			$param['judullaman'] = ucfirst($page) . ' - Welcome ' . $userlogin->displayname;
			$data['container'] = $this->load->view('backend/'.$page.'/container', $param, TRUE);
			$data['footer'] = $this->load->view('backend/footer', array(), TRUE);
			$this->load->view('backend/index', $data);
		}
	}
	
}
