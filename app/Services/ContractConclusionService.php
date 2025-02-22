<?php

namespace App\Services;

use App\Models\ContractConclusion;
use App\Traits\Status;

class ContractConclusionService extends AbstractService
{
    /**
     * @param ContractConclusion $contractconclusion
     */
    public function __construct(ContractConclusion $contractconclusion)
    {
        $this->model = $contractconclusion;
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
