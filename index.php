<?php

require_once(__DIR__ . '/App/Atlas.php');

$_GET = array_map(function($get){
  return htmlspecialchars(trim($get));
}, $_GET);

$domain = 'https://www.ceyhunbase.com/';
$mode = 'DEVELOPMENT';
$default_subdomain = 'www';

session_start();

define('PATH', realpath('.'));
define('SUBFOLDER', Atlas::subfolder());
define('URL', Atlas::url());
define('SUBDOMAIN', $mode == 'DEVELOPMENT' ? $default_subdomain : Atlas::subdomain());

$route = Atlas::route();

# Classes
foreach(glob(__DIR__ . '/App/Classes/*.php') as $routerFile){
  require_once($routerFile);
}

# Functions
foreach(glob(__DIR__ . '/App/Functions/*.php') as $routerFile){
  require_once($routerFile);
}

# Web
switch (SUBDOMAIN) {
  case 'www':
    require_once(__DIR__ . '/App/Subdomains/www/init.php');
  break;
}
