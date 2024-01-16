<?php

namespace App\Http\Livewire\Translation;

use App\Http\Livewire\BaseLivewire;
use App\Models\Translation;

class TranslationTable extends BaseLivewire
{
    /**
     * @var string
     */
    public $path = 'translation.translation-table'; // component view path

    /**
     * @var null
     */
    public $model = Translation::class; // model

    /**
     * @var string
     */
    public $route = 'translations'; // route for actions(CRUD)
}
