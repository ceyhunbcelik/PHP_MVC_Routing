<?php


/*
$url = '/user/ceyhun';
preg_match('@^/user/([0-9a-zA-Z]+)$@', $url, $parameters);
print_r($parameters);
*/



foreach(glob(__DIR__ . '/App/Classes/*.php') as $routerFile)
  require_once($routerFile);

$subdomain = 'www';

switch ($subdomain) {
  case 'www':
    require_once(__DIR__ . '/App/Subdomains/www/init.php');
  break;
}
