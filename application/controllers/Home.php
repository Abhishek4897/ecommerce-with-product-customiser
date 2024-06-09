<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Home extends CI_Controller {
    
    function __construct() {
        parent::__construct();
        $this->load->helper('check_product_helper');
        $this->load->helper('sms_helper');
    }

	public function process_temp() {
	    error_reporting(E_ALL);
        $temps = $this->db->where("image_url", NULL)->limit(100)->get('templates')->result();
        foreach($temps as $temp):
            $img_data = $temp->image;
            $temp_id = $temp->id;
            $img_path = "/uploads/templates/src";
            $check_path = "/uploads/templates/src/temp_src".$temp_id.".png";
            $file_path = dirname(__FILE__)."/../..".$check_path;
            if(!file_exists($file_path)) {
                if($this->base64_to_png( $img_data, $file_path)) {
                    $this->db->update('templates', ['image_url' => $img_path], ['id' => $temp_id]);
                    echo $temp_id."===>"."<img src='".base_url($check_path)."' /><hr>";
                }
            }
        endforeach;
	}
	
    function base64_to_png($base64_string, $output_file) {
        $b64 = explode("data:image/png;base64,", $base64_string)[1];
        // Obtain the original content (usually binary data)
        $bin = base64_decode($b64);
        
        // Load GD resource from binary data
        $im = imageCreateFromString($bin);
        
        // Make sure that the GD library was able to load the image
        // This is important, because you should not miss corrupted or unsupported images
        if (!$im) {
          die('Base64 value is not a valid image');
        }
        
        // Specify the location where you want to save the image
        $img_file = $output_file;
        
        // Save the GD resource as PNG in the best possible quality (no compression)
        // This will strip any metadata or invalid contents (including, the PHP backdoor)
        // To block any possible exploits, consider increasing the compression level
        imagepng($im, $img_file, 9);
        return true;
    }

	public function index() {
        $query = "SELECT * FROM products ORDER BY `order` ASC";
        $data['items'] = $this->Front_model->arraydata($query);
        $data['testinomial'] = $this->Front_model->arraydata("SELECT * FROM testimonial");
        $data['currency'] = currency();
        $data['page_name'] = "home";
        $this->load->view('arteno/index',$data);
	}
	public function index2() {
        $query = "SELECT * FROM products ORDER BY `order` ASC";
        $data['items'] = $this->Front_model->arraydata($query);
        $data['testinomial'] = $this->Front_model->arraydata("SELECT * FROM testimonial");
        $data['currency'] = currency();
        $data['page_name'] = "home";
        $this->load->view('arteno/index2',$data);
	}

    public function process_login()
	{
	    if(isset($_POST['social_name']) && $_POST['social_name']!="" && isset($_POST['social_email']) && $_POST['social_email']!="") {
    	    $this->session->set_flashdata('social_name', $_POST['social_name']);
    	    $this->session->set_flashdata('social_email', $_POST['social_email']);
            $name = $_POST['social_name'];
    	    $email = $_POST['social_email'];

    	    if($email!="") {
        	    $count= $this->Home_model->userlogin_withemail($email);
                if($count==1 && $email!="") {
                    $userdata=$this->Home_model->userbyemail($email);
                    $this->Home_model->setUserAsLoggedIn($userdata); //Added for set userdata and sessions.
                    $redir = "success";
                } else {
                    $social_register = $this->Home_model->social_register($name, $email);
                    if($social_register=="add")
                        $redir = "success";
                    else
                        $redir = "/";
                }
            } else {
                $redir = "/";
            }
            echo $redir;
	    }
	}
	
    public function guest_user()
	{
	    $register = $this->Home_model->userregister();
	    $add_loc = false;
	    if($register=="add"):
    	    $data = array(
                // 'u_id'=>$_SESSION['user_id'],
                'pincode'=>$this->input->post('pincode'),
                'house_no'=>$this->input->post('address'),
                'state'=>$this->input->post('state'),
                'city'=>$this->input->post('city')
            );
            $add_loc = $this->User_model->userbillingaddress($data);
        endif;
        if($add_loc)
            redirect(base_url('checkout'));
        redirect(base_url('user_checkout'));
	}

	public function cart()
	{
	    $data['sidecart_validate']='cart';
		$this->load->view('arteno/cart',$data);
	}
	  public function social_media() {
        $this->load->view('arteno/social-media');
    }

    public function user_checkout()
	{
	    if($this->session->userdata('user_id'))
	        redirect(base_url('checkout'));
	        $data["userdata"] = array();
            $data["charge"] = $this->db->get("invoice-details")->row();
            $data["cart"] = $_SESSION['user_cart'];
            // print_r($data["cart"]);exit;
            $data["location"] = array();
            $data['sidecart_validate']='checkout';
            $data['selected_address'] = $this->session->userdata("selected_address");
            $data['guest_email'] = $this->session->userdata('guest_email');
            $data['guest_mobile'] = $this->session->userdata('guest_mobile');
            $this->session->unset_userdata('guest_email');
            $this->session->unset_userdata('guest_mobile');
            $this->load->view('arteno/user_checkout',$data);
        
	}

// 	public function login()
// 	{
// 		$this->load->view('arteno/login');
// 	}
// 	public function e_shop1(){
// 	    $this->load->view('new-design/e_shop');
// 	}
// 	public function collection()
// 	{
// 		$this->load->view('collection');
// 	}

	public function sign_up()
	{    
	    if($this->session->userdata('user_id'))
	        redirect(base_url('user_details'));
	    if($this->input->post('register')){
    	       $register= $this->Home_model->userregister();
    	          if($register=='cancel'){
    	            $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissable fade show has-icon"><i class="la la-important-circle alert-icon"></i>
            <button class="close" data-dismiss="alert" aria-label="Close"></button><strong>Oops! </strong><br>Your email or mobile no. already registered. Please login.</div>');
    	        }else if($register=='add'){
    	            $this->session->set_flashdata('message', '<script> swal("You registered successfully",{
                          icon: "success",
                          button: false,
                          timer: 1700,
                        });</script>');
    	         redirect(base_url('sign_up'));
    	        }
    	    }
    	    $guest_email= $this->session->userdata('guest_email');
            $guest_mobile= $this->session->userdata('guest_mobile');
            $this->session->set_flashdata('social_mobile', $guest_mobile);
    	    $this->session->set_flashdata('social_email', $guest_email);
            $this->session->unset_userdata('guest_email');
            $this->session->unset_userdata('guest_mobile');
		$this->load->view('arteno/sign_up');
	}
    
    public function forget_password()
	{
	    if($this->session->userdata('designer_id') ||  $this->session->userdata('user_id')){
	       if($this->session->userdata('designer_id')){
	           redirect(base_url());
	       }elseif($this->session->userdata('user_id')){
	           redirect(base_url());
	       }
	    }
        if($this->input->post('forgot')) {
            $email=$this->input->post('email');
            $data=count($this->Home_model->checkbyemail($email));
            if($data==1) {
                $token=md5(rand(100000,999999));
	            $this->Home_model->updatetoken($email,$token);
	            $from_email = "customersupport@arteno.in"; 
                $to_email = "$email";
                $encodeemail = urlencode($email);
                // $msg = "Please click to the given link to reset your password ".base_url("reset_request/".$encodeemail."/".$token);
                include('email_template/reset_password.php');
                 $subject="Reset password request";
                //   print_r($msg);exit;
                 $this->load->model("Mail_model");
                $send_email = $this->Mail_model->send_mail($to_email,$msg,$subject);
        		$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissable fade show has-icon"><i class="la la-check-circle alert-icon"></i>Your reset link has been sent to your email. Please check your email.</div>');
            } else {
    			$this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissable fade show has-icon"><i class="la la-check-circle alert-icon"></i> No user found with this email. Please try again with another email.</div>');
    		}
        }
        $this->load->view('arteno/forgot_password');
	}
	
	public function reset_request($email,$token) {
	    if($this->session->userdata('designer_id') ||  $this->session->userdata('user_id')){
	       if($this->session->userdata('designer_id')){
	           redirect(base_url());
	       }elseif($this->session->userdata('user_id')){
	           redirect(base_url());
	       }
        }
        $newemail=urldecode($email);
        $data['email']=$email;
        $data['token']=$token;
        if($this->input->post('update')) {
            $password=$this->input->post('confirm_password');
            if($this->Home_model->resetpassword($newemail,$token,md5($password),'users')) {
                $token1=md5(rand(100000,999999));
	            $this->Home_model->updatetoken($email,$token1);
                $this->session->set_flashdata('resetmessage', '<div class="alert alert-success alert-dismissable fade show has-icon"><i class="la la-check-circle alert-icon"></i> Your password has been updated successfully.</div>');
                redirect('/');
            } else {
                $this->session->set_flashdata('resetmessage', '<div class="alert alert-danger alert-dismissable fade show has-icon"><i class="la la-check-circle alert-icon"></i> Some error occurred, please try again.</div>');
            }
        }
        $this->load->view('arteno/reset_request',$data);
	}
    
	public function category()
	{
		$this->load->view('category');
	}
	public function learn_more(){
		$this->load->view('arteno/learn_more');
	}
	public function category1()
	{
		$this->load->view('category1');
	}
	
	public function designer_signup() {
	    if($this->session->userdata('designer_id'))
	        redirect(base_url('designer'));
        $this->load->view('arteno/designer_signup');
	}

	public function wishlist() {
        $data["wishdata"]  = $this->Front_model->wishdata();
        $this->load->view('arteno/wishlist',$data);
	}
	/// remove wish//
	 function removeWish($id){
	   //   $id = $this->input->post('id');
       if($this->Front_model->removewishlist($id)){
           redirect(base_url('Home/wishlist'));
        }else{
           redirect(base_url('Home/wishlist'));
       }
	 }
	 
	public function join_us()
	{
	  if($this->session->userdata('designer_id'))
	        redirect(base_url('designer'));
	        $data['page_name'] = "join_us";
	$this->load->view('arteno/customize',$data);
    }
	public function customize()
	{    $data['page_name'] = "customize";
		$this->load->view('arteno/customize1',$data);

	
	}
	public function store($id=""){
	        $id_s = $id;
	        if(getuserid($id)){
	            $id_s = getuserid($id);
	        }else{
	            $id_s = $id; 
	        }
	    $data['designerid']=$id_s;
	    $q = "select *  from users where id = '$id_s'";
	    $data["designer"] = $this->Home_model->rowdata($q);
		$this->load->view('arteno/my_store',$data);
	}
	///store data//
	function storedata(){
	    
	     $id = $this->input->post('Id');
	     $offset = $this->input->post('offset');
	     $data = $this->Home_model->storeproducts($id,$offset);
	     echo json_encode($data);
	   
	}
