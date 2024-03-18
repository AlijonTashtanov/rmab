<?php

namespace App\Http\Controllers\Api;

use App\Http\Resources\Api\QualityControlResource;
use App\Services\Api\QualityControlService;
use Illuminate\Http\JsonResponse;

class QualityControlController extends AbstractController
{
    /**
     * @var string
     */
    protected $service = QualityControlService::class;

    /**
     * @var string
     */
    protected $resource = QualityControlResource::class;

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
    public function myQualityControls()
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
