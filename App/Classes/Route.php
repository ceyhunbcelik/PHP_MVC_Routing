<?php

class Route{

  public static function parse_url(){
    return COUNT(ROUTE) == 1 && ROUTE[0] == 'index' ? '/' : '/' . implode('/', ROUTE);
  }

  public static function run($url, $callback, $method = 'GET', $session){

    $request_uri = self::parse_url();

    if($request_uri == $url){
      $session = explode('|', $session);
      intval($session[0]) ? Session::In($session[1]) : Session::Out($session[1]);
    }

    $method = explode('|', strtoupper($method));

    if(in_array($_SERVER['REQUEST_METHOD'], $method)){

      if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        Session::Token();
      }

      $patterns = [
        '{param}' => '([0-9a-zA-Z]+)',
        '{id}'  => '([0-9]+)'
      ];
      
      $url = str_replace(array_keys($patterns), array_values($patterns), $url);
      
      if(preg_match('@^' . $url . '$@', $request_uri, $parameters)){
        unset($parameters[0]);

        if(is_callable($callback)){
          call_user_func_array($callback, $parameters);
          exit;
        }

        $controller = explode('@', $callback);

        $className = explode('/', $controller[0]);
        $className = end($className);

        $controllerFile = PATH . '/App/Subdomains/' . SUBDOMAIN . '/Controllers/' . $controller[0] . '.php';

        if(file_exists($controllerFile)){
          require_once($controllerFile);
          
          call_user_func_array([new $className, $controller[1]], $parameters);
          exit;
        }
      } 
    }
  }
}
