<?php
    function is_loggedin($type="user") {
        if($type=="user")
            return true;
        else
            return true;
    }

    function login_require($type="user") {
        if($type=="user")
            return true;
        else
            redirect(base_url());
    }