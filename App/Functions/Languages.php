<?php

$lang_list = [
  'tr' => 'Türkçe',
  'en' => 'English'
];

$lang_tr = require_once(PATH . '/App/Module/Language/tr.php');
$lang_en = require_once(PATH . '/App/Module/Language/en.php');

function language(){
  if(isset($_SESSION['lang'])){
    $lang = $_SESSION['lang'];
  } else {
    if(isset($_GET['lang'])){

      global $lang_list;

      $get = mb_strtolower($_GET['lang']);
      $lang = in_array($get, array_keys($lang_list)) ? $get : 'tr';
    } else{
      $lang = 'tr';
    }
  }

  return $lang;
}

function translate($param){

  global $lang_tr,
         $lang_en;

  switch (language()) {
    case 'tr':
      return $lang_tr[$param];
    break;

    case 'en':
      return $lang_en[$param];
    break;
  }
}
