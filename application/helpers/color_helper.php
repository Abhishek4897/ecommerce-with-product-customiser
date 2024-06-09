<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
function get_color() {
    $CI = get_instance();
    $CI->load->model('Ims_model');
    // Call a function of the model
    $logo = $CI->Ims_model->getcolorbyid();
    return $logo;
}
function get_colorname($code=""){
    if($code=="")
        return "";
    $CI = get_instance();
    $c = $CI->db->where('color_code',$code)->get("colors")->row();
    if($code==1)
        $code = "White";
    return ($c)?$c->color:$code;
}
?>