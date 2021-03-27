<?php

class Route{

  public static function parse_url(){
    $dirname = dirname($_SERVER['SCRIPT_NAME']);
    $basename = basename($_SERVER['SCRIPT_NAME']);
    $request_uri = str_replace([$dirname, $basename], null, $_SERVER['REQUEST_URI']);
    return $request_uri;
  }

  public static function run($url, $callback, $method = 'GET'){

    $request_uri = self::parse_url();

    if(preg_match('@^' . $url . '$@', $request_uri, $parameters)){
      if(is_callable($callback)){
        call_user_func_array($callback, $parameters);
      }
    }

  }

}
