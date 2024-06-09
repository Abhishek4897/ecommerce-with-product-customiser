<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Checkout extends CI_Controller {
    public function __construct()
	{
		parent::__construct();
		 $this->load->helper('sms_helper');
 		if(!$this->session->userdata('user_id')):
 			$this->session->set_flashdata('userloginmessage', '<div class="alert alert-danger alert-dismissable fade show has-icon"><i class="la la-check-circle alert-icon"></i>
            <button class="close" data-dismiss="alert" aria-label="Close"></button>Login first.</div>');
            redirect(base_url());
        endif;
	}

    public function checkout()
	{
	    if($_SESSION['user_id'] && cart_count() > 0){
            $data["userdata"] = $this->User_model->userdata();
            $data["charge"] = $this->db->get("invoice-details")->row();
            $id = $_SESSION['user_id'];
            $q = "select * from user_cart where user_id = '$id' ";
            $data["cart"] = $this->Front_model->arraydata($q);
            $data["location"] = $this->User_model->userlocation();
            $data['sidecart_validate']='checkout';
            $data['selected_address'] = $this->session->userdata("selected_address");
            $this->load->view('arteno/checkout',$data);
        } else {
	      if(!isset($_SESSION['user_id'])){

	      } else if(cart_count() < 0){
	            $this->session->set_flashdata('valid'," <script> swal('Please add items in cart',{
                      icon: 'warning',
                      button: false,
                      timer: 1500
                    });</script>");
	             redirect($_SERVER['HTTP_REFERER']);
	      }else{
	           $this->session->set_flashdata('valid'," <script> swal('Please add items in cart',{
                      icon: 'warning',
                      button: false,
                      timer: 1500
                    });</script>");
	          redirect($_SERVER['HTTP_REFERER']); 
	      }
	}
	}
	
	public function process_pay($order_id=''){
	    if($order_id=='')
	        redirect('cart');
		include_once APPPATH . 'third_party/razorpay/razorpay.php';
		$order_details=$this->Home_model->orderdetailsbyorder_id($order_id);
		$grand_total=$order_details->total;
		$status=$order_details->status;
		if($status!='pending')
		    redirect('cart');
        $txn_id = $razorpay->add_order($order_id, $grand_total); 
        $this->db->update('orders', ['txn_id' => $txn_id], ['id' => $order_id]);
        // $this->session->set_userdata('orderdetails', $this->db->get_where('orders', ['id' => $order_id])->row());
        $this->session->set_userdata('current_orderid', $order_id);
        redirect('payment');
	}

	public function payment() {
	    $order_id = $this->session->userdata('current_orderid');
	    if(!$order_id)
	        redirect('/');
	    $this->session->set_userdata('orderdetails', $this->db->get_where('orders', ['id' => $order_id])->row());
	    $orderdata = $this->session->userdata('orderdetails');
	    if(!$orderdata)
	        redirect('/');
	    if($orderdata->status!="pending" || $orderdata->payment!="online")
	        redirect('cart');
	    $this->load->view('arteno/pay');
	}
	public function shipping()
	{         
	    if($this->input->post('save')!=""){
	      $this->load->library('form_validation');
                $this->form_validation->set_rules('city', 'City', 'required');
                $this->form_validation->set_rules('address', 'Address', 'required');
                $this->form_validation->set_rules('state', 'State', 'required');
                $this->form_validation->set_rules('pincode', 'Pincode', 'required');
                if ($this->form_validation->run() == FALSE)
                {       $this->session->set_flashdata('location','<div class="alert alert-warning alert-dismissible fade show" role="alert">
                        Please Enter Correct Details.
                        
                        </div>');
                          redirect(base_url('Checkout/shipping'));
                }
                else{
                     $data = array(
                         'u_id'=>$_SESSION['user_id'],
                         'pincode'=>$this->input->post('pincode'),
                         'house_no'=>$this->input->post('address'),
                         'state'=>$this->input->post('state'),
                         'city'=>$this->input->post('city')
                         );   
                         if($this->User_model->addloaction($data)){
                             $this->session->set_flashdata('location','<div class="alert alert-success alert-dismissible fade show" role="alert">
                        loaction is Added Successfully!.
                        
                        </div>');
                          redirect(base_url('Checkout/shipping'));
                         }else{
                             $this->session->set_flashdata('location','<div class="alert alert-warning alert-dismissible fade show" role="alert">
                        Please Enter Correct Details.
                        
                        </div>');
                    redirect(base_url('Checkout/shipping'));
                         }
                }
     	}  
	    if($this->input->post('update')!=""){
	        $id = $this->input->post('update');
	            $this->load->library('form_validation');
                $this->form_validation->set_rules('city', 'City', 'required');
                $this->form_validation->set_rules('address', 'Address', 'required');
                $this->form_validation->set_rules('state', 'State', 'required');
                $this->form_validation->set_rules('pincode', 'Pincode', 'required');
                if ($this->form_validation->run() == FALSE)
                {       $this->session->set_flashdata('location','<div class="alert alert-warning alert-dismissible fade show" role="alert">
                        Please Enter Correct Details.
                        
                        </div>');
                         redirect(base_url('Checkout/shipping'));
                }
                else{
                     $data = array(
                         'u_id'=>$_SESSION['user_id'],
                         'pincode'=>$this->input->post('pincode'),
                         'house_no'=>$this->input->post('address'),
                         'state'=>$this->input->post('state'),
                         'city'=>$this->input->post('city')
                         );   
                         if($this->User_model->updateuserlocation($data,$id)){
                             $this->session->set_flashdata('location','<div class="alert alert-success alert-dismissible fade show" role="alert">
                        loaction Updated !.
                        
                        </div>');
                       redirect(base_url('Checkout/shipping'));
                         }else{
                             $this->session->set_flashdata('location','<div class="alert alert-warning alert-dismissible fade show" role="alert">
                        Please Enter Correct Details.
                        
                        </div>');
                     redirect(base_url('Checkout/shipping'));
                         }
                }
	    }
	    
    
          $data["userdata"] = $this->User_model->userdata();
            $data["charge"] = $this->db->get("invoice-details")->row();
          $id = $_SESSION['user_id'];
          $q = "select * from user_cart where user_id = '$id' ";
         $data["cart"] = $this->Front_model->arraydata($q);
         $data["location"] = $this->User_model->userlocation();
         if(cart_count() > 0){
       	 $this->load->view('arteno/shipping',$data);
         }else{
                    redirect(base_url());
                }
	}
	
	public function payment_method($loactionid="") {
        $data["loactionid"] = $loactionid;
        $this->session->set_userdata("selected_address", $loactionid);
        $data["userdata"] = $this->User_model->userdata();
        $data["location"] = $this->User_model->userlocation();
        $data["charge"] = $this->db->get("invoice-details")->row();
        $id = $_SESSION['user_id'];
        $q = "select * from user_cart where user_id = '$id' ";
        $data["cart"] = $this->Front_model->arraydata($q);
        if(cart_count() > 0) {
           $data['sidecart_validate']='payment_method';
            $this->load->view('arteno/payment_method',$data);
        } else {
            redirect(base_url());
        }
	}
	
	public function re_payment_method() {
        $orderdetails = $this->session->userdata('orderdetails');
        $order_user_id = $orderdetails->user_id;
        $data["loactionid"] = $orderdetails->loaction_id;
        $data["userdata"] = $this->User_model->userdata();
        $data["location"] = $this->User_model->userlocation();
        $data["charge"] = $this->db->get("invoice-details")->row();
        $id = $_SESSION['user_id'];
        if($order_user_id!=$id)
            redirect(base_url());
        $order_id = $orderdetails->id;
        $q = "select * from order_products where order_id = '$order_id' ";
        $data["cart"] = $this->Front_model->arraydata($q);
        if($orderdetails->total > 0) {
            $this->load->view('arteno/re_payment',$data);
        } else {
            redirect(base_url());
        }
	}

	function re_place_order(){
	    if(isset($_SESSION['user_id'])) {
            $method = $this->input->post('payment');
            if($method == 0):
                $charge =  $this->input->post('shipping');
                $gdtotal = $this->input->post('gdtotal');
                if($gdtotal<=0 || $gdtotal=="") redirect(base_url('re_payment_method'));

                $orderid = $this->session->userdata("last_order");
                $cod = invoice()->cod;
                $data  = array(
	               'total' => $gdtotal + $cod + $charge,
	               'payment' => "cod",
	               'user_id'=>$_SESSION['user_id'],
	               'shipping_charge'=>$this->input->post('shipping'),
	               'cod_charge' => $cod,
	               'status' => "confirmed",
	            );
                if($this->Front_model->update_order($data, $orderid)):
                    $online_pay_sms_data = (object)$this->session->userdata("online_pay_sms_data");
                    //array("user" => $user, "msg" => $msg, "email_msg" => $order_msg));
                    $user = $online_pay_sms_data->user;
                    $msg = $online_pay_sms_data->msg;
                    $order_msg = $online_pay_sms_data->email_msg;
                    $order_msg['order_data']['cod_charge'] = $cod;
                    $order_msg['order_data']['payment'] = "cod";
                    $re_order_msg = $order_msg;
                    @send_sms($user->user_phone,$msg,'place_order');
                    //@send_sms('8700737005',$msg);
                    $this->load->model("Mail_model");
                    $this->Mail_model->order_email($re_order_msg,'place_order');
                    redirect(base_url('order_status'));
                else:
                    redirect(base_url('re_payment_method'));
                endif;
            else:
                // $this->session->set_userdata("online_pay_sms_data", array("user" => $user, "msg" => $msg, "email_msg" => $order_msg));
                redirect(base_url('payment'));
            endif;
	    } else {
	        redirect(base_url('re_payment_method'));
	    }
	}

	function place_order(){
	    if(isset($_SESSION['user_id'])) {
            $userid = $_SESSION['user_id']; 
            $q = "select * from user_cart where user_id = '$userid' ";
            $cartdata  =   $this->Front_model->arraydata($q);
            $emptycart = $this->Front_model->emptycart(); // Added on 26/05/2021
            $method = $this->input->post('payment');
            $charge =  $this->input->post('shipping');
            $gdtotal = $this->input->post('gdtotal');
            $total = $this->input->post('total_price');
            $total_gst = $this->input->post('total_gst');
            if($gdtotal<=0 || $gdtotal=="") redirect(base_url('Checkout'));
            if(!is_array($cartdata) || !$emptycart) redirect(base_url('Checkout')); // Added on 26/05/2021
            $invoice_data = invoice();
            $currency = $invoice_data->currency;
            
              $type="";
              $cod="";
              $order_id="";
             if($method == 0){
                 $cod =$invoice_data->cod;
                 $type = "cod";
                 $total = $gdtotal+$cod +$charge;
                 $status = "confirmed";
             }else{
                 $cod = 0;
                 $type = "online";
                 $total = $gdtotal+$cod +$charge;
                 $status = "pending";
             }
	         $data  = array(
	               'total'=>$total,
	               'payment'=>$type,
	               'user_id'=>$_SESSION['user_id'],
	               'shipping_charge'=>$this->input->post('shipping'),
	               'cod_charge'=>$cod,
	               'order_date'=> date('Y-m-d'),
	               'created'=> date("Y-m-d H:i:s"),
	               'status'=>$status,
	               'total_gst'=>$total_gst
	            
	            );
	            if($this->input->post('location') == $_SESSION['user_id']){
                      $data['location_id']=$_SESSION['user_id'];
                      $data['is_shipping']="1";
             }else{
                  $data['location_id']=$this->input->post('location');
             }
	            
	            if($this->Front_model->order($data)){
	                $order_id = $this->db->insert_id();
	               //////payout/////
	               foreach($cartdata as $c){
	                       $cartData = json_decode($c->cart_data);
	                       $cartprice = json_decode($c->price);
	                       $t_id = json_decode($cartData->template_id);
	                       $o = related_product($t_id[0]);
	                       $d_id = designer_charge($cartData->id);
	                       $qty = $c->qty;
	                      
	              }
	              $all_order_detail=array();
	              foreach($cartdata as $c){
	                    $_SESSION['cart_id'] =$c->id;
	                    $cartData = json_decode($c->cart_data);
	                    $cartprice = json_decode($c->price);
	                    $t_id = json_decode($cartData->template_id);
	                    $o = related_product($t_id[0]);
	                    $desinger = $o->designed_by;
	                    $invoice_data = invoice();
	                    $currency = $invoice_data->currency;
	                    $variation = json_encode(array($c->color,$c->size,$c->qty));
	                    $d_id = designer_charge($cartData->id);
	                    $qty = $c->qty;
	                    $baseproduct =  related_base($cartData->id);
	                    $price = $cartprice->base;
	                    $total_templatesprice = $cartprice->total ;
	                    if($c->type!=""){
	                        $type = $c->type;
	                    }
	                    if($c->file !=""){
	                        $designfile = $c->file;
	                    } else {
	                        $designfile = $o->upload;
	                    }
	                    $images = $cartData->screenshots;
	                    $order_images = array();
	                    foreach($images as $image){
	                        $order_path = ROOT.'uploads/orders';
	                        $scr_file_name = date('Y'.DS.'m'.DS, time()).$this->generate_id().'.png';
					        $scr_name = $order_path . DS . $scr_file_name;
	                       file_put_contents($scr_name, base64_decode(preg_replace('#^data:image/\w+;base64,#i', '', $image)));
	                       array_push($order_images,$scr_file_name);
	                    }
	                    if($o->temp_type=='main' && $o->side=='both' && $o->no_of_stages==2){
	                           $template_baseid=array();
	                           $temp_base_id=json_decode($o->template_ids);
	                           foreach($temp_base_id as $temp_base){
	                              array_push($template_baseid,strval($temp_base)); 
	                           }
	                       $temp_id =json_encode($template_baseid);
	                       }
	                       else {
	                            $temp_id = json_encode($t_id);
	                       }
	                       $total_templates=json_decode($temp_id);
	                       if($t_id[0]!=""){
	                           foreach($total_templates as $templatebase){
	                              $charge1 = $d_id->price*$qty;
	                              $paydata = array(
	                                  'order_id'=>$order_id,
	                                  'designer_id'=>$o->designed_by,
	                                  'template_id'=>$templatebase,
	                                  'qty'=>$qty,
	                                  'payout'=>$charge1,
	                                  'date'=> date('Y-m-d')
	                               );
	                               $this->db->insert('payout',$paydata); 
	                           }
	                       }
	                       $orderdata = array(
                	                        'order_id'=>$order_id,
                	                        'product_id'=>$cartData->id,
                	                        'product_base'=>$cartData->id,
                	                        'product_price'=>$price,
                	                        'total_price'=>$total_templatesprice,
                	                        'qty'=>$c->qty,
                	                        'design'=>$designfile,
                	                        'product_name'=>$cartData->product_name,
                	                        'currency'=>$currency,
                	                        'screenshots'=>json_encode($order_images),
                	                        'design_by'=>$temp_id,
                	                        'variations'=>$variation,
                	                        'status'=>$status,
                	                        'type'=>$type,
                    	                   // 'temp_id'=>$t_id[0],
                    	                    'temp_id'=>$total_templates[0],
                    	                    'back_temp_id'=>($total_templates[1])?:0
                	                        );
                	       $this->Front_model->orderproducts($orderdata);
                	       $all_order_detail[]=$orderdata;
	                }
	                $order_msg = array(
                        'products'=>$all_order_detail,
                        'order_id' => $order_id,
                        'order_data' => $data,
                        'user_data' => $_SESSION['user_id'],
                    );
                  
                    $user=$this->db->where('id',$_SESSION['user_id'])->get('users')->row();
                    // $msg="Hooray! This message is a confirmation that your order has been successfully placed. A confirmation email has been sent to your provided email ID as well.If you didn't receive the email kindly check the spam Your order ID is {$invoice_data->order_prefix}{$order_id}. Thank you for shopping with Arteno! Have a wonderful day!";
                    $msg="Hooray! This message is a confirmation that your order has been successfully placed. A confirmation email has been sent to your provided email ID as well. Your order ID is {$invoice_data->order_prefix}{$order_id}. Thank you for shopping with Arteno! Have a wonderful day!";
                    
                	   
                    if(isset($_SESSION['coupon_id'])){
                        $datacoupon = array (
                            'cart_id' =>$_SESSION['cart_id'],
                            'coupon_id' => $_SESSION['coupon_id'],
                            'total_usage'=>1,
                            'user_usage'=>$_SESSION['user_id'],
                            'order_id'=>$order_id
                        );
                        $this->db->insert('coupon_usage',$datacoupon);
                        $this->session->unset_userdata('coupon_id');
                        $this->session->unset_userdata('discount');
                        $this->session->unset_userdata('coupon_name');
                        $this->session->unset_userdata('discount_price');
                        $this->session->unset_userdata('cart_id');
                    }
	            }
	            if(true) {
	                $this->session->set_userdata("last_order", $order_id);
	                if($method == 0):
                        @send_sms($user->user_phone,$msg,'place_order');
                        //@send_sms('8700737005',$msg);
                        $this->load->model("Mail_model");
                        $this->Mail_model->order_email($order_msg,'place_order');
	                    redirect(base_url('order_status'));
	                else:
	                    $this->session->set_userdata("online_pay_sms_data", array("user" => $user, "msg" => $msg, "email_msg" => $order_msg));
	                    redirect(base_url('Checkout/process_pay/'.$order_id));
	                endif;
	            } else {
	               redirect(base_url('checkout'));
	            }
	    } else {
	        redirect(base_url('checkout'));
	    }
	}
	public function order_summery($lid)
	{      $id = $_SESSION['user_id'];
	       $data["location_id"] = $lid;
	         $q = "select * from user_cart where user_id = '$id' ";
	         $data["charge"] = $this->db->get("invoice-details")->row();
             $data["datacart"] = $this->Front_model->arraydata($q);
             $data["location"] = $this->User_model->userlocationspecific($lid);
		$this->load->view('order_summery',$data);
	}
	public function generate_id($length = 10) {
		
		return substr(str_shuffle("0+91 129-4015046abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, $length);

	}
	
}?>	