<?php

namespace App\Http\Livewire\ApplicationUseServiceTypes;

use App\Http\Livewire\BaseLivewire;
use App\Models\ApplicationUseServiceTypes;

class ApplicationUseServiceTypesTable extends BaseLivewire
{
    public $path = 'application-use-service-types.application-use-service-types-table'; // component view path
    public $model = ApplicationUseServiceTypes::class; // model
    public $route = 'applicationuseservicetypes'; // route for actions(CRUD)


}
