<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Banner;
use App\Models\Faq;
use App\Models\HomeBanner;
use App\Models\Post;
use App\Models\Service;
use App\Models\UsefulLink;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        $activeBanners = Banner::where('status', Banner::$status_active)
            ->orderBy('created_at', 'desc')
            ->get();

        $activeServices = Service::where('status', Service::$status_active)
            ->orderBy('created_at', 'desc')
            ->get();

        $activeHomeBanners = HomeBanner::where('status', HomeBanner::$status_active)
            ->orderBy('created_at', 'desc')
            ->get();

        $activeAbout = About::orderBy('created_at', 'desc')->first();

        $activeNews = Post::where('status', Post::$status_active)
            ->orderBy('created_at', 'desc')
            ->limit(12)
            ->get();

        $activeLinks = UsefulLink::where('status', UsefulLink::$status_active)->get();

        return view('frontend.main.index',
            compact(
                'activeBanners',
                'activeServices',
                'activeHomeBanners',
                'activeAbout',
                'activeNews',
                'activeLinks',

            ));
    }
}
