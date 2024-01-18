<?php

namespace App\Http\Controllers;

use App\Services\PartnerService;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class PartnerController extends AbstractController
{
    protected $dir = 'partners';

    protected $serviceClass = PartnerService::class;

    protected $permissionCheck = false;

    /**
     * @return void
     */
    public function setConfig()
    {
        $this->config = [
            'rules' => [
                'name' => "required|string|max:255",
                'url' => "required|string|max:1024",
                'status' => '',
                'image' => '',
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
