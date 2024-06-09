<?php
    function getProductsSlug(){
        $slug_arr = array("premium-tshirts","mugs","face-masks");
        return $slug_arr;
    }

    function getSlug($slug){
        // $CI = &get_instance();
        $slug_arr = array("premium-tshirts","mugs","face-masks");
        // $proSlug =  $CI->db->where(['slug'=>$slug])->get("products")->num_rows();
        
        if(!in_array($slug, $slug_arr)){
            return 'Front/products/'.$slug;
        } else {
            return 'Front/page_404/'.$slug;
        }
    }
   
    function getid($slug){
        $CI = get_instance();
          $cat = $CI->db->where(['slug'=>$slug])->get('products')->row();
          $id =$cat->id;
          if($id != ""){
              return $id;
          }else{
              return 0;
          }
        }
         function getuserid($slug){
        $CI = get_instance();
          $cat = $CI->db->where(['slug'=>$slug])->get('users')->row();
          $id =$cat->id;
          if($id != ""){
              return $id;
          }else{
              return false;
          }
        }
         function get_id($slug){
          $CI = get_instance();
          $pcat = $CI->db->where(['slug'=>$slug])->get('categories');
          if($pcat->num_rows()>0){
              $id= $pcat->row();
              return $id->id;
          }else{
              return 0;
          }
          return 0;
        }
       function related_product($id){
            $CI = get_instance();
            $q = "select * from templates where templates.id = '$id' OR templates.slug = '$id'";
            $data = $CI->db->query($q)->row();
            return $data;
         }
        function related_base($id){
            $CI = get_instance();
            $q = "select * from products where products.id = '$id'  ";
            $data = $CI->db->query($q)->row();
            return $data;
        }
        function invoice(){
            $CI = get_instance();
            // $q = "select * from invoice-details  ";
            $data = $CI->db->get("invoice-details")->row();
            return $data;
        }
        function currency(){
            $CI = get_instance();
            $data = $CI->db->get("invoice-details")->row();
            return $data->currency;
        }
        function check_wish($id,$uid){
            $CI = get_instance();
            $q = "select * from wishlist where wishlist.temp_id = '$id' AND wishlist.user_id = '$uid' ";
            $data = $CI->db->query($q)->row();
            return $data;
        }
        
        function get_productbase($id){
            $CI = get_instance();
            $q = "select * from products where products.id = '$id'  ";
            $data = $CI->db->query($q)->row();
            return $data;
        }
        function validate_slug($slug, $type="templates") {
            $CI = get_instance();
            $num_rows = $CI->db->get_where($type, ["slug" => $slug])->num_rows();
            if($num_rows>0)
                $slug = validate_slug($slug.rand(00000, 99999), $type);
            return $slug;
        }
        function validate_slug1($slug, $type) {
            return validate_slug($slug, "users");
            // $CI = get_instance();
            // $num_rows = $CI->db->where(["slug" => $slug])->get("users")->num_rows();
            // if($num_rows > 0){
            //     $slug = $slug.rand(00000, 99999);
            // return $slug;
            // }else{
            //     return false;
            // }
        }
        function validate_phone($number){
            $CI = get_instance();
            $num_rows = $CI->db->get_where("users",['user_phone'=>$number])->num_rows();
            if($num_rows > 0){
                return true;
            }else{
                return false;
            }
            
        }
     