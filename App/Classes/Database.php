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
    } catch (PDOException $e) {
      echo $e -> getMessage();
    }

  }

}
