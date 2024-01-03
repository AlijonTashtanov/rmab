<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\Api\UsefulLinksResource;
use App\Services\Api\UsefulLinkService;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\JsonResponse;

class UsefulLinkController extends AbstractController
{
    /**
     * @var string
     */
    protected $service = UsefulLinkService::class;

    /**
     * @var string
     */
    protected $resource = UsefulLinksResource::class;

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
