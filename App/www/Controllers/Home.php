<?php

class Home extends Controller{

    public function index(){

        $lat = isset($_GET['lat']) && !empty($_GET['lat']) && is_float(floatval($_GET['lat'])) ? $_GET['lat'] : '37.035339';
        $lon = isset($_GET['lon']) && !empty($_GET['lon']) && is_float(floatval($_GET['lon'])) ? $_GET['lon'] : '27.43029';

        $cities    = FETCH::GET(json('cities'));
        $distances = self::distance($lat, $lon, $cities);

        $data = [
            'cities'      => $cities,
            'distances'   => $distances,
            'coordinates' => [
                'lat' => $lat,
                'lon' => $lon
            ]
        ];

        $this -> view('index', $data);
        
    }

    public function distance($lat, $lon, $cities){

        $distance_greater_1000 = [];
        $distance_smaller_1000 = [];

        $i = 0;
        foreach ($cities as $city) {
            
            $theta = $lon - $city['centerLon'];

            $mil = (sin(deg2rad($lat)) * sin(deg2rad($city['centerLat']))) + (cos(deg2rad($lat)) * cos(deg2rad($city['centerLat'])) * cos(deg2rad($theta))); 
            $mil = acos($mil); 
            $mil = rad2deg($mil); 
            $mil = $mil * 60 * 1.1515;

            $km = $mil * 1.609344;

            if($km > 0 && $city['city'] != $city['county']){
                if($km >= 1000){
                    $distance_greater_1000 += [
                        $i => [
                            'county' => $city['county'],
                            'centerLat' => $city['centerLat'],
                            'centerLon' => $city['centerLon'],
                            'distance' => number_format($km, 2),
                        ]
                    ];
                } else{
                    $distance_smaller_1000 += [
                        $i => [
                            'county' => $city['county'],
                            'centerLat' => $city['centerLat'],
                            'centerLon' => $city['centerLon'],
                            'distance' => number_format($km, 2)
                        ]
                    ];
                }
            }

            $i++;
        }

        array_multisort(array_column($distance_smaller_1000, 'distance'), SORT_ASC, $distance_smaller_1000);
        array_multisort(array_column($distance_greater_1000, 'distance'), SORT_ASC, $distance_greater_1000);
        
        return empty($distance_smaller_1000) ? array_slice($distance_greater_1000, 0, 3) : array_slice($distance_smaller_1000, 0, 3);
    }

}