<?php

namespace App\Services;

use App\Models\OurAdvantage;
use App\Traits\Status;

class OurAdvantageService extends AbstractService
{
    public function __construct(OurAdvantage $ouradvantage)
    {
        $this->model = $ouradvantage;
    }

    /**
     * it works with spatie media library,
     * register your collection in your model as a singleFile()
     * @param array $data
     * @return void
     */

    public function storeWithFile(array $data)
    {

        $item = new OurAdvantage();

        $titles = [
            'uz' => $data['title_uz'],
            'ru' => $data['title_ru'],
            'en' => $data['title_en'],
        ];


        $descriptions = [
            'uz' => $data['description_uz'],
            'ru' => $data['description_ru'],
            'en' => $data['description_en'],
        ];

        $item->setTranslations('title', $titles);
        $item->setTranslations('description', $descriptions);
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

        $titles = [
            'uz' => $data['title_uz'],
            'ru' => $data['title_ru'],
            'en' => $data['title_en'],
        ];

        $descriptions = [
            'uz' => $data['description_uz'],
            'ru' => $data['description_ru'],
            'en' => $data['description_en'],
        ];

        $item->setTranslations('title', $titles);
        $item->setTranslations('description', $descriptions);
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
