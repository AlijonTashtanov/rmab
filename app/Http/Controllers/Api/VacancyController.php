<?php

namespace App\Http\Controllers\Api;

use App\Http\Resources\Api\VacancyResource;
use App\Services\Api\VacancyService;
use Symfony\Component\HttpFoundation\JsonResponse;

class VacancyController extends AbstractController
{
    protected $service = VacancyService::class;

    protected $resource = VacancyResource::class;

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

    /**
     * @param $id
     * @return array|\Illuminate\Http\JsonResponse
     */
    public function show($id)
    {
        $items = $this->resource::make($this->service->show($id));

        if ($items) {
            return $this->sendResponse(true, 'success', 200, $items);
        }
        return $this->sendResponse(false, 'Data not found', 200, $items);
    }
}
