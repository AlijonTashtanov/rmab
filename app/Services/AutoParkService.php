<?php

namespace App\Services;

use App\Models\Article;
use App\Models\AutoPark;
use App\Traits\Status;

class AutoParkService extends AbstractService
{
    public function __construct(AutoPark $autopark)
    {
        $this->model = $autopark;
    }

    /**
     * it works with spatie media library,
     * register your collection in your model as a singleFile()
     * @param array $data
     * @return void
     */

    public function storeWithFile(array $data)
    {

        $item = new AutoPark();

        $titles = [
            'uz' => $data['title_uz'],
            'ru' => $data['title_ru'],
            'en' => $data['title_en'],
        ];


        $contents = [
            'uz' => $data['content_uz'],
            'ru' => $data['content_ru'],
            'en' => $data['content_en'],
        ];


        $item->setTranslations('title', $titles);
        $item->setTranslations('content', $contents);
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

        $contents = [
            'uz' => $data['content_uz'],
            'ru' => $data['content_ru'],
            'en' => $data['content_en'],
        ];

        $item->setTranslations('title', $titles);
        $item->setTranslations('content', $contents);
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
