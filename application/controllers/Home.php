<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function index()
	{
		$data = array();
		// $this->minify->enabled = TRUE; // CSS/JS WILL BE UNMINIFIED
		
		// HTML WILL BE UNMINIFIED
		// $this->ci_minifier->init(0); 
		// $this->ci_minifier->set_domparser(2);
		// $this->ci_minifier->enable_obfuscator(3);

		// $res = $this->db->select('*')->from('user')->where(array('name !='=>''))->get()->result();
		// $data['list_users'] = $res;

		// $attach = array(
		// 	'sample.pdf','file_sample.pdf',
		// );

		// $temp = array(
		// 	'id' => 1,
		// 	'name' => 'kishan'
		// );
		// foreach($attach as $k=>$r){
		// 	$file_array = file_get_contents(SITE_URL.'uploads/'.$r);
		// 	$res = base64_encode($file_array);
		// 	$key = $k+1;
		// 	$temp['data'.$key] = $res;
		// }
		// _pre($temp);

		$this->load->view('includes/header', $data);
		$this->load->view('home');
		$this->load->view('includes/footer');
	}

	public function myfunction($v)
	{
		return($v*$v);
	}
}
