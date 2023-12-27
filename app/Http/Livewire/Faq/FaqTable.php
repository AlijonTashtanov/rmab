<?php

namespace App\Http\Livewire\Faq;

use App\Http\Livewire\BaseLivewire;
use App\Models\Faq;

class FaqTable extends BaseLivewire
{
    public $path = 'faq.faq-table'; // component view path

    public $model = Faq::class; // model

    public $route = 'faqs'; // route for actions(CRUD)
}
