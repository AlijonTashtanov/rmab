<?php

namespace App\Http\Livewire\Service;

use App\Http\Livewire\BaseLivewire;
use App\Models\Service;

class ServiceTable extends BaseLivewire
{
    public $path = 'service.service-table'; // component view path
    public $model = Service::class; // model
    public $route = 'services'; // route for actions(CRUD)
}
