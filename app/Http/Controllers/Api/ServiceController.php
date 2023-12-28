<?php

namespace App\Http\Controllers\Api;

use App\Http\Resources\Api\ServiceResource;
use App\Services\Api\ServiceService;
use Illuminate\Http\JsonResponse;

class ServiceController extends AbstractController
{
    protected $service = ServiceService::class;

    protected $resource = ServiceResource::class;

    /**
     * @return array|JsonResponse
     */
    public function index()
    {
        $items = $this->resource::collection($this->service->activeIndex());
        if ($items->isNotEmpty()) {
            return $this->sendResponse(true, 'success', 200, $items);
        }
        return $this->sendResponse(false, 'Data not found', 200, $items);
    }
}
