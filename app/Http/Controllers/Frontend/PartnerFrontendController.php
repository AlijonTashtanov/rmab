<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Partner;
use Illuminate\Http\Request;

class PartnerFrontendController extends Controller
{
    public function index()
    {
        $activePartners=Partner::where('status', Partner::$status_active)->paginate(4);

        return view('frontend.partners.index',compact('activePartners'));
    }
}
