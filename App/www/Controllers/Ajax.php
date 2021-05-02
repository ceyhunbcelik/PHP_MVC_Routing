<?php

class Ajax{
    public function county(){


        $city_name = $_POST['city_name'];

        $cities = FETCH::GET(json('cities'));

        echo '<option value="">-- İlçe Seçiniz --</option>';

        foreach ($cities as $city){
            if($city['city'] == $city_name && $city['county'] != $city_name){
                echo '<option value="' . $city['county'] . '">' . $city['county'] . '</option>';
            }
        }
        
    }
}   