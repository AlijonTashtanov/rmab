<?php

namespace App\Http\Livewire\CorruptionType;

use App\Http\Livewire\BaseLivewire;
use App\Models\CorruptionType;

class CorruptionTypeTable extends BaseLivewire
{
    public $path = 'corruption-type.corruption-type-table'; // component view path
    public $model = CorruptionType::class; // model
    public $route = 'corruptiontypes'; // route for actions(CRUD)
}
