<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
function is_wishlist($id){
  
    $CI = get_instance();

    $CI->load->model('Editor_model');

    // Call a function of the model
    $logo = $CI->Editor_model->is_wishlist($id);
    return $logo;
}
// function count_wishlist($type){
//     $CI = get_instance();
//     $CI->load->model('Editor_model');
//     // Call a function of the model
//     $logo = $CI->Editor_model->count_wishlist($type);
//     return $logo;
// }
function count_wishlist($type){
      $CI = get_instance();
      $r = $CI->db->where(['type'=>$type,'user_id'=>$_SESSION['user_id']])->get("wishlist")->num_rows();
      return $r;
}
function get_product_details($id){
      $CI = get_instance();
       $logo = $CI->Home_model->get_mrp_price($id);
    return $logo;
}
?>