<?php

namespace App\Services;

use App\Models\About;

class AboutService extends AbstractService
{
    /**
     * @param About $about
     */
    public function __construct(About $about)
    {
        $this->model = $about;
    }


    /**
     * it works with spatie media library,
     * register your collection in your model as a singleFile()
     * @param array $data
     * @return void
     */

    public function storeWithFile(array $data)
    {

        $item = new About();

        $titles = [
            'uz' => $data['title_uz'],
            'en' => $data['title_ru'],
            'ru' => $data['title_en']
        ];

        $descriptions = [
            'uz' => $data['description_uz'],
            'en' => $data['description_ru'],
            'ru' => $data['description_en']
        ];

        $contents = [
            'uz' => $data['content_uz'],
            'en' => $data['content_ru'],
            'ru' => $data['content_en']
        ];
        $address = [
            'uz' => $data['address_uz'],
            'en' => $data['address_ru'],
            'ru' => $data['address_en']
        ];
        $item->setTranslations('title', $titles);
        $item->setTranslations('description', $descriptions);
        $item->setTranslations('content', $contents);
        $item->setTranslations('address', $address);
        $item->phone = !isset($data['phone']) ? '' : $data['phone'];
        $item->email = !isset($data['email']) ? '' : $data['email'];
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
            'en' => $data['title_ru'],
            'ru' => $data['title_en']
        ];

        $descriptions = [
            'uz' => $data['description_uz'],
            'en' => $data['description_ru'],
            'ru' => $data['description_en']
        ];

        $contents = [
            'uz' => $data['content_uz'],
            'en' => $data['content_ru'],
            'ru' => $data['content_en']
        ];

        $address = [
            'uz' => $data['address_uz'],
            'en' => $data['address_ru'],
            'ru' => $data['address_en']
        ];

        $item->setTranslations('title', $titles);
        $item->setTranslations('description', $descriptions);
        $item->setTranslations('content', $contents);
        $item->setTranslations('address', $address);
        $item->phone = !isset($data['phone']) ? '' : $data['phone'];
        $item->email = !isset($data['email']) ? '' : $data['email'];
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
