<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Depo_api {
  public function __construct()
  {
      
  }
	
	/*
	 * Params Index:
	 * 1. Header
	 * 2. Query String
	 * 3. Body
	 */ 
	public function call($url = '' , $api_call = '' , $params = array() , $method = 'GET')
	{
		$ch = curl_init();
		$querystring = '';
		if (isset($params['querystring'])){
			$querystring = http_build_query($params['querystring']);
		}
		curl_setopt($ch, CURLOPT_URL, $url . $api_call . (!empty($querystring) ? '?'.$querystring : ''));
		curl_setopt($ch, CURLOPT_CUSTOMREQUEST, $method);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		$headers = array();
		if(isset($params['header'])){
			foreach ($params['header'] as $key => $header) {
				$headers[] = $key . ': ' .$header;
			}
		}
		if(count($headers) != 0){
			curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
		}
		$bodys = array();
		if(isset($params['body'])){
			$bodys = json_encode($params['body']);
		}
		if(count($bodys) != 0){
			curl_setopt($ch, CURLOPT_POST, 1);
			curl_setopt($ch, CURLOPT_POSTFIELDS, $bodys);
		}
		$resp = curl_exec($ch);
		curl_close($ch);
		if(!$resp) {
		  return FALSE;
		} else {
		  $resp = json_decode($resp);
		  return $resp;
		}
	}
}

/* End of file Depo_api.php */