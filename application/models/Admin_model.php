<?php
    class Admin_model extends CI_Model
    {   
        private $shiprocket;
        public function __construct() {
            parent::__construct();
            $this->load->database();
            include_once APPPATH . 'third_party/shiprocket/shiprocket.php';
		    $this->shiprocket = new ShiprocketSDK();
        }

        public function adminLogin($email, $encrypt_password){
			//Validate
			$this->db->where('email', $email);
			$this->db->where('password', $encrypt_password);

			$result = $this->db->get('admin');
			if ($result->num_rows() == 1) {
				return $result->row(0);
			}else{
				return false;
			}
		}
		
		public function add_productbase(){
		    $array=array(
		        'name'=>$this->input->post('name'),
		        'mrp'=>$this->input->post('mrp'),
		        'price'=>$this->input->post('price'),
		        'description'=>$this->input->post('description')
		        );
		        if(isset($_FILES['image']) && $_FILES['image']['name']!=''){
                move_uploaded_file($_FILES['clogo']['tmp_name'], 'uploads/setting/clogo'.time().$id.'.png');
                $array['thumbnail_url']     =       base_url().'uploads/products'.time().$id.'.png';
            }
		        $this->db->insert('products',$array);
		}
		
		public function login_admin(){
			//Validate
		$result = $this->db->where('id', 1)->get('admin');
			if ($result->num_rows() == 1) {
				return $result->row(0);
			}else{
				return false;
			}
		}
		
		public function admin_mobile(){
			//Validate
			$this->db->where('admin_id', 1);
			$result = $this->db->get('admin_mobile');
				return $result->result();
		
		}
		public function admin_mobilebyid($id){
			//Validate
			$this->db->where('id', $id);
			$result = $this->db->get('admin_mobile');
				return $result->row();
		
		}
		public function settings(){
			$result = $this->db->get('settings');
				return $result->result();
		
		}
		public function profit($p_id=""){
		    if($p_id){
		      $result = $this->db->where('p_id',$p_id)->get('designer_charge');
				return $result->row()->price;  
		    }
		    else{
		        $result = $this->db->get('designer_charge');
				return $result->result();
		    }
			
		
		}
		public function	mobile_verify($mobile)
		{
		    $this->db->where('mobile_no', $mobile);
			return	$result = $this->db->get('admin_mobile');
			 $result->row();
		}
		
    	public function change_password($new_password){
    		$data = array(
    			'password' => md5($new_password)
    		    );
    		$this->db->where('id', $this->session->userdata('admin_id'));
    		return $this->db->update('admin', $data);
    	}
    	public function invoicedata(){
    		return $this->db->get('invoice-details')->result();
    	}
        public function update_invoice(){
            $gpst=array();
            $products=$this->input->post('product');
            
            $gst=$this->input->post('gst');
            $gpst[0]=$products;
            $gpst[1]=$gst;
            
            $lgstp=json_encode($gpst);
            
            $array=array(
                'cod'=>$this->input->post('cod'),
                'shipping'=>$this->input->post('shipping'),
                'gstp'=>$lgstp,
                'gst_no'=>$this->input->post('gst_no'),
                'pan_no'=>$this->input->post('pan_no'),
                'cname'=>$this->input->post('cname'),
                'caddress'=>$this->input->post('caddress'),
                'cemail'=>$this->input->post('cemail'),
                'cmobile'=>$this->input->post('cmobile'),
                );
            if(isset($_FILES['clogo']) && $_FILES['clogo']['name']!=''){
                move_uploaded_file($_FILES['clogo']['tmp_name'], 'uploads/setting/clogo'.time().$id.'.jpg');
                $array['invoicelogo']     =       base_url().'uploads/setting/clogo'.time().$id.'.jpg';
            }
            $this->db->update('invoice-details',$array);
            $status="success";
            return $status;
        }
        public function update_dimension(){
            $gpst=array();
            $products=$this->input->post('product');
            
            $weight=$this->input->post('weight');
             $length=$this->input->post('length');
              $breadth=$this->input->post('breadth');
               $height=$this->input->post('height');
            $gpst[0]=$products;
            $gpst[1]=$weight;
            $gpst[2]=$length;
            $gpst[3]=$breadth;
            $gpst[4]=$height;
            
            $lgstp=json_encode($gpst);
            
            $array=array(
                'dimention'=>$lgstp,
                );
            $this->db->update('invoice-details',$array);
            $status="success";
            return $status;
        }
        public function admin_profile($id){
           
                $q = $this->db->query("Select * from admin where id= '$id'");
                return $q->row();
                   
        }
        
        public function update_profile($id){
            
            $data['name']              =   $this->input->post('name');
            $data['mobile']        =   $this->input->post('mobile');
            $data['address']        =   $this->input->post('address');
            $data['designation']        =   $this->input->post('designation');
           
            $this->db->where('id', $id);
            $this->db->update('admin', $data);
        }
        public function favourite($id,$status){
            if($status=='add'){
                $array=array('favourite'=>1);
                $this->db->where('id',$id);
                $this->db->update('templates', $array);
                $data='added';
                return $data;
            }
            if($status=='remove'){
                $array=array('favourite'=>0);
                $this->db->where('id',$id);
                $this->db->update('templates', $array);
                $data='remove';
                return $data;
            }
        }
        
        
        public function update_profile_image($id){
           
          if(isset($_FILES['image']) && $_FILES['image']['name']!=''){
                move_uploaded_file($_FILES['image']['tmp_name'], 'uploads/setting/profile-'.time().$id.'.jpg');
                $data['image']     =       base_url().'uploads/setting/profile-'.time().$id.'.jpg';
            }
            $this->db->where('id', $id);
            $this->db->update('admin', $data);
            
            
        }
        
         public function shapes(){
           return $this->db->where(active!=2)->get('shapes')->result();
        }
        
         public function add_shapes(){
            $name= $this->input->post('name');
            $query = $this->db->get_where('shapes', array('name' => $name));
            $count = $query->num_rows();
            if ($count === 0) {
            $data['name']              =   $this->input->post('name');
            $data['content']        =   $this->input->post('content');
            $data['order']        =   $this->input->post('order');
            // $data['image']         =   base_url().'uploads/no_image.jpg';
            $data['active']        =   1;          
            
            $this->db->insert('shapes', $data);
            $insert_id = $this->db->insert_id();
            
            }
        
            
            }
            
              public function list_shapes($id=FALSE){
            if($id){
                $q = $this->db->query("Select * from shapes where id= '$id'");
                return $q->row();
            }else{
                $q = $this->db->query("Select * from shapes  where active!= 2 ORDER BY id ASC");
                return $q->result();
            }
                   
        }
        
             public function update_shapes($id){
            
            $data['name']              =   $this->input->post('name');
            $data['content']        =   $this->input->post('content');
            $data['order']        =   $this->input->post('order');
    
            $this->db->where('id', $id);
            $this->db->update('shapes', $data);
            
            
        }
        
        public function templates($id='') {
            $data=$this->db->query('select id from templates where active!=2')->result();
            return $data;
        }
        public function alltemplates($prod_id="", $cat_id=""){
            $this->db->where(["templates.active!=" => 2, "templates.temp_type" => "main"]);
            if($prod_id != "")
                $this->db->where("templates.product_base", $prod_id);
            if($cat_id != "") {
                $this->db->join("categories_reference", "categories_reference.item_id=templates.id");
                $this->db->where("categories_reference.category_id", $cat_id);
            }
            $this->db->order_by("templates.id", "desc");
            $data = $this->db->get("templates")->result();
            // $data=$this->db->query('select * from templates where active!=2 AND temp_type ="main" order by id desc')->result();
            return $data;
        }

        public function templatebyid($id='') {
            $data=$this->db->query("select * from templates where  id='$id'")->row();
            return $data;
        }
        public function templates_categories(){
          $q = $this->db->query("Select * from categories  where active!= 2 AND type='templates'");
                return $q->result();
        }
        
         public function cliparts_categories(){
          $q = $this->db->query("Select * from categories  where active!= 2 AND type='cliparts'");
                return $q->result();
        }
        
        public function categories(){
          $q = $this->db->query("Select * from categories  where active!= 2 AND type='products'");
                return $q->result();
        }
        
        public function templates_tags(){
          $q = $this->db->query("Select * from tags where type ='templates'");
                return $q->result();
        }
        
        public function cliparts_tags(){
          $q = $this->db->query("Select * from tags where type ='cliparts'");
                return $q->result();
        }
         public function cliparts(){
             $q = $this->db->query("Select * from cliparts where active!=2");
                return $q->result();
          
        }
        public function sms(){
             $q = $this->db->query("Select * from message");
                return $q->result();
          
        }
        
         public function fonts(){
           return $this->db->where('active'!=2)->get('fonts')->result();
        }
        
         public function orderByid($id){
		    $q = $this->db->query("Select * from orders where id='$id'");
                return $q->row();
		   
        }
        
        public function myorder(){
		    $q = $this->db->query("Select * from orders where status!=2 ORDER BY id DESC");
                return $q->result();
		   
        }
        public function myorder_home(){
		     $date=date("Y-m-d");
		    $q = $this->db->query("Select * from orders where order_date='$date' AND status!='2'  ORDER BY id DESC");
                return $q->result();
		   
        }
        public function myorder_home_test(){
            $date=date("Y-m-d");
		    $q = $this->db->query("Select * from orders where status!=2 AND created=$date  ORDER BY id DESC");
                return $q->result();
		   
        }
        
        public function del_address($id){
		    $q = $this->db->query("Select * from user_location where id='$id'");
                return $q->row();
		   
        }
        
        public function order_details($id){
		    $q = $this->db->query("Select * from orders where id ='$id'");
                return $q->row();
		   
        }
        public function orderproductdetails($id){
		 return  $result = $this->db->where('id',$id)->get('order_products')->result();
        }
		public function orderdata($id){
		 return  $result = $this->db->where('order_id',$id)->get('order_products')->result();
        }
        public function orderdata_home($id){
            $q = $this->db->query("Select * from order_products where order_id='$id' ORDER BY id DESC LIMIT 0, 5");
                return $q->result();
        }
        
        public function count_order($status){
		   $result = $this->db->where('status',$status)->get('orders');
		return $num = $result->num_rows();
		
        }
        public function count_product(){
		   $result = $this->db->where('active!=',2)->get('products');
		return $num = $result->num_rows();
		
        }
        
        public function total_order(){
		   $result = $this->db->where('status!=',2)->get('orders');
		return $num = $result->num_rows();
		
        }
        
        
        public function add_testimonial(){
            $title= $this->input->post('title');
            $query = $this->db->get_where('testimonial', array('name' => $title));
            $count = $query->num_rows();
            if ($count === 0) {
            $data['name']              =   $this->input->post('name');
            $data['description']        =   $this->input->post('description');
            $data['designation']        =   $this->input->post('designation');
           
            $data['image']         =   base_url().'uploads/no_image.jpg';
            $data['status']        =   1;          
            
            $this->db->insert('testimonial', $data);
            $insert_id = $this->db->insert_id();
            if(isset($_FILES['image']) && $_FILES['image']['name']!=''){
                move_uploaded_file($_FILES['image']['tmp_name'], 'uploads/testimonial/testimonial-'.$insert_id.'.jpg');
                $data['image']     =       base_url().'uploads/testimonial/testimonial-'.$insert_id.'.jpg';
            }
            $this->db->where('id', $insert_id);
            $this->db->update('testimonial', $data);
            }
            else{
              $ref= "add";
        	    $this->session->set_flashdata('fail', 'testimonial Name already Exist.');
        	}
        	return $ref;
            
        }
        
        public function list_testimonial($id=FALSE){
            if($id){
                $q = $this->db->query("Select * from testimonial where id= '$id'");
                return $q->row();
            }else{
                $q = $this->db->query("Select * from testimonial where status!= 2");
                return $q->result();
            }
                   
        }
        
        public function update_testimonial($id){
            
            $data['name']              =   $this->input->post('name');
            $data['description']        =   $this->input->post('description');
            $data['designation']        =   $this->input->post('designation');
           
          if(isset($_FILES['image']) && $_FILES['image']['name']!=''){
                move_uploaded_file($_FILES['image']['tmp_name'], 'uploads/testimonial/testimonial-'.time().$id.'.jpg');
                $data['image']     =       base_url().'uploads/testimonial/testimonial-'.time().$id.'.jpg';
            }
            $this->db->where('id', $id);
            $this->db->update('testimonial', $data);
            
            
        }
        
        public function add_video(){
            $link= $this->input->post('link');
            $query = $this->db->get_where('video', array('youtube_link' => $link));
            $count = $query->num_rows();
            if ($count === 0) {
            $data['title']              =   $this->input->post('title');
            $data['youtube_link']        =   $this->input->post('link');
            $data['image']         =   base_url().'uploads/no_image.jpg';
            $data['status']        =   1;          
            
            $this->db->insert('video', $data);
            $insert_id = $this->db->insert_id();
            if(isset($_FILES['image']) && $_FILES['image']['name']!=''){
                move_uploaded_file($_FILES['image']['tmp_name'], 'uploads/video/poster-'.$insert_id.'.jpg');
                $data['image']     =       base_url().'uploads/video/poster-'.$insert_id.'.jpg';
            }
            $this->db->where('id', $insert_id);
            $this->db->update('video', $data);
            }
            else{
              $ref= "add";
        	    $this->session->set_flashdata('fail', 'Video Name already Exist.');
        	}
        	return $ref;
            
        }
        
        public function list_video($id=FALSE){
            if($id){
                $q = $this->db->query("Select * from video where id= '$id'");
                return $q->row();
            }else{
                $q = $this->db->query("Select * from video where status!= 2");
                return $q->result();
            }
                   
        }
        
        public function update_video($id){
            
            $data['title']              =   $this->input->post('title');
            $data['youtube_link']        =   $this->input->post('link');
           
           
          if(isset($_FILES['image']) && $_FILES['image']['name']!=''){
                move_uploaded_file($_FILES['image']['tmp_name'], 'uploads/video/poster-'.time().$id.'.jpg');
                $data['image']     =       base_url().'uploads/video/poster-'.time().$id.'.jpg';
            }
            $this->db->where('id', $id);
            $this->db->update('video', $data);
            
            
        }
        
        public function add_blog(){
            $title= $this->input->post('title');
            $query = $this->db->get_where('blog', array('title' => $title));
            $count = $query->num_rows();
            if ($count === 0) {
            $data['title']              =   $this->input->post('title');
            $data['short_description']        =   $this->input->post('short_desc');
            $data['description']        =   $this->input->post('desc');
            $data['image']         =   base_url().'uploads/no_image.jpg';
            $data['status']        =   1;          
            
            $this->db->insert('blog', $data);
            $insert_id = $this->db->insert_id();
            if(isset($_FILES['image']) && $_FILES['image']['name']!=''){
                move_uploaded_file($_FILES['image']['tmp_name'], 'uploads/blog/blog-'.$insert_id.'.jpg');
                $data['image']     =       base_url().'uploads/blog/blog-'.$insert_id.'.jpg';
            }
            $this->db->where('id', $insert_id);
            $this->db->update('blog', $data);
            }
            else{
              $ref= "add";
        	    $this->session->set_flashdata('fail', 'blog Name already Exist.');
        	}
        	return $ref;
            
        }
        
        public function list_blog($id=FALSE){
            if($id){
                $q = $this->db->query("Select * from blog where id= '$id'");
                return $q->row();
            }else{
                $q = $this->db->query("Select * from blog where status!= 2");
                return $q->result();
            }
                   
        }
        
        public function update_blog($id){
            
            $data['title']              =   $this->input->post('title');
            $data['short_description']        =   $this->input->post('short_desc');
            $data['description']        =   $this->input->post('desc');
           
           
          if(isset($_FILES['image']) && $_FILES['image']['name']!=''){
                move_uploaded_file($_FILES['image']['tmp_name'], 'uploads/blog/blog-'.time().$id.'.jpg');
                $data['image']     =       base_url().'uploads/blog/blog-'.time().$id.'.jpg';
            }
            $this->db->where('id', $id);
            $this->db->update('blog', $data);
            
            
        }
        
        public function list_pages($id=FALSE){
            if($id){
                $q = $this->db->query("Select * from app_pages where id= '$id'");
                return $q->row();
            }else{
                $q = $this->db->query("Select * from app_pages");
                return $q->result();
            }
                   
        }
        
        public function update_pages($id){
            
            $data['title']              =   $this->input->post('title');
            $data['description']        =   $this->input->post('description');
            $this->db->where('id', $id);
            $this->db->update('app_pages', $data);
            
            
        }
        
        public function list_setting($id='1'){
           
                $q = $this->db->query("Select * from app_setting where id= '$id'");
                return $q->row();
        }
        
        public function update_setting($id){
            
            $data['title']              =   $this->input->post('title');
            $data['copyright']        =   $this->input->post('copyright');
            if(isset($_FILES['image']) && $_FILES['image']['name']!=''){
                move_uploaded_file($_FILES['image']['tmp_name'], 'uploads/setting/logo-'.time().$id.'.jpg');
                $data['logo']     =       base_url().'uploads/setting/logo-'.time().$id.'.jpg';
            }
            $this->db->where('id', $id);
            $this->db->update('app_setting', $data);
            
            
        }
        
        public function list_users($id=FALSE){
            if($id){
                $q = $this->db->query("Select * from users where id= '$id'");
                return $q->row();
            }else{
                $q = $this->db->query("Select * from users where role='user' AND status!= 2");
                return $q->result();
            }
                   
        }
        public function list_users_home($id=FALSE){
            if($id){
                $q = $this->db->query("Select * from users where id= '$id'");
                return $q->row();
            }else{
                $q = $this->db->query("Select * from users where role='user' AND status!= 2 ORDER BY id DESC LIMIT 0, 5");
                return $q->result();
            }
                   
        }
        
        public function update_user_profile($id){
            
            $data['user_fullname']  =   $this->input->post('name');
            $data['user_email']     =   $this->input->post('email');
            $data['user_phone']     =   $this->input->post('mobile');
            $data['house_no']       =   $this->input->post('house_no');
            $data['socity_id']      =   $this->input->post('socity_id');
            $data['pincode']        =   $this->input->post('pincode');
           
           
          if(isset($_FILES['image']) && $_FILES['image']['name']!=''){
                move_uploaded_file($_FILES['image']['tmp_name'], 'uploads/users/user-'.time().$id.'.jpg');
                $data['user_image']     =       base_url().'uploads/users/user-'.time().$id.'.jpg';
            }
            $this->db->where('id', $id);
            $this->db->update('users', $data);
            
            
        }
     
        public function list_designers($id=FALSE){
            if($id){
                $q = $this->db->query("Select * from users where id= '$id'");
                return $q->row();
            }else{
                $q = $this->db->query("Select * from users where role='designer' AND status!= 2");
                return $q->result();
            }
                   
        }
        public function list_designers_home($id=FALSE){
            if($id){
                $q = $this->db->query("Select * from users where id= '$id'");
                return $q->row();
            }else{
                $q = $this->db->query("Select * from users where role='designer' AND status!= 2 ORDER BY id DESC LIMIT 0, 5");
                return $q->result();
            }
                   
        }
        
        public function update_designer_profile($id){
            
            $data['user_fullname']  =   $this->input->post('name');
            $data['user_email']     =   $this->input->post('email');
            $data['user_phone']     =   $this->input->post('mobile');
            $data['house_no']       =   $this->input->post('house_no');
            $data['socity_id']      =   $this->input->post('socity_id');
            $data['pincode']        =   $this->input->post('pincode');
           
           
          if(isset($_FILES['image']) && $_FILES['image']['name']!=''){
                move_uploaded_file($_FILES['image']['tmp_name'], 'uploads/users/designer-'.time().$id.'.jpg');
                $data['user_image']     =       base_url().'uploads/users/designer-'.time().$id.'.jpg';
            }
            $this->db->where('id', $id);
            $this->db->update('users', $data);
            
            
        }
         public function add_designer(){
            $title= $this->input->post('name');
            $query = $this->db->get_where('users', array('user_fullname' => $title,'role' => 'designer',));
            $count = $query->num_rows();
            if ($count === 0) {
            $data['user_fullname']  =   $this->input->post('name');
            $data['user_email']     =   $this->input->post('email');
            $data['user_phone']     =   $this->input->post('mobile');
            $data['house_no']       =   $this->input->post('house_no');
            $data['socity_id']      =   $this->input->post('socity_id');
            $data['pincode']        =   $this->input->post('pincode');;
           
            $data['user_image']         =   base_url().'uploads/no_image.jpg';
            $data['status']        =   1; 
            $data['role']        =   'designer';          
            
            $this->db->insert('users', $data);
            $insert_id = $this->db->insert_id();
            if(isset($_FILES['image']) && $_FILES['image']['name']!=''){
                move_uploaded_file($_FILES['image']['tmp_name'], 'uploads/users/designer-'.$insert_id.'.jpg');
                $data['user_image']     =       base_url().'uploads/users/designer-'.$insert_id.'.jpg';
            }
            $this->db->where('id', $insert_id);
            $this->db->update('users', $data);
            }
            else{
              $ref= "add";
        	    $this->session->set_flashdata('fail', 'Designer Name already Exist.');
        	}
        	return $ref;
            
        }
        
         public function add_category(){
            $title= $this->input->post('name');
            $query = $this->db->get_where('categories', array('name' => $title));
            $count = $query->num_rows();
            if ($count === 0) {
               
            $data['name']  =   $this->input->post('name');
            $data['parent']     =   0;
            $data['order']     =   0;
            $data['type']       =   $this->input->post('type');
            $data['slug']           = url_title($this->input->post('name'), 'dash', TRUE);
            $data['active']        =   1;
            $data['upload']         =   base_url().'uploads/no_image.jpg';
            $data['created']        =   date('Y-m-d H:i:s');
            $data['updated']        =   date('Y-m-d H:i:s');
                    
            
            $this->db->insert('categories', $data);
            $insert_id = $this->db->insert_id();
            if(isset($_FILES['image']) && $_FILES['image']['name']!=''){
                move_uploaded_file($_FILES['image']['tmp_name'], 'uploads/category/tmp_cat-'.$insert_id.'.jpg');
                $data['thumbnail_url']     =       base_url().'uploads/category/tmp_cat-'.$insert_id.'.jpg';
                $data['upload']     = base_url().'uploads/category/tmp_cat-'.$insert_id.'.jpg';
            }
            $this->db->where('id', $insert_id);
            $this->db->update('categories', $data);
            }
            else{
              $ref= "add";
        	    $this->session->set_flashdata('fail', 'Category Name already Exist.');
        	}
        	return $ref;
            
        }
        public function update_category($id){
            
            $data['name']  =   $this->input->post('name');
            $this->db->where('id', $id);
            $this->db->update('categories', $data);
            	return $ref='update';
        }
        
         public function add_tag(){
            $title= $this->input->post('name');
            $query = $this->db->get_where('tags', array('name' => $title));
            $count = $query->num_rows();
            if ($count === 0) {
                $date= time();
            $data['name']  =   $this->input->post('name');
            $data['type']       =   $this->input->post('type');
            $data['slug']           = url_title($this->input->post('name'), 'dash', TRUE);
            $data['created']        =   date('Y-m-d H:i:s');
            $data['updated']        =   date('Y-m-d H:i:s');
                    
            
            $this->db->insert('tags', $data);
            
            }
            else{
              $ref= "add";
        	    $this->session->set_flashdata('fail', 'Category Name already Exist.');
        	}
        	return $ref;
            
        }
         public function add_template(){
            $title= $this->input->post('name');
            $query = $this->db->get_where('templates', array('name' => $title));
            $count = $query->num_rows();
            if ($count === 0) {
                $date= time();
            $data['name']  =   $this->input->post('name');
            $data['price']     =   $this->input->post('price');
            $data['featured']     =   $this->input->post('featured');
            $data['tags']        =   $this->input->post('tag');
            $data['order']        =   $this->input->post('order');
            $data['active']        =   1;
            $data['created']        =   date('Y-m-d H:i:s');
            $data['updated']        =   date('Y-m-d H:i:s');
                    
            
            $this->db->insert('templates', $data);
            $insert_id = $this->db->insert_id();
            if(isset($_FILES['image']) && $_FILES['image']['name']!=''){
                move_uploaded_file($_FILES['image']['tmp_name'], 'uploads/templates/2020/09/templates-'.$insert_id.'.mytpl');
                
                $data['upload']     =      'templates/2020/09/templates-'.$insert_id.'.mytpl';
            }
            if(isset($_FILES['picture']) && $_FILES['picture']['name']!=''){
                move_uploaded_file($_FILES['picture']['tmp_name'], 'uploads/templates/2020/09/image-'.$insert_id.'.png');
                $data['image']     =       base_url().'uploads/templates/2020/09/image-'.$insert_id.'.png';
                $data['screenshot']     =       base_url().'uploads/templates/2020/09/image-'.$insert_id.'.png';
            }
            $this->db->where('id', $insert_id);
            $this->db->update('templates', $data);
            $cat['category_id']        =   $this->input->post('category');
            $cat['item_id']        =   $insert_id;
            $cat['type']        =   'templates';
            $this->db->insert('categories_reference', $cat);
             $tag['tag_id']        =   $this->input->post('tag');
            $tag['item_id']        =   $insert_id;
            $tag['type']        =   'templates';
            
            $this->db->insert('tags_reference', $tag);
            
            }
            else{
              $ref= "add";
        	    $this->session->set_flashdata('fail', 'Category Name already Exist.');
        	}
        	return $ref;
            
        }
        
         public function add_clipart(){
            $title= $this->input->post('name');
            $query = $this->db->get_where('cliparts', array('name' => $title));
            $count = $query->num_rows();
            if ($count === 0) {
                $date= time();
            $data['name']  =   $this->input->post('name');
            $data['price']     =   $this->input->post('price');
            $data['featured']     =   $this->input->post('featured');
            $data['tags']        =   $this->input->post('tag');
            $data['order']        =   $this->input->post('order');
            $data['active']        =   1;
           $data['created']        =   date('Y-m-d H:i:s');
            $data['updated']        =   date('Y-m-d H:i:s');
                    
            
            $this->db->insert('cliparts', $data);
            $insert_id = $this->db->insert_id();
            if(isset($_FILES['image']) && $_FILES['image']['name']!=''){
                move_uploaded_file($_FILES['image']['tmp_name'], 'uploads/cliparts/cliparts-'.$insert_id.'.png');
                $data['thumbnail_url']     =       base_url().'uploads/cliparts/cliparts-'.$insert_id.'.png';
                $data['upload']     = 'cliparts/cliparts-'.$insert_id.'.png';
            }
            
            $this->db->where('id', $insert_id);
            $this->db->update('cliparts', $data);
            $cat['category_id']        =   $this->input->post('category');
            $cat['item_id']        =   $insert_id;
            $cat['type']        =   'cliparts';
            $this->db->insert('categories_reference', $cat);
             $tag['tag_id']        =   $this->input->post('tag');
            $tag['item_id']        =   $insert_id;
            $tag['type']        =   'cliparts';
            
            $this->db->insert('tags_reference', $tag);
            
            }
            else{
              $ref= "add";
        	    $this->session->set_flashdata('fail', 'cliparts Name already Exist.');
        	}
        	return $ref;
            
        }
        public function all_payouts(){
            //return  $result = $this->db->select('*, sum(payout) as total')->where('status!=',0)->where('payout > ', 0)->group_by('Month(date)','template_id','order_id')->get('payout')->result();
            return $result = $this->db->select('*, sum(payout)+sum(extras) as total')->where('status!=', 0)->where('payout > ', 0)->group_by('id')->get('payout_request')->result();
        }
        public function Complete_payout(){
            // return  $result = $this->db->select('*, sum(payout) as total')->where('status!=',1)->where('payout > ', 0)->group_by('Month(date)','template_id','order_id')->get('payout')->result();
            return $result = $this->db->select('*, sum(payout)+sum(extras) as total')->where('status', 3)->where('payout > ', 0)->group_by('id')->get('payout_request')->result();
        }
        public function requested_payout(){
            // return  $result = $this->db->select('*, sum(payout) as total')->where('status!=',1)->where('payout > ', 0)->group_by('Month(date)','template_id','order_id')->get('payout')->result();
            return $result = $this->db->select('*, sum(payout)+sum(extras) as total')->where('status', 2)->where('payout > ', 0)->group_by('id')->get('payout_request')->result();
        }
        public function payout($id=FALSE){
            if($id){
                return  $result = $this->db->where('id',$id)->get('payout')->row();
            }else{
                return  $result = $this->db->where('status',2)->get('payout')->result();
            }
        }
        public function payout_details($id){
		 return  $result = $this->db->where('id',$id)->get('order_products')->row();
        }
        
        public function make_payout($id){
            $data['status'] = '1';
            $this->db->where('order_id', $id);
            $this->db->update('payout', $data);
            // $this->payout_request_entry($id);
            $ref= "add";
        	return $ref;
        }
        
        public function payout_request_tempdata($template_id="") {
            $payout_requests = $this->db->get_where("payout_request", ['template_id' => $template_id])->row();
            return $payout_requests;
        }

        public function payout_request_update($payout, $payout_request) {
            $payout_qty = $payout_request->qty + $payout->qty;
            $payout_payout = $payout_request->payout + $payout->payout;
            $extras = calculate_payout_extras($payout_qty, $payout->template_id);
            $paydata_request = array(
                'payout' => $payout_payout,
                'qty' => $payout_qty,
                'extras' => $extras,
                'status' => 1
            );
            $this->db->update("payout_request", $paydata_request, ["id" => $payout_request->id]);
            $request_id = $payout_request->id;
	        return $request_id;
        }
        
        public function payout_request_insert($payout) {
            $paydata_request = array(
                'designer_id' => $payout->designer_id,
                'template_id' => $payout->template_id,
                'payout' => $payout->payout,
                'qty' => $payout->qty,
                'status' => 1,
                'date'=> date('Y-m-d')
            );
            $extras = calculate_payout_extras($payout->qty, $payout->template_id);
            $paydata_request['extras'] = $extras;
            $this->db->insert("payout_request", $paydata_request);
            $request_id = $this->db->insert_id();
	        return $request_id;
        }

        public function payout_request_entry($order_id="") {
            $payouts = $this->db->get_where("payout", ['order_id' => $order_id])->result();
            foreach($payouts as $payout):
                $payout_request = $this->payout_request_tempdata($payout->template_id);
                if(count($payout_request)>0) {
                    $request_id = $this->payout_request_update($payout, $payout_request);
                } else {
        	        $request_id = $this->payout_request_insert($payout);
                }
                $this->db->update("payout", ["request_id" => $request_id], ["id" => $payout->id]);
            endforeach;
            return true;
	    }

        public function make_invoice($id=""){
            if($id=="")
                return false;
            $query = $this->db->get_where('gst_invoice', array('order_id' => $id));
            $count = $query->num_rows();
            if ($count == 0) {
                $data['order_id']   =   $id;
                $this->db->insert('gst_invoice', $data);
                return  $ref= "add"; 
            } else {
                $ref= "already exist";
            }
            return true;
          }
          
          public function get_invoiceID($order_id){
              return $this->db->select("id")->where(["order_id"=>$order_id])->get('gst_invoice')->row()->id;
          }
        
        public function stock_maintain($id){
            $order_status = $this->db->select("status")->where(["id"=>$id])->get('orders')->row();
            if($order_status=="cancelled" || $order_status=="2")
                return true;
             $payout= $this->db->set("status",0)->where(["order_id"=>$id])->update('payout'); 
            // $order_data = $this->db->select("product_id,qty,variations")->from('order_products')->where(["order_id"=>$id])->get()->result();
            // foreach($order_data as $order):
            //     $p_id=$order->product_id;
            //     $qty=(int)$order->qty;
            //     $attr=json_decode($order->variations);
            //     if($qty>0):
            //         if($p_id=='2'){
            //             $color=ucfirst(ltrim($attr[0]));
            //             $size=$attr[1];
            //             $color_code= $this->db->select("color_code")->from('colors')->where(["color"=>$color])->get()->row()->color_code;
            //             $stock= $this->db->set("qty", "qty+".$qty, false)->where(["product"=>$p_id,"color"=>$color_code,"size"=>$size])->update('stock');
            //         } else {
            //             $stock= $this->db->set("qty", "qty+".$qty, false)->where(["product"=>$p_id])->update('stock');
            //         }
            //     endif;
            // endforeach;
            return true;
        }
        
         public function payout_response($id){
            $data['note']              =   $this->input->post('note');
            // $data['date']              =    date('Y-m-d');
            $data['status']='3';
            if(isset($_FILES['image']) && $_FILES['image']['name']!=''){
                $fname = time().$id;
                move_uploaded_file($_FILES['image']['tmp_name'], 'uploads/transcation/payout-'.$fname.'.png');
                $data['payment_screenshot']     =       base_url().'uploads/transcation/payout-'.$fname.'.png';
            }
            // $this->db->where('id', $id);
            $this->db->update('payout_request', $data, ['id' => $id]);
            $this->db->update('payout', $data, ['request_id' => $id]);
            $ref= "add";
        	return $ref;
        }
        
         public function add_accountant(){
            $email= $this->input->post('email');
            $query = $this->db->get_where('accountant', array('email' => $email));
            $count = $query->num_rows();
            if ($count === 0) {
            $data['name']              =   $this->input->post('name');
            $data['email']              =   $this->input->post('email');
            $data['mobile']        =   $this->input->post('mobile');
            $data['password']        =   md5($this->input->post('password'));
           $data['image']         =   base_url().'uploads/users/default.png';
            $data['status']        =   1;  
            $data['designation']        =   'Accountant';  
            $this->db->insert('accountant', $data);
              $ref= "add";
        	  $this->session->set_flashdata('added', ',<div class="alert alert-success">Accountant Added successfully</div>');
        	
            }
            else{
              $ref= "cancel";$this->session->set_flashdata('added', ',<div class="alert alert-danger">Accountant already  Exist please try with another email</div>');
        	}
        	  
        	return $ref;
        }
        
        public function accountant_list($id=FALSE){
            if($id){
                $q = $this->db->query("Select * from accountant where id= '$id'");
                return $q->row();
            }else{
                $q = $this->db->query("Select * from accountant where  status!= 2 ORDER BY id DESC ");
                return $q->result();
            }
                   
        }
        
        public function update_accountant_profile($id){
            
            $data['name']  =   $this->input->post('name');
            $data['email']     =   $this->input->post('email');
            $data['mobile']     =   $this->input->post('mobile');
           
           
          if(isset($_FILES['image']) && $_FILES['image']['name']!=''){
                move_uploaded_file($_FILES['image']['tmp_name'], 'uploads/users/accountant-'.time().$id.'.jpg');
                $data['image']     =       base_url().'uploads/users/accountant-'.time().$id.'.jpg';
            }
            $this->db->where('id', $id);
            $this->db->update('accountant', $data);
            
            
        }

        public function list_enquiry(){
            $q = $this->db->query("Select * from suggestion where  status!= 2 ORDER BY id DESC ");
            return $q->result();
        }

        public function addQuickOrder($order_id="", $pickup_location="", $weight="", $length="", $breadth="", $height="", $comment="") {
            return false;
            if($order_id=="" || $pickup_location=="" || $weight==0 || $length<=0.5 || $breadth<=0.5 || $height<=0.5)
                return false;
                 
            $order_items_data = $this->Home_model->orderDataWithProduct($order_id);
    
            $order_data = $this->Home_model->orderdetailsforshiprocket($order_id);
            $order_address=$order_data['is_shipping'];
             $user_details = $this->Home_model->userdetailsforshiprocket($order_data['user_id']);
            if($order_address=='1'){
               $bill_ship='1';
            }else{
                $ship_address = $this->Home_model->shippingdetailsforshiprocket($order_data['location_id']);
            }
            $order_items = array();
            $total_discount = 0;
            foreach($order_items_data as $order_item_data):
                $designer_charge = $order_item_data->total_price - $order_item_data->product_price;
                $discount = $order_item_data->mrp - $order_item_data->price;
                $selling_price = (($order_item_data->total_price)/$order_item_data->qty)*(100+$order_item_data->gst)/100;
                // $total_discount += $discount;
                $order_items[] = (object)array(
                        "name" => $order_item_data->name,
                        "sku" => $order_item_data->sku.rand(0,9),
                        "units" => $order_item_data->qty,
                        "selling_price" => $selling_price,
                        "discount" => 0,
                        "tax" => $order_item_data->gst,
                        "hsn" => ""
                    );
            endforeach;
            $payment_method = ($order_data['payment']=="online")?'Prepaid':'COD';
            $is_cod = ($order_data['payment']=="online")?0:1;
            $shipping_charge_base = 12;
            $shipping_charge = ($order_data['shipping_charge']+$order_data['cod_charge'])*(100+$shipping_charge_base)/100;
            $attributes = (object)array(
                "order_id" => $order_id,
                "order_date" => date('Y-m-d H:i:s'),
                "pickup_location" => $pickup_location,
                "channel_id" => "",
                "comment" => $comment,
                
                "billing_customer_name" => $user_details['user_fullname'],
                "billing_last_name" => "",
                "billing_address" => $user_details['house_no'],
                "billing_address_2" => "",
                "billing_city" => $user_details['city'],
                "billing_pincode" => $user_details['pincode'],
                "billing_state" => $user_details['state'],
                "billing_country" => "India",
                "billing_email" => $user_details['user_email'],
                "billing_phone" => $user_details['user_phone'],
                "shipping_is_billing" => ($order_address=="1")?"1":"0",
                "shipping_customer_name" => ($order_address=="1")?"":$user_details['user_fullname'],
                "shipping_last_name" => "",
                "shipping_address" => ($order_address=="1")?"":$ship_address['house_no'],
                "shipping_address_2" => "",
                "shipping_city" => ($order_address=="1")?"":$ship_address['city'],
                "shipping_pincode" => ($order_address=="1")?"":$ship_address['pincode'],
                "shipping_country" => ($order_address=="1")?"":"India",
                "shipping_state" => ($order_address=="1")?"":$ship_address['state'],
                "shipping_email" => ($order_address=="1")?"":$user_details['user_email'],
                "shipping_phone" => ($order_address=="1")?"":$user_details['user_phone'],
                "order_items" => $order_items,
                            
                "payment_method" => $payment_method,
                "shipping_charges" => $shipping_charge,
                "giftwrap_charges" => 0,
                "transaction_charges" => 0,
                "total_discount" => 0,
                "sub_total" => $order_data['total']-$shipping_charge,
                "length" => $length,
                "breadth" => $breadth,
                "height" => $height,
                "weight" => $weight
            );
            
            // print_r($attributes);exit;
            $del_status = $this->shiprocket->createQuickOrder($attributes);
            
             
            return array("data" => $del_status, "delivery_postcode" => ($order_address=="1")?$user_details['pincode']:$ship_address['pincode'], "is_cod" => $is_cod);
        }
        
        public function order_shippment_process($post)
        {
            $auto_deliver = false;
            $order_id = $post['shiprocket_order_id'];
            $pickup_location = 'Primary';//$post['pickup_location'];
            $weight = $post['weight']; //in KGs
            $length = $post['length'];
            $breadth = $post['breadth'];
            $height = $post['height'];
            $comment = $post['comment'];
            $pickup_postcode = '121003';//$post['pickup_postcode'];
            
            $orderCreateData = $this->addQuickOrder($order_id, $pickup_location, $weight, $length, $breadth, $height, $comment);
            
            if($auto_deliver):
                $shiprocket_order_id = $orderCreateData['data']['order_id'];
                $shipment_id = $orderCreateData['data']['shipment_id'];
                $delivery_postcode = $orderCreateData['delivery_postcode'];
                $is_cod = $orderCreateData['is_cod'];
                $courier_id = $this->shiprocket->checkDeliveribility($pickup_postcode, $delivery_postcode, $is_cod, $weight)['data']['recommended_courier_company_id'];
               
                $del_status = $this->shiprocket->assignDelivery($shipment_id, $courier_id, $weight);
            else:
                $del_status = true;
            endif;
          
            return $orderCreateData;
        }
        public function logo(){
    		$details= $this->db->where('id',1)->get('invoice-details')->row();
    	    return  $logo=	$details->invoicelogo;
    	}
    	public function site_setting(){
    	return	$details= $this->db->where('id',1)->get('invoice-details')->row();
    	}
        function featuredTemplates($id,$data){
            return $this->db->where('id',$id)->update("templates",$data);
        }
        function  featuredTemplatesCount($prod_id=""){
            if($prod_id!="")
                $this->db->where("product_base", $prod_id);
            $q = $this->db->where(['top_in_products'=>1])->get("templates")->result();
             return count($q);
            
        }
        function  featuredTemplatesCountCategory($prod_id="", $cat_id=""){
            $this->db->join("categories_reference", "categories_reference.item_id=templates.id");
            if($prod_id!="")
                $this->db->where("templates.product_base", $prod_id);
            if($cat_id!="")
                $this->db->where(["categories_reference.category_id" => $cat_id, "categories_reference.type" => "templates"]);
            $q = $this->db->where(['templates.top_in_category'=>1])->get("templates")->result();
            return count($q);
        }
        function  featuredProductTemplates(){
            $q = $this->db->where(['top_in_products'=>1])->get("templates")->result();
             return $q;
            
        }
        function  featuredCategoryTemplates(){
            $q = $this->db->where(['top_in_category'=>1])->get("templates")->result();
             return $q;
            
        }
        function  featuredFavouriteTemplates(){
            $q = $this->db->where(['favourite'=>1])->get("templates")->result();
             return $q;
            
        }
    }
?>