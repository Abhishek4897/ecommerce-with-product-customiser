<?php
	if (!class_exists('lumise_connector')) {
		//if(file_exists(__DIR__.'php_connector.php')) {
	        require(__DIR__.'/php_connector.php');
// 		}else{
// 		    @header("location: ".$scheme."://$_SERVER[HTTP_HOST]" . $uri. 'installer');
// 		    die();
// 		}
	}

	require(__DIR__.'/inc/helper.php');
	require(__DIR__.'/inc/views.php');
	require_once(__DIR__.'/core/includes/main.php');
	
	$incf = get_included_files();
	$prin = '';
	
	if (count($incf) > 1) {
		for ($i=0; $i<count($incf); $i++) {
			if ($incf[$i] == __FILE__)
				$prin = isset($incf[$i-1]) ? $incf[$i-1] : '';
		}
		if (!empty($prin)) {
			$prin = str_replace(ROOT, ROOT.'theme'.DS, $prin);
			if (is_file($prin)) {
				include $prin;
				exit;
			}
		}
	}