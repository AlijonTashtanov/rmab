<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;

class AbstractController extends Controller
{
    /**
     * @var mixed
     */
    protected $service;

    /**
     * @var
     */
    protected $resource;

    /**
     *
     */
    public function __construct()
    {
        $this->service = new $this->service;
    }

    /**
     * @return array|JsonResponse
     */
    public function index()
    {
        $items = $this->resource::collection($this->service->index());

        if ($items->isNotEmpty()) {

            return $this->sendResponse(true, 'success', 200, $items);
        }

        return $this->sendResponse(false, 'Data not found', 200, $items);
    }

    /**
     * @param $id
     * @return array|JsonResponse
     */
    public function show($id)
    {
        $item = $this->resource::make($this->service->show($id));

        if ($item) {
            return $this->sendResponse(true, 'success', 200, $item);
        }
        return $this->sendResponse(false, 'Data not found', 200, $item);
    }

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
     * @param $id
     * @return array|JsonResponse
     */
    public function update($id)
    {
        $item = $this->service->update(request()->all(), $id);
        if ($item->isNotEmpty()) {
            return $this->sendResponse(true, 'success', 200, $item);
        }
        return $this->sendResponse(false, 'Data not found', 200, $item);
    }

    /**
     * @param $id
     * @return array|JsonResponse
     */
    public function destroy($id)
    {
        $item = $this->service->destroy($id);

        if ($item->isNotEmpty()) {
            return $this->sendResponse(true, 'success', 200, $item);
        }
        return $this->sendResponse(false, 'Data not found', 200, $item);
    }

    /**
     * @param $status
     * @param $message
     * @param $statusCode
     * @param $data
     * @return array
     */
    public function sendResponse($status = false, $message = 'success', $statusCode = 200, $data = null)
    {

        return [
            'status' => $status,
            'message' => $message,
            'statusCode' => $statusCode,
            'data' => $data
        ];
    }
}
