<?php

function component($name){
  return PATH . '/App/Subdomains/' . SUBDOMAIN . '/Components/' . $name . '.php';
}

function container($name){
  return PATH . '/App/Subdomains/' . SUBDOMAIN . '/Containers/' . $name . '.php';
}

function route($name){
  return PATH . '/App/Subdomains/' . SUBDOMAIN . '/Routes/' . $name . '.php';
}

function icon($name){
  return URL . '/Public/common/icon/' . strtolower($name) . '.png';
}

function img($name, $subdomain = SUBDOMAIN){
  return URL . '/Public/' . $subdomain . '/img/' . strtolower($name);
}

function css($name, $subdomain = SUBDOMAIN){
  return URL . '/Public/' . $subdomain . '/css/' . strtolower($name) . '.css';
}

function js($name, $subdomain = SUBDOMAIN){
  return URL . '/Public/' . $subdomain . '/js/' . strtolower($name) . '.js';
}

function href($query = NULL){
  return URL . $query;
}

function redirect($query = NULL){
  Header('Location:' . URL . $query);
  exit;
}