// 	public function login_test() {
// 	    $email = "anushka@gmail.com";
// 	    $this->Home_model->setUserAsLoggedIn($this->Home_model->userbyemail($email));
// 	}

	public function login_with_email()
	{
	    $email = $this->input->post('email');
	    $password = md5($this->input->post('password'));
	    $count= $this->Home_model->userlogin_withemail($email);
        if($count==1) {
            $userdata=$this->Home_model->userbyemail($email);
            if($userdata->user_password == $password) {
                $this->Home_model->setUserAsLoggedIn($userdata); //Added for set userdata and sessions.
        	    echo 'success';
            }
            else{
                echo 'password_not_correct';
            }
        } else {
            echo 'email';
        }
    }

	public function login_with_otp(){
        $mobile=trim($this->input->post('mobile'));
        // if(validate_phone($mobile)) {
            $otp = ($this->input->post('otp'))?$this->input->post('otp'):rand(100000, 999999);
            $status=0;
            $check_otp=$this->db->query("select * from tblOtp where mobile='".$mobile."' and type='r'");
            if($check_otp->num_rows()>0) {
                $q2=$this->db->query("update tblOtp set otp='".$otp."' where mobile='".$mobile."' and type='r'");
            } else {
                $q2=$this->db->query("insert into tblOtp (otp,type,mobile) values ('".$otp."','r','".$mobile."') ");
            }
            if($q2) {
                $msg = "Your Arteno One Time Password (OTP) is {$otp}. Don't share it with anyone. We don't call/email you to verify OTP. OTP is valid for 15 mins.";
                @send_sms($mobile, $msg, 'verify_otp');
                echo trim($mobile);
            } else {
                echo $status;
            }
        // } else {
        //     echo 2;
        // }
    }
    
    	public function login_with_emailotp(){
        $email=trim($this->input->post('email'));
        // if(validate_phone($mobile)) {
            $otp = ($this->input->post('otp'))?$this->input->post('otp'):rand(100000, 999999);
            $status=0;
            $check_otp=$this->db->query("select * from tblOtp where mobile='".$email."' and type='email'");
            if($check_otp->num_rows()>0) {
                $q2=$this->db->query("update tblOtp set otp='".$otp."' where mobile='".$email."' and type='email'");
            } else {
                $q2=$this->db->query("insert into tblOtp (otp,type,mobile) values ('".$otp."','email','".$email."') ");
            }
            if($q2) {
                $msg = "Your Arteno One Time Password (OTP) is {$otp}. Don't share it with anyone. We don't call/email you to verify OTP. OTP is valid for 15 mins.";
                $this->load->model("Mail_model");
                $this->Mail_model->otp_email($email,'Otp_verify',$msg);
                echo trim($email);
            } else {
                echo $status;
            }
        // } else {
        //     echo 2;
        // }
    }
    
	public function verify_otp()
	{
	    $mobile = trim($this->input->post('mobile'));
	    $otp = $this->input->post('otp');
	    $check_otp=$this->db->query("select * from tblOtp where mobile='$mobile' and type='r'");
        if($check_otp->num_rows()>0) {
            $rw= $check_otp->row();
            $db_otp=$rw->otp;
            // echo $db_otp;
            // echo $otp;
            if($otp==$db_otp) {
                $count= $this->Home_model->userlogin_withmobile($mobile);
                if($count==1){
                    $userdata=$this->Home_model->userbymobile($mobile);
                    $this->Home_model->setUserAsLoggedIn($userdata); //Added for set userdata and sessions.
                    echo 'success';
                } else {
                     $this->session->set_userdata('guest_mobile',$mobile);
                    echo 'register';
                }
            } else {
                echo 'fail';
            }
        } else {
            echo 'cancel';
        }
    }
    
    public function verifyemail_otp(){
        $email = trim($this->input->post('email'));
	    $otp = $this->input->post('otp');
	    $check_otp=$this->db->query("select * from tblOtp where mobile='$email' and type='email'");
        if($check_otp->num_rows()>0) {
            $rw= $check_otp->row();
            $db_otp=$rw->otp;
            // echo $otp;
            // echo $db_otp;
            if($otp==$db_otp) {
                $this->session->set_userdata('guest_email',$email);
                echo 'success';
                
            } else {
                echo 'fail';
            }
        } else {
            echo 'cancel';
        }
    }
	    
	public function resend_otp(){
        $mobile = trim($this->input->post('mobile'));
        echo $mobile;
        $otp = ($this->input->post('otp'))?$this->input->post('otp'):rand(100000, 999999);
        // echo $otp;
        $status=0;
        $check_otp=$this->db->query("select * from tblOtp where mobile='".$mobile."' and type='r'");
        if($check_otp->num_rows()>0) {
            $q2=$this->db->query("update tblOtp set otp='".$otp."' where mobile='".$mobile."' and type='r'");
        } else {
            $q2=$this->db->query("insert into tblOtp (otp,type,mobile) values ('".$otp."','r','".$mobile."') ");
        }
        if($q2) {
            $msg = "Your Arteno One Time Password (OTP) is {$otp}. Don't share it with anyone. We don't call/email you to verify OTP. OTP is valid for 15 mins.";
            @send_sms($mobile, $msg,'resend_otp');
            echo trim($mobile);
        } else {
            echo $status;
        }
    }    
	    
	public function logout()
	{
		// unset user data
		$this->session->unset_userdata('user_id');
		$this->session->unset_userdata('user_mobile');
		$this->session->unset_userdata('user_login');
     	$this->session->unset_userdata('designer_id');
        $this->session->unset_userdata('designer_mobile');
        $this->session->unset_userdata('designer_login');
        $this->session->sess_destroy();
// 	 	$this->session->set_userdata($userdata);
		//Set Message
		$this->session->set_flashdata('danger', 'You are logged out.');
		@setcookie('loggedin_mobile', "", time() - 86400, "/");
		redirect(base_url());
	}
	
	public function designerlogin_with_email() {
	    $email = $this->input->post('designeremail');
	    $password = md5($this->input->post('designerpassword'));
        $count= $this->Home_model->designerlogin_withemail($email);
        if($count==1) {
            $userdata=$this->Home_model->designerbyemail($email);
            if($userdata->user_password ==$password) {
                $this->Home_model->setUserAsLoggedIn($userdata); //Added for set userdata and sessions.
                echo 'success';
            } else {
                echo 'password_not_correct';
            }
        } else {
            echo 'email';
        }
    }
	
	public function designerlogin_with_otp(){
	            $mobile=trim($this->input->post('designermobile'));
	            $otp = ($this->input->post('designerotp'))?$this->input->post('designerotp'):rand(100000, 999999);
	            $status=0;
            	           $check_otp=$this->db->query("select * from tblOtp where mobile='".$mobile."' and type='d'");
                            if($check_otp->num_rows()>0) {
                                     $q2=$this->db->query("update tblOtp set otp='".$otp."' where mobile='".$mobile."' and type='d'");
                                    }
                            else{
                                    $q2=$this->db->query("insert into tblOtp (otp,type,mobile) values ('".$otp."','d','".$mobile."') ");
                                }
                            if($q2){
                                        $msg = "Your Arteno One Time Password (OTP) is {$otp}. Don't share it with anyone. We don't call/email you to verify OTP. OTP is valid for 15 mins.";
                                        @send_sms($mobile, $msg,'verify_otp');
                                        echo trim($mobile);
                                    }
                            else { echo $status ; }
    }
    
	public function designerverify_otp()
	{
        $mobile = trim($this->input->post('designermobile'));
        $otp = $this->input->post('designerotp');
        $check_otp=$this->db->query("select * from tblOtp where mobile='$mobile' and type='d'");
        if($check_otp->num_rows()>0) {
            $rw= $check_otp->row();
            $db_otp=$rw->otp;
            if($otp==$db_otp) {
                $count= $this->Home_model->designerlogin_withmobile($mobile);
                if($count==1){
                    $userdata=$this->Home_model->designerbymobile($mobile);
                    $this->Home_model->setUserAsLoggedIn($userdata); //Added for set userdata and sessions.
                    echo 'success';
                } else {
                    echo 'not_registered';
                }
            } else {
                echo 'not_matched';
            }
        } else {
            echo 'cancel';
        }
    }
	    
	public function designerresend_otp(){
	            $mobile=trim($this->input->post('designermobile'));
	            $otp = ($this->input->post('designerotp'))?$this->input->post('designerotp'):rand(100000, 999999);
	            $status=0;
            	           $check_otp=$this->db->query("select * from tblOtp where mobile='".$mobile."' and type='d'");
                            if($check_otp->num_rows()>0) {
                                     $q2=$this->db->query("update tblOtp set otp='".$otp."' where mobile='".$mobile."' and type='d'");
                                    }
                            else{
                                    $q2=$this->db->query("insert into tblOtp (otp,type,mobile) values ('".$otp."','d','".$mobile."') ");
                                }
                            if($q2){
                                        $msg = "Your Arteno One Time Password (OTP) is {$otp}. Don't share it with anyone. We don't call/email you to verify OTP. OTP is valid for 15 mins.";
                                        @send_sms($mobile, $msg,'resend_otp');
                                        echo trim($mobile);
                                    }
                            else { echo $status ; }
    }    
	    
	public function designerlogout()
	{
		// unset user data
		$this->session->unset_userdata('designer_id');
		$this->session->unset_userdata('designer_mobile');
		$this->session->unset_userdata('designer_login');
        $this->session->unset_userdata('user_id');
		$this->session->unset_userdata('user_mobile');
		$this->session->unset_userdata('user_login');
		
		$this->session->sess_destroy();
		//Set Message
		$this->session->set_flashdata('danger', 'You are logged out.');
		@setcookie('loggedin_mobile', "", time() - 86400, "/");
		redirect(base_url());
	}
	
	public function registration() {
        if($this->input->post('register')) {
            $register= $this->Home_model->designerregister();
            if($register=='cancel') {
                $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissable fade show has-icon"><i class="la la-important-circle alert-icon"></i>
                <button class="close" data-dismiss="alert" aria-label="Close"></button><strong>Oops!</strong><br>Your email or mobile no. already exist. Please login.</div>');
                
                redirect(base_url('designer_signup'));
            } else if($register=='add') {
                $this->session->set_flashdata('message', '<script>swal({
                text:"Registration completed successfully.",
                icon:"success",
                button:false,
                timer:1200
                })</script>');
                redirect(base_url('join-us'));
            } else if($register=='update') {
                $this->session->set_flashdata('message', '<div class="alert alert-warning alert-dismissible fade show">Successfully login as designer. <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button></div>');
                redirect(base_url('designer'));
            }
        }
	}
	
	public function product_detail()
	{
		$this->load->view('arteno/product_detail');
	}

	public function order_status()
	{
	    $order_id=$this->session->userdata("last_order");
	    if(isset($order_id)){
	    if($_POST['razorpay_signature'])
	    {
            $orderdata= $this->session->userdata('orderdetails');
            $attributes = array(
                'razorpay_signature' => $_POST['razorpay_signature'],
                'razorpay_payment_id' => $_POST['razorpay_payment_id'],
                'razorpay_order_id' => $orderdata->txn_id
            );
            $data['orderstatus']=$this->Home_model->checkorder($attributes);
            $invoice_data=$this->Home_model->invoice_data();
            if($data['orderstatus']=='success'){
                $order = $this->session->userdata('online_pay_sms_data');
                $user =  $order['user'];
                $msg =  $order['msg'];
                $order_msg = $order['email_msg'];
                @send_sms($user->user_phone,$msg,'place_order');
                //@send_sms('8700737005',$msg);
                $this->load->model("Mail_model");
                $this->Mail_model->order_email($order_msg,'place_order');
            	@$this->session->set_userdata('online_pay_sms_data', '');
            }
        } else {
            $data['orderstatus']='success';
        }
        @$this->session->unset_userdata('orderdetails');
	    $data['last_order'] = $order_id;
	    $data['order_details']=$this->Home_model->orderdetailsbyorder_id($order_id);
	    $data['order_items']=json_encode($this->Home_model->orderdata_status($order_id));
		$this->load->view('arteno/order_status', $data);
	    } else{
	        redirect(base_url('cart'));
	    }
	}
	
	public function privacy_policy()
	{
		$this->load->view('arteno/privacy_policy');
	}
	
	public function term_condition()
	{
		$this->load->view('arteno/term_condition');
	}
	public function return_policy()
	{
		$this->load->view('arteno/return_policy');
	}
	public function legal()
	{
		$this->load->view('arteno/legal');
	}
	public function disclaimer()
	{
		$this->load->view('arteno/disclaimer');
	}
	public function contact()
	{
		$this->load->view('arteno/contact');
	}
	public function social_media1()
	{
		$this->load->view('arteno/social_media1');
	}
	///contact us//
	function contact_us(){
        $data = array(
            'name'=>$this->input->post('name'),
            'email'=>$this->input->post('mail'),
            'phone'=>$this->input->post('phone'),
            'message'=>$this->input->post('message')
	       );
	    if($this->Home_model->contact($data)){
	       echo 1;
	   }else{
	       echo 0;
	   }    
	}
	public function editor_header()
	{
		$this->load->view('editor_header');
	}
	public function test_cat() {
	    $id = 2;
	    $designer = "";
	    $price = "";
	    $offset = 8;
	    $catid = "";
	    $limit = $this->input->post('limit')??8;
	    $data = $this->Front_model->productdatacat($id, $designer, $price, $offset, $catid);
	   //$data = $this->Front_model->productdata($id, $limit);
	   echo json_encode($data);
	   echo "<hr>";
	    echo $this->db->last_query();
	}
	///ajax product data//
	public function products(){
        $postData = $this->input->post('Id');
        $limit = $this->input->post('limit')??8;
        $data = $this->Front_model->productdata($postData, $limit);
        // echo $this->db->last_query();
        echo json_encode($data);
	}

	///mobile view//
	public function productsmobile(){
	     $id  = $this->input->post('Id');
	    $data = $this->Front_model->productdata($id);
	    
	      echo json_encode($data);
}

    public function getDeliveryStatus($awb="")
	{
	    echo json_encode(awb_delivery_status($awb));
	}
		 public function home21()
	 {
	     		$this->load->view('arteno/home21');
	 }
	public function cancel_payment($order_id)
	 {
	     if($order_id){
	    $id= $order_id;
                 $table='orders';
                 $note='Payment Failed';
	            if($this->Common_model->cancel_order($id, $table,$note)){
	                $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissable fade show has-icon"><i class="la la-check-circle alert-icon"></i>
                                    <button class="close" data-dismiss="alert" aria-label="Close">&times;</button><strong>Success!</strong><br> order Cancel Successfully.</div>');
                                    redirect('cancel_orderstatus');
	                
	            } 
	     } else {
	         redirect('cart');
	     }
	 }
	 
	 public function cancel_order()
	 {
	     		$this->load->view('arteno/cancel_order');
	 }
   
  ///Google login//
  public function google_login(){
        $email = $this->input->post('email');
        $id = $this->home_model->checkuser($email);
        if($id!=" "){
            $this->session->set_userdata('user_id',$id);
              $this->session->set_flashdata('login','<script>swal("Login successful!",{
                      icon: "success",
                      button: false,
                      timer: 1500
                    })
                    </script>');
                   redirect($_SERVER['HTTP_REFERER']);
        }else{
            $this->session->set_flashdata('login','<script>swal("Please register first",{
                      icon: "warning",
                      button: false,
                      timer: 1500
                    })
                    </script>');
	            
                   redirect($_SERVER['HTTP_REFERER']);
        }
  }
  
  
