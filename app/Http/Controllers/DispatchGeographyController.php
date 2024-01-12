<?php

namespace App\Http\Controllers;

use App\Services\DispatchGeographyService;

class DispatchGeographyController extends AbstractController
{
    protected $dir = 'dispatchgeographies';
    protected $serviceClass = DispatchGeographyService::class;

    public function setConfig()
    {
        $this->config = [
            'rules' => [
                //
            ]
        ];
    }
}
