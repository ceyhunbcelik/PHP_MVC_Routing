<?php

class SQL{
    protected $insert;
    protected $select;
  
    protected function set(array $column){
        $sql = NULL;

        for($i = 0; $i < count($column); $i++){
            $sql[$i] = $column[$i] . '=:' . $column[$i];
        }

        return ' SET ' . implode(',', $sql);
    }

    protected function insert(string $table, array $column){
        return $this -> insert = 'INSERT INTO ' . $table . self::set($column) . ';';
    }

    protected function select(array $data){
        $table = array_filter(array_keys($data));
        $table = is_array($table) ? implode(',', $table) : $table;

        $tmp = [];
        $column = array_values($data);
        foreach ($column as $key => $value){
            array_push($tmp, implode(',', $value));
        }
        $column = implode(',', $tmp);

        return $this -> select = 'SELECT ' . $column . ' FROM ' . $table;
    }
  
}