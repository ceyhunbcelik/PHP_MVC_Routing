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

routes(__DIR__ . '/Routes/');
