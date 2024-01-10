<?php

namespace App\Http\Livewire\Article;

use App\Http\Livewire\BaseLivewire;
use App\Models\Article;

class ArticleTable extends BaseLivewire
{
    public $path = 'article.article-table'; // component view path
    public $model = Article::class; // model
    public $route = 'articles'; // route for actions(CRUD)
}
