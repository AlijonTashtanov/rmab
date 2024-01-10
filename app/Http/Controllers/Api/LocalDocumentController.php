<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\Api\LocalDocumentResource;
use App\Services\Api\LocalDocumentService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class LocalDocumentController extends AbstractController
{
    protected $service = LocalDocumentService::class;

    protected $resource = LocalDocumentResource::class;

    /**
     * @return array|JsonResponse
     */
    public function index()
    {
        $items = $this->resource::collection($this->service->all());

        if ($items->isNotEmpty()) {

            return $this->sendResponse(true, 'success', 200, [
                'status' => true,
                'message' => 'success',
                'statusCode' => 200,
                'data' => [
                    'data' => $items,
                    'pagination' => [
                        'total' => $items->total(),
                        'per_page' => $items->perPage(),
                        'current_page' => $items->currentPage(),
                        'last_page' => $items->lastPage(),
                        'from' => $items->firstItem(),
                        'to' => $items->lastItem(),
                    ],
                ]
            ]);
        }
        return $this->sendResponse(false, 'Data not found', 200, $items);
    }

    /**
     * @param $id
     * @return array|JsonResponse
     */
    public function show($id)
    {
        $items = $this->resource::make($this->service->show($id));
        $latestLocalDocuments = $this->resource::collection($this->service->latestActiveLimitIndex($id));

        $data = [
            'items' => $items,
            'latestDocuments' => $latestLocalDocuments
        ];

        if ($items) {
            return $this->sendResponse(true, 'success', 200, $data);
        }

        return $this->sendResponse(false, 'Data not found', 200, $data);
    }
}
