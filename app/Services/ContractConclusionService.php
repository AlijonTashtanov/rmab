<?php

namespace App\Services;

use App\Models\ContractConclusion;

class ContractConclusionService extends AbstractService
{
    public function __construct(ContractConclusion $contractconclusion)
    {
        $this->model = $contractconclusion;
    }
}
