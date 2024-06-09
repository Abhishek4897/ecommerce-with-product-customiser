<?php
    class Front_model extends CI_Model {
      ////data in array//
    public function arraydata($que){
        $q = $this->db->query($que);
        $result = $q->result();
        return $result;
    }
    ///data in row//
    public function row_data($que){
         $q = $this->db->query($que);
         $result = $q->row();
         return $result;
    }
    
    public function product_details($id) {
        
           $sel .= "templates.id, templates.color,templates.side,templates.template_ids,templates.slug,templates.no_of_stages,templates.screenshot, templates.product_base, templates.designed_by , templates.image, templates.name, products.attributes, templates.screenshot, templates.description, products.mrp,products.backSideCharge AS backCharge, products.name AS catname, products.extras, products.price,products.id AS pid, users.user_fullname, users.user_image,users.slug as Uslug";
           $sel .= ", IF(templates.side='both', (SELECT tmp1.image as front_screenshot FROM templates tmp1 WHERE tmp1.id=SUBSTRING_INDEX(SUBSTRING_INDEX(templates.template_ids,'front\":',-1),',',1)), '') as front_screenshot, IF(templates.side='both', (SELECT tmp2.image as front_screenshot FROM templates tmp2 WHERE tmp2.id=SUBSTRING_INDEX(SUBSTRING_INDEX(templates.template_ids,'back\":',-1),',',1)), '') as back_screenshot";
        $data = $this->db->select($sel)
        ->from("templates")
        ->join("products", "templates.product_base = products.id")
        ->join("users", "templates.designed_by = users.id")
        ->group_start()
            ->or_where("templates.id", $id)
            ->or_where("templates.slug", $id)
        ->group_end()
        ->where("templates.active", 1)
        ->where("templates.temp_type", 'main')
        ->order_by("templates.id", "asc")
        ->group_by('templates.id')
        ->get()->row();
        return $data;
    }
    
    public function product_designer_list($search="") {
        // $que = "SELECT id, user_fullname FROM users where role = 'designer' limit 10";
        $this->db->select(" DISTINCT(id), user_fullname")->from("users")->where("status !=", "2")->where("role", "designer");
          if($search==""){
          $this->db->where(["role"=>"designer","featured"=>1]);
        }
        if($search!="")
         $this->db->like('user_fullname', $search);
         $this->db->limit(10);
         $this->db->group_by(id); 
        $data =$this->db->get()->result();
        // $data = $this->db->query($que)->result();
        return $data;
    }
    public function related_products($designer_id,$id, $catid="") {
        $this->db->select("templates.id, templates.slug, templates.color, templates.template_ids, templates.side,templates.screenshot,templates.designed_by, templates.image,templates.no_of_stages, templates.name, templates.screenshot, products.mrp, products.backSideCharge AS backCharge,products.name AS catname, products.id AS pid, products.extras, products.price, products.slug as baseslug, users.user_fullname,users.slug as Uslug, users.user_image, users.id AS user_id")
            ->from("templates")
            ->join("products", "templates.product_base = products.id")
            ->join("users", "templates.designed_by = users.id")
            ->where("templates.designed_by", $designer_id)
            ->where("templates.active", 1)
            ->where("templates.temp_type", 'main')
            ->where("templates.id!=", $id);
        if($catid!="")
            $this->db->where("templates.product_base", $catid);
        $related_prod = $this->db->limit(8)->get()->result();
        return $related_prod;
    }

    ///delete //
    public function remove_cart($q) {
        return $this->db->query($q);
    }

    public function get_wishitem($wishid){
        $this->db->where('id',$wishid);
        return  $q = $this->db->get('wishlist')->row();
    }

    public function removewishlist($id){
        $this->db->where('id', $id);
        return $this->db->delete('wishlist');
    }

    ///data insert//
    public function insert_data($data,$table){
           return $this->db->insert($table,$data); 
    }

    public function productdata($id, $limit=8) {
        // $id  = $this->input->post("Id");
        // $q = "SELECT templates.id,templates.color,templates.image,templates.name,templates.screenshot,products.mrp,products.name as pname,products.id As pid , products.extras, products.price, users.user_fullname,users.slug,users.id AS user_id,users.user_image FROM templates JOIN products ON templates.product_base = products.id JOIN users ON templates.designed_by = users.id where templates.product_base = '$id' AND templates.favourite = 1 AND templates.active =1";
        // $data  =   $this->arraydata($q);
        // return $data;
        $sel = "templates.id,templates.color,templates.side,templates.template_ids,templates.screenshot,templates.slug AS tempSlug,templates.no_of_stages,templates.name,products.backSideCharge AS backCharge,templates.designed_by As designer_id,templates.slug as tempslug,
	     templates.image,products.mrp,products.name as pname,
	     products.id As pid , products.extras, products.price,products.slug As baseslug, 
	     users.user_fullname,users.slug as Uslug ,users.id AS user_id,designer_charge.price As designerCharge,
	     users.user_image";
	     $sel .= ", IF(templates.side='both', (SELECT tmp1.image as front_screenshot FROM templates tmp1 WHERE tmp1.id=SUBSTRING_INDEX(SUBSTRING_INDEX(templates.template_ids,'front\":',-1),',',1)), '') as front_screenshot, IF(templates.side='both', (SELECT tmp2.image as front_screenshot FROM templates tmp2 WHERE tmp2.id=SUBSTRING_INDEX(SUBSTRING_INDEX(templates.template_ids,'back\":',-1),',',1)), '') as back_screenshot";
	    if(isset($_SESSION['user_id']))
	        $sel .= ",wishlist.id As w_id, wishlist.type As wtype,wishlist.temp_id As wishproduct";
	       // $this->db->select('image AS screenshot')->from("templates")->where_in('templates.id',$ids)->get()->result()
	     $this->db->select($sel)
            ->from("templates")
             ->limit($limit)
            ->join("products", "templates.product_base = products.id")
            ->join("users", "templates.designed_by = users.id");
            if(isset($_SESSION['user_id']))
                $this->db->join("wishlist"," (templates.id = wishlist.temp_id AND wishlist.user_id=".$_SESSION['user_id'].") ",'LEFT');
            $this->db->join("designer_charge","templates.product_base = designer_charge.p_id",'LEFT')
            ->where(["templates.active" => 1,"templates.product_base" => $id,'templates.temp_type'=>'main', 'templates.favourite'=>1]);
            // $this->db->order_by('templates.id','desc');
            $this->db->order_by('templates.top_in_products', 'desc');
            // if($catid!="")
            //     $this->db->order_by('templates.top_in_category', 'desc');
            $this->db->order_by('templates.favourite', 'desc');
            $this->db->order_by('templates.order', 'asc');
            $this->db->order_by("templates.id", "desc");

            // if(isset($_SESSION['user_id'])){
            // $this->db->where(["wishlist.user_id" => $_SESSION['user_id']]);
            // }
            $this->db->group_by('templates.id');
            $data = $this->db->get()->result();
            return $data;
            // return $this->db->last_query();
    }
    public function productdatacat($id="", $designer="",$price="",$offset="0",$catid=""){
        $limit = 8;
      $sel = "templates.id,templates.color,templates.side,templates.template_ids,templates.screenshot,templates.image,products.backSideCharge AS backCharge,templates.slug AS tempSlug,templates.name,templates.no_of_stages,templates.designed_by As designer_id,
	     products.mrp,products.name as catname,products.slug as baseslug,
	     products.id As pid , products.extras, products.price, 
	     users.user_fullname,users.slug as Uslug,users.id AS user_id,designer_charge.price As designerCharge,
	     users.user_image";
	    $sel .= ", IF(templates.side='both', (SELECT tmp1.image as front_screenshot FROM templates tmp1 WHERE tmp1.id=SUBSTRING_INDEX(SUBSTRING_INDEX(templates.template_ids,'front\":',-1),',',1)), '') as front_screenshot, IF(templates.side='both', (SELECT tmp2.image as front_screenshot FROM templates tmp2 WHERE tmp2.id=SUBSTRING_INDEX(SUBSTRING_INDEX(templates.template_ids,'back\":',-1),',',1)), '') as back_screenshot";
        if(isset($_SESSION['user_id']))
            $sel .= ",wishlist.id As w_id, wishlist.type As wtype,wishlist.temp_id As wishproduct";
        $this->db->select($sel)->from("templates");
            if($price!=""){
                $this->db->order_by("products.price",$price);
            }
             $this->db->limit($limit,$offset)
            ->join("products", "templates.product_base = products.id")
            ->join("users", "templates.designed_by = users.id")
            ->join("categories_reference","templates.id = categories_reference.item_id")
            ->where(["templates.active" => 1,'templates.temp_type'=>'main' ,'categories_reference.type'=>'templates', 'templates.favourite'=>1]);//->order_by('id', 'asc');
            if(isset($_SESSION['user_id']))
                $this->db->join("wishlist"," (templates.id = wishlist.temp_id AND wishlist.user_id=".$_SESSION['user_id'].") ",'LEFT');
            $this->db->join("designer_charge","templates.product_base = designer_charge.p_id",'LEFT');
            $this->db->group_by('templates.id');
            $this->db->order_by('templates.top_in_products', 'desc');
            if($catid!="")
                $this->db->order_by('templates.top_in_category', 'desc');
            $this->db->order_by('templates.favourite', 'desc');
            $this->db->order_by('templates.order', 'asc');
            $this->db->order_by("templates.id", "desc");
        if($id!=""){
            $this->db->where("templates.product_base", $id);
        }
        if($catid!=""){
            $this->db->where("categories_reference.category_id", $catid);
        }
        if($designer!=""){
            $this->db->where_in("templates.designed_by", $designer);
        }
        $data = $this->db->get()->result();
        return $data;
    }
    
        //movewish//
        function movefunction($table1,$table2,$data,$condition){
            if($this->db->where($condition)->delete($table)){
             return $this->db->insert($table2,$data);
            }else{
                return false;
            }
            
        }
        ////order/////
        function order($data) {
            if($this->db->insert('orders',$data)) {
                return  true;
            } else {
                return false;
            }
        }
        function update_order($data, $id) {
            if(!$id || !$data)
                return false;
            if($this->db->update('orders', $data, ['id' => $id])) {
                return  true;
            }
            return false;
        }

    function orderproducts($data){
            if($this->db->insert('order_products',$data)){
                return  true;
            }
            else{
                return false;
            }
            
        }
        function emptycart(){
            if(isset($_SESSION['user_id'])){
                return $this->db->where('user_id',$_SESSION['user_id'])->delete("user_cart");
            }else{
                return false;
            }
        }
        ///cart total price//
        function cart_total(){
            $id = $_SESSION['user_id'];
            $q = "SELECT * FROM user_cart WHERE user_id = '$id '";
            $d = $this->db->query($q);
            return $d->result();
        }
        function wishdata(){
            $id = $_SESSION['user_id'];
      $q = $this->db->select("wishlist.id,wishlist.user_id,wishlist.temp_id,wishlist.base_id,wishlist.type,wishlist.price As custom_price,wishlist.cart_data,products.slug As baseslug,products.mrp,products.price,templates.name,templates.image,templates.color")
      ->from('wishlist')
      ->join('templates','wishlist.temp_id = templates.id', 'left')
      ->join('products','wishlist.base_id = products.id')
        ->where('wishlist.user_id',$id)
        ->get();
        return $q->result();
        
    }
       function sliderData($id){
            $data  = $this->db->select("templates.id,templates.color,templates.side,templates.template_ids,templates.screenshot,templates.image,templates.slug as tempslug,products.id as pid,products.slug as baseslug ")
             ->from("templates")
             ->join("products", "templates.product_base = products.id")
             ->where("templates.id", $id)
             ->get()->row();
              return $data;
    }
      function bothData1($id){
                  $ids = [$id->front,$id->back];
                  $data = $this->db->select('image')->from("templates")->where_in('templates.id',$ids)->get()->result();
                  return $data;
                  
    }
    }
?>