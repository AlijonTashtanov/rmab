<?php

namespace App\Http\Controllers;

use App\Services\AutoParkService;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class AutoParkController extends AbstractController
{
    /**
     * @var string
     */
    protected $dir = 'autoparks';

    /**
     * @var string
     */
    protected $serviceClass = AutoParkService::class;

    /**
     * @var bool
     */
    protected $permissionCheck = false;

    /**
     * @return void
     */
    public function setConfig()
    {
        $this->config = [
            'rules' => [
                'title_uz' => "required|string|max:2056",
                'title_ru' => 'required|string|max:2056',
                'title_en' => 'required|string|max:2056',
                'content_uz' => "",
                'content_ru' => '',
                'content_en' => '',
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
