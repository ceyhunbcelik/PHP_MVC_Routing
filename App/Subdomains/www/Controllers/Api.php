<?php

class Api{

  public function get(){
    $source = FETCH::GET(FETCH::URL_MAIN('/users/api'));

    print_r($source);
  }

  public function post(){
    $source = FETCH::POST(FETCH::URL_MAIN('/users'), $_POST);

    print_r($source['technologies']);
  }

}
