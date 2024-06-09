<?php
    class Designer_model extends CI_Model
    {
        
    	public function change_password($new_password){
    		$data = array(
    			'user_password' => md5($new_password)
    		    );
    		$this->db->where('id', $this->session->userdata('designer_id'));
    		return $this->db->update('users', $data);
    	}
        
        public function designer_profile($id) {
            $q = $this->db->query("Select * from users where id= '$id' AND role='designer'");
            return $q->row();
        }
        public function  designerdataupdate($data){
            if(isset($_SESSION['designer_id'])){
                return  $this->db->where(['id'=>$_SESSION['designer_id']])->update('users', $data);
            }   else{
                return false;  
            }   
        }
        
        public function update_profile($id){
            
            $data['user_fullname']              =   $this->input->post('name');
            $data['user_phone']        =   $this->input->post('mobile');
            
           
            $this->db->where('id', $id);
            $this->db->update('users', $data);
            
            
        }
        
        public function update_profile_image($id){
           
          if(isset($_FILES['image']) && $_FILES['image']['name']!=''){
                move_uploaded_file($_FILES['image']['tmp_name'], 'uploads/users/designer-'.time().$id.'.jpg');
                $data['user_image']     =       base_url().'uploads/users/designer-'.time().$id.'.jpg';
            }
            $this->db->where('id', $id);
            $this->db->update('users', $data);
            
            
        }
        
        public function my_store($id=FALSE){
            if($id){
                $q = $this->db->query("Select * from store where id= '$id'");
                return $q->row();
            }
            else{
               $d_id=$this->session->userdata('designer_id');
                $q = $this->db->query("Select * from store where u_id= '$d_id'");
                return $q->row(); 
            }
        }
        public function add_design($d_id){
            $title= $this->input->post('name');
            $query = $this->db->get_where('templates', array('name' => $title));
            $count = $query->num_rows();
            if ($count === 0) {
                
            $data['name']  =   $this->input->post('name');
            $data['price']     =   $this->input->post('price');
            $data['featured']     =   $this->input->post('featured');
            $data['tags']        =   $this->input->post('tag');
            $data['order']        =   $this->input->post('order');
            $data['designed_by']        =   $d_id;;
            $data['active']        =   1;
            $data['created']        =   date('Y-m-d H:i:s');
            $data['updated']        =   date('Y-m-d H:i:s');
                    
            
            $this->db->insert('templates', $data);
            $insert_id = $this->db->insert_id();
            if(isset($_FILES['image']) && $_FILES['image']['name']!=''){
                move_uploaded_file($_FILES['image']['tmp_name'], 'uploads/templates/templates-'.$insert_id.'.lumi');
                $data['screenshot']     =       base_url().'uploads/templates/templates-'.$insert_id.'.lumi';
                $data['upload']     =      base_url().'uploads/templates/templates-'.$insert_id.'.lumi';
            }
            if(isset($_FILES['picture']) && $_FILES['picture']['name']!=''){
                move_uploaded_file($_FILES['picture']['tmp_name'], 'uploads/templates/image-'.$insert_id.'.jpg');
                $data['image']     =       base_url().'uploads/templates/image-'.$insert_id.'.jpg';
                
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
        
        public function list_design($uid){
                $q = $this->db->query("Select * from templates where designed_by= '$uid' AND active!=2");
                return $q->result(); 
    
        }
        
        public function my_storebylink($link=FALSE){
            if($link){
                $q = $this->db->query("Select * from store where link= '$link'");
                return $q->row();
            }
            else{
               $d_id=$this->session->userdata('designer_id');
                $q = $this->db->query("Select * from store where u_id= '$d_id'");
                return $q->row(); 
            }
        }
        
        public function update_store($id){
            
            $data['store_name']              =   $this->input->post('store_name');
            $data['email']        =   $this->input->post('email');
            $data['mobile']              =   $this->input->post('mobile');
            $data['link']        =   url_title($this->input->post('link'), 'dash', TRUE);
            $data['address']              =   $this->input->post('address');
            $data['fb_link']        =   $this->input->post('fb_link');
            $data['twitter_link']              =   $this->input->post('twitter_link');
            $data['insta_link']        =   $this->input->post('insta_link');
            $data['youtube_link']        =   $this->input->post('youtube_link');
            if(isset($_FILES['image']) && $_FILES['image']['name']!=''){
                move_uploaded_file($_FILES['image']['tmp_name'], 'uploads/users/store-'.time().$id.'.jpg');
                $data['profile_image']     =       base_url().'uploads/users/store-'.time().$id.'.jpg';
            }
            if(isset($_FILES['image_cover']) && $_FILES['image_cover']['name']!=''){
                move_uploaded_file($_FILES['image_cover']['tmp_name'], 'uploads/users/cover-'.time().$id.'.jpg');
                $data['cover_image']     =       base_url().'uploads/users/cover-'.time().$id.'.jpg';
            }
            $this->db->where('id', $id);
            $this->db->update('store', $data);
            
            
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
            $data['pincode']        =   $this->input->post('pincode');
            $data['state']              =   $this->input->post('state');
           
            $this->db->where('id', $id);
            $this->db->update('user_location', $data);
            
            
        }
        public function user_location($uid){
           
                $q = $this->db->query("Select * from user_location where u_id= '$uid' AND status=1");
                return $q->result();
                   
        }
        
        public function payment_details($uid){
           
                $q = $this->db->query("Select * from designer_payment_details where designer_id= '$uid'");
                return $q->row();
                   
        }
        public function manage_payment_details($id){
            
            $user['user_fullname']   =   $this->input->post('name');
            $user['user_phone']      =   $this->input->post('mob_no');
            $user['user_email']      =   $this->input->post('email');
            $user['brand']      =   $this->input->post('brand');
            $this->db->where('id', $id);
            $this->db->update('users', $user);
            $data['bank_name']        =   $this->input->post('bank_name');
            $data['account_no']       =   $this->input->post('account_no');
            $data['ifsc_code']        =   $this->input->post('ifsc_code');
            $data['name_on_bank']        =   $this->input->post('name_on_bank');
            $data['branch_address']       =   $this->input->post('branch_address');
            $data['upi_id']        =   $this->input->post('upi_id');
            $data['designer_id']=$id;
            $details= count($this->payment_details($id));
            if($details==0){
            $this->db->insert('designer_payment_details', $data);
            $ref= "add";
        	return $ref;
            }
            else{
                $this->db->where('designer_id', $id);
            $this->db->update('designer_payment_details', $data);
            $ref= "update";
        	return $ref;
            }
        }
        
        public function update_payment($id){
            
             $data['bank_name']        =   $this->input->post('bank_name');
            $data['account_no']       =   $this->input->post('account_no');
            $data['ifsc_code']        =   $this->input->post('ifsc_code');
            $data['name_on_bank']        =   $this->input->post('name_on_bank');
            $data['branch_address']       =   $this->input->post('branch_address');
            $data['upi_id']        =   $this->input->post('upi_id');
            if(isset($_FILES['image']) && $_FILES['image']['name']!=''){
                move_uploaded_file($_FILES['image']['tmp_name'], 'uploads/users/designer_qr_code-'.time().$id.'.png');
                $data['qr_code']     =       base_url().'uploads/users/designer_qr_code-'.time().$id.'.png';
            }
            $this->db->where('id', $id);
            $this->db->update('designer_payment_details', $data);
            
            
        }
        
        public function mypayouts($d_id){
            if($d_id) {
                $this->db->where('designer_id',$d_id)->where('status',1)->get('payout')->result();
                return $result;
            }
        }
        // public function wallet_amt($d_id) {
        //     $earning=0;
        //     if($d_id) {
        //         $result = $this->db->select('sum(payout)+sum(extras) as payouts')->where('designer_id', $d_id)->where('status', 1)->get('payout_request')->row()->payouts;
        //         $earning += $result;
        //     }
        //     return $earning;
        // }
        
        // according to new changes 06-03-2021
        public function wallet_amt($d_id) {
            if($d_id) {
                $result = $this->db->select('IFNULL(sum(payout), 0) as total_payout, IFNULL(sum(qty), 0) as total_qty')->where('designer_id', $d_id)->where('status', 1)->get('payout')->row();
                //SELECT IFNULL(sum(payout), 0) as total_payout, IFNULL(sum(qty), 0) as total_qty FROM payout WHERE designer_id=4 AND status=1
                $payout_data = $this->db->select('IFNULL(sum(payout), 0) as total_payout, IFNULL(sum(qty), 0) as total_qty')->where('designer_id', $d_id)->get('payout_request')->row();
                //SELECT IFNULL(sum(payout), 0) as total_payout, IFNULL(sum(qty), 0) as total_qty FROM payout_request WHERE  WHERE designer_id=4
                $total_payout = $result->total_payout - $payout_data->total_payout;
                $payout_qty = $result->total_qty - $payout_data->total_qty;
                $extras = calculate_extra_payouts($payout_qty, $total_payout);
                $result_data = (object)array(
                        "total_payout" => $extras+$total_payout,
                        "total_qty" => $payout_qty,
                        "extras" => $extras
                    );
                // print_r($payout_data);
                // print_r($result);
                // echo "DID".$d_id;
                return $result_data;
            }
            
        }
        
        public function select_saledata($d_id) {
            if($d_id) {
                $result = $this->db->select('IFNULL(sum(payout.payout), 0) as total_payout, IFNULL(sum(payout.qty), 0) as total_qty, IFNULL(SUM(IF(templates.product_base=2, payout.qty, 0)), 0) as tshirt_qty, IFNULL(SUM(IF(templates.product_base=3, payout.qty, 0)), 0) as mug_qty, IFNULL(SUM(IF(templates.product_base=4, payout.qty, 0)), 0) as mask_qty')->join('templates', "templates.id=payout.template_id")->where('payout.designer_id', $d_id)->where('payout.status', 1)->get('payout')->row();
                return $result;
            }
            
        }
        
        public function payout_data($d_id,$sales){
            $sales = (int)$sales;
            $tshirt_sale=0;
            $mask_sale=0;
            $mug_sale=0;
            $total_payout=0;
            $payout=0;
            $extras=0;
            if($d_id) {
                $tshirt_charge = 50;
                $mug_charge = 30;
                $mask_charge = 20;
                $result = $this->db->select('IFNULL(sum(payout.payout), 0) as total_payout, IFNULL(sum(payout.qty), 0) as total_qty, IFNULL(SUM(IF(templates.product_base=2, payout.qty, 0)), 0) as tshirt_qty, IFNULL(SUM(IF(templates.product_base=3, payout.qty, 0)), 0) as mug_qty, IFNULL(SUM(IF(templates.product_base=4, payout.qty, 0)), 0) as mask_qty')->join('templates', "templates.id=payout.template_id")->where('payout.designer_id', $d_id)->where('payout.status', 1)->get('payout')->row();
                $result_sales = $this->db->select('SUM(tshirt_sale) AS total_tshirt_sale, SUM(mug_sale) AS total_mug_sale, SUM(mask_sale) AS total_mask_sale')->where('designer_id', $d_id)->get('payout_request')->row();
                //SELECT SUM(tshirt_sale) AS total_tshirt_sale, SUM(mug_sale) AS total_mug_sale, SUM(mask_sale) AS total_mask_sale FROM `payout_request` WHERE designer_id=4
                $tshirt_qty = $result->tshirt_qty - $result_sales->total_tshirt_sale;
                $mug_qty = $result->mug_qty - $result_sales->total_mug_sale;
                $mask_qty = $result->mask_qty - $result_sales->total_mask_sale;
                $tshirt_sale = ($tshirt_qty<=$sales)?$tshirt_qty:$sales;
                $mug_sale= ($mug_qty<=($sales-$tshirt_sale))?$mug_qty:$sales-$tshirt_sale;
                $mask_sale= ($mask_qty<=($sales-$tshirt_sale-$mug_sale))?$mug_qty:($sales-$tshirt_sale-$mug_sale);
                $payout = ($tshirt_sale*$tshirt_charge) + ($mug_sale*$mug_charge) + ($mask_sale*$mask_charge);
                $extras = calculate_extra_payouts($sales, $payout);
                $total_payout = $payout + $extras;
            }
            $datas = array("tshirt_sale"=>(int)$tshirt_sale, "mug_sale"=>(int)$mug_sale, "mask_sale"=>(int)$mask_sale, "extras"=>(int)$extras, "payout"=>(int)$payout, "total_payout"=>(int)$total_payout);
            // var_dump($datas);
            return $datas;
        }
        

        public function earnings($d_id) {
            $earning=0;
            if($d_id) {
                $result = $this->db->select('sum(payout)+sum(extras) as payouts')->where('designer_id', $d_id)->where('status', 3)->get('payout_request')->row()->payouts;
                $earning += $result;
            }
            return $earning;
        }
        
        public function all_payouts($d_id){
          if($d_id){
                $sel = "payout.*, order_products.qty";
                return  $result = $this->db->select($sel)->join("order_products", "(order_products.order_id=payout.order_id AND (order_products.temp_id=payout.template_id OR order_products.back_temp_id=payout.template_id))")
                ->where('designer_id',$d_id)->where('payout.status!=',0)->group_by("payout.id")->get('payout')->result();
            }
	    }

        public function all_payout_requests($d_id){
          if($d_id){
                $sel = "payout_request.*";
                return  $result = $this->db->select($sel)->where('designer_id',$d_id)->where('payout_request.status!=',0)->where('payout_request.status!=',1)->order_by("payout_request.id", "DESC")->group_by("payout_request.id")->get('payout_request')->result();
            }
	    }

        // $this->session->userdata('designer_id');
        public function designer_orders()
        {
            $orders=[];
            //$designer_id=
            $designer_id=$this->session->userdata('designer_id');;
            $tmp=$this->db->query("select id from templates where designed_by='$designer_id'")->result();
            foreach($tmp as $tm):
                $tm_id=$tm->id;
                
                $or=$this->db->query("select order_products.*,(select id from templates where id=$tm_id) as tid from order_products where design_by like '%".$tm_id."%'")->result();
               // $or['tid']=$tm_id;
                array_push($orders,$or);
                endforeach;
            return $orders;
        }
        public function add_payout(){
           $data['tshirt_sale']        =   $this->input->post('tshirt_sale');
            $data['mug_sale']       =   $this->input->post('mug_sale');
            $data['mask_sale']        =   $this->input->post('mask_sale');
            $data['payout']        =   $this->input->post('payout');
            $data['extras']       =   $this->input->post('extras');
            $data['qty']        =   $this->input->post('total_qty');
            $data['designer_id']=$this->session->userdata('designer_id');
            $data['p_type']=$this->input->post('p_type');
            $data['p_value']=json_encode($this->input->post('p_value'));
            $data['date']        = date("Y-m-d");
            $data['status']        = 2;
            $this->db->insert('payout_request', $data);
              $ref= "add";
        	return $ref;
        }
        public function payout_status($order_id){
            foreach($order_id as $key=> $o_id){
                $data['payout_status']        = 1;
           
            $this->db->where('id', $o_id);
            $this->db->update('order_products', $data);
                
            }
            return $ref='update';
        }

        public function myorder($id) {
		    $q = $this->db->query("Select * from orders where id='$id' AND  status!=2");
            return $q->row();
        }
        
        public function count_order($id, $base_id=""){
                // $this->db->select("templates.id")
                //  ->from("templates")
                //  ->join('users','users.id = templates.designed_by')
                //  ->join('order_products','order_products.temp_id = templates.id')
                // //  ->where('status', 'completed')
                //  ->like('order_products.design_by','"'.$id.'"');
                // $q=  $this->db->get()->result();
            // $this->db->select("id")->from("templates")->where("designed_by", $id);
            // if($base_id!="")
            //     $this->db->where("product_base", $base_id);
            // $tmp = $this->db->get()->result();
            
            // $total_order = 0;
            // foreach($tmp as $tm):
            //     $tm_id = $tm->id;
            //     $count_temp_order = $this->db
            //     // ->group_start()->or_where('status', 'dispatched')->or_where('status', 'completed')->group_end()
            //     ->where('status', 'completed')
            //     ->like('design_by', '"'.$tm_id.'"')->get("order_products")->num_rows();
            //     $total_order = $total_order + $count_temp_order;
            // endforeach;
            // return $total_order;
            // return count($q);
            
            $this->db->select('IFNULL(sum(payout), 0) as total_payout, IFNULL(sum(qty), 0) as total_qty')->where('designer_id', $id)->where('status', 1);
            if($base_id!="") {
                $this->db->join("templates", "payout.template_id=templates.id");
                $this->db->where("templates.product_base", $base_id);
            }
            $result = $this->db->get('payout')->row();
            return $result->total_qty;
        }
        
        public function total_order($id){
            $count123 = 0;
            $temp_ids = $orders = array();
           $designer_id=$this->session->userdata('designer_id');
            $tmp = $this->db->select('id')->where('designed_by',$designer_id)->get('templates')->result();
            foreach($tmp as $tm){
                $tm_id = $tm->id;
                $or=$this->db->query("select order_products.* from order_products where design_by like '%".$tm_id."%'")->result();
                // $this->check_status($or[''])
                $orderid=$or['order_id'];
                $count123+=$this->counstatus($orderid);
        }
           
            
            print_r($count123);
            return  $count123;
		
        }
public function counstatus($oid){
    $result= $this->db->where("id",$oid)->or_where("status", 'dispatched')->or_where("status", 'completed')->get('orders')->row();
    if($result){
      return 1;
    }
}
        public function publish_template_upload($cart_data="") {
            if($cart_data=="")
                return false;
    		$upload_path = ROOT.'uploads'.DS;
    		$actual_path = 'templates'.DS.date('Y').DS.date('m').DS;
    		$path = $upload_path.$actual_path;

            $data = (object)array(
                "data" => $cart_data['data'],
                "name" => $cart_data['name'].".mytpl",
                "thumbn" => $cart_data['screenshot']
            );
           
    		if (empty($data))
    			return array("error" => 'Invalid input data');

    		$ext = strrchr($data->name, '.');
    		$name = urlencode(substr($data->name, 0, strlen($data->name) - strlen($ext)));
    
    		$i = 1;
    		while (file_exists($path.$data->name)) {
    			$data->name = $name.'-'.($i++).$ext;
    		}

    		if (!file_put_contents($path.$data->name, $data->data))
    			return array("error" => 'Could not upload file, error on function file_put_contents when trying to push '.$path.$data->name);

    		$thumn_name = '';
    
    		if (isset($data->thumbn)) {
    		    
    		    $ext = '.png';

    			$thumn_name = $name.'-thumbn'.$ext;
    			$i = 1;
    
    			while (file_exists($path.$thumn_name)) {
    				$thumn_name = $name.'-thumbn-'.($i++).$ext;
    			}
    
    			$data->thumbn = explode('base64,', $data->thumbn);
    			$data->thumbn = base64_decode($data->thumbn[1]);
    
    			if (!@file_put_contents($path.$thumn_name, $data->thumbn))
    				return array("error" => 'Could not upload thumbn file');
    		}

    		return array(
    			"success" => true,
    			"name" => $actual_path.$data->name,
    			"thumbn" => base_url('uploads/'.$actual_path.$thumn_name)
    		);
    
    	}

        public function publish_template($d_id,$product_base) {
            $cart_datas = $this->session->userdata('designer_cart');
            $front_cart_data = "";
            foreach($cart_datas as $side => $cart_data):
                if($side=="front")
                    $front_cart_data = $cart_data['items'];
                $uploads = $this->publish_template_upload($cart_data);
                if($uploads=="")
                    return false;
                $total_side = $cart_data["total_side"];
                if($total_side==2) {
                    $name=$this->input->post('name')."_".$side;
                    $temp_type = "part";
                } else {
                    $name=$this->input->post('name');
                    $temp_type = "main";
                }
                $data = [
                    'name' => str_replace("'", "-", $name),
                    'slug' => url_title($name, 'dash', TRUE),
                    'product_base' => $product_base,
                    'price' => 0,
                    'author' => $d_id,
                    'description' => $this->input->post('description'),
                    'screenshot' => $uploads['thumbn'],
                    'image' => $cart_data['items'],
                    'upload' => $uploads['name'],
                    'no_of_stages' => $total_side,
                    'side' => $side,
                    'temp_type' => $temp_type,
                    'featured' => 0,
                    'tags' => 0,
                    'order' => 0,
                    'tags' =>'best',
                    'designed_by' => $d_id,
                    'color' => $cart_data['color'],
                    'created' => date('Y-m-d H:i:s'),
                    'updated' => date('Y-m-d H:i:s')
                ];
                
                $data['slug'] = validate_slug($data['slug'], "templates");
                $this->db->insert('templates', $data);
                $item_id[$side] = $this->db->insert_id();
                $thumbn[$side] = $uploads['thumbn'];
                $t_name[$side] = $uploads['name'];
                $this->db->insert('categories_reference', ['category_id' => $this->input->post('category_id'), 'item_id' => $item_id[$side], 'type' => 'templates']);
            endforeach;
            if($total_side==2) {
                $name=$this->input->post('name');
                $data = [
                    'name' => str_replace("'", "-", $name),
                    'slug' => url_title($name, 'dash', TRUE),
                    'product_base' => $product_base,
                    'price' => 0,
                    'author' => $d_id,
                    'description' => $this->input->post('description'),
                    'screenshot' => json_encode($thumbn),
                    'image' => ($front_cart_data!="")?$front_cart_data:$cart_data['items'],
                    'upload' => json_encode($t_name),
                    'no_of_stages' => $total_side,
                    'side' => "both",
                    'temp_type' => "main",
                    'template_ids' => json_encode($item_id),
                    'featured' => 0,
                    'tags' => 0,
                    'order' => 0,
                    'tags' =>'best',
                    'designed_by' => $d_id,
                    'color' => $cart_data['color'],
                    'created' => date('Y-m-d H:i:s'),
                    'updated' => date('Y-m-d H:i:s')
                ];
                $data['slug'] = validate_slug($data['slug'], "templates");
                $this->db->insert('templates', $data);
                $item_ids = $this->db->insert_id();
                $this->db->insert('categories_reference', ['category_id' => $this->input->post('category_id'), 'item_id' => $item_ids, 'type' => 'templates']);
            }
            
            $this->session->unset_userdata('designer_cart');
            return true;
        }
        
        public function templates($id){
            if($id){
                $q = $this->db->select("name,screenshot,product_base,image")->from("templates")->where("id", $id)->get();
                return $q->row(); 
            }
        }
        
        public function register($data){
             return $this->db->insert('users',$data);
            
        }
         ///store desiger data//
        public function storeproducts($id,$offset) {
            // $sel = "templates.id,templates.color,templates.designed_by As designer_id,templates.image,templates.name,
            //     templates.slug AS tempSlug,templates.screenshot,products.mrp,products.name as catname,products.slug as base,
            //     products.id As pid , products.extras, products.price, 
            //     users.user_fullname,users.slug,users.id AS user_id,
            //     users.user_image";
            // $sel .= ", IF(templates.side='both', (SELECT tmp1.image as front_screenshot FROM templates tmp1 WHERE tmp1.id=SUBSTRING_INDEX(SUBSTRING_INDEX(templates.template_ids,'front\":',-1),',',1)), '') as front_screenshot, IF(templates.side='both', (SELECT tmp2.image as front_screenshot FROM templates tmp2 WHERE tmp2.id=SUBSTRING_INDEX(SUBSTRING_INDEX(templates.template_ids,'back\":',-1),',',1)), '') as back_screenshot";
            // if(isset($_SESSION['user_id']))
            //     $sel .= ",wishlist.id As w_id, wishlist.type As wtype,wishlist.temp_id As wishproduct";
            $sel = "templates.id,templates.color,templates.side,templates.template_ids,templates.screenshot,templates.slug AS tempSlug,templates.no_of_stages,templates.image,templates.name,products.backSideCharge AS backCharge,templates.designed_by As designer_id,
	     templates.screenshot,products.mrp,products.name as pname,
	     products.id As pid , products.extras, products.price,products.slug As baseslug,users.slug as Uslug,
	     users.user_fullname,users.id AS user_id,designer_charge.price As designerCharge, users.user_image";
	     $sel .= ", IF(templates.side='both', (SELECT tmp1.image as front_screenshot FROM templates tmp1 WHERE tmp1.id=SUBSTRING_INDEX(SUBSTRING_INDEX(templates.template_ids,'front\":',-1),',',1)), '') as front_screenshot, IF(templates.side='both', (SELECT tmp2.image as front_screenshot FROM templates tmp2 WHERE tmp2.id=SUBSTRING_INDEX(SUBSTRING_INDEX(templates.template_ids,'back\":',-1),',',1)), '') as back_screenshot";
	     if(isset($_SESSION['user_id']))
	        $sel .= ",wishlist.id As w_id, wishlist.type As wtype,wishlist.temp_id As wishproduct";
            $this->db->select($sel)
            ->from("templates")
                ->join("products", "templates.product_base = products.id")
                ->join("users", "templates.designed_by = users.id");
            if(isset($_SESSION['user_id']))
                $this->db->join("wishlist"," (templates.id = wishlist.temp_id AND wishlist.user_id=".$_SESSION['user_id'].") ",'LEFT');
            $this->db->join("designer_charge","templates.product_base = designer_charge.p_id",'LEFT')
            ->where(["templates.active" => 1,"templates.designed_by" => $id,'templates.temp_type'=>'main'])->limit(8,$offset);
            $this->db->order_by('templates.id','desc');
            $this->db->group_by('templates.id');
            $data = $this->db->get()->result();
            return $data;
        }
    
        public function mydesign($id,$product_id=FALSE){
	        $sel = "templates.*, products.slug As baseslug, IF(templates.side='both', (SELECT tmp1.image as front_screenshot FROM templates tmp1 WHERE tmp1.id=SUBSTRING_INDEX(SUBSTRING_INDEX(templates.template_ids,'front\":',-1),',',1)), '') as front_screenshot, IF(templates.side='both', (SELECT tmp2.image as front_screenshot FROM templates tmp2 WHERE tmp2.id=SUBSTRING_INDEX(SUBSTRING_INDEX(templates.template_ids,'back\":',-1),',',1)), '') as back_screenshot";
            $where = array('templates.designed_by'=>$id,'templates.active!='=>2,"templates.temp_type"=>"main");
            if($product_id) {
                $where['templates.product_base'] = $product_id;
            }
            $data = $this->db->select($sel)->where($where)
            ->join("products", "templates.product_base = products.id")
            ->order_by('templates.id','desc')
            ->get("templates")->result();
            return $data;
         } 
         
        public function updatestatus($id,$data){
            if(isset($_SESSION['designer_id'])){
                return $this->db->where('id',$id)->update('templates',$data);
            }
        }

        public function count_orderbytemplate($tmp_id="") {
            if($tmp_id=="")
                return 0;
            $num_rows = $this->db->group_start()->or_where('status', 'dispatched')->or_where('status', 'completed')->group_end()->like('design_by', '"'.$tmp_id.'"')->get("order_products")->num_rows();
            // return $this->db->or_where('status', 'dispatched')->or_where('status', 'completed')->like('design_by', "%".'"'.$tmp_id.'"'."%")->get("order_products")->num_rows();
            return $num_rows;
        }
        function featuredDesigner($id,$data){
            return $this->db->where('id',$id)->update("users",$data);
        }
        
    }
?>