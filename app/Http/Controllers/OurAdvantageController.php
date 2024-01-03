<?php

namespace App\Http\Controllers;

use App\Services\OurAdvantageService;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class OurAdvantageController extends AbstractController
{

    /**
     * @var string
     */
    protected $dir = 'ouradvantages';
    /**
     * @var string
     */
    protected $serviceClass = OurAdvantageService::class;

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
                'title_uz' => "required|string|max:2056",
                'title_ru' => 'required|string|max:2056',
                'title_en' => 'required|string|max:2056',
                'description_uz' => "required|string|max:2056",
                'description_ru' => 'required|string|max:2056',
                'description_en' => 'required|string|max:2056',
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
