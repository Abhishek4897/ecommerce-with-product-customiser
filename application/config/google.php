
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------
|  Google API Configuration
| -------------------------------------------------------------------
| 
| To get API details you have to create a Google Project
| at Google API Console (https://console.developers.google.com)
| 
|  client_id         string   Your Google API Client ID.
|  client_secret     string   Your Google API Client secret.
|  redirect_uri      string   URL to redirect back to after login.
|  application_name  string   Your Google application name.
|  api_key           string   Developer key.
|  scopes            string   Specify scopes
*/
$config['google']['client_id']        = '14250997114-ok0j2lrvsd9bcb5gbqpmpsa44eoubih5.apps.googleusercontent.com';
$config['google']['client_secret']    = 'hto35sPrDEhjP-Nj6u4e8vc6';
$config['google']['redirect_uri']     = base_url('Google/index');
$config['google']['application_name'] = 'Arteno';
$config['google']['api_key']          = '';
$config['google']['scopes']           = array();