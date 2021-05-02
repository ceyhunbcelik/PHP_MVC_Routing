<?php

#Routes
function routes($path){

  foreach (glob($path . '*') as $value) {
    $explode_path = explode('/', $value);
    $end_path = end($explode_path);

    isset(explode('.', $end_path)[1]) == 'php'
      ? require_once($value)
      : routes($path . $end_path . '/');

  }
}

//routes(__DIR__ . '/Routes/');


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
