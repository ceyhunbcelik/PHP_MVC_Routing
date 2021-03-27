<?php

class Users extends Controller{

  public function index(){

    $userListModel = $this -> model('UserList');
    $users = $userListModel -> getAll();

    $this -> view('Users', [
      'users' => $users
    ]);
  }

  public function post(){
    print_r($_POST);
  }

}
