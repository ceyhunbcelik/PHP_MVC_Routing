<?php

function component(string $name){
  return PATH . '/App/Subdomains/' . SUBDOMAIN . '/Components/' . $name . '.php';
}

function container(string $name){
  return PATH . '/App/Subdomains/' . SUBDOMAIN . '/Containers/' . $name . '.php';
}

function route(string $name){
  return PATH . '/App/Subdomains/' . SUBDOMAIN . '/Routes/' . $name . '.php';
}

function icon(string $name){
  return URL . '/Public/common/icon/' . strtolower($name) . '.png';
}

function img(string $name){
  return URL . '/Public/' . SUBDOMAIN . '/img/' . strtolower($name);
}

function css(string $name){
  return URL . '/Public/' . SUBDOMAIN . '/css/' . strtolower($name) . '.css';
}

function js(string $name){
  return URL . '/Public/' . SUBDOMAIN . '/js/' . strtolower($name) . '.js';
}

function href(string $query = NULL){
  return URL . $query;
}

function redirect(string $query = NULL){
  Header('Location:' . URL . $query);
  exit;
}
