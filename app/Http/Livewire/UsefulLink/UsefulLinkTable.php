<?php

namespace App\Http\Livewire\UsefulLink;

use App\Http\Livewire\BaseLivewire;
use App\Models\UsefulLink;

class UsefulLinkTable extends BaseLivewire
{
    public $path = 'useful-link.useful-link-table'; // component view path
    public $model = UsefulLink::class; // model
    public $route = 'usefullinks'; // route for actions(CRUD)
}
