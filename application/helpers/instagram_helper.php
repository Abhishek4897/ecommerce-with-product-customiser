<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
function get_content($number){
    $api_url = "https://api.anshuwap.com/instagram/arteno_official/{$number}";
    $insta =  file_get_contents($api_url);
    return $insta;
}
?>