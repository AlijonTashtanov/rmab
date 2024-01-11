<?php

namespace App\Http\Controllers;

use App\Services\ApplicationApplicantService;

class ApplicationApplicantController extends AbstractController
{
    /**
     * @var string
     */
    protected $dir = 'applicationapplicants';

    /**
     * @var string
     */
    protected $serviceClass = ApplicationApplicantService::class;

    public $permissionCheck = false;

    /**
     * @return void
     */
    public function setConfig()
    {
        $this->config = [
            'rules' => [
                //
            ]
        ];
    }

}
