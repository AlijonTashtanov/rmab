<?php

namespace App\Http\Livewire\Post;

use App\Http\Livewire\BaseLivewire;
use App\Models\Post;

class PostTable extends BaseLivewire
{
    public $path = 'post.post-table'; // component view path
    public $model = Post::class; // model
    public $route = 'posts'; // route for actions(CRUD)
}
