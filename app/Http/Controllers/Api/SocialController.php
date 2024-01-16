<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Services\Api\SocialService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class SocialController extends AbstractController
{
    protected $service = SocialService::class;

    /**
     * @return array|JsonResponse
     */
    public function index()
    {
        $items = $this->service->activeIndex();

        if ($items) {

            return $this->sendResponse(true, 'success', 200, $items);
        }

        return $this->sendResponse(false, 'Data not found', 200, $items);
    }
}
