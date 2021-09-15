<?php

function upload_file($data, $file_size = 2, $file_formats = NULL){
    
    $file_formats = $file_formats ? $file_formats : ['image/jpeg', 'image/jpg', 'image/png'];
    $file_size    = (1024 * 1024) * $file_size; // default 2MB

    if($data['file']['error'] == 4)
        return [
            'status'  => 0,
            'message' => 'warning_select_file'
        ];

    if(!is_uploaded_file($data['file']['tmp_name']))
        return [
            'status'  => 0,
            'message' => 'error_upload_file'
        ];

    if(!in_array($data['file']['type'], $file_formats))
        return [
            'status'  => 0,
            'message' => 'invalid_format'
        ];

    if($data['file']['size'] > $file_size)
        return [
            'status'  => 0,
            'message' => 'warning_size_exceeds'
        ];
    
    $extension = explode('/', $data['file']['type'])[1];
    $uniq_name = md5(time() . uniqid()) . '.' . $extension;
    $where_to  = $data['folder'] . '/' . $uniq_name;

    $upload = move_uploaded_file($data['file']['tmp_name'], $where_to);

    if(!$upload)
        return [
            'status'  => 0,
            'message' => 'error_unexpected'
        ];
    
    return [
        'status'    => 1,
        'message'   => 'pp_uploaded',
        'uniq_name' =>  $uniq_name
    ];

}