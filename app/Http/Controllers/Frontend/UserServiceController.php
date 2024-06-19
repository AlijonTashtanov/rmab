<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class UserServiceController extends Controller
{
    public function index()
    {
        $activeNews=Post::all();
       return view('frontend.user-service.main',compact('activeNews'));
    }
    public function quality()
    {
        return view('frontend.user-service.my-quality');
    }
    public function detail()
    {
        return view('frontend.user-service.my-quality-detail');
    }
    public function services()
    {
        return view('frontend.user-service.user-service');
    }
    public function servicesDetail()
    {
        return view('frontend.user-service.user-service-detail');
    }
    public function shipping()
    {

        return view('frontend.user-service.about-shipping');
    }
    public function shippingDetail()
    {

        return view('frontend.user-service.about-shipping-detail');
    }
}
