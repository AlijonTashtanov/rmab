<?php

namespace App\Http\Livewire\ApplicationApplicant;

use App\Http\Livewire\BaseLivewire;
use App\Models\ApplicationApplicant;

class ApplicationApplicantTable extends BaseLivewire
{
    public $path = 'application-applicant.application-applicant-table'; // component view path
    public $model = ApplicationApplicant::class; // model
    public $route = 'applicationapplicants'; // route for actions(CRUD)
}
