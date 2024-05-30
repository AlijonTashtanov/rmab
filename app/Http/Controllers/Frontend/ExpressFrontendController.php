<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;

class ExpressFrontendController extends Controller
{
   public function index()
   {
       $activeService = Service::orderBy('created_at', 'desc')->first();

       return view('frontend.express.express',compact('activeService'));
   }
   public function detail($id)
   {

       $serviseDetail = Service::findOrFail($id);

       return view('frontend.express.index',compact('serviseDetail'));

   }
}
