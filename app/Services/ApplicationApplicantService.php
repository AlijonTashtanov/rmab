<?php

namespace App\Services;

use App\Models\ApplicationApplicant;

class ApplicationApplicantService extends AbstractService
{
    public function __construct(ApplicationApplicant $applicationapplicant)
    {
        $this->model = $applicationapplicant;
    }
}
