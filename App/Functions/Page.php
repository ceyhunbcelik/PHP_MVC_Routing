<?php

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

function redirect($query){
  Header('Location:' . SUBFOLDER . $query);
  exit;
}
