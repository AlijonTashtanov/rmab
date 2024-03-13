<?php

namespace App\Http\Livewire\InformationAboutShipment;

use App\Http\Livewire\BaseLivewire;
use App\Models\InformationAboutShipment;

class InformationAboutShipmentTable extends BaseLivewire
{
    public $path = 'information-about-shipment.information-about-shipment-table'; // component view path
    public $model = InformationAboutShipment::class; // model
    public $route = 'informationaboutshipments'; // route for actions(CRUD)

    public function render()
    {

        $items = $this->model::search($this->search)->orderByDesc('information_about_shipments.created_at')->paginate($this->perPage);
        return view('livewire.' . $this->path, compact('items'));
    }
}
