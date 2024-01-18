<?php

namespace App\Services;

use App\Models\Partner;
use App\Traits\Status;

class PartnerService extends AbstractService
{
    /**
     * @param Partner $partner
     */
    public function __construct(Partner $partner)
    {
        $this->model = $partner;
    }

    /**
     * it works with spatie media library,
     * register your collection in your model as a singleFile()
     * @param array $data
     * @return void
     */

    public function storeWithFile(array $data)
    {

        $item = new Partner();

        $item->name = $data['name'] ?? '';
        $item->url = $data['url'] ?? '';
        $item->status = isset($data['status']) ? Status::$status_active : Status::$status_inactive;
        $item->save();

        if (isset($data['image'])) {
            $item->addMediaFromRequest('image')->toMediaCollection('image');
        } elseif (isset($data['file'])) {
            $item->addMediaFromRequest('file')->toMediaCollection('file');
        }
    }

    /**
     * it works with spatie media library,
     * register your collection in your model as a singleFile()
     * @param array $data
     * @param $id
     * @return void
     */
    public function updateWithFile(array $data, $id)
    {
        $item = $this->show($id);

        $item->name = $data['name'] ?? '';
        $item->url = $data['url'] ?? '';
        $item->status = isset($data['status']) ? Status::$status_active : Status::$status_inactive;
        $item->save();

        if (isset($data['image'])) {
            $item->clearMediaCollection('image');
            $item->addMediaFromRequest('image')->toMediaCollection('image');
        } elseif (isset($data['file'])) {
            $item->clearMediaCollection('file');
            $item->addMediaFromRequest('file')->toMediaCollection('file');
        }
    }
}
