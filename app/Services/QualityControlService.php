<?php

namespace App\Services;

use App\Models\QualityControl;
use App\Traits\Status;

class QualityControlService extends AbstractService
{
    /**
     * @param QualityControl $qualitycontrol
     */
    public function __construct(QualityControl $qualitycontrol)
    {
        $this->model = $qualitycontrol;
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
