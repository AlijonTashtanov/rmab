<?php

namespace App\Http\Controllers;

use App\Services\ApplicationUseServiceService;

class ApplicationUseServiceController extends AbstractController
{
    protected $dir = 'applicationuseservices';
    protected $serviceClass = ApplicationUseServiceService::class;

    public function setConfig()
    {
        $this->config = [
            'rules' => [
                //
            ]
        ];
    }
}
