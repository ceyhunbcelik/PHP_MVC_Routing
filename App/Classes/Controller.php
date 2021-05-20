<?php

class Controller{

  public function view($name, $data = []){
    extract($data);
    require_once(PATH . '/App/Subdomains/' . SUBDOMAIN . '/Views/' . $name . '.php');
    exit;
  }

  public function model($name){
    require_once(PATH . '/App/Subdomains/' . SUBDOMAIN . '/Models/' . $name . '.php');
    return new $name();
  }

}
