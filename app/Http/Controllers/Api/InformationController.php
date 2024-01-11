<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\Api\InformationResource;
use App\Services\Api\InformationService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class InformationController extends AbstractController
{
    /**
     * @var string
     */
    protected $service = InformationService::class;

    /**
     * @var string
     */
    protected $resource = InformationResource::class;

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
