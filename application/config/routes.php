<?php
defined('BASEPATH') OR exit('No direct script access allowed');
include_once(APPPATH.'/helpers/slug_helper.php');
/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'Home';
$route['category'] = 'Home/category';
$route['login'] = 'Home/login';
$route['sign_up'] = 'Home/sign_up';
$route['store/(:any)'] = 'Home/store/$1';
$route['customize'] = 'Home/customize';
$route['join-us'] = 'Home/join_us';
$route['learn-more'] = 'Home/learn_more';
$route['update_picture'] = 'designer/update_picture';
$route['designer'] = 'designer/start_design';
$route['my_store'] = 'designer/my_store';
$route['start_design'] = 'designer/start_design';
$route['sortable_design'] = 'designer/sortable_design';
$route['my_design'] = 'designer/my_design';
$route['update_design'] = 'designer/update_template';
$route['update_password'] = 'designer/reset_password';
$route['payouts'] = 'designer/payouts';
$route['total_payouts'] = 'designer/total_payouts';
$route['account_details'] = 'designer/account_details';
$route['e_shop'] = 'designer/e_shop';
$route['designer_signup'] = 'Home/designer_signup';
$route['product_detail'] = 'Home/product_detail';
$route['contact'] = 'Home/contact';
$route['collection'] = 'Home/collection';
$route['checkout'] = 'Checkout/checkout';
$route['user_checkout'] = 'Home/user_checkout';
// $route['Checkout'] = 'Checkout/checkout';

$route['shipping'] = 'Checkout/shipping';
$route['order_summery/(:any)'] = 'Checkout/order_summery/$1';
$route['cart'] = 'Home/cart';
$route['wishlist'] = 'Home/wishlist';
$route['payment_method/(:any)'] = 'Checkout/payment_method/$1';
$route['order_status'] = 'Home/order_status';
$route['cancel_orderstatus'] = 'Home/cancel_order';
$route['designer_panel'] = 'Designer/mobile_panel';
$route['privacy_policy'] = 'Home/privacy_policy';
$route['term_condition'] = 'Home/term_condition';
$route['return_policy'] = 'Home/return_policy';
$route['legal'] = 'Home/legal';
$route['disclaimer'] = 'Home/disclaimer';
$route['social_media'] = 'Home/social_media';
$route['user_details'] = 'User/user_details';
$route['user_panel'] = 'User/user_panel';
$route['reset_password'] = 'User/reset_password';
$route['forgot_password'] = 'Home/forget_password';
$route['reset_request/(:any)/(:any)'] = 'Home/reset_request/$1/$2';
$route['shipping_details'] = 'User/shipping_details';
$route['my_orders'] = 'User/my_orders';
$route['user_logout'] = 'Home/logout';
$route['payment'] = 'Checkout/payment';
$route['designer_logout'] = 'Home/designerlogout';

$route['fonts'] = 'Pages/index/fonts';
$route['image'] = 'Pages/index/image';
$route['publish_cart_ajax'] = 'Designer/publish_cart_ajax';
$route['customizer'] = 'Pages/index/editor';
$route['customizer/(:any)'] = 'Pages/index/editor';
$route['admin_customizer'] = 'Pages/index/admin_editor';
$route['admin_customizer/(:any)'] = 'Pages/index/admin_editor';
$route['my_customizer'] = 'Pages/index/designer_editor';
$route['my_customizer/(:any)'] = 'Pages/index/designer_editor';

$route['Designer/(:any)'] = 'Home/store/$1';
foreach(getProductsSlug() as $prod_slug):
    $route[$prod_slug] = 'Front/products/'.$prod_slug;
    $route[$prod_slug.'/(:any)'] =  'Front/product_details/'.$prod_slug.'/$1';
endforeach;
// $route['(:any)'] = getSlug('$1');
$route['/(:any)/(:any)'] =  'Front/product_details/$1/$2';
$route['wallet'] = 'designer/wallet';
$route['withdraw_amount'] = 'designer/withdraw_amount';
$route['total_orders'] = 'designer/total_orders';
$route['total_earning'] = 'designer/total_payouts';
$route['cancel_order/(:any)'] = 'User/cancel_order/$1';
$route['cancel_payment/(:any)'] = 'home/cancel_payment/$1';

$route['404_override'] = '';//Home
$route['translate_uri_dashes'] = FALSE;
