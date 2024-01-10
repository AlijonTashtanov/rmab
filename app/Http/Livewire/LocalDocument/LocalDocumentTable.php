<?php

namespace App\Http\Livewire\LocalDocument;

use App\Http\Livewire\BaseLivewire;
use App\Models\LocalDocument;

class LocalDocumentTable extends BaseLivewire
{
    public $path = 'local-document.local-document-table'; // component view path
    public $model = LocalDocument::class; // model
    public $route = 'localdocuments'; // route for actions(CRUD)
}
