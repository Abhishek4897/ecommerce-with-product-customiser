<?php 

    class Ims_model extends CI_Model
    {        
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
		public function accountantLogin($email, $encrypt_password){
			//Validate
			$this->db->where('email', $email);
			$this->db->where('password', $encrypt_password);
			$this->db->where('status', 1);
			$result = $this->db->get('accountant');
			if ($result->num_rows() == 1) {
				return $result->row(0);
			}else{
				return false;
			}
		}

    	public function change_password($new_password){
    		$data = array(
    			'password' => md5($new_password)
    		    );
    		$this->db->where('id', $this->session->userdata('user_id'));
    		return $this->db->update('admin', $data);
    	}
    	
    	public function change_account_password($new_password){
    	     $admin_id= $this->session->userdata('admin_id');
        
    		$data = array(
    			'password' => md5($new_password)
    		    );
    		$this->db->where('id', $admin_id);
    		return $this->db->update('admin', $data);
    	}
        
        public function admin_profile($id){
           
                $q = $this->db->query("Select * from admin where id= '$id'");
                return $q->row();
                   
        }
         public function accountant_profile($id){
           
                $q = $this->db->query("Select * from accountant where id= '$id'");
                return $q->row();
                   
        }
         public function fetch_color($pro){
              $q = $this->db->query("Select * from product_color where p_id= '$pro'");
                return $q->row();
         }
        
        public function update_profile($id){
            
            $data['name']              =   $this->input->post('name');
            $data['mobile']        =   $this->input->post('mobile');
        
           
            $this->db->where('id', $id);
            $this->db->update('admin', $data);
            
            
        }
        
        public function update_profile_image($id){
           
          if(isset($_FILES['image']) && $_FILES['image']['name']!=''){
                move_uploaded_file($_FILES['image']['tmp_name'], 'uploads/setting/profile-'.time().$id.'.jpg');
                $data['image']     =       base_url().'uploads/setting/profile-'.time().$id.'.jpg';
            }
            $this->db->where('id', $id);
            $this->db->update('admin', $data);
            
            
        }
        
        public function update_accountant_profile($id){
            
            $data['name']              =   $this->input->post('name');
            $data['mobile']        =   $this->input->post('mobile');
        
           
            $this->db->where('id', $id);
            $this->db->update('accountant', $data);
            
            
        }
        
        public function update_accountant_profile_image($id){
           
          if(isset($_FILES['image']) && $_FILES['image']['name']!=''){
                move_uploaded_file($_FILES['image']['tmp_name'], 'uploads/users/accountant-'.time().$id.'.jpg');
                $data['image']     =       base_url().'uploads/users/accountant-'.time().$id.'.jpg';
            }
            $this->db->where('id', $id);
            $this->db->update('accountant', $data);
            
            
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
        
         public function templates($id=''){
                if(!empty($id)){
                   $q = $this->db->query("Select * from templates where active!=2 AND id='$id'");
                    return $q->row(); 
                }
                     $q = $this->db->query("Select * from templates where active!=2");
                    return $q->result();
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
        
         public function fonts(){
           return $this->db->where('active'!=2)->get('fonts')->result();
        }
        
        public function myorder(){
		    $q = $this->db->query("Select * from orders where status='dispatched' OR status='completed'");
                return $q->result();
		   
        }
        public function myorder_home(){
		    $q = $this->db->query("Select * from orders  where status='dispatched' OR status='completed' ORDER BY id DESC LIMIT 0, 5");
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
        public function products(){
		 return  $result = $this->db->where('active',1)->get('products')->result();
	
		
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
            $data['parent']     =   $this->input->post('parent');
            $data['order']     =   $this->input->post('order');
            $data['type']       =   $this->input->post('type');
            $data['slug']           = url_title($this->input->post('name'), 'dash', TRUE);
            $data['active']        =   1;
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
		 return  $result = $this->db->where('design_by !=',null)->get('order_products')->result();
        }
        public function payout($id=FALSE){
            if($id){
                return  $result = $this->db->where('id',$id)->get('payout')->row();
            }else{
                return  $result = $this->db->where('status',0)->get('payout')->result();
            }
		 
        }
        public function payout_details($id){
		 return  $result = $this->db->where('id',$id)->get('order_products')->row();
        }
        
         public function payout_response($id){
            $data['note']              =   $this->input->post('note');
            $data['status']='1';
            if(isset($_FILES['image']) && $_FILES['image']['name']!=''){
                move_uploaded_file($_FILES['image']['tmp_name'], 'uploads/transcation/payout-'.time().$id.'.png');
                $data['payment_screenshot']     =       base_url().'uploads/transcation/payout-'.time().$id.'.png';
            }
            $this->db->where('id', $id);
            $this->db->update('payout', $data);
            $payout_row= $this->payout($id);
           
            $order_id= $payout_row->order_id;
            $this->payout_status($order_id);
              $ref= "add";
        	return $ref;
        }
        public function payout_status($order_id){
                $order_pro=json_decode($order_id);
            foreach($order_pro as $key=> $o_id){
                $data['payout_status']  = 2;
           
            $this->db->where('id', $o_id);
            $this->db->update('order_products', $data);
                
            }
            return $ref='update';
        }
        public function add_stock()
        {
         $p_id=    $this->input->post('product');
         $size=    $this->input->post('size');
         $color=    $this->input->post('color');
        if($p_id==2){
          $query = $this->db->get_where('stock', array('product' => $p_id,'size' => $size,'color' => $color));  
        }
        else{
            $query = $this->db->get_where('stock', array('product' => $p_id,'color' => $color));
        }
            $count = $query->num_rows();
            if ($count === 0) {
            $q = $this->db->query("Select * from products where id= '$p_id'");
                $pro= $q->row();
                $color=$this->input->post('color');
                if($color=='#292929' && $p_id=='2'){
                    $pro_price='549';
                }else{
                    $pro_price=$pro->price;
                }
           
            $data['product'] =   $this->input->post('product');
            $data['size']        =   $this->input->post('size');
            $data['color']        =   $this->input->post('color');
            $data['qty']              =   $this->input->post('qty');
            $data['unit_price']        =   $this->input->post('unit_price');
             $data['selling_price']        =   $pro_price;
              $data['date']        =   date('Y-m-d');
            $data['status']        =   1;          
            
            $this->db->insert('stock', $data);
            $insert_id = $this->db->insert_id();
             $this->db->where('id',1);
            $q = $this->db->get('invoice-details');
             $setting_data= $q->row();
             $products_gst=json_decode($setting_data->gstp);
            $pro_duct=$products_gst[1];
            foreach($products_gst[0] as $key=>$p_id){
             if($this->input->post('product')== $p_id){
              $gst=$pro_duct[$key];
             }
            } 
         $total_money=   $this->input->post('unit_price') * $this->input->post('qty');
            $total_gst= $total_money* $gst /100;
                                     
            $exp['stock_id']              =   $insert_id;
            $exp['qty']              =   $this->input->post('qty');
            $exp['unit_price']        =   $this->input->post('unit_price');
            $exp['selling_price']        = $pro_price;
            $exp['gst']        =   $total_gst;
            $exp['date']        =   date('Y-m-d');
            $this->db->insert('stock_expenses', $exp);
            return $ref='add';
            }
            else{
                return $ref='cancel'; 
            }
        }
            
        public function stock_list($id=FALSE){
            if($id){
                $q = $this->db->query("Select * from stock where id= '$id'");
                return $q->row();
            }else{
                $q = $this->db->query("Select * from stock  where status!= 2 ORDER BY id ASC");
                return $q->result();
            }
                   
        }
        
        public function update_stock($id){
            $q = $this->db->query("Select * from stock where id= '$id'");
                $st= $q->row();
                $pr = $this->db->query("Select * from products where id= '$st->product'");
                $pro= $pr->row();
            $data['qty']              =   $this->input->post('qty') + $this->input->post('update_qty');
            $data['unit_price']        =    $this->input->post('update_unit_price');
             $data['selling_price']        =   $pro->price;
              $data['date']        =   date('Y-m-d');
            $this->db->where('id',$id);
    	   $this->db->update('stock', $data);
            $exp['stock_id']              =   $id;
            $exp['qty']              =   $this->input->post('update_qty');
            $exp['unit_price']        =   $this->input->post('update_unit_price');
            $exp['selling_price']        =   $pro->price;
            $exp['date']        =   date('Y-m-d');
            $this->db->insert('stock_expenses', $exp);
            
            }
            
            public function return_stock(){
            $stock_id=$this->input->post('stock_id');
            $exp['stock_id']        =  $this->input->post('stock_id');
            $exp['stock_exp_id']        =  $this->input->post('stock_exp_id');
            $exp['amount']        =  $this->input->post('amount');
            $exp['qty']        =  $this->input->post('qty');
            $exp['note']              =   $this->input->post('note');
            $exp['date']        =   date('Y-m-d');
            $this->db->insert('return_stock', $exp);
             $q = $this->db->query("Select * from stock where id= '$stock_id'");
                $stock_data= $q->row();
             $updatestock_quantity=$stock_data->qty - $this->input->post('qty');
                         $stock_details['qty'] = $updatestock_quantity;
                         $this->db->where('id',$stock_data->id);
                         $this->db->update('stock',$stock_details);
            
            }
           
            
        public function get_stockreturn(){
                $q = $this->db->query("Select * from  return_stock");
                return $q->result();
        }
        
        public function stock_expenses(){
                $q = $this->db->query("Select * from stock_expenses ");
                return $q->result();
        }
        
        public function designer_expenses(){
                return  $result = $this->db->where('status',3)->get('payout')->result();
        }
        
        public function other_expenses(){
             $q = $this->db->query("Select * from other_expenses ");
             return $q->result();
        }
        
         public function add_expenses(){
           
            $data['title']              =   $this->input->post('title');
            $data['price']        =   $this->input->post('price');
            $data['notes']        =   $this->input->post('notes');
            $data['date']        =   date('Y-m-d');
             
            $this->db->insert('other_expenses', $data);
            
            }
            
             public function update_expenses($id){
            $data['title']              =   $this->input->post('title');
            $data['price']        =   $this->input->post('price');
            $data['notes']        =   $this->input->post('notes');
            $data['date']        =   date('Y-m-d');
            $this->db->where('id',$id);
    	   $this->db->update('other_expenses', $data);
            }
            
             public function get_report($table,$from,$to,$status=FALSE){
                 if($status){
                     return  $result = $this->db->where('date BETWEEN "'. date('Y-m-d', strtotime($from)). '" and "'. date('Y-m-d', strtotime($to)).'"')->where('status',$status)->get($table)->result();
                 }
                 else{
                  return  $result = $this->db->where('date BETWEEN "'. date('Y-m-d', strtotime($from)). '" and "'. date('Y-m-d', strtotime($to)).'"')->get($table)->result();
             
                 }
                 }
                 
             public function get_income_report($table,$from,$to,$status=FALSE){
                 if($status){
                     return  $result = $this->db->where('updated BETWEEN "'. date('Y-m-d', strtotime($from)). '" and "'. date('Y-m-d', strtotime($to)).'"')->where('status','dispatched')->or_where('status','completed')->get($table)->result();
                 }
                 else{
                  return  $result = $this->db->where('updated BETWEEN "'. date('Y-m-d', strtotime($from)). '" and "'. date('Y-m-d', strtotime($to)).'"')->get($table)->result();
             
                 }
                 }
        
        
    }
?>