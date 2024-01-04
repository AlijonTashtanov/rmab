<?php

namespace App\Services;

use App\Models\Prop;
use App\Traits\Status;

class PropService extends AbstractService
{
    /**
     * @param Prop $prop
     */
    public function __construct(Prop $prop)
    {
        $this->model = $prop;
    }

    /**
     * it works with spatie media library,
     * register your collection in your model as a singleFile()
     * @param array $data
     * @return void
     */

    public function store(array $data)
    {

        $item = new Prop();

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
        $item->status = isset($data['status']) ? Status::$status_active : Status::$status_inactive;
        $item->save();
    }

    /**
     * it works with spatie media library,
     * register your collection in your model as a singleFile()
     * @param array $data
     * @param $id
     * @return void
     */
    public function update(array $data, $id)
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
        $item->status = isset($data['status']) ? Status::$status_active : Status::$status_inactive;
        $item->save();
    }
}
