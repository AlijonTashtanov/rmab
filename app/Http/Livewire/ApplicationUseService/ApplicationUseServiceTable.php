<?php

namespace App\Http\Livewire\ApplicationUseService;

use App\Http\Livewire\BaseLivewire;
use App\Models\ApplicationUseService;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

class ApplicationUseServiceTable extends BaseLivewire
{
    public $path = 'application-use-service.application-use-service-table'; // component view path
    public $model = ApplicationUseService::class; // model
    public $route = 'applicationuseservices'; // route for actions(CRUD)

    /**
     * @return Application|Factory|View|\Illuminate\View\View
     */
    public function render()
    {
        $items = $this->model::search($this->search)->orderByDesc('application_use_services.created_at')->paginate($this->perPage);
        return view('livewire.' . $this->path, compact('items'));
    }

}
