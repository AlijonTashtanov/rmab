<?php

namespace App\Services;

use App\Models\ApplicationApplicant;
use App\Traits\Status;

class ApplicationApplicantService extends AbstractService
{
    /**
     * @param ApplicationApplicant $applicationapplicant
     */
    public function __construct(ApplicationApplicant $applicationapplicant)
    {
        $this->model = $applicationapplicant;
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
