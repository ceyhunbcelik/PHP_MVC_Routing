<?php

session_start();

$_GET = array_map(function($get){ return htmlspecialchars(trim($get)); }, $_GET);
// $_POST = json_decode(file_get_contents("php://input"),true); # API

$developer = [
  'status'    => 1,
  'domain'    => 'https://www.ceyhunbase.com/',
  'subdomain' => 'developers'
];

require_once(__DIR__ . '/App/Classes/Export.php');
require_once(__DIR__ . '/App/Setups/Export.php');
require_once(__DIR__ . '/App/Functions/Export.php');

switch(SUBDOMAIN){
  case 'www':
    require_once(__DIR__ . '/App/Subdomains/www/init.php');
  break;
  case 'developers':
    require_once(__DIR__ . '/App/Subdomains/developers/init.php');
  break;
}