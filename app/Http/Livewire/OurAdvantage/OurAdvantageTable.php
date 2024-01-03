<?php

namespace App\Http\Livewire\OurAdvantage;

use App\Http\Livewire\BaseLivewire;
use App\Models\OurAdvantage;

class OurAdvantageTable extends BaseLivewire
{
    public $path = 'our-advantage.our-advantage-table'; // component view path
    public $model = OurAdvantage::class; // model
    public $route = 'ouradvantages'; // route for actions(CRUD)
}
