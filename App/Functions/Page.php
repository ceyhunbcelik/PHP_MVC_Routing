<?php

function component($name){
  return PATH . '/App/Subdomains/' . SUBDOMAIN . '/Components/' . $name . '.php';
}

function container($name){
  return PATH . '/App/Subdomains/' . SUBDOMAIN . '/Containers/' . $name . '.php';
}

function img($name){
  return URL . '/Public/' . SUBDOMAIN . '/img/' . strtolower($name);
}

function css($name){
  return URL . '/Public/' . SUBDOMAIN . '/css/' . strtolower($name) . '.css';
}

function js($name){
  return URL . '/Public/' . SUBDOMAIN . '/js/' . strtolower($name) . '.js';
}

function href($query){
  return URL . $query;
}

function redirect($query = NULL){
  Header('Location:' . URL . $query);
  exit;
}

function routes($path){

  foreach (glob($path . '*') as $value) {
    $explode_path = explode('/', $value);
    $end_path = end($explode_path);

    isset(explode('.', $end_path)[1]) == 'php'
      ? require_once($value)
      : routes($path . $end_path . '/');

  }
}