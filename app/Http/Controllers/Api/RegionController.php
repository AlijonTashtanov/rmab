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
    public function regionBranch($key)
    {
        $item = $this->service->regionBranch($key);

        return $this->sendResponse(true, 'success', 200, $item);
    }

    /**
     * @param $region_id
     * @return mixed
     */
    public function regionBranches($key)
    {

        $items = $this->service->regionBranches($key);

        return $this->sendResponse(true, 'success', 200, $items);

    }

    /**
     * @param $id
     * @return array
     */
    public function districts($id)
    {
        $items = $this->service->districts($id);

        return $this->sendResponse(true, 'success', 200, $items);
    }
}
