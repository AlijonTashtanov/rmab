<?php

namespace App\Http\Controllers;

use App\Services\PostService;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class PostController extends AbstractController
{
    protected $dir = 'posts';
    protected $serviceClass = PostService::class;

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
