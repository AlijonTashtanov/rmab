<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Services\Api\ProfileService;
use Illuminate\Http\Request;

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
}
