<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Pagination\Paginator;

class NewsController extends Controller
{
    public function index()
    {
        Paginator::useBootstrap();

        $activeNews = Post::where('status', Post::$status_active)
            ->orderBy('created_at', 'desc')
            ->paginate(10);

        return view('frontend.news.index', compact('activeNews'));
    }
}
