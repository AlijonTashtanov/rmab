<?php

namespace App\Services;

use App\Models\Banner;
use App\Traits\Status;

class BannerService extends AbstractService
{
    /**
     * @param Banner $banner
     */
    public function __construct(Banner $banner)
    {
        $this->model = $banner;
        parent::__construct($banner);
    }

    /**
     * it works with spatie media library,
     * register your collection in your model as a singleFile()
     * @param array $data
     * @return void
     */

    public function storeWithFile(array $data)
    {

        $item = new Banner();

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

        $buttonLabels = [
            'uz' => $data['button_label_uz'],
            'ru' => $data['button_label_ru'],
            'en' => $data['button_label_en'],
        ];

        $item->setTranslations('title', $titles);
        $item->setTranslations('content', $contents);
        $item->setTranslations('button_label', $buttonLabels);
        $item->button_url = $data['button_url'] ?? '';
        $item->question_suggestion = $data['question_suggestion'] ?? '';
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

        $contents = [
            'uz' => $data['content_uz'],
            'ru' => $data['content_ru'],
            'en' => $data['content_en'],
        ];

        $buttonLabels = [
            'uz' => $data['button_label_uz'],
            'ru' => $data['button_label_ru'],
            'en' => $data['button_label_en'],
        ];

        $item->setTranslations('title', $titles);
        $item->setTranslations('content', $contents);
        $item->setTranslations('button_label', $buttonLabels);
        $item->button_url = $data['button_url'] ?? '';
        $item->question_suggestion = $data['question_suggestion'] ?? '';
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
