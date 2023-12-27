<?php

namespace App\Http\Controllers;

use App\Services\UsefulLinkService;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class UsefulLinkController extends AbstractController
{
    protected $dir = 'usefullinks';
    protected $serviceClass = UsefulLinkService::class;

    protected $service = UsefulLinkService::class;

    protected $permissionCheck = false;


    /**
     * @return void
     */
    public function setConfig()
    {
        $this->config = [
            'rules' => [
                'name_uz' => "required|string|max:2056",
                'name_ru' => 'required|string|max:2056',
                'name_en' => 'required|string|max:2056',
                'image' => '',
                'url' => 'max:1024',
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
