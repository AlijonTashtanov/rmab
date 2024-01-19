<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\Api\HomeBannerResource;
use App\Services\Api\HomeBannerService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class HomeBannerController extends AbstractController
{
    /**
     * @var string
     */
    protected $resource = HomeBannerResource::class;

    /**
     * @var string
     */
    protected $service = HomeBannerService::class;

    /**
     * @return array|JsonResponse
     */
    public function index()
    {
        $query = $this->service->index();

        if (!$query) {
            return $this->sendResponse(false, 'Data not found', 200);
        }

        $items = $this->resource::collection($query);

        if ($items) {
            return $this->sendResponse(true, 'success', 200, $items);
        }
    }
}
