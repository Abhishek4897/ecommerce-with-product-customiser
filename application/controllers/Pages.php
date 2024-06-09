<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function index($page = 'index')
	{
	   // include_once APPPATH . 'third_party/editor/editor.php';
	    $data['page'] = $page;
		$this->load->view('customizer/'.$page, $data);
	}
// 	public function admin_customizer($page = 'admin_customizer')
// 	{
// 	    include_once APPPATH . 'third_party/admin_editor/editor.php';
// 	    $data['page'] = $page;
// 		$this->load->view('customizer/'.$page, $data);
// 	}
	public function razorpayTest()
	{
	    include_once APPPATH . 'third_party/razorpay/razorpay.php';
        echo $razorpay->add_order("11", 500);
        // echo $razorpay->verify_signature($razorpay_signature, $razorpay_payment_id, $order_id);
	}

	public function rtest()
	{
	    $ShiprocketSDK = new ShiprocketSDK();
	    print_r($ShiprocketSDK->getDeliveryStatus('788830567028'));
	   // $apiInstance = new Swagger\Client\Api\AuthenticationApi(new GuzzleHttp\Client());
	   // $body = new \Swagger\Client\Model\GetTokenRequest(['email' => 'anshu@binplus.in', 'password' => 'Haxer@123']);
    
    //     try {
    //         $result = $apiInstance->getToken($body);
    //         print_r($result);
    //     } catch (Exception $e) {
    //         echo 'Exception when calling AuthenticationApi->getToken: ', $e->getMessage(), PHP_EOL;
    //     }
	}
}
