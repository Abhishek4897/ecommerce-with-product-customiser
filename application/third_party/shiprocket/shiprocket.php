<?php

require_once __DIR__ . '/Client.php';

use Shiprocket\Client as ShiprocketClient;

class ShiprocketSDK
{
    private $client;
	public function __construct()
	{
		$this->client = new ShiprocketClient([
			'email' 		=> 'jksaroj@binplus.in',
			'password' 		=> 'jksaroj@binplus.in',
			'use_sandbox'	=> 0
		]);
	}

	public function checkDeliveribility($pickup_postcode, $delivery_postcode, $is_cod = 0, $weight = 0, $shiprocket_order_id = 0)
	{
	   // $couriers = $this->client->checkServiceability($pickup_postcode, $delivery_postcode, $is_cod, $weight, $shiprocket_order_id);
// 	    $couriers = $this->client->checkServiceability('110070', '110030', 0, 2);
// 		$couriers = $this->client->assignAWBs(array('16016920'), 10, 'reassign');
// 		return $couriers;
// return true;
die("Can't process order now.");
return false;
	}

	public function assignDelivery($shipment_id = [], $courier_id, $weight)
	{
	    if(!is_array($shipment_id))
	        $shipment_ids[] = $shipment_id;
	    else
	        $shipment_ids = $shipment_id;
		$couriers = $this->client->assignAWBs($shipment_ids, $courier_id, $weight);
		return $couriers;
	}
    
    public function getDeliveryStatus($awb)
    {
        $couriers = $this->client->trackAWB($awb);
		return $couriers;
        //https://apiv2.shiprocket.in/v1/external/courier/track/awb/788830567028
    }
    
    public function createQuickOrder($attributes = [])
    {
        /* Input Data */
        // $attributes = (object)array(
        //     "order_id" => "224-447",
        //     "order_date" => "2020-07-24 11:11",
        //     "pickup_location" => "Jhansi",
        //     "channel_id" => "",
        //     "comment" => "Reseller: M/s Goku",
        //     "billing_customer_name" => "Naruto",
        //     "billing_last_name" => "Uzumaki",
        //     "billing_address" => "House 221B, Leaf Village",
        //     "billing_address_2" => "Near Hokage House",
        //     "billing_city" => "New Delhi",
        //     "billing_pincode" => "110002",
        //     "billing_state" => "Delhi",
        //     "billing_country" => "India",
        //     "billing_email" => "naruto@uzumaki.com",
        //     "billing_phone" => "9876543210",
        //     "shipping_is_billing" => "1",
        //     "shipping_customer_name" => "",
        //     "shipping_last_name" => "",
        //     "shipping_address" => "",
        //     "shipping_address_2" => "",
        //     "shipping_city" => "",
        //     "shipping_pincode" => "",
        //     "shipping_country" => "",
        //     "shipping_state" => "",
        //     "shipping_email" => "",
        //     "shipping_phone" => "",
        //     "order_items" => array( (object)array(
        //                 "name" => "Kunai",
        //                 "sku" => "chakra123",
        //                 "units" => "10",
        //                 "selling_price" => 900,
        //                 "discount" => "",
        //                 "tax" => "",
        //                 "hsn" => "441122"
        //                 ) ),
        //     "payment_method" => "Prepaid",
        //     "shipping_charges" => 0,
        //     "giftwrap_charges" => 0,
        //     "transaction_charges" => 0,
        //     "total_discount" => 0,
        //     "sub_total" => 9000,
        //     "length" => 10,
        //     "breadth" => 15,
        //     "height" => 20,
        //     "weight" => 2.5
        // );
        
        /* Output Data */
        // Array
        // (
        //     [order_id] => 68771793
        //     [shipment_id] => 68414423
        //     [status] => NEW
        //     [status_code] => 1
        //     [onboarding_completed_now] => 0
        //     [awb_code] => 
        //     [courier_company_id] => 
        //     [courier_name] => 
        // )
        $order = $this->client->createQuickOrder($attributes);
        return $order;
    }
    
	public function api_call($api_name, $parameters = [])
	{
	   // $couriers = call_user_func_array($this->client->$api_name, $parameters);
	   // $par = implode(',', $parameters);
	    $couriers = $this->client->$api_name($parameters);
	    
        // $couriers = $this->client->checkServiceability('110070', '110030', 0, 2);
		echo "<pre>";
		print_r($couriers);
		echo "</pre>";
	}

	public function deliery_status()
	{
	    $data = "https://kr-multichannel.s3.ap-southeast-1.amazonaws.com/webhook/docs/sample.json";
        return file_get_contents($data);
	}
}
$shiprocket = new ShiprocketSDK();