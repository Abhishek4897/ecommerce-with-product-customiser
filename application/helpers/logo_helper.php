<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
function logo(){
  
    $CI = get_instance();

    $CI->load->model('Admin_model');

    // Call a function of the model
    $logo = $CI->Admin_model->logo();
    return $logo;
}

function site_setting(){
  
    $CI = get_instance();

    $CI->load->model('Admin_model');

    // Call a function of the model
    $logo = $CI->Admin_model->site_setting();
    return $logo;
}
?>