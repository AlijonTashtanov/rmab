<?php

namespace App\Http\Livewire\Contact;

use App\Http\Livewire\BaseLivewire;
use App\Models\Contact;

class ContactTable extends BaseLivewire
{
    /**
     * @var string
     */
    public $path = 'contact.contact-table'; // component view path

    /**
     * @var string
     */
    public $model = Contact::class; // model

    /**
     * @var string
     */
    public $route = 'contacts'; // route for actions(CRUD)
}
