<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Faq;
use App\Models\Post;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        $activeFaqs = Faq::where('status', Faq::$status_active)->get();

        $activeNews = Post::where('status', Post::$status_active)->get();

        return view('frontend.news.index',compact('activeFaqs','activeNews'));
    }
}
