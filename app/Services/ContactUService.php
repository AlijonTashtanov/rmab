<?php

namespace App\Services;

use App\Models\ContactUs;
use App\Traits\Status;

class ContactUService extends AbstractService
{
    /**
     * @param ContactUs $contactus
     */
    public function __construct(ContactUs $contactus)
    {
        $this->model = $contactus;
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
