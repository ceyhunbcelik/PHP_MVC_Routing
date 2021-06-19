<?php

$available_languages = ['tr', 'en'];
$language_library = require_once(PATH . '/App/Module/Language/language_library.php');

function language(){

  if(isset($_GET['lang'])){
  
    global $available_languages;

    $get = mb_strtolower($_GET['lang']);
    $lang = in_array($get, $available_languages) ? $get : 'tr';

    $_SESSION['LANGUAGE'] = $lang;
  }

  if(!isset($_SESSION['LANGUAGE'])){
    $_SESSION['LANGUAGE'] = 'tr';
  }

  return $_SESSION['LANGUAGE'];
}

function translate($param, $lang = NULL){
  
  global $language_library;

  $lang = is_null($lang) ? language() : $lang;

  return isset($language_library[$param]) ? $language_library[$param][$lang] : $language_library['invalid_translate'][$lang];

}