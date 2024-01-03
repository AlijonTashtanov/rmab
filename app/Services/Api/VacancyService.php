<?php

namespace App\Services\Api;

use App\Models\Vacancy;
use App\Traits\Status;

class VacancyService extends AbstractService
{
    protected $model = Vacancy::class;

    /**
     * @return mixed
     */
    public function activeIndex()
    {
        return $this->model::where('status', Status::$status_active)->orderBy('created_at', 'desc')->get();
    }
}
