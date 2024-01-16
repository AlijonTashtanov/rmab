<?php

namespace App\Http\Controllers;

use App\Services\TranslationService;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class TranslationController extends AbstractController
{

    /**
     * @var string
     */
    protected $dir = 'translations';

    /**
     * @var string
     */
    protected $serviceClass = TranslationService::class;

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
                'key' => 'required|unique:translations|max:1024',
                'value_uz' => 'max:1024',
                'value_ru' => 'max:1024',
                'value_en' => 'max:1024',
            ],
        ];
    }


    /**
     * @param Request $request
     * @param $id
     * @return RedirectResponse
     */
    public function update(Request $request, $id)
    {
        $rules = [
            'key' => 'required|unique:translations,key,' . $id,
            'value_uz' => 'max:1024',
            'value_ru' => 'max:1024',
            'value_en' => 'max:1024',
        ];

        $data = $request->validate($rules);
        $this->service->update($data, $id);
        return redirect()->route('admin.' . $this->dir . '.index')->with('success', 'Updated!');
    }

}
