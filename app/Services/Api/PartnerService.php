<?php

namespace App\Services\Api;

use App\Models\Partner;
use App\Traits\Status;

class PartnerService extends AbstractService
{
    protected $model = Partner::class;

    /**
     * @return mixed
     */
    public function index()
    {
        return $this->model::where('status', Status::$status_active)
            ->orderBy('created_at', 'desc')
            ->get();
    }
}
