<?php

$lang_lib = [
  'tr' => [
    'title'  => 'Türkçe',
    'source' => require_once(PATH . '/App/Module/Language/tr.php')
  ],
  'en' => [
    'title'  => 'English',
    'source' => require_once(PATH . '/App/Module/Language/en.php')
  ]
];

function language(){
  if(isset($_SESSION['USER_LANGUAGE'])){
    $lang = $_SESSION['USER_LANGUAGE'];
  } else {
    if(isset($_GET['lang'])){

      global $lang_lib;

      $get = mb_strtolower($_GET['lang']);
      $lang = in_array($get, array_keys($lang_lib)) ? $get : 'tr';
    } else{
      $lang = 'tr';
    }
  }

  return $lang;
}

function translate($param, $lang = NULL){

  global $lang_lib;

  $lang = is_null($lang) ? language() : $lang;

  return $lang_lib[language()]['source'][$param];

}
