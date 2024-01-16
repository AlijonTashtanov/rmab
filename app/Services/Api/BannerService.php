<?php

namespace App\Services\Api;

use App\Models\Banner;
use App\Traits\Status;

class BannerService extends AbstractService
{
    /**
     * @var string
     */
    protected $model = Banner::class;

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
