<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\Api\PostResource;
use App\Services\Api\PostService;
use Illuminate\Http\Request;

class PostController extends AbstractController
{
    protected $service = PostService::class;

    protected $resource = PostResource::class;

    /**
     * @return array
     */
    public function latestNews()
    {
        $items = $this->resource::collection($this->service->latestActiveLimitIndex());
        if ($items->isNotEmpty()) {
            return $this->sendResponse(true, 'success', 200, $items);
        }
        return $this->sendResponse(false, 'Data not found', 200, $items);
    }
}
