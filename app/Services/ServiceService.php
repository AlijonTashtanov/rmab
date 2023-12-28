<?php

namespace App\Services;

use App\Models\Service;
use App\Traits\Status;

class ServiceService extends AbstractService
{
    /**
     * @param Service $service
     */
    public function __construct(Service $service)
    {
        $this->model = $service;
    }

    /**
     * it works with spatie media library,
     * register your collection in your model as a singleFile()
     * @param array $data
     * @return void
     */

    public function storeWithFile(array $data)
    {

        $item = new Service();
        $translations = [
            'uz' => $data['name_uz'],
            'en' => $data['name_en'],
            'ru' => $data['name_ru']
        ];
        $item->status = isset($data['status']) ? Status::$status_active : Status::$status_inactive;

        $item->setTranslations('name', $translations);
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

        $translations = [
            'uz' => $data['name_uz'],
            'en' => $data['name_en'],
            'ru' => $data['name_ru'],
        ];
        $item->status = isset($data['status']) ? Status::$status_active : Status::$status_inactive;
        $item->setTranslations('name', $translations);
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
