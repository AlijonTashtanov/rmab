<?php

namespace App\Http\Controllers;

use App\Services\ApplicationApplicantService;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

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

    /**
     * @param $id
     * @return Application|Factory|View
     */
    public function edit($id)
    {
        $response = $this->service->edit($id);
        return view('admin.' . $this->dir . '.index', compact('response'));
    }

}
