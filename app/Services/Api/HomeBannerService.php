<?php

namespace App\Services\Api;

use App\Models\HomeBanner;
use App\Traits\Status;

class HomeBannerService extends AbstractService
{
    /**
     * @var string
     */
    protected $model = HomeBanner::class;

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
