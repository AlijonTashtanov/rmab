<?php

namespace App\Services;

use App\Models\LocalDocument;
use App\Traits\Status;

class LocalDocumentService extends AbstractService
{
    public function __construct(LocalDocument $localdocument)
    {
        $this->model = $localdocument;
    }

    /**
     * it works with spatie media library,
     * register your collection in your model as a singleFile()
     * @param array $data
     * @return void
     */

    public function storeWithFile(array $data)
    {

        $item = new LocalDocument();
        $translations = [
            'uz' => $data['name_uz'],
            'en' => $data['name_en'],
            'ru' => $data['name_ru']
        ];

        $contents = [
            'uz' => $data['content_uz'],
            'en' => $data['content_en'],
            'ru' => $data['content_ru']
        ];

        $item->status = isset($data['status']) ? Status::$status_active : Status::$status_inactive;

        $item->setTranslations('name', $translations);
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

        $translations = [
            'uz' => $data['name_uz'],
            'en' => $data['name_en'],
            'ru' => $data['name_ru'],
        ];

        $contents = [
            'uz' => $data['content_uz'],
            'en' => $data['content_en'],
            'ru' => $data['content_ru']
        ];

        $item->status = isset($data['status']) ? Status::$status_active : Status::$status_inactive;
        $item->setTranslations('name', $translations);
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
