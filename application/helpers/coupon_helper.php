<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
function varify_code($code){
$CI = get_instance();
 $r = $CI->db->where(['code'=>$code,'status'=>1])->get("coupon_list")->num_rows();
   $result =  $CI->db->where(['code'=>$code,'status'=>1])->get("coupon_list")->row();
    if($r > 0){
        return $result;
    }else{
        return false;
    }
}
function varify_coupon_usage($couponLimit,$userLimit,$coupon_id){
   $CI = get_instance();
    $r = $CI->db->where(['coupon_id'=>$coupon_id])->get("coupon_usage")->row();
    $count = $CI->db->where(['coupon_id'=>$coupon_id])->get("coupon_usage")->num_rows();
    if($count >= 0){
        if($count < $couponLimit){
           return true; 
        }else{
            return false;
        }
    }else{
        return false;
    } 
}
function varify_coupon_price($cartprice,$coupon_maximum_price,$coupon_minimum_price){
   $CI = get_instance();
    if($coupon_minimum_price < $cartprice){
         return true;
    }else{
        return false;
    } 
}
function cart_discount($type ,$price,$discount){
    if($type == 'flat'){
        $price  = $price-$discount;
        return $price;
    }else{
        $off = ($price*$discount)/100;
        $price = $price-$off;
        return floor($price);
    }
    
}
function cart_discountprice($type ,$price,$discount){
    if($type == 'flat'){
       return $discount; 
    }else{
        $off = ($price*$discount)/100;
        return floor($off);
    }
    
}
/////get billing address info /////
function get_address(){
         $CI = get_instance();
         $data = $CI->db->where('id',$_SESSION['user_id'])->get("users")->row();
         if($data->house_no!="" && $data->pincode!="" && $data->city!="" && $data->state!=""){
             return 1;
         }else{
             return 0;
         }
}



?>