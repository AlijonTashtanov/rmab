<?php

namespace App\Http\Livewire\Prop;

use App\Http\Livewire\BaseLivewire;
use App\Models\Prop;

class PropTable extends BaseLivewire
{
    public $path = 'prop.prop-table'; // component view path
    public $model = Prop::class; // model
    public $route = 'props'; // route for actions(CRUD)
}
