<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\AutoPark;
use Illuminate\Http\Request;

class AutoparkFrontendController extends Controller
{
    public function index()
    {
        $activeAutoparks = AutoPark::paginate(4);

        return view('frontend.autoparks.index',compact('activeAutoparks'));
    }
}
