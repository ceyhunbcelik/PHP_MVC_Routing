<?php

require_once(__DIR__ . '/App/Atlas.php');

$mode = 'DEVELOPMENT';
$domain = 'https://www.ceyhunbase.com/';
$default_subdomain = 'www';

# Directory
define('PATH', realpath('.'));
define('SUBFOLDER', Atlas::subfolder());
define('ROUTE', Atlas::route());

# URL
define('URL', Atlas::url());
define('SUBDOMAIN', $mode == 'DEVELOPMENT' ? $default_subdomain : Atlas::subdomain());

# API
define('API_MAIN_KEY', 'API_MAIN_ACCESS');

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
