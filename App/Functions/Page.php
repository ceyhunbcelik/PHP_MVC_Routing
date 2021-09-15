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
  return URL . 'Public/common/icon/' . strtolower($name) . '.png';
}

function img(string $name){
  return URL . 'Public/' . SUBDOMAIN . '/img/' . strtolower($name);
}

function css(string $name){
  return URL . 'Public/' . SUBDOMAIN . '/css/' . strtolower($name) . '.css';
}

function js(string $name){
  return URL . 'Public/' . SUBDOMAIN . '/js/' . strtolower($name) . '.js';
}

function href(string $query = NULL){
  return URL . $query;
}

function redirect(string $query = NULL){
  Header('Location:' . URL . $query);
  exit;
}

function seflink(string $str){
  // character low
  $str = mb_strtolower($str, 'UTF-8');

  // convert turkish character to english character
  $str = str_replace(
    ['ı', 'ğ', 'ü', 'ç', 'ö', 'ş', '#'],
    ['i', 'g', 'u', 'c', 'o', 's', 'sharp'],
    $str
  );

  // convert everything to hyphen except numbers and characters.
  $str = preg_replace('/[^a-z0-9]/', '-', $str);

  // only 1 hyphen
  $str = preg_replace('/-+/', '-', $str);

  // trim for unnecessary hyphen
  return trim($str, '-');
}