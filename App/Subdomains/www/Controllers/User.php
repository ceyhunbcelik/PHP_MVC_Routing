<?php

class User extends Controller{

  public function index($name = null){
    echo "Welcome " . $name;
  }

}
