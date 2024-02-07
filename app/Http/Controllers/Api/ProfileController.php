<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Services\Api\ProfileService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends AbstractController
{
    /**
     * @var string
     */
    protected $service = ProfileService::class;

    /**
     * @return array
     */
    public function info()
    {
        $item = $this->service->info();

        return $this->sendResponse($item);
    }

    /**
     * @return array|void
     */
    public function logout()
    {
        if (Auth::user()) {
            Auth::user()->token()->revoke();
            return $this->sendResponse(true, 'Logged out successfully', 200, null);
        }
    }
}
