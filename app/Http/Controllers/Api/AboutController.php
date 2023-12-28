<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\Api\AboutResource;
use App\Services\Api\AboutService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class AboutController extends AbstractController
{
    protected $service = AboutService::class;

    protected $resource = AboutResource::class;

    /**
     * @return array|JsonResponse
     */
    public function index()
    {
        $items = $this->resource::make($this->service->orderBy());

        if ($items) {
            return $this->sendResponse(true, 'success', 200, $items);
        }
        return $this->sendResponse(false, 'Data not found', 200, $items);
    }
}
