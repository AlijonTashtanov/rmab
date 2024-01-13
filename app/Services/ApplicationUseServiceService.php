<?php

namespace App\Services;

use App\Models\ApplicationUseService;
use App\Traits\Status;

class ApplicationUseServiceService extends AbstractService
{
    /**
     * @param ApplicationUseService $applicationuseservice
     */
    public function __construct(ApplicationUseService $applicationuseservice)
    {
        $this->model = $applicationuseservice;
    }

    /**
     * @param $id
     * @return mixed
     */
    public function edit($id)
    {
        $item = $this->show($id);
        $item->status = Status::$status_active;
        $item->update();
    }
}
