<?php

namespace App\Http\Livewire\DispatchGeography;

use App\Http\Livewire\BaseLivewire;
use App\Models\DispatchGeography;

class DispatchGeographyTable extends BaseLivewire
{
    public $path = 'dispatch-geography.dispatch-geography-table'; // component view path
    public $model = DispatchGeography::class; // model
    public $route = 'dispatchgeographies'; // route for actions(CRUD)
}
