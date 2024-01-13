<?php

namespace App\Http\Livewire\ApplicationUseService;

use App\Http\Livewire\BaseLivewire;
use App\Models\ApplicationUseService;

class ApplicationUseServiceTable extends BaseLivewire
{
    public $path = 'application-use-service.application-use-service-table'; // component view path
    public $model = ApplicationUseService::class; // model
    public $route = 'applicationuseservices'; // route for actions(CRUD)
}
