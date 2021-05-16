<?php

class CURL{

  public static function GET($url){
    $ch = curl_init();

    curl_setopt_array($ch, [
      CURLOPT_URL => $url,
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_REFERER => 'https://www.google.com/',
      CURLOPT_USERAGENT => $_SERVER['HTTP_USER_AGENT']
    ]);

    $source = json_decode(curl_exec($ch), true);

    curl_close($ch);

    return $source;

  }

  public static function POST($url, $data){
    $ch = curl_init();

    curl_setopt_array($ch, [
      CURLOPT_URL => $url,
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_POST => true,
      CURLOPT_POSTFIELDS => $data
    ]);

    $source = json_decode(curl_exec($ch), true);

    curl_close($ch);

    return $source;

  }

}
