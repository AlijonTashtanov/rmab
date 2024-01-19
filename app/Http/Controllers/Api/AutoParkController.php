<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\Api\ArticleResource;
use App\Services\Api\AutoParkService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class AutoParkController extends AbstractController
{
    /**
     * @var string
     */
    protected $service = AutoParkService::class;

    /**
     * @var string
     */
    protected $resource = ArticleResource::class;


    /**
     * @return array|JsonResponse
     */
    public function index()
    {
        $query = $this->service->orderBy();

        if (!$query) {
            return $this->sendResponse(false, 'Data not found', 200);
        }

        $items = $this->resource::make($query);

        if ($items) {
            return $this->sendResponse(true, 'success', 200, $items);
        }
    }

}
