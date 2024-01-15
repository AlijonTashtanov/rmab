<?php

namespace App\Http\Livewire\ContactUs;

use App\Http\Livewire\BaseLivewire;
use App\Models\ContactUs;

class ContactUsTable extends BaseLivewire
{
    /**
     * @var string
     */
    public $path = 'contact-us.contact-us-table'; // component view path

    /**
     * @var string
     */
    public $model = ContactUs::class; // model

    /**
     * @var string
     */
    public $route = 'contactuses'; // route for actions(CRUD)
}
