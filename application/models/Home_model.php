<?php
    class Home_model extends CI_Model {
        public function slider(){
            $this->db->where('status',1);
            $q = $this->db->get('slider');
            return $q->result();
        }

        public function is_sharable($share_url="") {
            if($share_url=="")
                return false;
            $actual_share_url = explode("&share=", $share_url);
            if($actual_share_url[1]=="")
                return false;
            $share_c = $this->db->get_where('shares', ['share_id' => $actual_share_url[1]])->num_rows();
            if($share_c==0)
                return false;
            return true;
        }
        
        public function invoice_data(){
            return $this->db->where('id',1)->get('invoice-details')->row();
        }
          function rowdata($q){
             return $this->db->query($q)->row();
              
          }
        public function products($id=""){
            if(!empty($id)){
                $condition=array("active"=>1,"id"=>$id);
                $this->db->where($condition);
                return  $q = $this->db->get('products')->row(); 
            }
            $q = $this->db->select('id, name')->where('active',1)->get('products');
            return $q->result();
        }
         public function get_mrp_price($id=""){
           
                $condition=array("active"=>1,"id"=>$id);
                 $this->db->select('mrp,price');
                $this->db->where($condition);
                return  $q = $this->db->get('products')->row(); 
            
        }

        public function prod_page_products($id=""){
            $this->db->select('id, name,slug,mrp,price');
            if(!empty($id)){
                $condition=array("active"=>1,"id"=>$id);
                $this->db->where($condition);
                return  $q = $this->db->get('products')->row(); 
            }
            $this->db->where('active',1);
            $q = $this->db->get('products');
            return $q->result();
        }
        public function getid_Byslug($slug=""){
            $this->db->select('id');
            if(!empty($slug)){
                $condition=array("active"=>1,"slug"=>$slug);
                $this->db->where($condition);
                return  $q = $this->db->get('products')->row()->id; 
            }
            $this->db->where('active',1);
            $q = $this->db->get('products');
            return $q->result();
        }

        public function storebyid($id){
           $this->db->where('u_id',$id);
           return  $q = $this->db->get('store')->row(); 
        }
        
          public function all_prod_count_by_base($id){
            $this->db->where('active',1)->where('product_base',$id)->order_by("id", "desc");
           return  $q = $this->db->get('templates')->num_rows(); 
        }
        
        public function product_design($id,$page=1){
            $limit=12;
            $start=($page-1)*$limit;
            // $this->db->select('id,share_url,image,name,designed_by,color');
            $this->db->where('active',1)->where('product_base',$id)->order_by("favourite", "desc");
            // if ($limit != '' && $start != '') {
                 $this->db->limit($limit, $start);
            // }
            $q = $this->db->get('templates');
           
            return $q->result();
        }
        public function product_designwithfavourite($id,$page=1){
            // $limit=6;
            // $start=($page-1)*$limit;
            $this->db->select('id,share_url,image,name,designed_by,color');
            $this->db->where('active',1)->where('product_base',$id)->where('favourite',1);
            // $this->db->limit($limit, $start);
            $q = $this->db->get('templates');
            return $q->result();
        }
        public function product_detail($id){
            $this->db->where('id',$id);
            $q = $this->db->get('templates');
            return $q->row();
        }
        public function list_blog($id=FALSE){
            if($id){
                $q = $this->db->query("Select * from blog where id= '$id'");
                return $q->row();
            }else{
                $q = $this->db->query("Select * from blog where status=1");
                return $q->result();
            }
                   
        }
        public function resetpassword($newemail,$token,$password,$table){
        $array=array('user_email'=>$newemail,'token'=>$token);
        $this->db->where($array);
        $udata=array('user_password'=>$password);
         return $this->db->update($table,$udata);
        }
        public function video(){
            $this->db->where('status',1);
            $q = $this->db->get('video');
            return $q->result();
        }
        public function testimonial(){
            $this->db->where('status',1);
            $q = $this->db->get('testimonial');
            return $q->result();
        }
        public function userbyemail($email){
            $this->db->where('user_email',$email)->where('status',1);//->where('role','user');
            $q = $this->db->get('users');
            return $q->row();
        }
        public function designerbyemail($email){
            $this->db->where('user_email',$email)->where('status',1);//->where('role','designer');
            $q = $this->db->get('users');
            return $q->row();
        }
        public function checkbyemail($email){
            $this->db->where('user_email',$email)->where('status',1);
            $q = $this->db->get('users');
            return $q->row();
        }
        public function userbyid($id){
            $this->db->where('id',$id)->where('status',1);
            $q = $this->db->get('users');
            return $q->row();
        }
        public function userbymobile($mob){
            $array=array('user_phone'=>$mob,'status'=>1);//,'role'=>'user'
            $this->db->where($array);
            $q = $this->db->get('users');
            return $q->row();
        }
        public function designerbymobile($mob){
            $array=array('user_phone'=>$mob,'status'=>1); //,'role'=>'designer'
            $this->db->where($array);
            $q = $this->db->get('users');
            return $q->row();
        }
        public function updatetoken($email,$token){
            $array=array('token'=>$token);
            $this->db->where('user_email',$email);
            $q = $this->db->update('users',$array);
            
        }
        
        public function userlogin(){
            $email=$this->input->post('username');
            $password=md5($this->input->post('password'));
            $query = $this->db->get_where('users', array('status'=>1,'user_email' => $email,'user_password' => $password)); //,'role'=>'user'
            return $count = $query->num_rows();
            
        }
        public function userlogin_withmobile($mobile){
            $query = $this->db->get_where('users', array('status'=>1,'user_phone' => $mobile)); //,'role'=>'user'
            return $count = $query->num_rows();
            
        }
        public function userlogin_withemail($email){
            $query = $this->db->get_where('users', array('status'=>1,'user_email' => $email)); //,'role'=>'user'
            return $count = $query->num_rows();
            
        }
        public function designerlogin_withemail($email){
            $query = $this->db->get_where('users', array('status'=>1,'user_email' => $email)); //,'role'=>'designer'
            return $count = $query->num_rows();
            
        }
        public function designerlogin_withmobile($mobile){
            $query = $this->db->get_where('users', array('status'=>1,'user_phone' => $mobile)); //,'role'=>'designer'
            return $count = $query->num_rows();
            
        }
        public function designerLogin($email, $encrypt_password){
			//Validate
			$this->db->where('user_email', $email);
			$this->db->where('user_password', $encrypt_password);

			$result = $this->db->where('status','1')->get('users');//->where('role','designer')
			if ($result->num_rows() == 1) {
				return $result->row(0);
			}else{
				return false;
			}
		}
		public function myorder($id){
		    $q = $this->db->query("Select * from orders where user_id= '$id' and status!=2 ORDER BY id DESC");
            return $q->result();
        }
        public function orderdetailsbyorder_id($id){
		    $q = $this->db->query("Select total,status from orders where id= '$id'");
            return $q->row();
        }
        
		public function orderdata($id){
            return $result = $this->db->where('order_id',$id)->get('order_products')->result();
        }
        
        public function orderdetailsWithUser($id){
            return $result = $this->db->select('user_fullname,user_location.house_no,user_location.city,user_location.pincode,user_location.state,user_email,user_phone,shipping_charge,cod_charge,total')->join('user_location', 'user_location.id=orders.location_id')->join('users', 'users.id=orders.user_id')->where('orders.id',$id)->get('orders')->row_array();
            
        }
        public function orderdetailsforshiprocket($id){
           $q = $this->db->query("Select * from orders where id= '$id' and status!=2");
            return $q->row_array();
        }
        public function userdetailsforshiprocket($id){
           $q = $this->db->query("Select * from users where id= '$id'");
            return $q->row_array();
        }
        public function shippingdetailsforshiprocket($id){
           $q = $this->db->query("Select * from user_location where id= '$id'");
            return $q->row_array();
        }

        public function orderDataWithProduct($id) {
            $result = $this->db->select('name, sku, qty, mrp, price, order_products.total_price, product_price, gst, hsn')
            //->select('user_fullname,house_no,city,pincode,state,user_email,user_phone,shipping_charge,total,pincode')
            ->join('products', 'products.id=order_products.product_id')->where('order_products.order_id',$id)->get('order_products')->result();
            return $result;
        }

        public function userregister(){
            $email= $this->input->post('email');
            $mobile=$this->input->post('mobile');
            $slug =  url_title($this->input->post('name'), 'dash', TRUE);
            $query = $this->db->get_where('users', array('user_email' => $email));
            $count = $query->num_rows();
            $mobile_query = $this->db->get_where('users', array('user_phone' => $mobile));
            $mobile_count = $mobile_query->num_rows();
            if ($count === 0 && $mobile_count===0) {
            $data['user_fullname']  =   $this->input->post('name');
            if(validate_slug($slug, $type="users")){
            $data['slug']           =  validate_slug($slug, $type="users");    
            }else{
                $data['slug']           =  url_title($this->input->post('name'), 'dash', TRUE);
            }
            
            $data['user_email']     =   $this->input->post('email');
            $data['user_phone']     =   $this->input->post('mobile');
            $data['user_email']     =   $this->input->post('email');
            $data['user_password']     =   md5($this->input->post('confirmpassword'));
            $data['dob']     =   $this->input->post('dob');
            $data['gender']     =   $this->input->post('gender');
            $data['status']         =   1;  
            $data['role']           =   'user';  
            $this->db->insert('users', $data);
            $user_id = $this->db->insert_id();
                $userdata=$this->userbyid($user_id);
                $this->setUserAsLoggedIn($userdata); //Added for set userdata and sessions.
              $ref= "add";
        	  $this->session->set_flashdata('register', ',<div class="alert alert-success">user registered successfully</div>');
        	
            }
            else{
              $ref= "cancel";
        	  $this->session->set_flashdata('register', ',<div class="alert alert-danger">user already already Exist please try with another email</div>');
        	}
        	return $ref;
        }
        
        public function designerregister(){
            $email= $this->input->post('email');
            $mobile=$this->input->post('mobile');
            $user_id = $this->session->userdata('user_id');
            $slug = url_title($this->input->post('name'), 'dash', TRUE);
            $query = $this->db->get_where('users', array('user_email' => $email));//,'role'=>'designer'
            $count = $query->num_rows();
            $mobile_query = $this->db->get_where('users', array('user_phone' => $mobile)); //,'role'=>'designer'
            $mobile_count = $mobile_query->num_rows();
            if (($count === 0 && $mobile_count === 0) || $user_id!="") {
                $data['user_fullname']  =   $this->input->post('name');
                $data['slug']           =  validate_slug($slug, "users");
                if($user_id==""):
                    $data['user_email']     =   $this->input->post('email');
                    $data['user_phone']     =   $this->input->post('mobile');
                    $data['user_password']  =   md5($this->input->post('confirmpassword'));
                    $data['status']         =   1;
                endif;
                $data['brand']     =   $this->input->post('brand');
                $data['dob']     =   $this->input->post('dob');
                $data['gender']     =   $this->input->post('gender');
                $data['role']           =   'designer';
                if(isset($_SESSION['user_id'])) {
                    $this->db->where('id', $_SESSION['user_id']);
                    $this->db->update('users',$data);
                    $userdata=$this->userbyid($_SESSION['user_id']);
                    $this->setUserAsLoggedIn($userdata); //Added for set userdata and sessions.
                    $ref= "update";
                } else {
                    $this->db->insert('users', $data);
                    $user_id = $this->db->insert_id();
                    $userdata=$this->userbyid($user_id);
                    $this->setUserAsLoggedIn($userdata); //Added for set userdata and sessions.
                    $ref= "add";
                }
                $this->session->set_flashdata('register', ',<div class="alert alert-success">Designer registered successfully.</div>');
            } else {
                $ref= "cancel";
                $this->session->set_flashdata('register', ',<div class="alert alert-danger">Designer already exist, please try with another email.</div>');
        	}
        	return $ref;
        }
    
        public function change_password($new_password,$user_id){
    		$data = array(
    			'user_password' => md5($new_password)
    		    );
    		$this->db->where('id', $user_id);
    		return $this->db->update('users', $data);
    	}
        
        public function user_profile($id){
           
                $q = $this->db->query("Select * from users where id= '$id'");
                return $q->row();
                   
        }
             public function user_location($uid){
           
                $q = $this->db->query("Select * from user_location where u_id= '$uid' AND status!=2");
                return $q->result();
                   
        }
        
        public function update_profile($id){
            
            $data['user_fullname']              =   $this->input->post('name');
            $data['user_phone']        =   $this->input->post('mobile');
            $data['house_no']              =   $this->input->post('house_no');
            $data['city']        =   $this->input->post('city');
            $data['state']              =   $this->input->post('state');
            $data['pincode']        =   $this->input->post('pincode');
        
           
            $this->db->where('id', $id);
            $this->db->update('users', $data);
            
            
        }
        
        public function update_profile_image($id){
            $image = $this->input->post('user_profile');
            
           if(($image=="" || $image== null) && ( $_FILES['image']=="" || $_FILES['image']==null) ){
                $this->session->set_flashdata('register', '<script>swal({
                text:"please select Or upload image",
                icon:"warning",
                button:false,
                timer:1200
                    
                })</script>');
          }
          else if(($image!="" || $image!= null) || ( $_FILES['image']!="" || $_FILES['image']!=null) ){
            if(isset($_FILES['image']) && $_FILES['image']['name']!=''){
                move_uploaded_file($_FILES['image']['tmp_name'], 'uploads/users/user-'.time().$id.'.jpg');
                $data['user_image']     =       base_url().'uploads/users/user-'.time().$id.'.jpg';
                   $this->session->set_flashdata('register', '<script>swal({
                text:"Profile image updated!",
                icon:"success",
                button:false,
                timer:1200
                    
                })</script>');
            }else{
                $data['user_image']     =   $image;
                    $this->session->set_flashdata('register', '<script>swal({
                text:"Profile image updated!",
                icon:"success",
                button:false,
                timer:1200
                    
                })</script>');
            }
            
            $this->db->where('id', $id);
            $this->db->update('users', $data);
          }
            
        }
        
         public function add_address($id){
            $data['house_no']              =   $this->input->post('house_no');
            $data['city']              =   $this->input->post('city');
            $data['state']              =   $this->input->post('state');
            $data['pincode']        =   $this->input->post('pincode');
            $data['u_id']=$id;
            
            $this->db->insert('user_location', $data);
            
            
              $ref= "add";
        	return $ref;
        }
         public function update_address($id){
            
             $data['house_no']              =   $this->input->post('house_no');
            $data['city']              =   $this->input->post('city');
             $data['state']              =   $this->input->post('state');
            $data['pincode']        =   $this->input->post('pincode');
           
            $this->db->where('id', $id);
            $this->db->update('user_location', $data);
            
            
        }
        
             public function order(){
            $data['total']              =   $this->input->post('total_price');
            $data['payment']              =   $this->input->post('payment');
            $data['user_id']        =   $this->input->post('u_id');
            $data['location_id']        =   $this->input->post('location_id');
            $data['status']        =   'confirmed';
            
            $this->db->insert('orders', $data);
            $insert_id = $this->db->insert_id();
            $pro['order_id']              =   $insert_id;
            $pro['product_id']              =   $this->input->post('product_id');
            $pro['product_base']        =   $this->input->post('product_base');
            $pro['product_price']        =   $this->input->post('product_price');
            $pro['qty']              =   $this->input->post('qty');
            $pro['design']        =   $this->input->post('design');
            $pro['product_name']        =   $this->input->post('product_name');
            $pro['screenshots']        =   json_encode($this->input->post('screenshots'));
            $pro['custom']        =   $this->input->post('custom');
            $pro['data']=$this->input->post('data');
            $pro['currency']=$this->input->post('currency');
            $pro['design_by']=$this->input->post('design_by');
            $this->db->insert('order_products', $pro);
            
            //   $ref= "add";
        	return $pro;
        }
        public function count_order($status,$uid){
		   $result = $this->db->where('status',$status)->where('user_id',$uid)->get('orders');
		return $num = $result->num_rows();
		
        }
        
        public function total_order($uid){
		   $result = $this->db->where('status!=',2)->where('user_id',$uid)->get('orders');
		return $num = $result->num_rows();
		
        }
         public function design_cart(){ 
             
            $size  =   $this->input->post('size');
            $qty   =   $this->input->post('qty');
            $temp_id = $this->input->post('add');
           $template= $this->product_detail($temp_id);
            $products_details=$this->products($template->product_base);
           $designer_design=$template->data;
           $temp_data= urldecode($designer_design);
           $design_data=json_decode($temp_data);
         
           $design_cart=array(
               'template'=>$template,
               'data'=>$design_data,
               'size'=>$size,
               'qty'=>$qty,
                'price'=>$products_details->price,
                'total'=>$products_details->price * $qty,
               );
           $this->session->set_userdata('design_cart',$design_cart);
         }
        
        public function submit_order(){
		    $cart_data = $this->session->userdata('lumise_cart');
		    if(!$cart_data)
		        return "goBack";
		    $total_qty = 0;
		$date = date("Y-m-d H:i:s");
        if($_POST['user_id']=='guest') {
            $email= $this->input->post('email');
            $mobile=$this->input->post('mobile');
            $query = $this->db->get_where('users', array('user_email' => $email));
            $count = $query->num_rows();
            $mobile_query = $this->db->get_where('users', array('user_phone' => $mobile));
            $mobile_count = $mobile_query->num_rows();
            if ($count === 0 && $mobile_count===0) {
            $guest_user['user_fullname']  =   $_POST['name'];
            $guest_user['user_email']     =   $_POST['email'];
            $guest_user['user_phone']     =   $_POST['mobile'];
            $guest_user['house_no']       =   $_POST['house_no'];
            $guest_user['city']           =   $_POST['city'];
             $guest_user['state']          =  $_POST['state'];
            $guest_user['pincode']        =   $_POST['pincode'];
            $guest_user['user_password']        =   md5($_POST['password']);
           // $data['image']         =   base_url().'uploads/no_image.jpg';
            $guest_user['status']        =   1;  
            $guest_user['role']        =   'user'; 
           
            $this->db->insert('users', $guest_user);
            $user_id = $this->db->insert_id();
            $guest_address['house_no']       =   $_POST['house_no'];
            $guest_address['city']           =   $_POST['city'];
             $guest_address['state']           =   $_POST['state'];
            $guest_address['pincode']        =   $_POST['pincode'];
            $guest_address['u_id']=$user_id;
            
            $this->db->insert('user_location', $guest_address);
             $location_id = $this->db->insert_id();
            }
            else {
                return $g_user='aleady_exist';
            }
             $userdata=$this->userbyemail($_POST['email']);
    	     $this->session->set_userdata('userdata',$userdata);

        } else {
            
            $user_id = $_POST['user_id'];
            $is_shipping = $_POST['is_shipping'];
             
             if($is_shipping==1){
                $location_id = 0;
             } else{
                 $location_id = $_POST['location_id'];
             }
            
        } 
           $total_gst=0;
            $shipping_charge = $this->input->post('shipping_charge');
           
            $payment=$_POST['payment'];
            if($payment=='cod'){
                $grand_total =$this->input->post('total')+ $this->input->post('shipping_charge')+ $this->input->post('cod_charge')+ $this->input->post('product_gst')+ $this->input->post('shipping_gst') + $this->input->post('cod_gst');
                $cod_charge = $this->input->post('cod_charge');
                $total_gst=$total_gst + $this->input->post('product_gst') + $this->input->post('shipping_gst') + $this->input->post('cod_gst');
            }
            else{
                $grand_total =$this->input->post('total')+ $this->input->post('shipping_charge') + $this->input->post('product_gst')+ $this->input->post('shipping_gst');
                 $total_gst=$total_gst + $this->input->post('product_gst') + $this->input->post('shipping_gst');
                $cod_charge=0;
                
            }
            foreach ($cart_data['items'] as  $item){
          $p_id= $item['product_id'];
          $qty=$item['qty'];
          $total_qty += $qty;
          $size_color=array();
           
          foreach($item['attributes'] as $attr) {
              $color=$attr->value;
              array_push($size_color,$color);
          }

            if($size_color[1]=='S' ||$size_color[1]=='M' ||$size_color[1]=='L' || $size_color[1]=='XL' ||$size_color[1]=='XXL'){
                
                // $stock_check = $this->db->query("Select * from stock where  product='$p_id' AND size='$size_color[1]' AND color='$size_color[0]' ");
                // $stock= $stock_check->row();
                $stock = $this->Stock_model->calculate_stock($p_id,$size_color[0],$size_color[1]);
                  
                    if($stock==0){
                        return $ref='out of stock';
                    }
                    else{
                        if($stock < $qty){
                          return $ref='out of stock';   
                        }
                    }
            }
            else{
                    $stock = $this->Stock_model->calculate_stock($p_id);
                    if($stock==0){
                        return $ref='out of stock';   
                    }
                    else{
                        if($stock < $qty){
                          return $ref='out of stock';
                        }
                    }
            }
      
        }
        $status = "confirmed";
        if($this->input->post('payment')=="online")
            $status = "pending";
         $order_data = array(
			'total' => $grand_total,
			'status' => $status,
			'currency' => 'Rs',
			'user_id' => $user_id,
			'location_id' => $location_id,
			'is_shipping' => ($is_shipping)?$is_shipping:0,
            'payment' => $this->input->post('payment'),
            'txn_id' => '',
            'shipping_charge' => $shipping_charge,
			'cod_charge' => $cod_charge,
            'total_gst' => $total_gst,
            'order_date' => date("Y-m-d"),
			'created' => date("Y-m-d h:i:sa"),
			'updated' => date("Y-m-d h:i:sa")
		);
		
	    $this->db->insert ('orders', $order_data);
	    $insert_id = $this->db->insert_id();
// 		if($this->input->post('payment')=="online"):
//     		include_once APPPATH . 'third_party/razorpay/razorpay.php';
//             $txn_id = $razorpay->add_order($insert_id, $grand_total); 
//             $this->db->update('orders', ['txn_id' => $txn_id], ['id' => $insert_id]);
//             $this->session->set_userdata('orderdetails', $this->db->get_where('orders', ['id' => $insert_id])->row());
//         endif;
		
        
        $order = $this->session->userdata('lumise_cart');
        
        $order['user'] = $user_id;
        $order['created'] = $date;
        $order['id'] = $insert_id;
        $order['payment'] = $_POST['payment'];
        $order['status'] = 'confirmed';
        
        $order_data['id'] = $insert_id;
        
       $this->session->set_userdata('lumise_justcheckout', $order);
        
        $cart_data = $this->session->userdata('lumise_cart');
        
		$store = $this->store_cart($insert_id, $cart_data);
        
        if (!$store)
        	return $store;
        	
        $data = array(
            'products'=>$cart_data['items'],
            'order_id' => $insert_id,
            'order_data' => $order_data,
            'user_data' => $user_id,
        );
        $this->session->set_userdata('online_orderdata', $data);
		return $data;
		
            
        }
        public function store_cart($order_id, $cart_data){
	
		$insert_fail = 0;

		$date = date("Y-m-d H:i:s");
		$design_path = ROOT.'uploads/designs';
		$order_path = ROOT.'uploads/orders';
		
		$checkupl = $this->check_upload(time());
	
				
		if ($checkupl !== 1) {
			return array(
				'error' => 1,
				'msg' => $checkupl
			);
		}
		
		
		$last_checkout = array();
      
		if (
			!$cart_data || 
			!isset($cart_data['items']) || 
			!is_array($cart_data['items']) || 
			count($cart_data['items']) == 0
		) {
			$lumise->logger->log('Editor log for order ID#' . $order_id.' '.date ("Y-m-d H:i:s").' - cart_data session is empty or no items');
			return true;
		}
		
		
		foreach ($cart_data['items'] as $key => $item){
		    
		    
			$screenshots = array();
			$print_files = array();
			
			//get data from file
			$extra_data = $this->get_cart_item_file( $item['file'] );
		
			
			
			//save screenshots
			if(
				(
					!isset($item['template']) || 
					false === $item['template']
				) &&
				isset($extra_data['screenshots']) &&
				count($extra_data['screenshots']) > 0
			){
				foreach ($extra_data['screenshots'] as $stage => $screenshot) {
					
					$scr_file_name = date('Y'.DS.'m'.DS, time()).$this->generate_id().'.png';
					$scr_name = $order_path . DS . $scr_file_name;
					
					if (strpos($screenshot, 'data:image') === false)
						continue;
					
					if(
						!@file_put_contents(
							$scr_name,
							base64_decode(
								preg_replace('#^data:image/\w+;base64,#i', '', $screenshot)
							)
						)
					){
						return array(
							'error' => 1,
							'msg' => $lumise->lang('Could not save product screenshot').': '.$order_path
						);
					}
					
					array_push($screenshots, $scr_file_name);
					
				}
			}
			
			//check if is not template => save design to file
			$design_product = $item['template'];
			
			if (false === $item['template']){
				
				$extra_data['design']['options'] = $extra_data['options'];
				$extra_data['design']['printing'] = $extra_data['printing'];
				$extra_data['design']['product'] = $extra_data['product_id'];
				$extra_data['design']['product_cms'] = $extra_data['product_cms'];
				$extra_data['design']['template'] = $extra_data['template'];
				
				if (isset($extra_data['design']['stages'])) {
					
					$isf = 0;
					
					foreach ($extra_data['design']['stages'] as $s => $sdata) {
						
						$isf++;
						
						if (isset($sdata['print_file'])) {
							
							$scr_file_name = date('Y'.DS.'m'.DS, time()).$lumise->generate_id().'-stage'.$isf.'.png';
							$scr_name = $order_path . DS . $scr_file_name;
							
							if (strpos($sdata['print_file'], 'data:image') === false)
								continue;
							
							if (@file_put_contents(
									$scr_name,
									base64_decode(
										preg_replace('#^data:image/\w+;base64,#i', '', $sdata['print_file'])
									)
								)
							){
								array_push($print_files, $scr_file_name);
							}
							
							unset($extra_data['design']['stages'][$s]['print_file']);
								
						}
					}	
				}
				
				$design_raw = json_encode($extra_data['design']);
				
				$design_file = date('Y'.DS.'m'.DS, time()).$this->generate_id().'.mytpl';
				
				if (!file_put_contents($design_path.DS.$design_file, $design_raw)){
					return array(
						'error' => 1,
						'msg' => $this->main->lang('Could not save design file')
					);
				}
				
				$design_product = str_replace('.mytpl','', $design_file);
			}
			
	$variations=array();		
    foreach($item['attributes'] as $attr => $options) { 
        $cols = explode("\n", isset($options->values) ? $options->values : '');
         
                                             $val = trim($options->value);
                                             $lab = $val;
                                             
                                                                                    if ($options->type == 'color' || $options->type == 'product_color') {
                                             foreach ($cols as $col) {
                                             	$col = explode('|', $col);
                                             	$col[0] = trim($col[0]);
                                             	if ($col[0] == $val && isset($col[1]) && !empty($col[1]))
                                             		$lab = $col[1];
                                             }
                                                                                    }
        // $color=$attr->value;
        $color=$lab;
        
         array_push($variations,$color);
    }
    
        $design_by = array();
                                    foreach($item['template_id'] as $temp_cart):
                                    $designBySingle = array();
                                    foreach($temp_cart as $front){
                                    if(is_array($front))
                                    foreach($front as $key=>$fr){
                                       $designBySingle[] = $fr; 
                                    }
                                    }
                                    if(!empty($designBySingle)){
                                    $design_by = $designBySingle;
                                    
                                    }
                                    endforeach;
                                     if($item['tmp_id']!=0){
                                    array_push($design_by,$item['tmp_id']);
                                    }
        
		   $pro_id=$item['product_id'];
              $price_data = $this->db->query("Select * from designer_charge where  p_id='$pro_id'");
                    $designer_carge= $price_data->row(); 
                    $temp_count_design= array_filter($design_by);
		if(!empty($temp_count_design)){
		   
		 foreach ($design_by as $des_pay=>$pay_out){
		     $q_pay = $this->db->query("Select * from templates where  id='$pay_out'");
                    $pay_temp= $q_pay->row();
        
			$pay_data = array(
				'order_id' => $order_id,
				'payout' => $designer_carge->price * $item['qty'],
				'template_id' => $pay_temp->id,
				'designer_id' => $pay_temp->designed_by,
				'status' => 0,
				'date' => date('Y-m-d'),
			);
		
			  $this->db->insert('payout', $pay_data);
                }}

                     $temp_count= count($temp_count_design);
                $price=$designer_carge->price * $temp_count;
              $designer_charge=$price * $item['qty'];
			$insert_data = array(
				'order_id' => $order_id,
				'product_base' => $item['product_id'],
				'product_id' => $item['product_cms'],
				'data' => $this->enjson(array(
					'attributes'	=> $item['attributes'],
					'printing'		=> $item['printing'],
					'variation'		=> $item['variation']
				)),
				'screenshots' => json_encode($screenshots),
				'print_files' => json_encode($print_files),
				'created' => $date,
				'updated' => $date,
				'product_price' => floatval($item['price']['total']),
				'total_price' => floatval($item['price']['total']+$designer_charge),
				'product_name' => $item['product_name'],
				'currency' => 'Rs',
				'qty' => $item['qty'],
				'design' => $design_product,
				'design_by' => json_encode($design_by),
				'variations' => json_encode($variations),
				'custom' => (false === $item['template']) ? 1 : 0,
			);
			  $this->db->insert('order_products', $insert_data);
			$id = $this->db->insert_id();
			
			
			//unset some data to use in thankyou page
			//remove cart extra data from file
			if( isset($item[ 'file' ]) ){
				$path = ROOT.'uploads/user_data'. DS . $item[ 'file' ];
				@unlink( $path );
			}
			
			if (!$id)
				$insert_fail++;
			
			unset($item['attributes']);
			$last_checkout[$item['cart_id']] = $item;
			
		}
	
	session_unset('temp_id'); 
		$this->session->unset_userdata('lumise_cart');
			
		$this->session->unset_userdata('lumise_cart', array('items' => array()));
		$this->session->unset_userdata('lumise_last_checkout', array('items' => $last_checkout ) );
		$this->session->unset_userdata('lumise_checkout', true);
		
		if ($insert_fail > 0) {
			return array(
				'error' => 1,
				'msg' => 'Fail to insert item to lumise.order_products ('.$insert_fail.' items failed)'
			);	
		}
		
// 		$lumise->do_action('store-cart', $order_id);
		return true;
		
	}
	public function checkorder($attributes){
	    include_once APPPATH . 'third_party/razorpay/razorpay.php';
        $status = $razorpay->verify_signature($attributes);
        $orderstatus='';
        if($status==true){
            $userdata = $this->session->userdata('orderdetails');
            $array =array('user_id'=>$userdata->user_id, 'txn_id'=> $userdata->txn_id);
            $this->db->where($array);
            $updatedata=array('status'=>'confirmed');
            $updated = $this->db->update('orders',$updatedata);
            if($updated):
                @$this->session->set_userdata('orderdetails', '');
                return $orderstatus='success';
            endif;
        }else{
            return $orderstatus='cancelled';
        }
	}
        
        public function get_cart_item_file( $filename ) {
		
		@ini_set('memory_limit','5000M');
		
		$path = ROOT.'uploads/user_data'. DS . $filename . '.tmp';
		
		if (@file_exists($path)) {
			
			$data = json_decode(file_get_contents($path), 1);
			$data['screenshots'] = json_decode(base64_decode($data['screenshots']), 1);
			
			return $data;
			
		}else return null;
		
	}
	public function check_upload ($time = '') {
		if (empty(ROOT.'uploads/'))
			return $this->lang('The upload folder is not defined, please report to the administrator');
		if (!is_dir(ROOT.'uploads/') && !mkdir(ROOT.'uploads/', 0755))
			return $this->lang('Could not create upload folder, please report to the administrator').': '.ROOT.'uploads/';
		if (!is_writable(ROOT.'uploads/'))
			return $this->lang('The upload folder write permission denied, please report to the administrator').': '.ROOT.'uploads/';

		$args = $this->apply_filters('upload_folders', array('settings', 'cliparts', 'templates', 'products', 'thumbnails', 'user_uploads', 'fonts', 'orders', 'designs', 'shares', 'printings', 'logs', 'user_data', 'addons'));

		if ($time !== '') {

			$time = (float)$time;
			date_default_timezone_set('UTC');
			
			$y = DS.date('Y', $time);
			$ym = $y.DS.date('m', $time);
			
			$arym = $this->apply_filters('upload_folders', array('user_uploads', 'cliparts', 'templates', 'shares', 'designs', 'user_data', 'orders'));
			
			foreach($arym as $p) {
				array_push($args, $p.$y);
				array_push($args, $p.$ym);
			}

		}

		$index = '<html xmlns="http://www.w3.org/1999/xhtml"><head>\
					<meta http-equiv="refresh" content="0;URL=\'https://anshuwap.com/?client=folder-protect\'" />\
				  </head><body></body></html>';

		foreach ($args as $arg) {
			if (!is_dir(ROOT.'uploads/'.$arg) && !mkdir(ROOT.'uploads/'.$arg, 0755)) {
				return $this->lang('Could not create sub folder upload, please report to the administrator').': '.$this->cfg->upload_path.$arg;
			}else if(!file_exists(ROOT.'uploads/'.$arg.DS.'index.html'))
				@file_put_contents(ROOT.'uploads/'.$arg.DS.'index.html', $index);
		}

		return 1;

	}

	public function generate_id($length = 10) {
		
		return substr(str_shuffle("0+91 129-4015046abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, $length);

	}
	public function lang($s) {
		return isset($this->cfg->lang_storage[strtolower($s)]) ?
			   str_replace("'", "&#39;", stripslashes($this->cfg->lang_storage[strtolower($s)])) : $s;
	}
	public function apply_filter($name = '', $params = null, $params2 = null, $params3 = null) {
		return $this->apply_filters($name, $params, $params2, $params3);
	}

	public function apply_filters($name = '', $params = '', $params2 = null, $params3 = null) {
		
		if (!empty($name)) {
			
			foreach ($this->filters as $filters) {
				if (isset($filters[$name])) {
					foreach ($filters[$name] as $action) {
						if (is_callable($action)) {
							$params = call_user_func_array($action, array($params, $params2, $params3));
						}
					}
				}
			}
			
			if (is_callable(array($this->connector, 'apply_filters'))) {
				$params = $this->apply_filters($name, $params, $params2, $params3);
			}
		}
		
		return $params;

	}
		public function enjson($text = '') {

		if (!empty($text))
			$data = base64_encode(rawurlencode(@json_encode($text)));

		return isset($data) ? $data : '';

	}
	
     public function list_pages($id){
            
                $q = $this->db->query("Select * from app_pages where id= '$id'");
                return $q->row();
        }
        
        public function contact_query(){
            $data['name']  =   $this->input->post('name');
            $data['email']     =   $this->input->post('email');
            $data['mobile_no']     =   $this->input->post('phone');
            $data['subject']       =   $this->input->post('subject');
            $data['msg']      =   $this->input->post('message');
            $data['status']        =   1; 
            $this->db->insert('suggestion', $data);
            $from_email = "bhargavabhi4897@gmail.com"; 
            $site_setting=$this->db->where('id',1)->get('invoice-details')->row();
         $to_email = "abhishek@binplus.in";
         $msg = '
         
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:o="urn:schemas-microsoft-com:office:office" style="width:100%;font-family:arial, &#39;helvetica neue&#39;, helvetica, sans-serif;-webkit-text-size-adjust:100%;-ms-text-size-adjust:100%;padding:0;Margin:0">
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      <meta http-equiv="Content-Security-Policy" content="script-src &#39;none&#39;; connect-src &#39;none&#39;; object-src &#39;none&#39;; form-action &#39;none&#39;;">
      <meta content="width=device-width, initial-scale=1" name="viewport">
      <meta name="x-apple-disable-message-reformatting">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta content="telephone=no" name="format-detection">
      <title>Arteno Email invoice</title>
      <link rel="shortcut icon" type="image/png" href="">
      <style type="text/css">
         #outlook a {
         padding:0;
         }
         .ExternalClass {
         width:100%;
         }
         .ExternalClass,
         .ExternalClass p,
         .ExternalClass span,
         .ExternalClass font,
         .ExternalClass td,
         .ExternalClass div {
         line-height:100%;
         }
         .es-button {
         mso-style-priority:100!important;
         text-decoration:none!important;
         }
         a[x-apple-data-detectors] {
         color:inherit!important;
         text-decoration:none!important;
         font-size:inherit!important;
         font-family:inherit!important;
         font-weight:inherit!important;
         line-height:inherit!important;
         }
         .es-desk-hidden {
         display:none;
         float:left;
         overflow:hidden;
         width:0;
         max-height:0;
         line-height:0;
         mso-hide:all;
         }
         @media only screen and (max-width:600px) {p, ul li, ol li, a { font-size:16px!important; line-height:150%!important } h1 { font-size:30px!important; text-align:center; line-height:120%!important } h2 { font-size:26px!important; text-align:center; line-height:120%!important } h3 { font-size:20px!important; text-align:center; line-height:120%!important } h1 a { font-size:30px!important } h2 a { font-size:26px!important } h3 a { font-size:20px!important } .es-header-body p, .es-header-body ul li, .es-header-body ol li, .es-header-body a { font-size:16px!important } .es-footer-body p, .es-footer-body ul li, .es-footer-body ol li, .es-footer-body a { font-size:16px!important } .es-infoblock p, .es-infoblock ul li, .es-infoblock ol li, .es-infoblock a { font-size:12px!important } *[class="gmail-fix"] { display:none!important } .es-m-txt-c, .es-m-txt-c h1, .es-m-txt-c h2, .es-m-txt-c h3 { text-align:center!important } .es-m-txt-r, .es-m-txt-r h1, .es-m-txt-r h2, .es-m-txt-r h3 { text-align:right!important } .es-m-txt-l, .es-m-txt-l h1, .es-m-txt-l h2, .es-m-txt-l h3 { text-align:left!important } .es-m-txt-r img, .es-m-txt-c img, .es-m-txt-l img { display:inline!important } .es-button-border { display:block!important } a.es-button { font-size:20px!important; display:block!important; border-left-width:0px!important; border-right-width:0px!important } .es-btn-fw { border-width:10px 0px!important; text-align:center!important } .es-adaptive table, .es-btn-fw, .es-btn-fw-brdr, .es-left, .es-right { width:100%!important } .es-content table, .es-header table, .es-footer table, .es-content, .es-footer, .es-header { width:100%!important; max-width:600px!important } .es-adapt-td { display:block!important; width:100%!important } .adapt-img { width:100%!important; height:auto!important } .es-m-p0 { padding:0px!important } .es-m-p0r { padding-right:0px!important } .es-m-p0l { padding-left:0px!important } .es-m-p0t { padding-top:0px!important } .es-m-p0b { padding-bottom:0!important } .es-m-p20b { padding-bottom:20px!important } .es-mobile-hidden, .es-hidden { display:none!important } tr.es-desk-hidden, td.es-desk-hidden, table.es-desk-hidden { width:auto!important; overflow:visible!important; float:none!important; max-height:inherit!important; line-height:inherit!important } tr.es-desk-hidden { display:table-row!important } table.es-desk-hidden { display:table!important } td.es-desk-menu-hidden { display:table-cell!important } .es-menu td { width:1%!important } table.es-table-not-adapt, .esd-block-html table { width:auto!important } table.es-social { display:inline-block!important } table.es-social td { display:inline-block!important } .es-menu td a { font-size:16px!important } }
      </style>
   </head>
   <body style="width:100%;font-family:arial, &#39;helvetica neue&#39;, helvetica, sans-serif;-webkit-text-size-adjust:100%;-ms-text-size-adjust:100%;padding:0;Margin:0">
      <div class="es-wrapper-color" style="background-color:#EFEFEF">
         <table class="es-wrapper" width="100%" cellspacing="0" cellpadding="0" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;padding:0;Margin:0;width:100%;height:100%;background-repeat:repeat;background-position:center top">
            <tbody>
               <tr style="border-collapse:collapse">
                  <td valign="top" style="padding:0;Margin:0">
                     <table cellpadding="0" cellspacing="0" class="es-content" align="center" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;table-layout:fixed !important;width:100%">
                        <tbody>
                           <tr style="border-collapse:collapse">
                              <td class="es-adaptive" align="center" style="padding:0;Margin:0">
                                 <table class="es-content-body" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;background-color:#EFEFEF;width:600px" cellspacing="0" cellpadding="0" bgcolor="#ffffff" align="center">
                                    <tbody>
                                       <tr style="border-collapse:collapse">
                                          <td align="left" style="Margin:0;padding-top:15px;padding-bottom:15px;padding-left:20px;padding-right:20px"> 
                                          </td>
                                       </tr>
                                    </tbody>
                                 </table>
                              </td>
                           </tr>
                        </tbody>
                     </table>
                     <table cellpadding="0" cellspacing="0" class="es-header" align="center" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;table-layout:fixed !important;width:100%;background-color:transparent;background-repeat:repeat;background-position:center top">
                        <tbody>
                           <tr style="border-collapse:collapse">
                              <td align="center" style="padding:0;Margin:0">
                                 <table class="es-header-body" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;background-color:#FEF5E4;width:600px" cellspacing="0" cellpadding="0" bgcolor="#fef5e4" align="center">
                                    <tbody>
                                       <tr style="border-collapse:collapse">
                                          <td align="left" style="Margin:0;padding-top:5px;padding-bottom:5px;padding-left:15px;padding-right:15px">
                                             <!--[if mso]>
                                             <table style="width:570px" cellpadding="0" cellspacing="0">
                                                <tr>
                                                   <td style="width:180px" valign="top">
                                                      <![endif]--> 
                                                      <table class="es-left" cellspacing="0" cellpadding="0" align="left" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;float:left">
                                                         <tbody>
                                                            <tr style="border-collapse:collapse">
                                                               <td class="es-m-p0r" valign="top" align="center" style="padding:0;Margin:0;width:180px">
                                                                  <table width="100%" cellspacing="0" cellpadding="0" role="presentation" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px">
                                                                     <tbody>
                                                                        <tr style="border-collapse:collapse">
                                                                           <td class="es-m-p0l es-m-txt-c" align="left" style="padding:0;Margin:0;padding-left:15px;font-size:0"><a href="" target="_blank" style="-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:arial, &#39;helvetica neue&#39;, helvetica, sans-serif;font-size:14px;text-decoration:underline;color:#999999"><img src="'.$site_setting->invoicelogo.'" alt="Arteno Logo" title="Petshop logo" width="118" style="display:block;border:0;outline:none;text-decoration:none;-ms-interpolation-mode:bicubic"></a></td>
                                                                        </tr>
                                                                     </tbody>
                                                                  </table>
                                                               </td>
                                                            </tr>
                                                         </tbody>
                                                      </table>
                                                      <!--[if mso]>
                                                   </td>
                                                   <td style="width:20px"></td>
                                                   <td style="width:370px" valign="top">
                                                      <![endif]--> 
                                                      <table cellspacing="0" cellpadding="0" align="right" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px">
                                                         <tbody>
                                                            <tr style="border-collapse:collapse">
                                                               <td align="left" style="padding:0;Margin:0;width:370px">
                                                                  <table width="100%" cellspacing="0" cellpadding="0" role="presentation" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px">
                                                                     <tbody>
                                                                        <tr style="border-collapse:collapse">
                                                                           <td style="padding:0;Margin:0">
                                                                              <table class="es-menu" width="100%" cellspacing="0" cellpadding="0" role="presentation" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px">
                                                                                 <tbody>
                                                                                    <tr class="links" style="border-collapse:collapse">
                                                                                       <td style="Margin:0;padding-left:5px;padding-right:5px;padding-top:20px;padding-bottom:10px;border:0" width="25.00%" bgcolor="transparent" align="center"><a style="-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:arial, &#39;helvetica neue&#39;, helvetica, sans-serif;font-size:16px;text-decoration:none;display:block;color:#333333" href="https://admin.anshuwap.com/arteno/">T-Shirt</a></td>
                                                                                       <td style="Margin:0;padding-left:5px;padding-right:5px;padding-top:20px;padding-bottom:10px;border:0" width="25.00%" bgcolor="transparent" align="center"><a style="-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:arial, &#39;helvetica neue&#39;, helvetica, sans-serif;font-size:16px;text-decoration:none;display:block;color:#333333" href="https://admin.anshuwap.com/arteno/">Mug</a></td>
                                                                                       <td style="Margin:0;padding-left:5px;padding-right:5px;padding-top:20px;padding-bottom:10px;border:0" width="25.00%" bgcolor="transparent" align="center"><a style="-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:arial, &#39;helvetica neue&#39;, helvetica, sans-serif;font-size:16px;text-decoration:none;display:block;color:#333333" href="https://admin.anshuwap.com/arteno/">Face Mask</a></td>
                                                                                       <td style="Margin:0;padding-left:5px;padding-right:5px;padding-top:20px;padding-bottom:10px;border:0" width="25.00%" bgcolor="transparent" align="center"><a style="-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:arial, &#39;helvetica neue&#39;, helvetica, sans-serif;font-size:16px;text-decoration:none;display:block;color:#333333" href="https://admin.anshuwap.com/arteno/">Other</a></td>
                                                                                    </tr>
                                                                                 </tbody>
                                                                              </table>
                                                                           </td>
                                                                        </tr>
                                                                     </tbody>
                                                                  </table>
                                                               </td>
                                                            </tr>
                                                         </tbody>
                                                      </table>
                                                      <!--[if mso]>
                                                   </td>
                                                </tr>
                                             </table>
                                             <![endif]-->
                                          </td>
                                       </tr>
                                    </tbody>
                                 </table>
                              </td>
                           </tr>
                        </tbody>
                     </table>
                     
                     
                     <table class="es-content" cellspacing="0" cellpadding="0" align="center" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;table-layout:fixed !important;width:100%">
                        <tbody>
                           <tr style="border-collapse:collapse">
                              <td align="center" style="padding:0;Margin:0">
                                 <table class="es-content-body" cellspacing="0" cellpadding="0" bgcolor="#ffffff" align="center" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;background-color:#FFFFFF;width:600px">
                                    <tbody>
                                       <tr style="border-collapse:collapse">
                                          <td align="left" style="Margin:0;padding-top:10px;padding-bottom:10px;padding-left:20px;padding-right:20px">
                                             <!--[if mso]>
                                             <table style="width:560px" cellpadding="0" cellspacing="0">
                                                <tr>
                                                   <td style="width:270px" valign="top">
                                                      <![endif]--> 
                                                      <table class="es-left" cellspacing="0" cellpadding="0" align="left" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;float:left">
                                                         <tbody>
                                                            <tr style="border-collapse:collapse">
                                                               <td class="es-m-p0r es-m-p20b" valign="top" align="center" style="padding:0;Margin:0;width:270px">
                                                                  <table width="100%" cellspacing="0" cellpadding="0" role="presentation" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px">
                                                                     <tbody>
                                                                        <tr style="border-collapse:collapse">
                                                                           <td align="left" style="padding:0;Margin:0;padding-left:20px">
                                                                              <h4 style="Margin:0;line-height:120%;mso-line-height-rule:exactly;font-family:&#39;trebuchet ms&#39;, helvetica, sans-serif">Enquiry Details</h4>
                                                                           </td>
                                                                        </tr>
                                                                     </tbody>
                                                                  </table>
                                                               </td>
                                                            </tr>
                                                         </tbody>
                                                      </table>
                                                      <!--[if mso]>
                                                   </td>
                                                   <td style="width:20px"></td>
                                                   <td style="width:270px" valign="top">
                                                      <![endif]--> 
                                                      
                                                      <!--[if mso]>
                                                   </td>
                                                </tr>
                                             </table>
                                             <![endif]-->
                                          </td>
                                       </tr>
                                       <tr style="border-collapse:collapse">
                                          <td align="left" style="padding:0;Margin:0;padding-left:20px;padding-right:20px">
                                             <table width="100%" cellspacing="0" cellpadding="0" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px">
                                                <tbody>
                                                   <tr style="border-collapse:collapse">
                                                      <td valign="top" align="center" style="padding:0;Margin:0;width:560px">
                                                         <table width="100%" cellspacing="0" cellpadding="0" role="presentation" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px">
                                                            <tbody>
                                                               <tr style="border-collapse:collapse">
                                                                  <td align="center" style="padding:0;Margin:0;padding-bottom:10px;font-size:0">
                                                                     <table width="100%" height="100%" cellspacing="0" cellpadding="0" border="0" role="presentation" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px">
                                                                        <tbody>
                                                                           <tr style="border-collapse:collapse">
                                                                              <td style="padding:0;Margin:0;border-bottom:1px solid #EFEFEF;background:#FFFFFFnone repeat scroll 0% 0%;height:1px;width:100%;margin:0px"></td>
                                                                           </tr>
                                                                        </tbody>
                                                                     </table>
                                                                  </td>
                                                               </tr>
                                                            </tbody>
                                                         </table>
                                                      </td>
                                                   </tr>
                                                </tbody>
                                             </table>
                                          </td>
                                       </tr>
                                       <tr style="border-collapse:collapse">
                              <td align="left" style="Margin:0;padding-top:5px;padding-bottom:10px;padding-left:20px;padding-right:20px">
                                 
                                          <![endif]--> 
                                          <table cellspacing="0" cellpadding="0" align="right" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px">
                                             <tbody>
                                                <tr style="border-collapse:collapse">
                                                   <td align="left" style="padding:0;Margin:0;width:362px">
                                                      <table width="100%" cellspacing="0" cellpadding="0" role="presentation" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px">
                                                         <tbody>
                                                            <tr style="border-collapse:collapse">
                                                               <td align="left" style="padding:0;Margin:0">
                                                                  <p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-size:14px;font-family:arial, &#39;helvetica neue&#39;, helvetica, sans-serif;line-height:21px;color:#333333"><br></p>
                                                                  <table style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;width:100%" class="cke_show_border" cellspacing="1" cellpadding="1" border="0" role="presentation">
                                                                     <tbody>
                                                                        <tr style="border-collapse:collapse">
                                                                           <td style="padding:0;Margin:0">Email</td>
                                                                           <td style="padding:0;Margin:0;width:60px;text-align:center">'.$this->input->post('email').'</td>
                                                                           
                                                                        </tr>
                                                                     </tbody>
                                                                  </table>
                                                                  <p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-size:14px;font-family:arial, &#39;helvetica neue&#39;, helvetica, sans-serif;line-height:21px;color:#333333"><br></p>
                                                               </td>
                                                            </tr>
                                                         </tbody>
                                                      </table>
                                                   </td>
                                                </tr>
                                             </tbody>
                                          </table>
                                         
                              </td>
                           </tr>
                                       <tr style="border-collapse:collapse">
                              <td align="left" style="Margin:0;padding-top:5px;padding-bottom:10px;padding-left:20px;padding-right:20px">
                                 
                                          <![endif]--> 
                                          <table cellspacing="0" cellpadding="0" align="right" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px">
                                             <tbody>
                                                <tr style="border-collapse:collapse">
                                                   <td align="left" style="padding:0;Margin:0;width:362px">
                                                      <table width="100%" cellspacing="0" cellpadding="0" role="presentation" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px">
                                                         <tbody>
                                                            <tr style="border-collapse:collapse">
                                                               <td align="left" style="padding:0;Margin:0">
                                                                  <p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-size:14px;font-family:arial, &#39;helvetica neue&#39;, helvetica, sans-serif;line-height:21px;color:#333333"><br></p>
                                                                  <table style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;width:100%" class="cke_show_border" cellspacing="1" cellpadding="1" border="0" role="presentation">
                                                                     <tbody>
                                                                        <tr style="border-collapse:collapse">
                                                                           <td style="padding:0;Margin:0">Name</td>
                                                                           <td style="padding:0;Margin:0;width:60px;text-align:center">'.$this->input->post('name').'</td>
                                                                           
                                                                        </tr>
                                                                     </tbody>
                                                                  </table>
                                                                  <p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-size:14px;font-family:arial, &#39;helvetica neue&#39;, helvetica, sans-serif;line-height:21px;color:#333333"><br></p>
                                                               </td>
                                                            </tr>
                                                         </tbody>
                                                      </table>
                                                   </td>
                                                </tr>
                                             </tbody>
                                          </table>
                                         
                              </td>
                           </tr>
                                       <tr style="border-collapse:collapse">
                              <td align="left" style="Margin:0;padding-top:5px;padding-bottom:10px;padding-left:20px;padding-right:20px">
                                 
                                          <![endif]--> 
                                          <table cellspacing="0" cellpadding="0" align="right" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px">
                                             <tbody>
                                                <tr style="border-collapse:collapse">
                                                   <td align="left" style="padding:0;Margin:0;width:362px">
                                                      <table width="100%" cellspacing="0" cellpadding="0" role="presentation" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px">
                                                         <tbody>
                                                            <tr style="border-collapse:collapse">
                                                               <td align="left" style="padding:0;Margin:0">
                                                                  <p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-size:14px;font-family:arial, &#39;helvetica neue&#39;, helvetica, sans-serif;line-height:21px;color:#333333"><br></p>
                                                                  <table style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;width:100%" class="cke_show_border" cellspacing="1" cellpadding="1" border="0" role="presentation">
                                                                     <tbody>
                                                                        <tr style="border-collapse:collapse">
                                                                           <td style="padding:0;Margin:0">Phone</td>
                                                                           <td style="padding:0;Margin:0;width:60px;text-align:center">'.$this->input->post('phone').'</td>
                                                                           
                                                                        </tr>
                                                                     </tbody>
                                                                  </table>
                                                                  <p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-size:14px;font-family:arial, &#39;helvetica neue&#39;, helvetica, sans-serif;line-height:21px;color:#333333"><br></p>
                                                               </td>
                                                            </tr>
                                                         </tbody>
                                                      </table>
                                                   </td>
                                                </tr>
                                             </tbody>
                                          </table>
                                         
                              </td>
                           </tr>
                                       <tr style="border-collapse:collapse">
                              <td align="left" style="Margin:0;padding-top:5px;padding-bottom:10px;padding-left:20px;padding-right:20px">
                                 
                                          <![endif]--> 
                                          <table cellspacing="0" cellpadding="0" align="right" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px">
                                             <tbody>
                                                <tr style="border-collapse:collapse">
                                                   <td align="left" style="padding:0;Margin:0;width:362px">
                                                      <table width="100%" cellspacing="0" cellpadding="0" role="presentation" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px">
                                                         <tbody>
                                                            <tr style="border-collapse:collapse">
                                                               <td align="left" style="padding:0;Margin:0">
                                                                  <p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-size:14px;font-family:arial, &#39;helvetica neue&#39;, helvetica, sans-serif;line-height:21px;color:#333333"><br></p>
                                                                  <table style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;width:100%" class="cke_show_border" cellspacing="1" cellpadding="1" border="0" role="presentation">
                                                                     <tbody>
                                                                        <tr style="border-collapse:collapse">
                                                                           <td style="padding:0;Margin:0">Subject</td>
                                                                           <td style="padding:0;Margin:0;width:60px;text-align:center">'.$this->input->post('subject').'</td>
                                                                           
                                                                        </tr>
                                                                     </tbody>
                                                                  </table>
                                                                  <p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-size:14px;font-family:arial, &#39;helvetica neue&#39;, helvetica, sans-serif;line-height:21px;color:#333333"><br></p>
                                                               </td>
                                                            </tr>
                                                         </tbody>
                                                      </table>
                                                   </td>
                                                </tr>
                                             </tbody>
                                          </table>
                                         
                              </td>
                           </tr>
                                       <tr style="border-collapse:collapse">
                              <td align="left" style="Margin:0;padding-top:5px;padding-bottom:10px;padding-left:20px;padding-right:20px">
                                 
                                          <![endif]--> 
                                          <table cellspacing="0" cellpadding="0" align="right" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px">
                                             <tbody>
                                                <tr style="border-collapse:collapse">
                                                   <td align="left" style="padding:0;Margin:0;width:362px">
                                                      <table width="100%" cellspacing="0" cellpadding="0" role="presentation" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px">
                                                         <tbody>
                                                            <tr style="border-collapse:collapse">
                                                               <td align="left" style="padding:0;Margin:0">
                                                                  <p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-size:14px;font-family:arial, &#39;helvetica neue&#39;, helvetica, sans-serif;line-height:21px;color:#333333"><br></p>
                                                                  <table style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;width:100%" class="cke_show_border" cellspacing="1" cellpadding="1" border="0" role="presentation">
                                                                     <tbody>
                                                                        <tr style="border-collapse:collapse">
                                                                           <td style="padding:0;Margin:0">Message</td>
                                                                           <td style="padding:0;Margin:0;width:60px;text-align:center">'.$this->input->post('message').'</td>
                                                                           
                                                                        </tr>
                                                                     </tbody>
                                                                  </table>
                                                                  <p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-size:14px;font-family:arial, &#39;helvetica neue&#39;, helvetica, sans-serif;line-height:21px;color:#333333"><br></p>
                                                               </td>
                                                            </tr>
                                                         </tbody>
                                                      </table>
                                                   </td>
                                                </tr>
                                             </tbody>
                                          </table>
                                         
                              </td>
                           </tr>
                         
                                    </tbody>
                     </table>
                  </td>
               </tr>
                        </tbody>
                      </table>
                    <table cellpadding="0" cellspacing="0" class="es-footer" align="center" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;table-layout:fixed !important;width:100%;background-color:transparent;background-repeat:repeat;background-position:center top">
            <tbody>
               <tr style="border-collapse:collapse">
                  <td align="center" style="padding:0;Margin:0">
                     <table class="es-footer-body" cellspacing="0" cellpadding="0" align="center" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;background-color:#FEF5E4;width:600px">
                        <tbody>
                           <tr style="border-collapse:collapse">
                              <td align="left" style="padding:20px;Margin:0">
                                 <!--[if mso]>
                                 <table style="width:560px" cellpadding="0" cellspacing="0">
                                    <tr>
                                       <td style="width:178px" valign="top">
                                          <![endif]--> 
                                          <table class="es-left" cellspacing="0" cellpadding="0" align="left" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;float:left">
                                             <tbody>
                                                <tr style="border-collapse:collapse">
                                                   <td class="es-m-p0r es-m-p20b" valign="top" align="center" style="padding:0;Margin:0;width:178px">
                                                      <table width="100%" cellspacing="0" cellpadding="0" role="presentation" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px">
                                                         <tbody>
                                                            <tr style="border-collapse:collapse">
                                                               <td class="es-m-p0l es-m-txt-c" align="left" style="padding:0;Margin:0;font-size:0"><img src="'.$site_setting->invoicelogo.'" alt="Petshop logo" title="Arteno Logo" width="108" style="display:block;border:0;outline:none;text-decoration:none;-ms-interpolation-mode:bicubic"></td>
                                                            </tr>
                                                            <tr style="border-collapse:collapse">
                                                               <td class="es-m-txt-c" align="left" style="padding:0;Margin:0;padding-bottom:5px;padding-top:10px">
                                                                  <p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-size:14px;font-family:arial, &#39;helvetica neue&#39;, helvetica, sans-serif;line-height:21px;color:#333333">'.$site_setting->caddress.'</p>
                                                                  
                                                               </td>
                                                            </tr>
                                                            <tr style="border-collapse:collapse">
                                                               <td class="es-m-txt-c" align="left" style="padding:0;Margin:0;padding-top:5px">
                                                                  <p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-size:14px;font-family:arial, &#39;helvetica neue&#39;, helvetica, sans-serif;line-height:21px;color:#333333"><a target="_blank" href="tel:'.$site_setting->cmobile.'" style="-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:arial, &#39;helvetica neue&#39;, helvetica, sans-serif;font-size:14px;text-decoration:underline;color:#333333">'.$site_setting->cmobile.'</a><br><a target="_blank" href="mailto:'.$site_setting->cemail.'" style="-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:arial, &#39;helvetica neue&#39;, helvetica, sans-serif;font-size:14px;text-decoration:underline;color:#333333">'.$site_setting->cemail.'</a></p>
                                                               </td>
                                                            </tr>
                                                         </tbody>
                                                      </table>
                                                   </td>
                                                </tr>
                                             </tbody>
                                          </table>
                                          <!--[if mso]>
                                       </td>
                                       <td style="width:20px"></td>
                                       <td style="width:362px" valign="top">
                                          <![endif]--> 
                                          <table cellspacing="0" cellpadding="0" align="right" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px">
                                             <tbody>
                                                <tr style="border-collapse:collapse">
                                                   <td align="left" style="padding:0;Margin:0;width:362px">
                                                      <table width="100%" cellspacing="0" cellpadding="0" role="presentation" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px">
                                                         <tbody>
                                                            <tr style="border-collapse:collapse">
                                                               <td class="es-m-txt-c" align="left" style="padding:0;Margin:0;padding-top:15px;padding-bottom:20px">
                                                                  <p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-size:14px;font-family:arial, &#39;helvetica neue&#39;, helvetica, sans-serif;line-height:21px;color:#333333"><span style="font-size:20px;line-height:30px">Information</span></p>
                                                               </td>
                                                            </tr>
                                                            <tr style="border-collapse:collapse">
                                                               <td class="es-m-txt-c" align="left" style="padding:0;Margin:0">
                                                                  <p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-size:14px;font-family:arial, &#39;helvetica neue&#39;, helvetica, sans-serif;line-height:21px;color:#333333"> designed by <a target="_blank" href="http://www.binplus.in/" style="-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:arial, &#39;helvetica neue&#39;, helvetica, sans-serif;font-size:14px;text-decoration:underline;color:#333333">Binplus Technologies Pvt.Ltd</a>.<br></p>
                                                                  <p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-size:14px;font-family:arial, &#39;helvetica neue&#39;, helvetica, sans-serif;line-height:21px;color:#333333">You are receiving this email because you have visited our site or order our Product<br></p>
                                                               </td>
                                                            </tr>
                                                            
                                                         </tbody>
                                                      </table>
                                                   </td>
                                                </tr>
                                             </tbody>
                                          </table>
                                          <!--[if mso]>
                                       </td>
                                    </tr>
                                 </table>
                                 <![endif]-->
                              </td>
                           </tr>
                        </tbody>
                     </table>
                  </td>
               </tr>
            </tbody>
         </table>
         </td> 
         </tr> 
         </tbody>
         </table> 
      </div>
   </body>
</html>';

   
         //Load email library 
         $this->load->library('email'); 
   
         $this->email->from($from_email); 
         $this->email->to($to_email);
         $this->email->subject('Enquiry Details'); 
         $this->email->message($msg);
         $this->email->set_mailtype('html');
   
         //Send mail 
         if($this->email->send())
      
           return $insert_id = $this->db->insert_id();
        }
        public function get_designer_charge(){
            $price_data = $this->db->query("Select * from designer_charge");
                  return  $designer_carge= $price_data->result(); 
        }
        
        public function user_cart($user_id, $type='checkout'){
            $cart_data = $this->session->userdata('lumise_cart');
            $query = $this->db->get_where('user_cart', array('user_id' => $user_id));
            $count = $query->num_rows();
            if ($count == 0) {
                $data['user_id'] = $user_id;
                $data['cart_data'] = ($cart_data)?json_encode($cart_data,true):"";
                $this->db->insert('user_cart', $data);
                return  $ref= "add";
            } else {
                if($type!="checkout") {
                    $fetch_cart_data = $query->row();
                    $store_cart = (isset($fetch_cart_data->cart_data))?json_decode($fetch_cart_data->cart_data,true):array("items" => "");
                    $cart_data = ($cart_data)?:array("items" => "");
                    // echo "<pre>";print_r($store_cart);print_r($cart_data);exit;
                    if(isset($store_cart['items']) && !empty($store_cart['items']) && (!isset($cart_data['items']) || empty($cart_data['items']))):
                        $fresh_cart_data_items = $store_cart['items'];
                    elseif(isset($cart_data['items']) && !empty($cart_data['items']) && (!isset($store_cart['items']) || empty($store_cart['items']))):
                        $fresh_cart_data_items = $cart_data['items'];
                    else:
                        $fresh_cart_data_items = array_merge($store_cart['items'], $cart_data['items']);
                    endif;
                    $fresh_cart_data = array();
                    if(isset($fresh_cart_data_items) && !empty($fresh_cart_data_items)):
                        $fresh_cart_data = array(
                            "items" => $fresh_cart_data_items,
                            "currency" => "Rs",
                            "total" => 0
                        );
                    endif;
                    $payout = $this->db->set("cart_data", (($fresh_cart_data)?json_encode($fresh_cart_data):""))->where(["user_id" => $user_id])->update('user_cart');
                    $this->session->set_userdata('lumise_cart', $fresh_cart_data);
                } else {
                    $payout= $this->db->set("cart_data",($cart_data)?json_encode($cart_data, true):"")->where(["user_id"=>$user_id])->update('user_cart');
                }
                return $ref= "update";
            }
        }
    
    ///store desiger data//
    function storeproducts($id,$offset){
         $sel = "templates.id,templates.color,templates.side,templates.template_ids,templates.screenshot,templates.slug AS tempSlug,templates.no_of_stages,templates.image,templates.name,products.backSideCharge AS backCharge,templates.designed_by As designer_id,
	     templates.screenshot,products.mrp,products.name as pname,
	     products.id As pid , products.extras, products.price,products.slug As baseslug,users.slug as Uslug,
	     users.user_fullname,users.id AS user_id,designer_charge.price As designerCharge, users.user_image";
	     $sel .= ", IF(templates.side='both', (SELECT tmp1.image as front_screenshot FROM templates tmp1 WHERE tmp1.id=SUBSTRING_INDEX(SUBSTRING_INDEX(templates.template_ids,'front\":',-1),',',1)), '') as front_screenshot, IF(templates.side='both', (SELECT tmp2.image as front_screenshot FROM templates tmp2 WHERE tmp2.id=SUBSTRING_INDEX(SUBSTRING_INDEX(templates.template_ids,'back\":',-1),',',1)), '') as back_screenshot";
	     if(isset($_SESSION['user_id']))
	        $sel .= ",wishlist.id As w_id, wishlist.type As wtype,wishlist.temp_id As wishproduct";
         $this->db->select($sel)
            ->from("templates")
            ->order_by("templates.id","desc")
             ->limit(6,$offset)
            ->join("products", "templates.product_base = products.id")
            ->join("users", "templates.designed_by = users.id");
            if(isset($_SESSION['user_id']))
                $this->db->join("wishlist"," (templates.id = wishlist.temp_id AND wishlist.user_id=".$_SESSION['user_id'].") ",'LEFT');
            $this->db->join("designer_charge","templates.product_base = designer_charge.p_id",'LEFT');
            $this->db->where(["templates.active" => 1,"templates.designed_by"=>$id,"templates.temp_type"=>'main']);
        $data = $this->db->get()->result();
        return $data;
    }
    
    function checkuser($email) {
        $user = $this->db->where('user_email',$email)->get('users')->row();
        if($user) {
            return $user->id;  
        } else {
            return " ";
        }
    }
    
    function contact($data) {
        return $this->db->insert("contact",$data);
    }

    public function setUserAsLoggedIn($userdata="") {
        if($userdata=="")
            return false;
        $user_id=$userdata->id;
        $this->session->unset_userdata('user_id');
        $this->session->unset_userdata('user_mobile');
        $this->session->unset_userdata('user_login');
        
        $this->session->unset_userdata('designer_id');
        $this->session->unset_userdata('designer_mobile');
        $this->session->unset_userdata('designer_login');
        $user_session = array(
			'user_id' => $userdata->id,
 			'user_mobile' => $userdata->user_phone,
 			'user_login' => true
	 	);
	 	if($userdata->role=="designer"):
		 	$user_session["designer_id"] = $userdata->id;
		 	$user_session["designer_mobile"] = $userdata->user_phone;
		 	$user_session["designer_login"] = true;
		endif;
	 	$this->session->set_userdata($user_session);
	 	$cart_data = $this->session->userdata("user_cart");
// 	 	print_r($cart_data);exit;
        foreach($cart_data as $cart_items) {
            $cart_item = array(
                'user_id' => $userdata->id,
                'color' => $cart_items['color'],
                'file' => $cart_items['file'],
                'type'=>$cart_items['type'],
                'price'=>$cart_items['price'],
                'size'=>$cart_items['size'],
                'qty'=>$cart_items['qty'],
                'temp_id'=>$cart_items['temp_id'],
                'cart_data'=>$cart_items['cart_data']
            );
            $this->Front_model->insert_data($cart_item,"user_cart");
        }
	    $this->session->unset_userdata('user_cart');
	    return true;
    }
}
?>