<?php

class FETCH{

  public static function URL_MAIN($query, $api = API){
    return $api . $query . '/' . API_MAIN_KEY;
  }

  public static function GET($api){
    $ch = curl_init();

    curl_setopt_array($ch, [
      CURLOPT_URL => $api,
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_REFERER => 'https://www.google.com/',
      CURLOPT_USERAGENT => $_SERVER['HTTP_USER_AGENT']
    ]);

    $source = json_decode(curl_exec($ch), true);

    curl_close($ch);

    return $source;

  }

  public static function POST($api, $data){
    $ch = curl_init();

    curl_setopt_array($ch, [
      CURLOPT_URL => $api,
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_POST => true,
      CURLOPT_POSTFIELDS => $data
    ]);

    $source = json_decode(curl_exec($ch), true);

    curl_close($ch);

    return $source;

  }

}
