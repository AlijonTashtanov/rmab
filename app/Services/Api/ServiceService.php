<?php

namespace App\Services\Api;

use App\Http\Resources\Api\ServiceResource;
use App\Models\Service;
use App\Services\Api\AbstractService;

class ServiceService extends AbstractService
{
    protected $model = Service::class;

    /**
     * @param $id
     * @return ServiceResource
     */
    public function detail($id)
    {
        return ServiceResource::make($this->show($id));
    }
}
