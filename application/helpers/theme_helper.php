<?php
    function theme($file = '', $http = false) {
		if ($http === false)
			return is_file(ROOT.'theme'.DS.$file) ? ROOT.'theme'.DS.$file : ROOT.$file;	
		else return is_file(ROOT.'theme'.DS.$file) ? SITE_URL.'theme/'.$file : SITE_URL.$file;
	}
	function check_file() {
		return $ref='yes i can';
	}
	
	function include_theme($file = '', $http = false) {
		if(theme($file, $http))
		    include_once(theme($file, $http));
		return true;
	}
	
	function load_views_tpl($tpl_file = "") {
	    $tpl_path = "application/third_party/editor/views";
	    $file = ($tpl_file=="")?:$tpl_file.".tpl.php";
	    $tpl_uri = is_file(ROOT.$tpl_path.DS.$file) ? ROOT.$tpl_path.DS.$file : '';
	    if($tpl_uri != "")
	        include_once($tpl_uri);
	    return true;
	}
	
	function get_editor_cart_item_file( $filename ) {
	    $upload_path = ROOT.'/uploads/';
		@ini_set('memory_limit','5000M');
		$path = $upload_path . 'user_data'. DS . $filename . '.tmp';
		if (@file_exists($path)) {
			$data = json_decode(file_get_contents($path), 1);
			$data['screenshots'] = json_decode(base64_decode($data['screenshots']), 1);
			return $data;
		}else return null;
	}
	
// 	function esc($name = '', $default = '') {
// 		$CI = &get_instance();
//     	$uri1 = $CI->uri->segment(1);
//     	$uri2 = $CI->uri->segment(2);
//     	return htmlspecialchars(($uri1==$name) ? $uri2 : $default);
// 	}