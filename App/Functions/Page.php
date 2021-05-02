<?php

function container($name){
  return PATH . '/App/www/Containers/' . $name . '.php';
}

function css($name){
  return URL . '/Public/css/' . strtolower($name) . '.css';
}

function js($name){
  return URL . '/Public/js/' . strtolower($name) . '.js';
}

function json($name){
  return URL . '/Public/json/' . strtolower($name) . '.json';
}