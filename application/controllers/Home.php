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
		
		$this->load->view('includes/header', $data);
		$this->load->view('home');
		$this->load->view('includes/footer');
	}
}
