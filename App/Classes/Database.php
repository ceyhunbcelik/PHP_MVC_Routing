<?php

class Database{

  protected $db;

  public function __construct(){

    $config = [
      'host' => 'localhost',
      'name' => 'ceyhunbase',
      'user' => 'root',
      'pass' => 'root'
    ];

    try {
      $this -> db = new PDO("mysql:host={$config['host']};dbname={$config['name']}", $config['user'], $config['pass']);
      $this -> db -> exec("SET NAMES 'utf8'; SET CHARSET 'utf8'");
    } catch (PDOException $e) {
      echo $e -> getMessage();
    }

  }

}
