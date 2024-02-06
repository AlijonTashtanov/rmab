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

    /**
     * @return mixed
     */
    public function all()
    {
        return $this->model::where('status', Status::$status_active)->orderBy('created_at', 'desc')->paginate(20);
    }

    /**
     * @return mixed
     */
    public function search(array $data)
    {
        $key = $data['key'] ?? '';

        return $this->model::orWhere('title->'.app()->getLocale(), 'like', '%' . $key . '%')
            ->orWhere('content->'.app()->getLocale(), 'like', '%' . $key . '%')
            ->where('status', Status::$status_active)
            ->orderBy('created_at', 'desc')
            ->paginate(20);
    }
}
