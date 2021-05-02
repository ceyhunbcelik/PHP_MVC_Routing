<?php

class Security{

  public static function Session($user_id, $user_status, $user_language){

    if($user_status == 2){
      $_SESSION['USER_ID']       = $user_id;
      $_SESSION['USER_LANGUAGE'] = $user_language;
      redirect('dashboard');
    } else{
      session_destroy();
      redirect();
    }

  }

  public static function Token(){

    if(!isset($_POST['_token'])){
      die('Hello hacker :) Fuck off!');
    }

    if($_POST['_token'] != $_SESSION['_token']){
      die('Hello hacker :) Fuck off!');
    }

  }

  public static function In(){
    if(!isset($_SESSION['USER_ID'])) redirect();
  }

  public static function Out(){
    if(isset($_SESSION['USER_ID'])) redirect('dashboard');
  }

}
