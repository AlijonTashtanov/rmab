<?php

namespace App\Http\Controllers;

use App\Services\ContractConclusionService;

class ContractConclusionController extends AbstractController
{
    protected $dir = 'contractconclusions';
    protected $serviceClass = ContractConclusionService::class;

    public function setConfig()
    {
        $this->config = [
            'rules' => [
                //
            ]
        ];
    }
}
