<?php

namespace App\Http\Controllers;

use App\Services\DispatchGeographyService;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class DispatchGeographyController extends AbstractController
{
    /**
     * @var string
     */
    protected $dir = 'dispatchgeographies';

    /**
     * @var string
     */
    protected $serviceClass = DispatchGeographyService::class;

    /**
     * @var bool
     */
    public $permissionCheck = false;

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
        $this->service->store($data);
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
        $this->service->update($data, $id);
        return redirect()->route('admin.' . $this->dir . '.index')->with('success', 'Updated!');
    }
}
