<?php

namespace App\Http\Controllers;

use App\Services\FaqService;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class FaqController extends AbstractController
{
    protected $dir = 'faqs';
    protected $serviceClass = FaqService::class;

    public $permissionCheck = false;

    /**
     * @return void
     */
    public function setConfig()
    {
        $this->config = [
            'rules' => [
                'question_uz' => 'required|string|max:2056',
                'question_ru' => 'required|string|max:2056',
                'question_en' => 'required|string|max:2056',
                'answer_uz' => 'required|string|max:2056',
                'answer_ru' => 'required|string|max:2056',
                'answer_en' => 'required|string|max:2056',
                'status' => ''
            ]
        ];
    }
}
