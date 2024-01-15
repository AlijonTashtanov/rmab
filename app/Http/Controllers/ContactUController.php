<?php

namespace App\Http\Controllers;

use App\Services\ContactUService;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

class ContactUController extends AbstractController
{
    /**
     * @var string
     */
    protected $dir = 'contactuses';

    /**
     * @var string
     */
    protected $serviceClass = ContactUService::class;

    /**
     * @var bool
     */
    protected $permissionCheck = false;

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
