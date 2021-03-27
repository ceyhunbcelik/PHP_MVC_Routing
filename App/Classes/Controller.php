<?php

class Controller{

  public function view($name, $data = []){

    global $subdomain;

    extract($data);
    require_once(PATH . '/App/Subdomains/' . $subdomain . '/Views/' . $name . '.php');
  }

  public function model($name){

    global $subdomain;

    require_once(PATH . '/App/Subdomains/' . $subdomain . '/Models/' . $name . '.php');
    return new $name();
  }

}
