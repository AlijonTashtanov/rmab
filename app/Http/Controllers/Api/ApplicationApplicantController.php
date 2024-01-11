<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Services\Api\ApplicationApplicantService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ApplicationApplicantController extends AbstractController
{
    protected $service = ApplicationApplicantService::class;

    /**
     * @return array|JsonResponse
     */
    public function store()
    {
        $item = $this->service->storeWithFile(request()->all());

        if (isset($item['errors'])) {

            return $this->sendResponse(false, 'Validate error', 422, $item['errors']);
        }
        return $this->sendResponse(true, 'success', 200, $item);

    }

    public function corruptionTypes()
    {
        $item = $this->service->corruptionTypes();

        return $this->sendResponse(true, 'success', 200, $item);
    }
}
