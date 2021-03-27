<?php

define('PATH', realpath('.'));

$subdomain = 'www';

foreach(glob(__DIR__ . '/App/Classes/*.php') as $routerFile){
  require_once($routerFile);
}

switch ($subdomain) {
  case 'www':
    require_once(__DIR__ . '/App/Subdomains/www/init.php');
  break;
}
