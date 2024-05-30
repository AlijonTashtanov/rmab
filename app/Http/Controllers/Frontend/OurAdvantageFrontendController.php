<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\OurAdvantage;
use Illuminate\Http\Request;

class OurAdvantageFrontendController extends Controller
{
    public function index()
    {

        $activeAdvantages=OurAdvantage::where('status', OurAdvantage::$status_active)->paginate(10);

        return view('frontend.our-advantages.index',compact('activeAdvantages'));
    }
}
