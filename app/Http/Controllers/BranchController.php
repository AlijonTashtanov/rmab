<?php

namespace App\Http\Controllers;

use App\Services\BranchService;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class BranchController extends AbstractController
{
    protected $dir = 'branches';

    protected $serviceClass = BranchService::class;

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
                'description_uz' => "",
                'description_ru' => '',
                'description_en' => '',
                'address_uz' => "max:2056",
                'address_ru' => 'max:2056',
                'address_en' => 'max:2056',
                'phone' => 'max:255',
                'email' => 'max:255',
                'leadership' => 'max:255',
                'region_id' => "required|integer",
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
