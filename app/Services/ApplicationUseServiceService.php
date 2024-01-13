<?php

namespace App\Services;

use App\Models\ApplicationUseService;

class ApplicationUseServiceService extends AbstractService
{
    public function __construct(ApplicationUseService $applicationuseservice)
    {
        $this->model = $applicationuseservice;
    }
}
