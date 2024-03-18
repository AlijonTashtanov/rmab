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
                'name_uz' => "required|string|max:2056",
                'name_ru' => 'required|string|max:2056',
                'name_en' => 'required|string|max:2056',
                'status' => '',
            ]
        ];
    }
}
