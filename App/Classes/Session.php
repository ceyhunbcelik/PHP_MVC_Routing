<?php

class Session{

  public static function Token(){

    if(!isset($_POST['_token'])){
      die('What are you looking for?');
    }

    if($_POST['_token'] != $_SESSION['_token']){
      die('Fuck off!');
    }

  }

  public static function In($type){
    switch ($type) {
      case 'ADMIN' : return !isset($_SESSION['ADMIN_ID']) ? redirect() : 1;
    }
  }

  public static function Out($type){
    switch ($type) {
      case 'ADMIN' : return isset($_SESSION['ADMIN_ID']) ? redirect('dashboard') : 1;
    }
  }

}
