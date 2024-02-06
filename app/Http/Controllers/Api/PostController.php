<?php

namespace App\Http\Controllers\Api;

use App\Http\Resources\Api\PostResource;
use App\Models\Post;
use App\Services\Api\PostService;
use App\Traits\Status;
use Illuminate\Http\JsonResponse;

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

    /**
     * @return array|JsonResponse
     */
    public function search()
    {
        $items = $this->resource::collection($this->service->search(request()->all()));

        if ($items->isNotEmpty()) {

            $data = [
                'news' => $items,
                'pagination' => [
                    'total' => $items->total(),
                    'per_page' => $items->perPage(),
                    'current_page' => $items->currentPage(),
                    'last_page' => $items->lastPage(),
                    'from' => $items->firstItem(),
                    'to' => $items->lastItem(),
                ],
            ];


            return $this->sendResponse(true, 'success', 200, $data);
        }
        return $this->sendResponse(false, 'Data not found', 200, $items);
    }

    /**
     * @return array|JsonResponse
     */
    public function all()
    {
        $items = $this->resource::collection($this->service->all());

        if ($items->isNotEmpty()) {

            $data = [
                'news' => $items,
                'pagination' => [
                    'total' => $items->total(),
                    'per_page' => $items->perPage(),
                    'current_page' => $items->currentPage(),
                    'last_page' => $items->lastPage(),
                    'from' => $items->firstItem(),
                    'to' => $items->lastItem(),
                ],
            ];


            return $this->sendResponse(true, 'success', 200, $data);
        }
        return $this->sendResponse(false, 'Data not found', 200, $items);
    }

    /**
     * @param $id
     * @return array|JsonResponse
     */
    public function show($id)
    {
        $items = $this->resource::make($this->service->show($id));

        if ($items) {
            return $this->sendResponse(true, 'success', 200, $items);
        }
        return $this->sendResponse(false, 'Data not found', 200, $items);
    }
}
