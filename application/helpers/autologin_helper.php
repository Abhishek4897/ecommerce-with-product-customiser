<?php
    function autoLoginCheck() {
        $CI = & get_instance();
        $CI->load->library('session');
        if(isset($_COOKIE["loggedin_mobile"]) && !$CI->session->userdata('user_id')):
            $mobile = $_COOKIE["loggedin_mobile"];
            if($mobile!="") {
                $CI->load->model('Home_model');
                $userdata = $CI->Home_model->userbymobile($mobile);
                if($userdata)
                    $CI->Home_model->setUserAsLoggedIn($userdata); //Added for set userdata and sessions.
            }
        endif;
        return true;
    }