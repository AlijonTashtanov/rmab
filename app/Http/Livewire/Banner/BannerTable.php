<?php

namespace App\Http\Livewire\Banner;

use App\Http\Livewire\BaseLivewire;
use App\Models\Banner;

class BannerTable extends BaseLivewire
{
    /**
     * @var string
     */
    public $path = 'banner.banner-table'; // component view path

    /**
     * @var string
     */
    public $model = Banner::class; // model

    /**
     * @var string
     */
    public $route = 'banners'; // route for actions(CRUD)
}
