<?php

namespace App\Http\Controllers;

use App\Services\ApplicationUseServiceTypeService;

class ApplicationUseServiceTypeController extends AbstractController
{
    protected $dir = 'applicationuseservicetypes';

    protected $serviceClass = ApplicationUseServiceTypeService::class;

    protected $permissionCheck = false;


    public function setConfig()
    {
        $this->config = [
            'rules' => [
                //
            ]
        ];
    }
}
