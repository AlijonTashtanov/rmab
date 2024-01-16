<?php

namespace App\Http\Controllers;

use App\Services\SocialService;

class SocialController extends AbstractController
{
    /**
     * @var string
     */
    protected $dir = 'socials';

    /**
     * @var string
     */
    protected $serviceClass = SocialService::class;

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
                'url' => "required|string|max:2056",
                'icon' => "required|string|max:2056",
                'status' => '',
            ]
        ];
    }
}
