<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\Api\PartnerResource;
use App\Services\Api\PartnerService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class PartnerController extends AbstractController
{

    /**
     * @var string
     */
    protected $service = PartnerService::class;

    /**
     * @var string
     */
    protected $resource = PartnerResource::class;

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
