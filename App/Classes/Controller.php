<?php

class Controller{

  public function view($name, $data = []){
    extract($data);
    require_once(PATH . '/App/www/Views/' . $name . '.php');
  }

}
