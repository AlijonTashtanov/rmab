<?php

namespace App\Services\Api;

use App\Models\Post;
use App\Traits\Status;

class PostService extends AbstractService
{
    protected $model = Post::class;

    /**
     * @return mixed
     */
    public function latestActiveLimitIndex()
    {
        return $this->model::where('status', Status::$status_active)->orderBy('created_at', 'desc')->limit(12)->get();
    }
}
