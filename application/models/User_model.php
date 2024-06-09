<?php
    class User_model extends CI_Model {
        //user Data//
public function  userdata(){
    if(isset($_SESSION['user_id'])){
     return $this->db->where(['id'=>$_SESSION['user_id']])->get("users")->row();
    }else{
      return false;  
    }   
    
}
public function  userdataupdate($data){
      if(isset($_SESSION['user_id'])){
       return  $this->db->where(['id'=>$_SESSION['user_id']])->update('users', $data);
    }else{
      return false;  
    }   
}
public function  userbillingaddress($data){
     if(isset($_SESSION['user_id'])){
       return  $this->db->where(['id'=>$_SESSION['user_id']])->update('users', $data);
    }else{
      return false;  
    }   
}
//user location
public function  userlocation(){
      if(isset($_SESSION['user_id'])){
          $id = $_SESSION['user_id'];
        $this->db->select('users.user_fullname As Name,users.user_phone As Phone,users.user_email As Email,user_location.id As Id
        ,user_location.house_no,user_location.city,
        user_location.state,user_location.pincode')
        ->from('users')
        ->join('user_location','users.id=user_location.u_id','left')
        ->where(['users.id'=>$id ,'user_location.status'=>1 ]);
         $query = $this->db->get()->result();
          return $query;
    }else{
      return false;  
    }   
}
public function  userlocationspecific($lid){
      if(isset($_SESSION['user_id'])){
          $id = $_SESSION['user_id'];
        $this->db->select('users.user_fullname As Name,users.user_phone As Phone,user_location.id As Id
        ,user_location.house_no,user_location.city,
        user_location.state,user_location.pincode')
        ->from('users')
        ->join('user_location','users.id=user_location.u_id','left')
        ->where(['users.id'=>$id ,'user_location.status'=>1,'user_location.id'=>$lid ]);
         $query = $this->db->get()->row();
          return $query;
    }else{
      return false;  
    }   
}


public function cancel_order($order_id) {
    if(isset($_SESSION['user_id'])) {
        $check=check_cancel_order($order_id);
        if($check) {
            return 'already_exist';
        } else {
            $data = array(
                'order_id'=>$order_id,
                'status'=>0,
                'created_time'=>date("Y-m-d H:i:s")
            );
            $this->db->insert("cancel_order", $data);
            return 'add';
        }
    } else {
        return false;
    }
}
public function  addloaction($data){
      if(isset($_SESSION['user_id'])){
       return  $this->db->insert("user_location",$data);
    }else{
      return false;  
    }   
}
public function  updateuserlocation($data,$id){
      if(isset($_SESSION['user_id'])){
       return  $this->db->where(['id'=>$id,'status!='=>2])->update('user_location', $data);
    }else{
      return false;  
    }   
}
public function  deletedata($id,$table){
      if(isset($_SESSION['user_id'])){
        return  $this->db->where(['id'=>$id])->update('user_location', ['status'=>2]);
    }else{
      return false;  
    }   
}
///user  order//
public function  orderdata($id=FALSE){
    if(isset($_SESSION['user_id'])){
        if($id){
            return $this->db->where(['id'=>$id])->get("orders")->row();
        }
        else{
          return $this->db->where(['user_id'=>$_SESSION['user_id']])->order_by("id", "desc")->get("orders")->result();   
        }
    } else {
      return false;  
    }   
    
}
///ORDER DETAILS///
public function  orderdetails($order_id){
        return $this->db->where(array('order_id'=>$order_id))->get("order_products")->result();
}

}?>