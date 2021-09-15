<?php

function filter_null($data){
    return strlen($data) != 0 ? $data : 0;
}

function filter_email($data){
    return filter_var($data, FILTER_VALIDATE_EMAIL) ? $data : 0;
}

function filter_language($data){
    global $lang_lib;

    return in_array($data, array_keys($lang_lib)) ? $data : 0;
}

function filter_category_id($data){
    return count($data) > 0 ? implode(',', $data) : 0;
}

function filter_password($password){

    $uppercase = preg_match('@[A-Z]@', $password);
    $lowercase = preg_match('@[a-z]@', $password);
    $number    = preg_match('@[0-9]@', $password);
    $space     = preg_match('@[\s]@' , $password);

    return $uppercase
           && $lowercase
           && $number
           && !$space
           && strlen($password) > 7
           && strlen($password) < 26 ? password_hash($password, PASSWORD_DEFAULT) : 0;
}


function filter_password_compare($password, $password_2){
    return strlen($password) != 0 && $password == $password_2 ? filter_password($password) : 0;
}
