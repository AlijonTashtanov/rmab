<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\Api\ApplicationUseResource;
use App\Services\Api\ApplicationUseService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ApplicationUseServiceController extends AbstractController
{
    /**
     * @var string
     */
    protected $service = ApplicationUseService::class;

    /**
     * @var string
     */
    protected $resource = ApplicationUseResource::class;

    /**
     * @return array|JsonResponse
     */
    public function store()
    {
        $item = $this->service->store(request()->all());

        if (isset($item['errors'])) {

            return $this->sendResponse(false, 'Validate error', 422, $item['errors']);
        }
        return $this->sendResponse(true, 'success', 200, $item);

    }

    /**
     * @return array
     */
    public function pageInfo()
    {
        $item = $this->service->pageInfo();

        return $this->sendResponse(true, 'success', 200, $item);
    }

    /**
     * @return array
     */
    public function types()
    {
        $item = $this->service->types();

        return $this->sendResponse(true, 'success', 200, $item);
    }

    /**
     * @return array
     */
    public function myApplicationUseServices()
    {
        $items = $this->resource::collection($this->service->all());

        if ($items->isNotEmpty()) {

            $data = [
                'items' => $items,
                'pagination' => [
                    'total' => $items->total(),
                    'per_page' => $items->perPage(),
                    'current_page' => $items->currentPage(),
                    'last_page' => $items->lastPage(),
                    'from' => $items->firstItem(),
                    'to' => $items->lastItem(),
                ],
            ];

            return $this->sendResponse(true, 'success', 200, $data);
        }
        return $this->sendResponse(false, 'Data not found', 200, $items);
    }

}
