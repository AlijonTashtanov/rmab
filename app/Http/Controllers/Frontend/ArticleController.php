<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::where('status', Article::$status_active)->paginate(6);

        return view('frontend.articles.index',compact('articles'));
    }
    public function detail($id)
    {
        $article = Article::findOrFail($id);

        return view('frontend.articles.detail',compact('article'));
    }
    public function application()
    {
        return view('frontend.corruption-application.index');
    }
}
