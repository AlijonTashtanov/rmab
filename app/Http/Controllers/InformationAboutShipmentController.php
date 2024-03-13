<?php

namespace App\Http\Controllers;

use App\Services\InformationAboutShipmentService;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class InformationAboutShipmentController extends AbstractController
{
    protected $dir = 'informationaboutshipments';

    /**
     * @var string
     */
    protected $serviceClass = InformationAboutShipmentService::class;

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
                'image' => '',
                'answer_text' => 'nullable',
            ]
        ];
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

    /**
     * @param $id
     * @return Application|Factory|View|\Illuminate\View\View
     */
    public function cancel($id)
    {
        $response = $this->service->edit($id);
        return view('admin.' . $this->dir . '.cancel', compact('response'));
    }

    /**
     * @param Request $request
     * @param $id
     * @return RedirectResponse
     */
    public function cancalStore(Request $request, $id)
    {
        $data = $request->validate($this->config['rules']);
        $this->service->cancelStore($data, $id);
        return redirect()->route('admin.' . $this->dir . '.index')->with('success', 'Bekor qilindi!');
    }
}
