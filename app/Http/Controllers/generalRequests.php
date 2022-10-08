<?php

namespace App\Http\Controllers;

use Stevebauman\Location\Facades\Location;

class generalRequests extends Controller
{
    public function recentRequests(){
        return response()->json([
            'data' => Location::get(request()->ip()),
            'data1' => Location::get('39.40.83.48')
        ]);
    }
}
