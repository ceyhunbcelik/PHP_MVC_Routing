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
    print_r(json_encode($_POST, JSON_UNESCAPED_UNICODE));
  }

  public function api(){

    $userListModel = $this -> model('UserList');
    $users = $userListModel -> getAll();

    print_r(json_encode($users, JSON_UNESCAPED_UNICODE));
  }

}
