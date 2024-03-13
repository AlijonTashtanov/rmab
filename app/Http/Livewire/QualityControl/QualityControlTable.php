<?php

namespace App\Http\Livewire\QualityControl;

use App\Http\Livewire\BaseLivewire;
use App\Models\QualityControl;

class QualityControlTable extends BaseLivewire
{
    /**
     * @var string
     */
    public $path = 'quality-control.quality-control-table'; // component view path

    /**
     * @var string
     */
    public $model = QualityControl::class; // model

    /**
     * @var string
     */
    public $route = 'qualitycontrols'; // route for actions(CRUD)

    public function render()
    {

        $items = $this->model::search($this->search)->orderByDesc('quality_controls.created_at')->paginate($this->perPage);
        return view('livewire.' . $this->path, compact('items'));
    }
}
