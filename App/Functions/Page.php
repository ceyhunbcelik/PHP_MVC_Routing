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

function redirect($query){
  Header('Location:' . URL . $query);
  exit;
}
