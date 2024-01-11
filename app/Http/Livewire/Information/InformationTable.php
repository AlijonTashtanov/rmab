<?php

namespace App\Http\Livewire\Information;

use App\Http\Livewire\BaseLivewire;
use App\Models\Information;

class InformationTable extends BaseLivewire
{
    public $path = 'information.information-table'; // component view path
    public $model = Information::class; // model
    public $route = 'information'; // route for actions(CRUD)
}
