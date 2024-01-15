<?php

namespace App\Services;

use App\Models\ContactUs;

class ContactUService extends AbstractService
{
    public function __construct(ContactUs $contactus)
    {
        $this->model = $contactus;
    }
}
