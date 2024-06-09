<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
function get_productscount($id){
  $CI = get_instance();
 $r = $CI->db->where(['product_base'=>$id])->get("templates")->result();
  return count($r);
    
}
?>