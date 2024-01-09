<?php

namespace App\Http\Controllers;

use App\Services\ServiceService;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class ServiceController extends AbstractController
{
    protected $dir = 'services';
    protected $serviceClass = ServiceService::class;

    public $permissionCheck = false;

    public function setConfig()
    {
        $this->config = [
            'rules' => [
                'name_uz' => "required|string|max:2056",
                'name_ru' => 'required|string|max:2056',
                'name_en' => 'required|string|max:2056',
                'content_uz' => '',
                'content_ru' => '',
                'content_en' => '',
                'image' => '',
                'status' => '',
            ]
        ];
    }

    /**
     * @return RedirectResponse
     */
    public function store(Request $request)
    {
        $data = $request->validate($this->config['rules']);
        $this->service->storeWithFile($data);
        return redirect()->route('admin.' . $this->dir . '.index')->with('success', 'Created!');
    }

    /**
     * @param Request $request
     * @param $id
     * @return RedirectResponse
     */
    public function update(Request $request, $id)
    {
        $data = $request->validate($this->config['rules']);
        $this->service->updateWithFile($data, $id);
        return redirect()->route('admin.' . $this->dir . '.index')->with('success', 'Updated!');
    }
}
