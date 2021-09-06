<?php

class Controller{

  public function view(string $name, array $data = []){
    extract($data);
    require_once(PATH . '/App/Subdomains/' . SUBDOMAIN . '/Views/' . $name . '.php');
    exit;
  }

  public function model(string $name){
    require_once(PATH . '/App/Subdomains/' . SUBDOMAIN . '/Models/' . $name . '.php');
    return new $name();
  }

}