//  function resetdesignerCounter(){
//      $designer = $this->input->post('counter');
//     if($designer == 1){
//          $this->session->set_userdata('designer_counter','1');
//      }else{
//              $this->session->set_userdata('designer_counter',' ');
     
//      }
//  }
//  function test(){
//      echo  $this->session->userdata('designer_id')."</br>";
//      echo $this->session->userdata('user_id')."</br>";
//      echo $this->session->userdata('designer_counter')."</br>";
//  }
    public function updateMobile($mobile) {
        $ret = 2;
        if(strlen((string)$mobile)==10)
            $ret = $this->User_model->updateMobile($mobile)?1:0;
        echo $ret;
    }
 public function testimonial()
	 {
	     		$this->load->view('arteno/testimonial');
	 }
 public function testimonial1()
	 {
	     		$this->load->view('arteno/testimonial1');
	 }
 public function testimonial3()
	 {
	     		$this->load->view('arteno/testimonial3');
	 }
	 
	 public function check_email(){
	     if($this->input->post('email')){
	       $result=$this->Home_model->userlogin_withemail($this->input->post('email'));
	       echo $result;
	     }
	 }
	 
	 public function check_mobile(){
	     if($this->input->post('mobile')){
	       $result= $this->Home_model->userlogin_withmobile($this->input->post('mobile'));
	       echo $result;
	     }
	 }
	 
	 
   
   
}?>