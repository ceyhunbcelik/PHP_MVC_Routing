<?php

$_GET = array_map(function($get){
  return htmlspecialchars(trim($get));
}, $_GET);

define('PATH', realpath('.'));

function subfolder(){
  if(dirname($_SERVER['SCRIPT_NAME']) === '\\' || dirname($_SERVER['SCRIPT_NAME']) == '/'){
    return null;
  } else{
    $folder = explode('/', PATH);
    $folder = '/' . end($folder);

    return $folder;
  }
}

define('SUBFOLDER', subfolder());

function route(){
  $request = explode("?", $_SERVER['REQUEST_URI']);
  $request = explode('/', $request[0]);

  foreach ($request as $val)
    if(!empty($val))
      $route [] = $val;

  if(SUBFOLDER != '')
    array_shift($route);

  if(!isset($route[0]) || $route[0] == 'direct')
    $route[0] = 'index';

  return $route;
}

define('ROUTE', route());

function url(){
  $protocol = isset($_SERVER['REQUEST_SCHEME']) ? $_SERVER['REQUEST_SCHEME'] : "https";
  $script   = dirname($_SERVER['SCRIPT_NAME']) == "\\" || dirname($_SERVER['SCRIPT_NAME']) == '/'
    ? '/'
    : dirname($_SERVER['SCRIPT_NAME']) . '/';

  return $protocol . '://' . $_SERVER['HTTP_HOST'] . $script;
}

define('URL', url());

# Classes
foreach(glob(__DIR__ . '/Classes/*.php') as $routerFile){
  require_once($routerFile);
}

# Functions
foreach(glob(__DIR__ . '/Functions/*.php') as $routerFile){
  require_once($routerFile);
}
