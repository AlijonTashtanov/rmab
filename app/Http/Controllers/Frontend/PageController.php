<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Models\Page;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function contract()
    {
        $page = Page::where('page_type', Page::$page_contract_conclusion)
            ->orderBy('created_at', 'desc')
            ->first();


        return view('frontend.pages.contract',compact('page'));
    }
    public function quality()
    {
        $page = Page::where('page_type', Page::$page_quality_control)
            ->orderBy('created_at', 'desc')
            ->first();

        return view('frontend.pages.quality',compact('page'));
    }
    public function shipment()
    {
        $page = Page::where('page_type', Page::$page_information_about_shipment)
            ->orderBy('created_at', 'desc')
            ->first();

        return view('frontend.pages.shipment',compact('page'));
    }
    public function service()
    {
        $page = Page::where('page_type', Page::$page_application_services)
            ->orderBy('created_at', 'desc')
            ->first();

        return view('frontend.pages.service',compact('page'));
    }
}
