<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;

class ExpressDetailFrontendController extends Controller
{
    public function index($id)
    {
        $serviseDetail = Service::findOrFail($id);
//        dd($servises);
        return view('frontend.express-detail.index',compact('serviseDetail'));
    }
}
