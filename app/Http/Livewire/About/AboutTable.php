<?php

namespace App\Http\Livewire\About;

use App\Http\Livewire\BaseLivewire;
use App\Models\About;

class AboutTable extends BaseLivewire
{
    public $path = 'about.about-table'; // component view path
    public $model = About::class; // model
    public $route = 'abouts'; // route for actions(CRUD)
}
