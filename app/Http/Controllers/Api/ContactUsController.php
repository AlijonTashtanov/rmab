<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Services\Api\ContactUsService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ContactUsController extends AbstractController
{
    /**
     * @var string
     */
    protected $service = ContactUsService::class;

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
}
