<?php

namespace App\Http\Livewire\Branch;

use App\Http\Livewire\BaseLivewire;
use App\Models\Branch;

class BranchTable extends BaseLivewire
{
    public $path = 'branch.branch-table'; // component view path
    public $model = Branch::class; // model
    public $route = 'branches'; // route for actions(CRUD)

    public function render()
    {

        $items = $this->model::search($this->search)->orderByDesc('branches.created_at')->paginate($this->perPage);
        return view('livewire.' . $this->path, compact('items'));
    }
}
