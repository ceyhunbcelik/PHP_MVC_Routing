<?php

class Curl{
  public function index(){

    $source = API::GET(API::URL_MAIN('/users/api'));
    //$source = API::GET('https://jsonplaceholder.typicode.com/users');

    print_r($source);
  }

}
