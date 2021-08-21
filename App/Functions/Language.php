<?php

$available_languages = [
  'tr' => 'Türkçe',
  'en' => 'English'
];

$language_library = require_once(PATH . '/App/Module/Data/language_library.php');

function language(){

  global $available_languages;

  if(isset($_GET['lang'])){
    $get = mb_strtolower($_GET['lang']);
    $lang = in_array($get, array_keys($available_languages)) ? $get : 'tr';
  } else{
    $browser_lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
    $lang = in_array($browser_lang, array_keys($available_languages)) ? $browser_lang : 'en';
  }

  return $lang;
}

function translate($param, $lang = NULL){
  
  global $language_library;

  $lang = is_null($lang) ? (isset($_SESSION['LANGUAGE']) ? $_SESSION['LANGUAGE'] : language()) : $lang;

  return isset($language_library[$param]) ? $language_library[$param][$lang] : $language_library['invalid_translate'][$lang];

}