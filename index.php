<?php

$domain = 'https://www.ceyhunbase.com/';

require_once(__DIR__ . '/App/Atlas.php');

$dev = 1;
$dev_sub = 'www';

define('SUBDOMAIN', $dev ? $dev_sub : subdomain());
define('API_MAIN_KEY', 'API_MAIN_ACCESS');

switch(SUBDOMAIN){
  case 'www':
    require_once(__DIR__ . '/App/Subdomains/www/init.php');
  break;
}
