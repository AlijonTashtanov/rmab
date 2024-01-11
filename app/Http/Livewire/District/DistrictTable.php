<?php

namespace App\Http\Livewire\District;

use App\Http\Livewire\BaseLivewire;
use App\Models\District;

class DistrictTable extends BaseLivewire
{
    public $path = 'district.district-table'; // component view path
    public $model = District::class; // model
    public $route = 'districts'; // route for actions(CRUD)
}
