<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Faq;
use App\Models\Post;
use Illuminate\Http\Request;
use Nette\Utils\Paginator;

class NewsController extends Controller
{
    public function index()
    {
        \Illuminate\Pagination\Paginator::useBootstrap();


        $activeNews = Post::where('status', Post::$status_active)->paginate(10);

        return view('frontend.news.index',compact('activeNews'));
    }
}
