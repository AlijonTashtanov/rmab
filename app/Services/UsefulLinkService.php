<?php

namespace App\Services;

use App\Models\UsefulLink;
use App\Traits\Status;

class UsefulLinkService extends AbstractService
{
    /**
     * @param UsefulLink $usefullink
     */
    public function __construct(UsefulLink $usefullink)
    {

        $this->model = $usefullink;
    }


    /**
     * it works with spatie media library,
     * register your collection in your model as a singleFile()
     * @param array $data
     * @return void
     */

    public function storeWithFile(array $data)
    {

        $item = new UsefulLink();
        $translations = [
            'uz' => $data['name_uz'],
            'en' => $data['name_en'],
            'ru' => $data['name_ru']
        ];
        $item->url = $data['url'];
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
        $item->url = $data['url'];
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
