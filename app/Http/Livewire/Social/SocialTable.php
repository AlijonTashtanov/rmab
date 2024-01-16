<?php

namespace App\Http\Livewire\Social;

use App\Http\Livewire\BaseLivewire;
use App\Models\Social;

class SocialTable extends BaseLivewire
{
    /**
     * @var string
     */
    public $path = 'social.social-table'; // component view path

    /**
     * @var string
     */
    public $model = Social::class; // model

    /**
     * @var string
     */
    public $route = 'socials'; // route for actions(CRUD)
}
