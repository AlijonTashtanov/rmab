<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\Api\PostResource;
use App\Http\Resources\Api\PropResource;
use App\Services\Api\PropService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class PropsController extends AbstractController
{
    protected $service = PropService::class;

    protected $resource = PropResource::class;

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
