<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Payment extends CI_Controller {
	public function index()
	{
        $data = array();
		$this->load->view('includes/header', $data);
		$this->load->view('payment');
		$this->load->view('includes/footer');
    }
    
    public function pay(){
        $arr = array(5,10,15,20);
        $btn_id = $this->input->post('btn_id');
        $product_price = $arr[$btn_id];     // 100
        $data = array(
            'amount' => $product_price*100,
            'name'  => 'Testing',
            'currency' => 'INR',
            'desc'  => 'This is testing payment',
            'logo'  => 'https://www.haldor-tech.com/wp-content/uploads/2015/09/requestademo.png'
        );
        echo json_encode($data);

    }   

}
