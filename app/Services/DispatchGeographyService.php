<?php

namespace App\Services;

use App\Models\DispatchGeography;

class DispatchGeographyService extends AbstractService
{
    public function __construct(DispatchGeography $dispatchgeography)
    {
        $this->model = $dispatchgeography;
    }
}
