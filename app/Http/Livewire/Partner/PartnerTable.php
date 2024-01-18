<?php

namespace App\Http\Livewire\Partner;

use App\Http\Livewire\BaseLivewire;
use App\Models\Partner;

class PartnerTable extends BaseLivewire
{
    public $path = 'partner.partner-table'; // component view path

    public $model = Partner::class; // model

    public $route = 'partners'; // route for actions(CRUD)
}
