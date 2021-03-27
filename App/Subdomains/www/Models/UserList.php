<?php

class UserList extends Model{

  public function getAll(){

    return $this -> db -> query('SELECT * FROM admins') -> fetchAll(PDO::FETCH_ASSOC);

  }

}
