<?php

function upload_file($data, $file_size = 2, $file_formats = NULL){
    
    $file_formats = $file_formats ? $file_formats : ['image/jpeg', 'image/jpg', 'image/png'];
    $file_size    = (1024 * 1024) * $file_size; // default 2MB

    if($data['FILE']['error'] == 4)
        return [
            'STATUS'  => 0,
            'MESSAGE' => 'warning_select_file'
        ];

    if(!is_uploaded_file($data['FILE']['tmp_name']))
        return [
            'STATUS'  => 0,
            'MESSAGE' => 'error_upload_file'
        ];

    if(!in_array($data['FILE']['type'], $file_formats))
        return [
            'STATUS'  => 0,
            'MESSAGE' => 'invalid_format'
        ];

    if($data['FILE']['size'] > $file_size)
        return [
            'STATUS'  => 0,
            'MESSAGE' => 'warning_size_exceeds'
        ];
    
    $extension = explode('/', $data['FILE']['type'])[1];
    $uniq_name = md5(time() . uniqid()) . '.' . $extension;
    $where_to  = files_path($data['FOLDER'], $data['CODE']) . '/' . $uniq_name;

    $upload = move_uploaded_file($data['FILE']['tmp_name'], $where_to);

    if(!$upload)
        return [
            'STATUS'  => 0,
            'MESSAGE' => 'error_unexpected'
        ];
    
    return [
        'STATUS'    => 1,
        'MESSAGE'   => 'pp_uploaded',
        'UNIQ_NAME' =>  $uniq_name
    ];

}