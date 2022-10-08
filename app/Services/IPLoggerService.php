<?php

namespace App\Services;

use Stevebauman\Location\Facades\Location;

class IPLoggerService{
    public static function index(){
        $data = Location::get(request()->ip());
        if($data)
           \App\Models\Location::insert([
               'ip' => $data->ip,
               'countryName' => $data->countryName,
               'countryCode' => $data->countryCode,
               'regionCode' => $data->regionCode,
               'regionName' => $data->regionName,
               'cityName' => $data->cityName,
               'zipCode' => $data->zipCode,
               'isoCode' => $data->isoCode,
               'postalCode' => $data->postalCode,
               'latitude' => $data->latitude,
               'longitude' => $data->longitude,
               'metroCode' => $data->metroCode,
               'areaCode' => $data->areaCode,
               'timezone' => $data->timezone,
           ]);
    }
}
