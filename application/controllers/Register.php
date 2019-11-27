<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {
	public function index()
	{
		$data = array('title' => 'Register');
		$this->load->view('register', $data);
	}
}
