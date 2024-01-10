<?php

namespace App\Http\Controllers\Api;

use App\Http\Resources\Api\ArticleResource;
use App\Services\Api\ArticleService;
use Illuminate\Http\JsonResponse;

class ArticleController extends AbstractController
{
    /**
     * @var string
     */
    protected $service = ArticleService::class;


    /**
     * @var string
     */
    protected $resource = ArticleResource::class;

    /**
     * @return array|JsonResponse
     */
    public function all()
    {
        $items = $this->resource::collection($this->service->all());

        if ($items->isNotEmpty()) {

            return $this->sendResponse(true, 'success', 200, [
                'status' => true,
                'message' => 'success',
                'statusCode' => 200,
                'data' => [
                    'data' => $items,
                    'pagination' => [
                        'total' => $items->total(),
                        'per_page' => $items->perPage(),
                        'current_page' => $items->currentPage(),
                        'last_page' => $items->lastPage(),
                        'from' => $items->firstItem(),
                        'to' => $items->lastItem(),
                    ],
                ]
            ]);
        }
        return $this->sendResponse(false, 'Data not found', 200, $items);
    }

    /**
     * @param $id
     * @return array|JsonResponse
     */
    public function show($id)
    {
        $item = $this->resource::make($this->service->show($id));

        $data = [
            'latestArticles' => $this->resource::collection($this->service->latestActiveLimitIndex($id)),
            'item' => $item
        ];

        if ($item) {
            return $this->sendResponse(true, 'success', 200, $data);
        }
        return $this->sendResponse(false, 'Data not found', 200, $data);
    }
}
