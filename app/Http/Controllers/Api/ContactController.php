<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\Api\ContactResource;
use App\Services\Api\ContactService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ContactController extends AbstractController
{

    /**
     * @var string
     */
    protected $service = ContactService::class;

    /**
     * @var string
     */
    protected $resource = ContactResource::class;

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
