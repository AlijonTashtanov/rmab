<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Prop;
use Illuminate\Http\Request;

class PropFrontendController extends Controller
{
    public function index()
    {

        $activeProps=Prop::where('status', Prop::$status_active)->paginate(4);


        return view('frontend.props.index',compact('activeProps'));
    }
}
