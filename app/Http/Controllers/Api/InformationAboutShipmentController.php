<?php

namespace App\Http\Controllers\Api;

use App\Services\Api\InformationAboutShipmentService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class InformationAboutShipmentController extends AbstractController
{
    protected $service = InformationAboutShipmentService::class;

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
}
