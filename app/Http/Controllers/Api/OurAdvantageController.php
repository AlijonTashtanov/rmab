<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\Api\OurAdvantageResource;
use App\Services\Api\OurAdvantageService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class OurAdvantageController extends AbstractController
{
    /**
     * @var string
     */
    protected $service = OurAdvantageService::class;

    /**
     * @var string
     */
    protected $resource = OurAdvantageResource::class;

    /**
     * @return array|JsonResponse
     */
    public function index()
    {
        $items = $this->resource::collection($this->service->activeIndex());

        $data = [
            'title' => __('our_advaour_advantage_contentntage_title'),
            'content' => __(''),
            'data' => $items
        ];

        if ($items->isNotEmpty()) {
            return $this->sendResponse(true, 'success', 200, $data);
        }
        return $this->sendResponse(false, 'Data not found', 200, $items);
    }
}
