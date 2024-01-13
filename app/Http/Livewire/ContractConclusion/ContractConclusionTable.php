<?php

namespace App\Http\Livewire\ContractConclusion;

use App\Http\Livewire\BaseLivewire;
use App\Models\ContractConclusion;

class ContractConclusionTable extends BaseLivewire
{
    /**
     * @var string
     */
    public $path = 'contract-conclusion.contract-conclusion-table'; // component view path

    /**
     * @var string
     */
    public $model = ContractConclusion::class; // model

    /**
     * @var string
     */
    public $route = 'contractconclusions'; // route for actions(CRUD)
}
