<?php

function filter_name_surname($data){
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

function filter_password($password, $password_2){
    return strlen($password) != 0 && $password == $password_2 ? password_hash($password, PASSWORD_DEFAULT) : 0;
}
