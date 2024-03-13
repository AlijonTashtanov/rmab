<?php

namespace App\Services;

use App\Models\ApplicationUseServiceTypes;

class ApplicationUseServiceTypeService extends AbstractService
{
    public function __construct(ApplicationUseServiceTypes $applicationuseservicetypes)
    {
        $this->model = $applicationuseservicetypes;
    }
}
