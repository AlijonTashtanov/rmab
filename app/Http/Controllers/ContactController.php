<?php

namespace App\Http\Controllers;

use App\Services\ContactService;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class ContactController extends AbstractController
{
    /**
     * @var string
     */
    protected $dir = 'contacts';

    /**
     * @var string
     */
    protected $serviceClass = ContactService::class;

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
                'name_uz' => "required|string|max:2056",
                'name_ru' => 'required|string|max:2056',
                'name_en' => 'required|string|max:2056',
                'description_uz' => "",
                'description_ru' => '',
                'description_en' => '',
                'image' => '',
                'phone' => '',
                'email' => 'email',
                'address_uz' => '',
                'address_ru' => '',
                'address_en' => '',
                'trust_number' => '',
                'question_suggestion' => '',
                'location' => '',
                'name' => '',
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
