<?php

namespace App\Http\Livewire\HomeBanner;

use App\Http\Livewire\BaseLivewire;
use App\Models\HomeBanner;

class HomeBannerTable extends BaseLivewire
{
    public $path = 'home-banner.home-banner-table'; // component view path

    public $model = HomeBanner::class; // model

    public $route = 'homebanners'; // route for actions(CRUD)
}
