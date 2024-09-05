<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
//        $products=['12,13,12,11,13'];
//        foreach ($products as $key=>$product) {
//            $singlePoduct = $product * $key;
//            $overallTotal += $totalPrice;
//        }
        $activeAbout = About::orderBy('created_at', 'desc')->first();

        return view('frontend.about-us.index',compact('activeAbout'));
    }
}
