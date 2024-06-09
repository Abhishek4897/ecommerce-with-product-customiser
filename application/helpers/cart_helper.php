<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
    function is_cart_exist($cart_id="") {
        if($cart_id=="")
            return false;
        $CI = get_instance();
        $CI->load->database();
        if(isset($_SESSION['user_id'])) {
            $id = $_SESSION['user_id'];
            $count_cart = $CI->db->get_where("user_cart", ["user_id" => $id, "id" => $cart_id])->num_rows();
        } else {
            $cart = $CI->session->userdata("user_cart");
            $count_cart = count($cart)-$cart_id;
        }
        if($count_cart>0)
            return true;
        return false;
    }

    function cart_update($id,$qty,$size){
        $CI = get_instance();
        $r = $CI->db->where(['temp_id'=>$id,'user_id'=>$_SESSION['user_id'],'type'=>"designer",'size'=>$size])->get("user_cart")->row();
        if(count($r)>0) {
            $cart_id=$r->id;
            $q =$r->qty;
            $r = $qty;
            $total_qty = $q+$r;
            $update_data = array(
                'cart_id'=>$cart_id,
                'qty'=>$total_qty,
                'status'=> 'success'
            );
            return $update_data;
        } else {
            $update_data = array(
                'status'=> 'fail'
            );
            return $update_data;
        }
    }

    function cart_update_guest($id,$qty,$size) {
        $CI = get_instance();
        $r = $_SESSION['user_cart'];
        foreach($r as $cart) {
            if($cart['type']=='designer') {
                if($cart['tmp_id']==$id && $cart['size']==$size) {
                    print_r($cart);
                }
            }
        }
    }
    
    function minicart_data() {
        $CI = get_instance();
        if(isset($_SESSION['user_id'])) {
            $id = $_SESSION['user_id'];
            $q = "select * from user_cart  where user_id = '$id' ORDER BY id DESC";
            return $CI->Front_model->arraydata($q);
        } else {
            return $CI->session->userdata("user_cart");
        }
    }

?>