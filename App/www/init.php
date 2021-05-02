<?php

function selected_route($route){

  function path($file){
    return __DIR__ . '/Routes/' . ucwords($file) . 'Route.php';
  } 

  $route = path($route);

  if(file_exists($route)){
    require_once($route);
  } else{
    require_once(path('Error'));
  }

}

selected_route(ROUTE[0]);
