<?php

namespace App\Http\Controllers;

use App\UserLocation;

use Illuminate\Http\Request;

use App\Http\Requests;

class UserLocationController extends Controller
{
    public function locateUser(Request $request){


        $test = new UserLocation;
        $test->lat = $request->lat;
        $test->lng = $request->lng;
        $test->save();

        $lat=$request->lat;
    	$lng=$request->lng;
        
    	$usr=UserLocation::whereBetween('lat',[$lat-0.01, $lat+0.01])->whereBetween('lng',[$lng-0.01, $lng+0.01])->get();

    	return $usr;

    }
}



