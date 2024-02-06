<?php

namespace App\Services\Api;

use App\Http\Resources\Api\UserResource;
use App\Models\User;

class ProfileService extends AbstractService
{
    /**
     * @var string
     */
    protected $model = User::class;

    /**
     * @return array
     */
    public function info()
    {

        return [
            'status' => true,
            'message' => 'success',
            'statusCode' => 200,
            'data' => UserResource::make(auth()->user()),
        ];
    }
}
