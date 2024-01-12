<?php

namespace App\Http\Livewire\Page;

use App\Http\Livewire\BaseLivewire;
use App\Models\Page;

class PageTable extends BaseLivewire
{
    /**
     * @var string
     */
    public $path = 'page.page-table'; // component view path

    /**
     * @var string
     */
    public $model = Page::class; // model

    /**
     * @var string
     */
    public $route = 'pages'; // route for actions(CRUD)
}
