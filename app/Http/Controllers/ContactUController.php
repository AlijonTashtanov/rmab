<?php

namespace App\Http\Controllers;

use App\Services\ContactUService;

class ContactUController extends AbstractController
{
    protected $dir = 'contactuses';
    protected $serviceClass = ContactUService::class;

    public function setConfig()
    {
        $this->config = [
            'rules' => [
                //
            ]
        ];
    }
}
