<?php

namespace App\Http\Livewire\AutoPark;

use App\Http\Livewire\BaseLivewire;
use App\Models\AutoPark;

class AutoParkTable extends BaseLivewire
{
    public $path = 'auto-park.auto-park-table'; // component view path
    public $model = AutoPark::class; // model
    public $route = 'autoparks'; // route for actions(CRUD)
}
