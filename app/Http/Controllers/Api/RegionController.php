<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\Api\RegionResource;
use App\Services\Api\RegionService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class RegionController extends AbstractController
{
    /**
     * @var string
     */
    protected $service = RegionService::class;

    /**
     * @var string
     */
    protected $resource = RegionResource::class;


    /**
     * @return array|JsonResponse
     */
    public function index()
    {
        $items = $this->resource::collection($this->service->index());

        if ($items->isNotEmpty()) {
            return $this->sendResponse(true, 'success', 200, $items);
        }
        return $this->sendResponse(false, 'Data not found', 200, $items);
    }

    /**
     * @param $region_id
     * @return mixed
     */
    public function regionBranch($region_id)
    {
        $item = $this->service->regionBranch($region_id);

        return $this->sendResponse(true, 'success', 200, $item);
    }

    /**
     * @param $region_id
     * @return mixed
     */
    public function regionBranches($region_id)
    {

        $items = $this->service->regionBranches($region_id);

        return $this->sendResponse(true, 'success', 200, $items);

    }
}
