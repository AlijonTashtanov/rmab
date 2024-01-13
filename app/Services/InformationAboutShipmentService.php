<?php

namespace App\Services;

use App\Models\InformationAboutShipment;
use App\Traits\Status;

class InformationAboutShipmentService extends AbstractService
{
    /**
     * @param InformationAboutShipment $informationaboutshipment
     */
    public function __construct(InformationAboutShipment $informationaboutshipment)
    {
        $this->model = $informationaboutshipment;
    }

    /**
     * @param $id
     * @return mixed
     */
    public function edit($id)
    {
        $item = $this->show($id);
        $item->status = Status::$status_active;
        $item->update();
    }
}
