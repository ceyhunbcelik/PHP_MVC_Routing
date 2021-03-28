<?php

class Fetch{
  public function index(){

    $source = FETCH::GET(FETCH::URL_MAIN('/users/api'));
    //$source = FETCH::GET('https://jsonplaceholder.typicode.com/users');


    print_r($source);
  }

}
