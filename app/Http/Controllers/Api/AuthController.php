<?php

namespace App\Http\Controllers\Api;

use App\Services\Api\AuthService;
use Illuminate\Http\JsonResponse;

class AuthController extends AbstractController
{

    /**
     * @var string
     */
    protected $service = AuthService::class;

    /**
     * @return JsonResponse
     */
    public function login()
    {
        $item = $this->service->login(request()->all());

        return response()->json($item, $item['statusCode'] ?? 200);
    }
}
