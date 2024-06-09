<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
function default_designer_image() {
    return base_url('assets/images/artenologo.png');
}
function designer_profile($d_id){
    $CI = get_instance();
    $CI->load->model('Designer_model');
    // Call a function of the model
    $data = $CI->Designer_model->designer_profile($d_id);
    return $data;
}
function earnings($d_id){
    $CI = get_instance();
    $CI->load->model('Designer_model');
    // Call a function of the model
    $data = $CI->Designer_model->earnings($d_id);
    return $data;
}
function select_saledata($d_id){
    $CI = get_instance();
    $CI->load->model('Designer_model');
    // Call a function of the model
    $data = $CI->Designer_model->select_saledata($d_id);
    return $data;
}
function payout_data($d_id,$sales){
    $CI = get_instance();
    $CI->load->model('Designer_model');
    // Call a function of the model
    $data = $CI->Designer_model->payout_data($d_id,$sales);
    return $data;
}

function count_order($d_id, $base_id=""){
    $CI = get_instance();
    $CI->load->model('Designer_model');
    // Call a function of the model
    $data = $CI->Designer_model->count_order($d_id, $base_id);
    return $data;
}
function design($d_id,$p_id=FALSE){
    $CI = get_instance();
    $CI->load->model('Designer_model');
    // Call a function of the model
    if($p_id){
        $data = $CI->Designer_model->mydesign($d_id,$p_id);
        return $data;
    }else{
        $data = $CI->Designer_model->mydesign($d_id);
        return $data;
    }
}
function payout($d_id){
    $CI = get_instance();
    $CI->load->model('Designer_model');
    // Call a function of the model
    $data = $CI->Designer_model->all_payouts($d_id);
    return $data;
}
function payment_details($d_id){
    $CI = get_instance();
    $CI->load->model('Designer_model');
    // Call a function of the model
    $data = $CI->Designer_model->payment_details($d_id);
    return $data;
}

function all_payout_requests($d_id) {
    $CI = get_instance();
    $CI->load->model('Designer_model');
    // Call a function of the model
    $data = $CI->Designer_model->all_payout_requests($d_id);
    return $data;
}

function wallet_amt($d_id){
    $CI = get_instance();
    $CI->load->model('Designer_model');
    // Call a function of the model
    $data = $CI->Designer_model->wallet_amt($d_id);
    return $data;
}

function next_payout_target($d_id) {
    $payouts_slab = array("5" => "1.5", "10" => "2", "20" => "2.5", "30" => "3", "40" => "4", "50" => "5");//"1" => "1", 
    $current_sale = wallet_amt($d_id)->total_qty;
    $next_sale = 5;
    foreach($payouts_slab as $slab=>$tr):
        if($current_sale<$slab):
            $next_sale = $slab;
            break;
        endif;
    endforeach;
    if($next_sale==5):
        // $target = "";
        $target = "5 sales to go for 1.5X";
    else:
        $sales = $next_sale - $current_sale;
        $t_s = ($sales>1)?"s":"";
        $target = $sales." sale".$t_s." to go for ".$payouts_slab[$next_sale]."X";
    endif;
    return $target;    
}

function designer_charge($id){
    $CI = get_instance();
    $data = $CI->db->where('p_id',$id)->get("designer_charge")->row();
    return $data;
}
function get_ordersBytemplates($tmp_id){
    $CI = get_instance();
    $CI->load->model('Designer_model');
    // Call a function of the model
    $data = $CI->Designer_model->count_orderbytemplate($tmp_id);
    return $data;
}
function validate_featured($prod_id=""){
    $CI = get_instance();
    $CI->load->model('Admin_model');
    $data = $CI->Admin_model->featuredTemplatesCount($prod_id);
    return $data;
}
function validate_featuredCategory($prod_id="", $cat_id=""){
    $CI = get_instance();
    $CI->load->model('Admin_model');
    $data = $CI->Admin_model->featuredTemplatesCountCategory($prod_id, $cat_id);
    return $data;
}

?>