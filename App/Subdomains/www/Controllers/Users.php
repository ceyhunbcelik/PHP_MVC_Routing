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
    print_r(FETCH::POST_REACT());

    /*
    $json = new stdClass();
    $json -> company = 'Facebook';
    $json -> job = 'Computer Engineer';
    $json -> technologies = 'React.js, PHP, MySQL';

    $collect_json = json_encode($json);

    echo $collect_json;
    */
  }

  public function api(){

    $userListModel = $this -> model('UserList');
    $users = $userListModel -> getAll();

    print_r(json_encode($users, JSON_UNESCAPED_UNICODE));
  }

}
