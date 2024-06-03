<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\DispatchGeography;
use App\Models\District;
use App\Models\Region;
use App\Models\Service;
use Illuminate\Http\Request;

class LocationController extends Controller
{
    public function getRegions()
    {
        $regions = Region::all();
        return response()->json($regions);
    }

    public function getDistricts($region_id)
    {
        $districts = District::where('region_id', $region_id)->get();

        return response()->json($districts);
    }
    public function service()
    {
        $service = Service::all();

        return response()->json($service);
    }  public function location()
    {
        $location = DispatchGeography::all();

        return response()->json($location);
    }
}
