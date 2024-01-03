<?php

namespace App\Http\Livewire\Vacancy;

use App\Http\Livewire\BaseLivewire;
use App\Models\Vacancy;

class VacancyTable extends BaseLivewire
{
    public $path = 'vacancy.vacancy-table'; // component view path
    public $model = Vacancy::class; // model
    public $route = 'vacancies'; // route for actions(CRUD)
}
