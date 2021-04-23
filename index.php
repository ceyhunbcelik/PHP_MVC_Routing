<?php

$domain = 'https://www.ceyhunbase.com/';

$dev = 1;
$dev_sub = 'www';

define('API_MAIN_KEY', 'API_MAIN_ACCESS');

require_once(__DIR__ . '/App/Atlas.php');

switch(SUBDOMAIN){
  case 'www':
    require_once(__DIR__ . '/App/Subdomains/www/init.php');
  break;
}
